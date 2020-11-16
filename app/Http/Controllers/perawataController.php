<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categori;
use App\Perawatan;

class perawataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categori=Categori::all();
        $artikel=Perawatan::latest()->get()->random(2);
        $artikelall=Perawatan::latest()->get();
        $artikelterkait=Perawatan::latest()->limit(4)->get();
        return view('artikel.perawatan',compact('categori','artikel','artikelall','artikelterkait'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Perawatan $perawatan)
    {
        $artikel_detail = $perawatan;
        $categori=Categori::withCount('Perawatan')->get();
        return view('artikel.detail', compact('artikel_detail', 'categori'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function perawatan_kategori(Categori $kategori)
    { 
       $categori=Categori::all();
       $artikel=Perawatan::latest()->get()->random(2);
       $artikelall=$kategori->Perawatan()->get();
       $artikelterkait=Perawatan::latest()->limit(4)->get();
       return view('artikel.perawatan',compact('categori','artikel','artikelall','artikelterkait'));
    }
}
