@extends('master.masterLayout')

@section('content')
    <h5 class="text-center" style="margin:80px 0 0 0;">Mata Kuliah Semester 3</h5>
    <table class="table table-info table-bordered fs-5 mt-5">
    <thead>
        <tr>
        <th class="text-center">No</th>
        <th class="text-center">kode Mk</th>
        <th>Matakuliah</th>
        <th class="text-center">SKS</th>
        <th class="text-center">Hari</th>
        <th class="text-center">Jam</th>
        <th>Dosen Pengampu</th>
        </tr>
    </thead>
    <tbody>
       @foreach($data_matkul as $matkul) 
        <tr>
        <th class="text-center">{{ $matkul-> no }}</th>
        <td class="text-center">{{ $matkul-> kode }}</td>
        <td>{{ $matkul-> nama }}</td>
        <td class="text-center">{{ $matkul-> sks }}</td>
        <td class="text-center">{{ $matkul-> hari }}</td>
        <td class="text-center">{{ $matkul-> jam }}</td>
        <td>{{ $matkul-> dosen }}</td>
        </tr>
       @endforeach
    </tbody>
    </table>
@endsection