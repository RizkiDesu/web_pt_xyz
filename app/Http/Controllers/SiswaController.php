<?php

namespace App\Http\Controllers;
use App\Models\SiswaModel;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    function index(){

        $data = array(
            'siswas' => SiswaModel::all()
        );

        return view('siswa.list', $data);
    }
    function insert(Request $request){
        if ($request->isMethod('post')){
            $siswa = new SiswaModel();
            $siswa->name = $request->nama;
            $siswa->email = $request->email;
            $siswa->kelas = $request->kelas;
            $siswa->save();
            return redirect('/siswa')->with(['message'=>'Tambah Siswa Berhasil!!']);

        }

        return view ('siswa.form');

    }
    function update(Request $request){
        $siswa = SiswaModel::find($request->id);

        $data = array(
            'siswa' => $siswa

        );


        if ($request->isMethod('post')){
            $siswa->name = $request->nama;
            $siswa->email = $request->email;
            $siswa->kelas = $request->kelas;
            $siswa->save();
            return redirect('/siswa')->with(['message'=>'Ubah Siswa Berhasil!!']);

        }

        return view ('siswa.form', $data);

    }

    function delete (Request $request){
        $siswa = SiswaModel::find($request->id);
        $siswa->delete();
        return redirect('/siswa')->with(['message'=>'Hapus Siswa Berhasil!!']);


    }
}