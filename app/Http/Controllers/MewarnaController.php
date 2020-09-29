<?php

namespace App\Http\Controllers;

use App\Mewarna;
use Illuminate\Http\Request;

class MewarnaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mewarna = Mewarna::all();
        return view('hiburan.readmewarna', compact('mewarna'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('hiburan.createmewarna');
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
            'keterangan' => 'required',
            'gambar' => 'required|image:svg'
        ]);

        $data = $request->except(['gambar']);
        $filename=strtotime(date('Y-m-d H:i:s'));
        $extension = $request->gambar->extension();
        $filename = "{$filename}.{$extension}";
        $request->gambar->storeAs('hiburan/mewarna', $filename);
        $data['gambar'] = asset("/storage/hiburan/mewarna/{$filename}");

       

        Mewarna::create($data);
        return redirect('/mewarna')->with('Status','Data Berhasil Ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Mewarna  $mewarna
     * @return \Illuminate\Http\Response
     */
    public function show(Mewarna $mewarna)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Mewarna  $mewarna
     * @return \Illuminate\Http\Response
     */
    public function edit(Mewarna $mewarna)
    {
        return view('hiburan.editmewarna', compact('mewarna'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Mewarna  $mewarna
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mewarna $mewarna)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Mewarna  $mewarna
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mewarna $mewarna)
    {
        Mewarna::destroy($mewarna->id);
        return redirect('/mewarna')->with('status', 'Data Berhasil dihapus');
    }
}
