<?php

namespace App\Http\Controllers\Api;

use App\Warna;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class WarnaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $warna = Warna::paginate(1);
        $warna[0]->increment('total_akses');
        return response()->json([
            'data' => $warna,
            'message' => 'Sukses ambil data',
        ]);
    }

    public function show(Warna $warna)
    {
        return response()->json([
            'data' => $warna,
            'message' => 'Sukses ambil data',
        ]);
    }
}
