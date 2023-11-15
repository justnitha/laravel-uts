<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $data_mahasiswa = [
            'nim'       => '2201010547',
            'nama'      => 'Putu Ajust Putra Pratama',
            'jurusan'   => 'Manajemen Data dan Informasi',
            'alamat'    => 'Banjar Batanbuah, Abiansemal, Badung',
            'hp'        => '08123456789',
            'hobi'      => 'Skateboard dan Mancing',
            'motto'     => 'Kerja, Kerja, Kerja',
            'foto'      => 'static/profil.jpg'
        ];
        return view('home', compact('data_mahasiswa'));
    }
}
