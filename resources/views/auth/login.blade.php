@extends('auth.header')
@section('content')
<div class="row justify-content-center">
  <div class="col-md-4">
    @if(session()->has('success'))
    
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>Registrasi Berhasil!</strong>


</div>
    @endif
    <main class="form-signin">
      <h1 class="h3 mb-3 fw-normal text-center">Please Login</h1>
  <form action="/login" method="POST">
    @csrf
    <div class="form-floating">
      <input type="email" name="email" class="form-control" id="floatingInput" placeholder="name@example.com">
      <label for="floatingInput">Email address</label>
      @error('email')
        <div class="invalid-feedback">{{ $message }}</div>
      @enderror
    </div>
    <div class="form-floating">
      <input type="password" name="password" class="form-control" id="Password" placeholder="Password" required>
      <label for="floatingPassword">Password</label>
    </div>

    <button class="btn btn-primary w-100 py-2" type="submit">Sign in</button>
    
  </form>
  <small class="d-block text-center mt-3">Belum terdaftar? <a href="/register">Daftar sekarang</a> </small>
</main>
  </div>
</div>

@endsection
