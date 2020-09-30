<?php

namespace App\Http\Controllers;

use App\Warna;
use Illuminate\Http\Request;

class WarnaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $warna = Warna::all();
        return view('belajar.readwarna',  compact('warna'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('belajar.createwarna');
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
        ]);

            $data = $request->except(['gambar', 'sound_id', 'sound_en']);

            $filename = strtotime(date('Y-m-d H:i:s'));
            $extension = $request->gambar->extension();
            $filename = "{$filename}.{$extension}";
            $request->gambar->storeAs('belajar/warna', $filename);
            $data['gambar'] = asset("/storage/belajar/warna/{$filename}");

            $filename = strtotime(date('Y-m-d H:i:s'));
            $extension = $request->sound_id->extension();
            $filename = "{$filename}.{$extension}";
            $request->sound_id->storeAs('belajar/warna', $filename);
            $data['sound_id'] = asset("/storage/belajar/warna/{$filename}");
            
            $filename = strtotime(date('Y-m-d H:i:s'));
            $extension = $request->sound_en->extension();
            $filename = "{$filename}.{$extension}";
            $request->sound_en->storeAs('belajar/warna', $filename);
            $data['sound_en'] = asset("/storage/belajar/warna/{$filename}");


        Warna::create($data);
        return redirect('/warna')->with('status', 'Data Berhasil Ditambahkan!');
   
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Warna  $warna
     * @return \Illuminate\Http\Response
     */
    public function show(Warna $warna)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Warna  $warna
     * @return \Illuminate\Http\Response
     */
    public function edit(Warna $warna)
    {
        return view('belajar.editwarna', compact('warna'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Warna  $warna
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Warna $warna)
    {
        $request->validate([
            'nama' => 'required',
            'gambar' => 'required|image:svg,png,jpg',
            'tulisan_id' => 'required',
            'sound_id' => 'required|mimes:mp3',
            'tulisan_en' => 'required',
            'sound_en' => 'required|mimes:mp3',
        ]);

            $data = $request->except(['gambar', 'sound_id', 'sound_en']);

            $filename = strtotime(date('Y-m-d H:i:s'));
            $extension = $request->gambar->extension();
            $filename = "{$filename}.{$extension}";
            $request->gambar->storeAs('belajar/warna', $filename);
            $data['gambar'] = asset("/storage/belajar/warna/{$filename}");

            $filename = strtotime(date('Y-m-d H:i:s'));
            $extension = $request->sound_id->extension();
            $filename = "{$filename}.{$extension}";
            $request->sound_id->storeAs('belajar/warna', $filename);
            $data['sound_id'] = asset("/storage/belajar/warna/{$filename}");
            
            $filename = strtotime(date('Y-m-d H:i:s'));
            $extension = $request->sound_en->extension();
            $filename = "{$filename}.{$extension}";
            $request->sound_en->storeAs('belajar/warna', $filename);
            $data['sound_en'] = asset("/storage/belajar/warna/{$filename}");

        Warna::where('id', $warna->id)
            ->update([
                'nama' => $request->nama,
                'gambar' => $request->store($filename),
                'tulisan_id' => $request->tulisan_id,
                'sound_id' => $request->store($filename),
                'tulisan_en' => $request->tulisan_en,
                'sound_en' => $request->store($filename),
                
            ]);
        
        return redirect('/warna')->with('status', 'Data Berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Warna  $warna
     * @return \Illuminate\Http\Response
     */
    public function destroy(Warna $warna)
    {
        Warna::destroy($warna->id);
        return redirect('/warna')->with('status', 'Data Berhasil dihapus');
    }
}
