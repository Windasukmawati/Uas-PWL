@extends('layout.main')
@section('container')
<div class="container">
  <div class="row md-5">
    <div class="col-md-8">
      <h2 class="mb-3">{{ $post->title }} </h2>
      <article class="my-3 ms-5">
        {!! $post->body !!}
      </article>
    </div>
  </div>
</div>
@endsection