<?php

namespace App\Http\Controllers;

use App\Count;
use Illuminate\Http\Request;

class CountsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $counts = Count::all();
        return view('quiz.readhitung',  compact('counts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('quiz.createhitung');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Count::create([
          //  'pertanyaan' => $request->pertanyaan,
            //'opsiA' => $request->opsiA,
           // 'opsiB' => $request->opsiB,
          //  'opsiC' => $request->opsiC,
           // 'opsiD' => $request->opsiD,
            //'jawaban' => $request->jawaban,
        //]);
        $request->validate([
            'pertanyaan' => 'required',
            'opsiA' => 'required',
            'opsiB' => 'required',
            'opsiC' => 'required',
            'opsiD' => 'required',
            'jawaban' => 'required',
        ]);

        Count::create($request->all());
        return redirect('/counts')->with('status', 'Data Berhasil Ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Count  $count
     * @return \Illuminate\Http\Response
     */
    public function show(Count $count)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Count  $count
     * @return \Illuminate\Http\Response
     */
    public function edit(Count $count)
    {
        return view('quiz.edithitung', compact('count'));
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Count  $count
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Count $count)
    {
        $request->validate([
            'pertanyaan' => 'required',
            'opsiA' => 'required',
            'opsiB' => 'required',
            'opsiC' => 'required',
            'opsiD' => 'required',
            'jawaban' => 'required',
        ]);
        Count::where('id', $count->id)
        ->update([
            'pertanyaan' => $request->pertanyaan,
            'opsiA' => $request->opsiA,
            'opsiB' => $request->opsiB,
            'opsiC' => $request->opsiC,
            'opsiD' => $request->opsiD,
            'jawaban' => $request->jawaban,
        ]);
        return redirect('/counts')->with('status', 'Data Berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Count  $count
     * @return \Illuminate\Http\Response
     */
    public function destroy(Count $count)
    {
        Count::destroy($count->id);
        return redirect('/counts')->with('status', 'Data Berhasil dihapus');
    }
}
