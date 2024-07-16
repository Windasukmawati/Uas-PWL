<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class StudentController extends Controller
{
    //
    Public function insert()
    {
        return view("insert");
    }
    Public function simpan(Request $request)
    {
        DB::table('mahasiswa')->insert([
            'nama'=> $request->nama,
            'alamat'=> $request->alamat,
            'jurusan'=> $request->jurusan,
            'no telp'=> $request->notelp,
        ]);
    }
}