@extends('auth.header')
@section('content')

<h1>Selamat Datang, {{ auth()->user()->name }} !</h1>
@endsection