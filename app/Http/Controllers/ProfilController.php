<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProfilController extends Controller
{
    //
    public function index()
{
    $profil= DB::table('users')->get();
    return view('dashboard.profil');
}

}
