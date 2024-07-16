@extends('posts.layout')
@extends('layout.main')
@section('content')
<div class="low">
    <div class="col-md-12">
        <div class="card border-0 shadow-5sm rounded col-6">
            <div class="card-body">
                <form action="{{route('posts.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <h1 class="d-flex justify-content-center">Tambah Post</h1>
                    <div class="form-group">
                        <label class="font-weigt-bold">Tittle</label>
                        <input type="text" class="form-control @error('title') is-invalid 
                        @enderror" name="title" value="{{ old('title')}}">
                        @error('title')
                            <div class="alert alert-danger mt-2">
                                {{ $message}}
                            </div>
                        @enderror
                    <div class="form-group">
                        <label class="font-weigt-bold">Slung</label>
                        <input type="text" class="form-control @error('slung') is-invalid 
                        @enderror" name="slung" value="{{ old('slung')}}">
                        @error('slung')
                            <div class="alert alert-danger mt-2">
                                {{ $message}}
                            </div>
                        @enderror
                    </div>
                    <br>
                    <button type="submit" class="btn btn-primary mb-5">Simpan
                    </button>
                    <button type="reset" class="btn  btn-warning mb-5">Reset
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/ls/bootstrap.min.js"></script>
<script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js></script"></script>
<script>
    EKEDITOR.replace( 'content');
</script>
@endsection