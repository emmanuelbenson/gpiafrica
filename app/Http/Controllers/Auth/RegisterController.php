<?php

namespace App\Http\Controllers\Auth;

use App\Company;
use App\User;
use App\Profile;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Validation\Rule;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/profile';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'fullname' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:6', 'confirmed'],
            'country' => ['required', 'integer', 'exists:countries,id'],
            'companyName' => ['required', 'min:3', 'max:25', 'unique:companies,name'],
            'address' => ['required', 'min:8', 'max:255'],
            'city' => ['required', 'max:255'],
            'industry' => ['required'],
            'tnc' => ['required'],
            'usrChoice' => ['required', Rule::in(['business', 'financier'])]
        ]);
    }

    public function getUserType()
    {
        return view('auth.user-type');
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        $user = User::create([
            'email' => $data['email'],
            'activation_code' => sha1('abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ'),
            'password' => Hash::make($data['password'])
        ]);

        $company = new Company();
        $company->user_id = $user->id;
        $company->industry_id = $data['industry'];
        $company->country_id = $data['country'];
        $company->type = $data['usrChoice'];
        $company->city = $data['city'];
        $company->address = $data['address'];
        $company->name = $data['companyName'];
        $company->avatar = "default.jpg";
        $company->save();

        $profile = new Profile();
        $profile->user_id = $user->id;
        $profile->fullname = $data['fullname'];
        $profile->save();
        return $user;
    }
}
