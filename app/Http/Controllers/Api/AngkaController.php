<?php

namespace App\Http\Controllers\Api;

use App\Angka;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AngkaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $angka = Angka::where('tipe', request('tipe'))->paginate(1);
        $angka[0]->increment('total_akses');
        return response()->json([
            'data' => $angka->withQueryString(),
            'message' => 'Sukses ambil data',
        ]);
    }

    public function show(Angka $angka)
    {
        return response()->json([
            'data' => $angka,
            'message' => 'Sukses ambil data',
        ]);
    }
}
