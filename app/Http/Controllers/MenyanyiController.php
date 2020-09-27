<?php

namespace App\Http\Controllers;

use App\Menyanyi;
use Illuminate\Http\Request;

class MenyanyiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $menyanyi = Menyanyi::all();
        return view('hiburan.readmenyanyi',  compact('menyanyi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('menyanyi.createmenyanyi');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'suara' => 'required',
            'gambar' => 'required',
        ]);
         
        $suara = $request->suara;
        $gambar = $request->gambar;
        $new_gambar = time().$gambar->getClientOriginalName();
        $new_suara = time().$suara->getClientOriginalName();

        $menyanyi = Menyanyi::create([
            'judul' => $request->judul,
            'suara' => 'public/uploads/menyanyi/'.$new_suara,
            'gambar' => 'public/uploads/menyanyi/'.$new_gambar
        ]);
        
        $suara->move('public/uploads/menyanyi/', $new_suara);
        $gambar->move('public/uploads/menyanyi/', $new_gambar);
        return redirect('/menyanyi')->with('status', 'Data Berhasil Ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Menyanyi  $menyanyi
     * @return \Illuminate\Http\Response
     */
    public function show(Menyanyi $menyanyi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Menyanyi  $menyanyi
     * @return \Illuminate\Http\Response
     */
    public function edit(Menyanyi $menyanyi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Menyanyi  $menyanyi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Menyanyi $menyanyi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Menyanyi  $menyanyi
     * @return \Illuminate\Http\Response
     */
    public function destroy(Menyanyi $menyanyi)
    {
        //
    }
}
