<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Loker;
use App\Models\Perusahaan;

class LokerController extends Controller
{
     //
     public function index() {
        $loker = Loker::all();
        $perusahaan = Perusahaan::all();
        return view('front.loker.loker',
         [
            'loker' => $loker,
            'perusahaan' => $perusahaan,
        ],
    );
    }
}
