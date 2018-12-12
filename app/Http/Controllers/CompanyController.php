<?php

namespace App\Http\Controllers;

use App\ConsumerCountry;
use App\Industry;
use Illuminate\Http\Request;
use App\Company;
use App\Country;
use App\Product;

class CompanyController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function products()
    {
        $company = \Auth::user()->company;

        $products = $company->products;

        if(request()->ajax()){
            return response()
                ->json([
                    'products' => $products
                ]);
        }
        return $products;
    }

    public function profile(Company $company)
    {
        return view('company-profile', compact('company'));
    }

    public function editInfo()
    {
        $company = auth()->user()->company;
        $countries = Country::all();
        $industries = Industry::all();

        return view('edits.company-info', compact(['company', 'industries', 'countries']));
    }

    public function updateInfo(Request $request)
    {
        $company = Company::find(auth()->user()->company->id);

        if($request->hasFile('avatar')){
            $fileExtension = $request->file('avatar')->getClientOriginalExtension();
            $filename = pathinfo($request->file('avatar')->getClientOriginalName(), PATHINFO_FILENAME);
            $fileNameWithExtension = strtolower($filename.'_'.time()).'.'.$fileExtension;

            $path = $request->file('avatar')->storeAs('public/companies/logos/', $fileNameWithExtension);
            $company->avatar                = $fileNameWithExtension;
        }

        $this->validate($request, [
            'avatar'                => 'sometimes|mimes:jpeg,bmp,gif,png,svg,jpg|dimensions:width:120,height:120',
            'email'                 => 'required|email',
            'telephone'             => 'required|numeric',
            'website'               => 'required|url',
            'registrationNumber'    => 'required',
            'dateOfIncorporation'   => 'required|date',
            'country'               => 'sometimes',
            'industry'              => 'sometimes'
        ]);

        $company->email                     = $request->get('email');
        $company->phone                     = $request->get('telephone');
        $company->website                   = $request->get('website');
        $company->registration_number       = $request->get('registrationNumber');
        $company->date_of_incorporation     = $request->get('dateOfIncorporation');
        $company->country_of_incorporation  = $request->get('country');
        $company->industry_id               = $request->get('industry');
        $company->save();

        return redirect()->to('/profile');

    }

    public function editProducts()
    {
        $company = \Auth::user()->company;
        return view('edits.company-products', compact('company'));
    }

    public function newProduct(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:100|min:2'
        ]);

        $company = \Auth::user()->company;

        $product = Product::create([
            'company_id' => $company->id,
            'name' => $request->get('name')
        ]);
        if($product->id > 0){
            return response()
                ->json([
                    'product' => $product
                ]);
        } else {
            return response()
                ->json([
                    'error' => 'Could not add new product'
                ]);
        }
    }

    public function delProduct(Request $request)
    {
        $company = \Auth::user()->company;

         $id = $request->get('id');
        $product = Product::where('company_id', $company->id)
            ->where('id', $id)
            ->first();

        if($product){
            $product->delete();

            return response()
                ->json([
                    'success' => true
                ]);
        }

        return response()
            ->json([
                'success' => false,
                'c_id' => $company->id,
                'p' => $product
            ], 500);
    }

    public function serviceCountries()
    {
        $countries = Country::all();

        $consumerCountries = ConsumerCountry::where('company_id', \Auth::user()->company->id)
            ->get();

        return view('edits.service-countries', compact(['countries', 'consumerCountries']));
    }

    public function addCountries(Request $request)
    {
        $selCountries = $request->get('selectedCountries');

        $truthArray = [];

        for($i=0; $i < count($selCountries); $i++){
            if(ConsumerCountry::where('country_id', $selCountries[$i])->first()){
                $truthArray[$selCountries[$i]] = 'already exist';
            }else{
                ConsumerCountry::create([
                    'company_id' => \Auth::user()->company->id,
                    'country_id' => $selCountries[$i],
                    'product_id' => 0
                ]);
            }
        }

        return response()
            ->json($truthArray);

    }
}
