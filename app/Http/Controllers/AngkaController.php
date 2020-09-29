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
            'gambar' => 'required|image:svg,png,jpg',
            'tulisan' => 'required',
            'sound_id' => 'required|mimes:mp3',
            'sound_en' => 'required|mimes:mp3',
            'tipe' => 'required',
        ]);

            $data = $request->except(['gambar', 'sound_id', 'sound_en']);

            $filename = strtotime(date('Y-m-d H:i:s'));
            $extension = $request->gambar->extension();
            $filename = "{$filename}.{$extension}";
            $request->gambar->storeAs('belajar/angka', $filename);
            $data['gambar'] = asset("/storage/belajar/angka/{$filename}");

            $filename = strtotime(date('Y-m-d H:i:s'));
            $extension = $request->sound_id->extension();
            $filename = "{$filename}.{$extension}";
            $request->sound_id->storeAs('belajar/angka', $filename);
            $data['sound_id'] = asset("/storage/belajar/angka/{$filename}");
            
            $filename = strtotime(date('Y-m-d H:i:s'));
            $extension = $request->sound_en->extension();
            $filename = "{$filename}.{$extension}";
            $request->sound_en->storeAs('belajar/angka', $filename);
            $data['sound_en'] = asset("/storage/belajar/angka/{$filename}");


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
            'gambar' => 'required|image:svg,png,jpg',
            'tulisan' => 'required',
            'sound_id' => 'required|mimes:mp3',
            'sound_en' => 'required|mimes:mp3',
            'tipe' => 'required',
        ]);

            $data = $request->except(['gambar', 'sound_id', 'sound_en']);

            $filename = strtotime(date('Y-m-d H:i:s'));
            $extension = $request->gambar->extension();
            $filename = "{$filename}.{$extension}";
            $request->gambar->storeAs('belajar/angka', $filename);
            $data['gambar'] = asset("/storage/belajar/angka/{$filename}");

            $filename = strtotime(date('Y-m-d H:i:s'));
            $extension = $request->sound_id->extension();
            $filename = "{$filename}.{$extension}";
            $request->sound_id->storeAs('belajar/angka', $filename);
            $data['sound_id'] = asset("/storage/belajar/angka/{$filename}");
            
            $filename = strtotime(date('Y-m-d H:i:s'));
            $extension = $request->sound_en->extension();
            $filename = "{$filename}.{$extension}";
            $request->sound_en->storeAs('belajar/angka', $filename);
            $data['sound_en'] = asset("/storage/belajar/angka/{$filename}");

        Angka::where('id', $angka->id)
            ->update([
                'angka' => $request->angka,
                'gambar' => $request->store($filename),
                'tulisan' => $request->tulisan,
                'sound_id' => $request->store($filename),
                'sound_en' => $request->store($filename),
                
            ]);
        
        return redirect('/angka')->with('status', 'Data Berhasil Ditambahkan!');
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
