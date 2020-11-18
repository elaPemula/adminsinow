<?php

namespace App\Http\Controllers\Api;

use App\Membaca;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MembacaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $membaca = Membaca::where('tipe', request('tipe'))->paginate(1);
        $membaca[0]->increment('total_akses');
        return response()->json([
            'data' => $membaca->withQueryString(),
            'message' => 'Sukses ambil data',
        ]);
    }

    public function show(Membaca $membaca)
    {
        return response()->json([
            'data' => $membaca,
            'message' => 'Sukses ambil data',
        ]);
    }
}
