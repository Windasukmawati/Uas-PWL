<?php

use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DashboardPostController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\AdminCategoryController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

/*Route::get('/', function () {
    return view('welcome.blade.php');
});*/

Route::get('/hello', function () {
    return 'Hello World';});

Route::get('/hello', function () {
    echo '<h1>Belajar Laravel</h1>';
    echo '<p>Mari Belajar Laravel</p>';
});

route::view('/helo','helo');
route::view('/helo','helo',['jurusan' => 'Manajemen Informatika' ]);

Route::get('buku',[BukuController::class,'index']);
Route::get('meja',[BukuController::class,'home']);

Route::get('/admin/post',[TestController::class,'home']);

Route::get('/contact',[ContactController::class,'index']);
Route::post('/contact',[ContactController::class,'store']);

Route::get('student/tambah',[StudentController::class,'insert']);
Route::post('student/simpan',[StudentController::class,'simpan']);
Route::post('student/tampil',[StudentController::class,'index']);

//Route::resource('posts',[PostController::class]);

//Route untuk manajemen user
Route::get('/', function () {
    return view('auth.header');
});
//Route::get('/login',[LoginController::class,'index'])->name('login')->middleware('guest');
//Route::post('/login',[LoginController::class,'authenticate']);
Route::get('/login',[LoginController::class,'index'])->name('login')->middleware('guest');
Route::post('/login',[LoginController::class,'authenticate']);
Route::post('/logout',[LoginController::class,'logout']);
Route::get('/register',[RegisterController::class,'index']);
Route::post('/simpan',[RegisterController::class,'store']);
Route::get('/dashboard',[DashboardController::class,'index'])->middleware('auth');
Route::get('/profil',[ProfilController::class,'index']);



Route::resource('/dashboard/categories',AdminCategoryController::class)->except('show')->middleware('admin');
Route::get('/categories/create',[AdminCategoryController::class,'create']);
Route::post('/categories/tambah',[AdminCategoryController::class,'store']);
Route::get('/categories/hapus{id}',[AdminCategoryController::class,'destroy']);
Route::get('/categories/edit{id}',[AdminCategoryController::class,'edit']);
Route::put('/categories/update',[AdminCategoryController::class,'update']);

Route::resource('/dashboard/posts',DashboardPostController::class)->middleware('auth');
Route::get('/posts/create',[DashboardPostController::class,'create']);
Route::post('/posts/tambah',[DashboardPostController::class,'store']);
Route::get('/posts/edit{id}',[DashboardPostController::class,'edit']);
Route::put('/posts/update',[DashboardPostController ::class,'update']);
Route::get('/dashboard/posts/hapus{slung}',[AdminCategoryController::class,'destroy']);
