<?php

namespace App\Http\Controllers;

use App\Angka;
use Illuminate\Http\Request;

class AngkaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $angka = Angka::all();
        return view('belajar.readangka',  compact('angka'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('belajar.createangka');
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
            'angka' => 'required',
            'tipe' => 'required',
            'gambar' => 'required|image:svg',
            'tulisan' => 'required',
            'suara_id' => 'required|mimes:mp3',
            'suara_en' => 'required|mimes:mp3',
        ]);

            $data = $request->except(['suara_id', 'suara_en', 'gambar']);

            $filename = strtotime(date('Y-m-d H:i:s'));
            $extension = $request->suara_id->extension();
            $filename = "{$filename}.{$extension}";
            $request->suara_id->storeAs('belajar/angka', $filename);
            $data['suara_id'] = asset("/storage/belajar/angka/{$filename}");
            
            $filename = strtotime(date('Y-m-d H:i:s'));
            $extension = $request->suara_en->extension();
            $filename = "{$filename}.{$extension}";
            $request->suara_en->storeAs('belajar/angka', $filename);
            $data['suara_en'] = asset("/storage/belajar/angka/{$filename}");

            $filename = strtotime(date('Y-m-d H:i:s'));
            $extension = $request->gambar->extension();
            $filename = "{$filename}.{$extension}";
            $request->gambar->storeAs('belajar/angka', $filename);
            $data['gambar'] = asset("/storage/belajar/angka/{$filename}");

        Angka::create($data);
        return redirect('/angka')->with('status', 'Data Berhasil Ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Angka  $angka
     * @return \Illuminate\Http\Response
     */
    public function show(Angka $angka)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Angka  $angka
     * @return \Illuminate\Http\Response
     */
    public function edit(Angka $angka)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Angka  $angka
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Angka $angka)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Angka  $angka
     * @return \Illuminate\Http\Response
     */
    public function destroy(Angka $angka)
    {
        Angka::destroy($angka->id);
        return redirect('/angka')->with('status', 'Data Berhasil dihapus');
    }
}
