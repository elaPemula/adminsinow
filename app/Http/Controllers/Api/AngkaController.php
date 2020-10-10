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
        return response()->json([
            'data' => Angka::paginate(1),
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
