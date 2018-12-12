<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Company;

class HomeController extends Controller
{
    /**
     * HomeController constructor.
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function getUserType()
    {
        return view('auth.user-type');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Http\JsonResponse|\Illuminate\View\View
     */
    public function search()
    {
        $searchString = request('q') ?: '';

        $companies = Company::latest()
            ->when(request('q'), function($query) {
                $query->where('name', 'like', '%'.request('q').'%')
                    ->orWhere('type', 'like', '%'.request('q').'%')
                    ->orWhere('industry_id', '=', request('ind'));
            })
            ->when(request('ind'), function($query){
                $query->where('industry_id', request('ind'));
            })
            ->get();

        if(request()->ajax()){
            $companies = Company::orderBy('name')
                ->when(request('q'), function($query) {
                    $query->where('name', 'like', '%'.request('q').'%')
                        ->orWhere('industry_id', request('ind'));
                })
                ->get();
            return response()
                ->json([
                    'companies' => $companies,
                    'string' => request('q'),
                    'astring' => request('ind')
                ]);
        }

        return view('home', compact(['companies', 'searchString']));
    }
}
