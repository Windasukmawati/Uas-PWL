@extends('posts.layout')
@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-mt-12">
            <div>
                <h3 class="text-center my-4">Tutorial Model dan Migrasi Laravel</h3>
                <h5 class="text-center"><a href="https://praktisi.ac.id">
                www.praktisi.ac.id</a></h5>
                <hr>
            </div>
            <div class="card border-0 shadow-sm rounded">
                <div class="card-body">
                    <a href="{{route('posts.create')}}" class="btn btn-md
                    btn-success mb-3">Tambah Post</a>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">Gambar</th>
                                <th scope="col">Judul</th>
                                <th scope="col">Konten</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
    @forelse ($posts as $post)
        <tr>
            <td class="text-center">
                <img src="{{ asset('/storage/posts/
                '.$post-image) }}" class="rounded" style="
                    width: 200px">

            </td>
            <td>{{ $post->title}}</td>
            <td>{!! $post->content !!}</td>
            <td class="text-center">
                <form onsubmit="return confirm('Apakah Anda Yakin?');" action="
                {{route('posts.destroy',$post->id)}}" method="
                POST">
                    <a href="{{route('posts.show',$post->id)}}"
                    class="btn btn-sm btn-dark">Show</a>
                    <a href="{{route('posts.edit',$post->id)}}"
                    class="btn btn-sm btn-primary">Edit</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-sm
                    btn-danger">Hapus</button>
                </form>
            </td>
        </tr>
    @empty
    <div class="alert alert-danger">
                                    Data Post belum tersedia
                                </div>
                            @endforelse
                        </tbody>
                    </table>
                        {{ $posts->links() }}
                </div>
            </div>
        </div>
    </div>
</div>