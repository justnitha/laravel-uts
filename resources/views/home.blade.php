@extends('master.masterLayout')

@section('content')
<div class="mx-auto p-5 container" >
    <div class="row align-items-center">
        <div class="col ms-5">
            <img src="{{ asset($data_mahasiswa['foto'])}}" class="shadow-lg card-img-top rounded-4" alt="profil">
        </div>
        <div class="col">
            <div class="row row-cols-2 ms-4 py-5 ps-5 fs-5 shadow rounded-4" style="background-color:#ff7d1a">
                <ul class="list-group col" style="width: 15%">
                    <li class="none">NIM</li>
                    <li class="none">Nama</li>
                    <li class="none">Jurusan</li>
                    <li class="none">Alamat</li>
                    <li class="none">HP</li>
                    <li class="none">Hobi</li>
                    <li class="none">Motto</li>
                </ul>
                <ul class="list-group col" style="width: 75%;" >
                    <li class="none">: 
                        @if (($data_mahasiswa['nim']) % 2 === 0)
                            <span style="color: red;">{{ $data_mahasiswa['nim'] }}</span>
                        @else
                            <span style="color: blue;">{{ $data_mahasiswa['nim'] }}</span>
                        @endif
                    </li>
                    <li class="none">: {{ $data_mahasiswa['nama']}}</li>
                    <li class="none">: {{ $data_mahasiswa['jurusan']}}</li>
                    <li class="none">: {{ $data_mahasiswa['alamat']}}</li>
                    <li class="none">: {{ $data_mahasiswa['hp']}}</li>
                    <li class="none">: {{ $data_mahasiswa['hobi']}}</li>
                    <li class="none">: {{ $data_mahasiswa['motto']}}</li>
                </ul>
            </div>
        </div>
    </div>
</div>

@endsection

