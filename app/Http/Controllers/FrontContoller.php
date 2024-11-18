<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;

class FrontContoller extends Controller
{
    //
    public function index()
    {
    
        // $company = Company::all();
        return view(
            'front.index',
            // [
            //     'company' => $company, ]
        );
    }
}
