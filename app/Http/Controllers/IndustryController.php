<?php

namespace App\Http\Controllers;

use App\Industry;
use Illuminate\Http\Request;

class IndustryController extends Controller
{
    public function index()
    {
        $industries = Industry::all();

        return response()
            ->json([
                'industries' => $industries
            ]);
    }
}
