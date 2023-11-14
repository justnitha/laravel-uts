<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\modelMatkul;


class matkulController extends Controller
{
    public function index()
    {
        
        $data_matkul = modelMatkul::all(); 

        // Kirim data matkul ke view 'home'
        return view('matkul', compact('data_matkul'));
    }
}
