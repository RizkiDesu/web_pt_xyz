@extends('template')
@section('title')
    Fofrm Siswa
@endsection

@section('content')
    Ini halaman Siswa
    
    <form method="POST">
        @csrf
        <table>
            <tr>
                <td>Nama Lengkap</td>
                <td><input type="text" name="nama" value="{{ (isset($siswa) ? $siswa->name : '') }}"></td>
            </tr>
            <tr>
                <td>email</td>
                <td><input type="text" name="email" value="{{ (isset($siswa) ? $siswa->email : '') }}"></td>
            </tr>
            <tr>
                <td>kelas</td>
                <td><input type="text" name="kelas" value="{{ (isset($siswa) ? $siswa->kelas : '') }}"></td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <Button type="submit">simpan</Button>
                    <a href="{{url('/siswa')}}">kembali</a>
                </td>
            </tr>
        </table>
    </form>
@endsection