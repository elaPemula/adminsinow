<?php

namespace App\Http\Controllers;

use App\Membaca;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Ramsey\Uuid\Uuid;

class MembacaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $membaca = Membaca::all();
        return view('belajar.readmembaca',  compact('membaca'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('belajar.createmembaca');
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
            'nama' => 'required',
            'gambar' => 'required|image:svg,png,jpg',
            'tulisan_id' => 'required',
            'sound_id' => 'required|mimes:mp3',
            'tulisan_en' => 'required',
            'sound_en' => 'required|mimes:mp3',
            'tipe' => 'required',
        ]);

        $data = $request->except(['gambar', 'sound_id', 'sound_en']);

        $extension = $request->gambar->extension();
        $filename = Uuid::uuid4() . ".{$extension}";
        $request->gambar->storeAs('belajar/membaca', $filename);
        $data['gambar'] = asset("/storage/belajar/membaca/{$filename}");

        $extension = $request->sound_id->extension();
        $filename = Uuid::uuid4() . ".{$extension}";
        $request->sound_id->storeAs('belajar/membaca', $filename);
        $data['sound_id'] = asset("/storage/belajar/membaca/{$filename}");

        $extension = $request->sound_en->extension();
        $filename = Uuid::uuid4() . ".{$extension}";
        $request->sound_en->storeAs('belajar/membaca', $filename);
        $data['sound_en'] = asset("/storage/belajar/membaca/{$filename}");

        Membaca::create($data);
        return redirect('/membaca')->with('status', 'Data Berhasil Ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Membaca  $membaca
     * @return \Illuminate\Http\Response
     */
    public function show(Membaca $membaca)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Membaca  $membaca
     * @return \Illuminate\Http\Response
     */
    public function edit(Membaca $membaca)
    {
        return view('belajar.editmembaca', compact('membaca'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Membaca  $membaca
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Membaca $membaca)
    {
        $request->validate([
            'nama' => 'required',
            'gambar' => 'required|image:svg,png,jpg',
            'tulisan_id' => 'required',
            'sound_id' => 'required|mimes:mp3',
            'tulisan_en' => 'required',
            'sound_en' => 'required|mimes:mp3',
            'tipe' => 'required',
        ]);

        $data = $request->except(['gambar', 'sound_id', 'sound_en']);

        if ($request->hasFile('gambar')) {
            $extension = $request->gambar->extension();
            $filename = Uuid::uuid4() . ".{$extension}";
            $oldfile = basename($membaca->gambar);
            Storage::delete("belajar/membaca/{$oldfile}");
            $request->gambar->storeAs('belajar/membaca', $filename);
            $data['gambar'] = asset("/storage/belajar/membaca/{$filename}");
        }

        if ($request->hasFile('sound_id')) {
            $extension = $request->sound_id->extension();
            $filename = Uuid::uuid4() . ".{$extension}";
            $oldfile = basename($membaca->gambar);
            Storage::delete("belajar/membaca/{$oldfile}");
            $request->sound_id->storeAs('belajar/membaca', $filename);
            $data['sound_id'] = asset("/storage/belajar/membaca/{$filename}");
        }

        if ($request->hasFile('sound_en')) {
            $extension = $request->sound_en->extension();
            $filename = Uuid::uuid4() . ".{$extension}";
            $oldfile = basename($membaca->gambar);
            Storage::delete("belajar/membaca/{$oldfile}");
            $request->sound_en->storeAs('belajar/membaca', $filename);
            $data['sound_en'] = asset("/storage/belajar/membaca/{$filename}");
        }

        $membaca->fill($data);
        $membaca->save();

        return redirect('/membaca')->with('status', 'Data Berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Membaca  $membaca
     * @return \Illuminate\Http\Response
     */
    public function destroy(Membaca $membaca)
    {
        Membaca::destroy($membaca->id);
        return redirect('/membaca')->with('status', 'Data Berhasil dihapus');
    }
}
