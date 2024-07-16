@extends('auth.header')
@section('content')
<div class="row justify-content-center">
<div class="col-md-5">
  <main class="form-registration">
      <h1 class="h3 mb-3 fw-normal text-center">Form Registrasi</h1>

<form action="/simpan" method="POST" enctype="multipart/form-data">
  @csrf
  <div class="form-floating">
    <input type="text" class="form-control @error('name')is-valid @enderror rounded-top " name="name" placeholder="Name" required>
    <label for="name">Nama</label>
    @error('name')
      <div class="invalid-feedback">
        {{ $message }}
      </div>
    @enderror
  </div>
  <div class="form-floating">
    <input type="text" class="form-control @error('username')is-valid @enderror" name="username" placeholder="Username" required>
    <label for="username">Username</label>
    @error('username')
      <div class="invalid-feedback">
        {{ $message }}
      </div>
    @enderror
  </div>
  <div class="form-floating">
    <input type="email" class="form-control @error('email')is-valid @enderror" name="email" placeholder="name@example.com" required>
    <label for="email">Email address</label>
    @error('email')
      <div class="invalid-feedback">
        {{ $message }}
      </div>
    @enderror
  
  </div>
  <div class="form-floating">
    <input type="password" class="form-control @error('password')is-valid @enderror rounded-bottom" name="password" placeholder="Password" required>
    <label for="password">Password</label>
    @error('password')
      <div class="invalid-feedback">
        {{ $message }}
      </div>
    @enderror
  </div>
  </div>

  <button class="btn btn-primary w-100 py-2 mt-3" type="submit">Register</button>
  
</form>
<small class="d-block text-center mt-3">Sudah terdaftar? <a href="/login">Login sekarang</a> </small>
</main>
</div>
</div>
@endsection
