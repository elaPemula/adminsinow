<?php

namespace App\Http\Controllers;

use App\Kritiksaran;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class KritiksaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kritiksaran = Kritiksaran::all();
        return view('kritiksaran', compact('kritiksaran'));
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
        $request->validate([
            'nama' => 'required',
            'email' => 'required',
            'komentar' => 'required',
        ]);

        Kritiksaran::create($data);
        return redirect('/kritiksaran')->with('status', 'Data Berhasil Ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Kritiksaran  $kritiksaran
     * @return \Illuminate\Http\Response
     */
    public function show(Kritiksaran $kritiksaran)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Kritiksaran  $kritiksaran
     * @return \Illuminate\Http\Response
     */
    public function edit(Kritiksaran $kritiksaran)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Kritiksaran  $kritiksaran
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kritiksaran $kritiksaran)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Kritiksaran  $kritiksaran
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kritiksaran $kritiksaran)
    {
        //
    }
}
