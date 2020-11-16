<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Perawatan;
use App\Categori;
use Storage;

class ArtikelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $artikel=Perawatan::latest()->get();
        return view('admin.perawatan.index', compact('artikel'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categori=Categori::select('id','nama_kategori')->get();
        return view ('admin.perawatan.create',compact('categori'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $image=$request->file('gambar')->store('perawtan');
        Perawatan::create([
            'judul'=>\Str::slug($request->judul),
            'body'=>$request->body,
            'gambar'=>$image,
            'categoris_id'=>$request->categoris_id,
        ]);
        return redirect()->route('artikel.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categori=Categori::select('id', 'nama_kategori')->get();
        $artikel=Perawatan::find($id);
        return view('admin.perawatan.edit', compact('categori','artikel'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $artikel=Perawatan::find($id);
        Storage::delete($artikel->gambar);
        $artikel->update([
            'judul'=>\Str::slug($request->judul),
            'body'=>$request->body,
            'gambar'=>$request->file('gambar')->store('artikel'),
            'categoris_id'=>$request->categoris_id,
        ]);
        return redirect()->route('artikel.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $artikel=Perawatan::find($id);
        if(!$artikel){
            return redirect()->back();
           
        }
        Storage::delete($artikel->gambar);
        $artikel->delete();

        return redirect()->route('artikel.index'); 
    }
}
