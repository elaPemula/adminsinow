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
        return response()->json([
            'data' => Membaca::all(),
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
