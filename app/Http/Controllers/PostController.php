<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index():View
    {
        //
        $posts = Post::latest()->paginate(5);
        return view('posts.index',compact('post'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create():View
    {
        //
        
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request):RedirectResponse
    {
        //validasi form
        $this->validate($request,[
        'image' => 'required|image|mimes:jpeg.jpg,png|max:2048',
        'title' => 'required|min:5',
        'content' => 'required|min:10',
        ]);
        //upload gambar
        $image = $request->file('image');
        $image->storeAs('public/posts',$image->hashName());

        //post
        post::create([
            'image' => $image->hashName(),
            'title' => $request->title,
            'content' => $request->content
        ]);
        return redirect()->router('posts.index')->with(['success' =>'Data berhasil disimpan']);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
