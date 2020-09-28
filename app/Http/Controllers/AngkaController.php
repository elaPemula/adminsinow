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
        //
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
