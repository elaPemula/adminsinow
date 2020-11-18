<?php

namespace App\Http\Controllers\Api;

use App\Menyanyi;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MenyanyiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $menyanyi = Menyanyi::paginate(4);
        $menyanyi[0]->increment('total_akses');
        return response()->json([
            'data' => $menyanyi,
            'message' => 'Sukses ambil data',
        ]);
    }

    public function show(Menyanyi $menyanyi)
    {
        return response()->json([
            'data' => $menyanyi,
            'message' => 'Sukses ambil data',
        ]);
    }
}
