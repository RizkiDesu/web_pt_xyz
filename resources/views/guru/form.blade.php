@extends('template')
@section('title')
    Fofrm Guru
@endsection

@section('content')
    Ini from Guru

    <form method="POST">
        @csrf
        <table>
            <tr>
                <td>Nama Lengkap</td>
                <td><input type="text" name="nama" value="{{ (isset($guru) ? $guru->name : '') }}"></td>
            </tr>
            <tr>
                <td>Mapel</td>
                <td><input type="text" name="mapel" value="{{ (isset($guru) ? $guru->mapel : '') }}"></td>
            </tr>
            <tr>
                <td>Kelas</td>
                <td><input type="text" name="kelas" value="{{ (isset($guru) ? $guru->kelas : '') }}"></td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <Button type="submit" btn btn-primary style="margin-top: 20px;">simpan</Button>
                    <a href="{{url('/guru')}}">kembali</a>
                </td>
            </tr>
        </table>
    </form>
@endsection
