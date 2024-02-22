@extends('template')
@section('title')
    Siswa List
@endsection

@section('content')
    <h1>Ini halaman Siswa</h1>
    <div style="background-color: coral; color:white; padding:5px ">
        {{ Session::get('message') }}
    </div>
    
    <a href="{{ '/siswa/insert' }}">+ Tambah Data</a>

    <table border="1" cellspacing= "0" cellpadding="5">
        <tr>
            <th>Id</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Kelas</th>
            <th>Action</th>
        </tr>
        @foreach ($siswas as $siswa)
            <tr>
                <th>{{ $siswa->id }}</th>
                <th>{{ $siswa->name }}</th>
                <th>{{ $siswa->email }}</th>
                <th>{{ $siswa->kelas }}</th>
                <th>
                    <a href="{{url('siswa/update/' . $siswa->id )}}">Ubah</a>
                    <a href="{{url('siswa/delete/' . $siswa->id )}}">Hapus</a>
                </th>
            </tr>
        @endforeach
    </table>
@endsection