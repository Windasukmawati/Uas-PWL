@extends('layout.main')
@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">My Category</h1>
</div>
    <div class="table-responsive coll-lg-6">
        <a href="/categories/create" class="btn btn-primary mb-3">Create New Category</a>
    <table class="table table-striped table-sm">
        <thead>
        <tr>
            <th scope="col">No</th>
            <th scope="col">Category</th>
            <th scope="col">Slug</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($categories as $category)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $category->nama }}</td>
            <td>{{ $category->slung }}</td>
            <td>
                <a href="/categories/edit{{ $category->id }}" class="badge bg-warning">Edit</a>
                <a onclick="return confirm('Apakah Anda Yakin Ingin Menghapus data Ini?')" href="/categories/hapus{{ $category->id }}" class="badge bg-danger">Delete</a>
            </td>
        </tr>
        @endforeach
        </tbody>
    </table>
    </div>
@endsection