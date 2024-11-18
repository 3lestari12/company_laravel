<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Perusahaan;

class FrontContoller extends Controller
{
    //
    public function index()
    {
    
        $perusahaan = Perusahaan::all();
        return view(
            'front.index',
            [
                'perusahaan' => $perusahaan, ]
        );
    }
}
