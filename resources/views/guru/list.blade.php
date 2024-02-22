@extends('template')
@section('title')
    Guru List
@endsection

@section('content')
    <h1>Ini halaman Guru</h1>
    <div style="background-color: coral; color:white; padding:5px ">
        {{ Session::get('message') }}
    </div>

    <a href="{{ '/guru/insert' }}">+ Tambah Data</a>

    <table border="1" cellspacing= "0" cellpadding="5">
        <tr>
            <th>Id</th>
            <th>Nama</th>
            <th>Mata Pelajaran</th>
            <th>Kelas</th>
            <th>Action</th>
        </tr>
        @foreach ($gurus as $guru)
            <tr>
                <th>{{ $guru->id }}</th>
                <th>{{ $guru->name }}</th>
                <th>{{ $guru->mapel }}</th>
                <th>{{ $guru->kelas }}</th>
                <th>
                    <a href="{{url('guru/update/' . $guru->id )}}">Ubah</a>
                    <a href="{{url('guru/delete/' . $guru->id )}}">Hapus</a>
                </th>
            </tr>
        @endforeach
    </table>
@endsection
