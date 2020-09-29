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
        return view('hiburan.readmenyanyi', compact('menyanyi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('hiburan.createmenyanyi');
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
            'suara' => 'required|mimes:mp3',
            'gambar' => 'required|image:svg,png,jpg',
        ]);
            
            $data = $request->except(['suara', 'gambar']);
            $filename = strtotime(date('Y-m-d H:i:s'));
            $extension = $request->suara->extension();
            $filename = "{$filename}.{$extension}";
            $request->suara->storeAs('hiburan/menyanyi', $filename);
            $data['suara'] = asset("/storage/hiburan/menyanyi/{$filename}");
            
            $filename = strtotime(date('Y-m-d H:i:s'));
            $extension = $request->gambar->extension();
            $filename = "{$filename}.{$extension}";
            $request->gambar->storeAs('hiburan/menyanyi', $filename);
            $data['gambar'] = asset("/storage/hiburan/menyanyi/{$filename}");

        Menyanyi::create($data);
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
        return view('hiburan.editmenyanyi', compact('menyanyi'));
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
        $request->validate([
            'judul' => 'required',
            'suara' => 'required|mimes:mp3',
            'gambar' => 'required|image:svg,png,jpeg',
        ]);
            $data = $request->except(['suara', 'gambar']);
            $filename = strtotime(date('Y-m-d H:i:s'));
            $extension = $request->suara->extension();
            $filename = "{$filename}.{$extension}";
            $request->suara->storeAs('hiburan/menyanyi', $filename);
            $data['suara'] = asset("/storage/hiburan/menyanyi/{$filename}");
            
            $filename = strtotime(date('Y-m-d H:i:s'));
            $extension = $request->gambar->extension();
            $filename = "{$filename}.{$extension}";
            $request->gambar->storeAs('hiburan/menyanyi', $filename);
            $data['gambar'] = asset("/storage/hiburan/menyanyi/{$filename}");
            
        Menyanyi::where('id', $menyanyi->id)
            ->update([
                'judul' => $request->judul,
                'suara' => $request->store(suara),
                'gambar' => $request->store(gambar),
            ]);
        
            
            
         return redirect('/menyanyi')->with('status', 'Data Berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Menyanyi  $menyanyi
     * @return \Illuminate\Http\Response
     */
    public function destroy(Menyanyi $menyanyi)
    {
        Menyanyi::destroy($menyanyi->id);
        return redirect('/menyanyi')->with('status', 'Data Berhasil dihapus');
    }
}
