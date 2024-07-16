@extends('layout.main')
@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">My Post</h1>
</div>
    <div class="table-responsive small">
        <a href="/posts/create" class="btn btn-primary mb-3">Create New Post</a>
    <table class="table table-striped table-sm">
        <thead>
        <tr>
            <th scope="col">No</th>
            <th scope="col">Judul</th>
            <th scope="col">Kategori</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($posts as $post)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $post->category->nama }}</td>
            <td>{{ $post->category->slung }}</td>
            <td>
                <a href="/dashboard/posts/{{ $post->id }}" class="badge bg-info">View</a>
                <a href="/dashboard/posts/{{ $post->id }}" class="badge bg-warning">Edit</a>
                <a onclick="return confirm('Apakah Anda Yakin Ingin Menghapus data Ini?') "href="/dashboard/posts/hapus{{ $post->slung}}" class="badge bg-danger">Delete</a>
            </td>
        </tr>
        @endforeach
        </tbody>
    </table>
    </div>
@endsection