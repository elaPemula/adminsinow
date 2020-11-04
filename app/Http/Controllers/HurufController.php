<?php

namespace App\Http\Controllers;

use App\Huruf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Ramsey\Uuid\Uuid;

class HurufController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $huruf = Huruf::all();
        return view('belajar.readhuruf', compact('huruf'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('belajar.createhuruf');
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
            'huruf' => 'required',
            'gambar' => 'required|image:svg,png,jpg',
            'sound' => 'required|mimes:mp3',
        ]);

        $data = $request->except(['gambar', 'sound']);

        $extension = $request->gambar->extension();
        $filename = Uuid::uuid4() . ".{$extension}";
        $request->gambar->storeAs('belajar/huruf', $filename);
        $data['gambar'] = asset("/storage/belajar/huruf/{$filename}");

        $extension = $request->sound->extension();
        $filename = Uuid::uuid4() . ".{$extension}";
        $request->sound->storeAs('belajar/huruf', $filename);
        $data['sound'] = asset("/storage/belajar/huruf/{$filename}");

        Huruf::create($data);
        return redirect('/huruf')->with('status', 'Data Berhasil Ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Huruf  $huruf
     * @return \Illuminate\Http\Response
     */
    public function show(Huruf $huruf)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Huruf  $huruf
     * @return \Illuminate\Http\Response
     */
    public function edit(Huruf $huruf)
    {
        return view('belajar.edithuruf', compact('huruf'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Huruf  $huruf
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Huruf $huruf)
    {
        $request->validate([
            'huruf' => 'required',
            'gambar' => 'image:svg,png,jpg',
            'sound' => 'mimes:mp3',
        ]);

        $data = $request->except(['gambar', 'sound']);

        if ($request->hasFile('gambar')) {
            $extension = $request->gambar->extension();
            $filename = Uuid::uuid4() . ".{$extension}";
            $oldfile = basename($huruf->gambar);
            Storage::delete("belajar/huruf/{$oldfile}");
            $request->gambar->storeAs('belajar/huruf', $filename);
            $data['gambar'] = asset("/storage/belajar/huruf/{$filename}");
        }

        if ($request->hasFile('sound')) {
            $extension = $request->sound->extension();
            $filename = Uuid::uuid4() . ".{$extension}";
            $oldfile = basename($huruf->gambar);
            Storage::delete("belajar/huruf/{$oldfile}");
            $request->sound->storeAs('belajar/huruf', $filename);
            $data['sound'] = asset("/storage/belajar/huruf/{$filename}");
        }

        $huruf->fill($data);
        $huruf->save();

        return redirect('/huruf')->with('status', 'Data Berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Huruf  $huruf
     * @return \Illuminate\Http\Response
     */
    public function destroy(Huruf $huruf)
    {
        Huruf::destroy($huruf->id);
        return redirect('/huruf')->with('status', 'Data Berhasil dihapus');
    }
}
