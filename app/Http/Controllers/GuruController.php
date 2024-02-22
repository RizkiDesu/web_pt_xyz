<?php

namespace App\Http\Controllers;
use App\Models\GuruModel;
use Illuminate\Http\Request;

class GuruController extends Controller
{
    function index(){

        $data = array(
            'gurus' => GuruModel::all()
        );

        return view('guru.list', $data);
    }
    function insert(Request $request){
        if ($request->isMethod('post')){
            $guru = new GuruModel();
            $guru->name = $request->nama;
            $guru->mapel = $request->mapel;
            $guru->kelas = $request->kelas;
            $guru->save();
            return redirect('/guru')->with(['message'=>'Tambah Guru Berhasil!!']);

        }else{
            return view ('guru.form');
        }

        

    }
    function update(Request $request){
        $guru = GuruModel::find($request->id);

        $data = array(
            'guru' => $guru

        );


        if ($request->isMethod('post')){
            $guru->name = $request->nama;
            $guru->mapel = $request->mapel;
            $guru->kelas = $request->kelas;
            $guru->save();
            return redirect('/guru')->with(['message'=>'Ubah Guru Berhasil!!']);

        }

        return view ('guru.form', $data);

    }

    function delete (Request $request){
        $guru = GuruModel::find($request->id);
        $guru->delete();
        return redirect('/guru')->with(['message'=>'Hapus Guru Berhasil!!']);


    }
}
