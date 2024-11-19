<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Loker;

class LokerController extends Controller
{
     //
     public function index() {
        $loker = Loker::all();
        return view('front.loker.loker',
         [
            'loker' => $loker,
        ],
    );
    }
}
