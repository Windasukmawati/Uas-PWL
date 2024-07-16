<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;



class AdminCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $this->authorize('admin');
        $categories = Category::latest()->paginate(5);
        return view('categories.index',compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('categories.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validasi data
        $validatedData = $request->validate([
            'nama' => 'required|string|max:255',
            'slung' => 'required|string|max:255'
        ]);

        // Simpan data ke database
        DB::table('categories')->insert([
            'nama' => $request->nama,
            'slung' => $request->slung
        ]);

        return redirect()->route('categories.index')->with('success', 'Category berhasil ditambahkan');
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
    public function edit($id)
    {
        //
        $data = DB::table('categories')->where('id',$id)->first();
        return view('categories.edit',['data'=> $data]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $validatedData = $request->validate([
            'nama' => 'required|string|max:255',
            'slung' => 'required|string|max:255'
        ]);
    
        // Update data di database
        DB::table('categories')->where('id', $id)->update([
            'nama' => $request->nama,
            'slung' => $request->slung
        ]);
    
        return redirect()->route('categories.index')->with('success', 'Category berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        // Hapus data dari database
        DB::table('categories')->where('id', $id)->delete();

        return redirect()->route('categories.index')->with('success', 'Category berhasil dihapus');
    }
}
