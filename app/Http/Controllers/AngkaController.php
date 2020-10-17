<?php

namespace App\Http\Controllers;

use App\Angka;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Ramsey\Uuid\Uuid;

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
        return view('belajar.readangka', compact('angka'));
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
            'angka' => 'required|numeric',
            'gambar' => 'required|image:svg,png,jpg',
            'tulisan' => 'required',
            'sound' => 'required|mimes:mp3',
            'tipe' => 'required',
        ]);

        $data = $request->except(['gambar', 'sound']);

        $extension = $request->gambar->extension();
        $filename = Uuid::uuid4() . ".{$extension}";
        $request->gambar->storeAs('belajar/angka', $filename);
        $data['gambar'] = asset("/storage/belajar/angka/{$filename}");

        $extension = $request->sound->extension();
        $filename = Uuid::uuid4() . ".{$extension}";
        $request->sound->storeAs('belajar/angka', $filename);
        $data['sound'] = asset("/storage/belajar/angka/{$filename}");

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
        return view('belajar.editangka', compact('angka'));
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
        $request->validate([
            'angka' => 'required',
            'gambar' => 'image:svg,png,jpg',
            'tulisan' => 'required',
            'sound' => 'mimes:mp3',
            'tipe' => 'required',
        ]);

        $data = $request->except(['gambar', 'sound']);

        if ($request->hasFile('gambar')) {
            $extension = $request->gambar->extension();
            $filename = Uuid::uuid4() . ".{$extension}";
            $oldfile = basename($angka->gambar);
            Storage::delete("belajar/angka/{$oldfile}");
            $request->gambar->storeAs('belajar/angka', $filename);
            $data['gambar'] = asset("/storage/belajar/angka/{$filename}");
        }

        if ($request->hasFile('sound')) {
            $extension = $request->sound->extension();
            $filename = Uuid::uuid4() . ".{$extension}";
            $oldfile = basename($angka->gambar);
            Storage::delete("belajar/angka/{$oldfile}");
            $request->sound->storeAs('belajar/angka', $filename);
            $data['sound'] = asset("/storage/belajar/angka/{$filename}");
        }



        $angka->fill($data);
        $angka->save();

        return redirect('/angka')->with('status', 'Data Berhasil diupdate');
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
