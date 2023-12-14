<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kategori;

class KategoriController extends Controller
{
    public function index()
    {
    	$kategori = Kategori::all();
    	return view('kategori.index', ['kategori' => $kategori]);
    }

    public function create()
    {
    	return view('kategori.create');
    }

    public function store(Request $request)
    {

    $kategori = Kategori::create([
     'ket_kategori' => $request->ket_kategori,
     ]);
 
     return redirect('/kategori');
    }

    public function edit($id)
{
   $kategori = Kategori::find($id);
   return view('kategori.edit', ['kategori' => $kategori]);
}

public function update($id, Request $request)
{
    $kategori = Kategori::find($id);
    $kategori->ket_kategori = $request->ket_kategori;
    $kategori->save();
    
    return redirect('/kategori');

}

public function delete($id)
{
    $kategori = Kategori::find($id);
    $kategori->delete();
    return redirect('/kategori');
}

}
