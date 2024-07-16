<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    //
    public function index()
    {
        return view('contact');
    }
    public function store(Request $request)
    {
        $input = $request->all();
        echo 'Semua data :' ;
        print_r($input);
        //method input
        $name = $request->input('nama');
        echo 'Nama:'.$name;
        echo '<br>';
        //method get()
        $email = $request->get('email');
        echo 'Email:'.$email;
        echo '<br>';
        $pesan = $request->pesan;
        echo 'Pesan:'.$pesan;
        echo '<br>';
        exit;
    }
}
