<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class mtkseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $matkuls = [
           [
            'no'    => 1,
            'kode'  => 'A81l68',
            'nama'  => 'Data Integration',
            'sks'   => 3,
            'kelas' => 'W Lab B',
            'hari'  => 'Senin',
            'jam'   => '07.30 - 10.00',
            'dosen' => 'Ir. Anak Agung Gede Bagus Ariana, S.T., M.T.',
           ],
           [
            'no'    => 2,
            'kode'  => 'A68k85',
            'nama'  => 'Jaringan Komputer Lanjut',
            'sks'   => 3,
            'kelas' => 'W Lab J',
            'hari'  => 'Senin',
            'jam'   => '10.00 - 12.20',
            'dosen' => 'Ida Bagus Ary Indra Iswara,S.Kom.,M.Kom',
           ],
           [
            'no'    => 3,
            'kode'  => 'V89c83',
            'nama'  => 'Pemograman Web Framework',
            'sks'   => 3,
            'kelas' => 'W Lab C',
            'hari'  => 'Kamis',
            'jam'   => '10.00 - 12.20',
            'dosen' => 'I Komang Arya Ganda Wiguna, S.Kom., M.Cs.',
           ],
           [
            'no'    => 4,
            'kode'  => 'I75g90',
            'nama'  => 'Tata Kelola dan Audit Informasi',
            'sks'   => 3,
            'kelas' => 'W R401',
            'hari'  => 'Kamis',
            'jam'   => '13.10 - 15.40',
            'dosen' => 'Ayu Manik Dirgayusari, S.Kom., M.MT.',
           ],
           [
            'no'    => 5,
            'kode'  => 'E70l88',
            'nama'  => 'Pengantar Akutansi',
            'sks'   => 3,
            'kelas' => 'W R403',
            'hari'  => 'Jumat',
            'jam'   => '9.10 - 11.40',
            'dosen' => 'Putu Apriyani P,SE.,MSi',
           ],
           [
            'no'    => 6,
            'kode'  => 'Y72x69',
            'nama'  => 'Analisa dan Desain Sistem Informasi',
            'sks'   => 3,
            'kelas' => 'W R401',
            'hari'  => 'Sabtu',
            'jam'   => '10.00 - 12.20',
            'dosen' => 'Aniek Suryanti Kusuma,S.Kom., M.Kom',
           ],
           [
            'no'    => 7,
            'kode'  => 'J74m77',
            'nama'  => 'Bisnis Berbasis Teknologi',
            'sks'   => 2,
            'kelas' => 'W R401',
            'hari'  => 'Sabtu',
            'jam'   => '13.10 - 14.50',
            'dosen' => 'Ayu Gde Chrisna Udayanie, S.Pd., M.Pd.',
           ],
        ];
        DB::table('matkul')->insert($matkuls);

    }
}
