<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class BukuController extends Controller
{
    //
    public function index(): View
    {
        return view('buku');
    }
    public function home(): View
    {
        return view('meja');
    }
}
