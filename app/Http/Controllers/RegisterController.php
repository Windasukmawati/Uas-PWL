<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
//
public function index()
{
    return view('register.index');
    
}
public function store(Request $request)
{

    //return $request->all();
    $validatedData = $request->validate([
    'name' => 'required|max:255',
    'username'=> 'required|min:3|max:255|unique:users',
    'email' => 'required|email|unique:users',
    'password' => 'required|min:5|max:255'
    ]);  
    $validatedData['password'] = Hash::make($validatedData['password']);  
    User::create($validatedData); 

    $request->session()->flash('success','Registrasi berhasil!');   
    return redirect('/login');           
}
}
