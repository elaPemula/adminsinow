<?php

namespace App\Http\Controllers\Api;

use App\Mewarna;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MewarnaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mewarna = Mewarna::paginate(5);
        $mewarna[0]->increment('total_akses');
        return response()->json([
            'data' => $mewarna,
            'message' => 'Sukses ambil data',
        ]);
    }

    public function show(Mewarna $mewarna)
    {
        return response()->json([
            'data' => $mewarna,
            'message' => 'Sukses ambil data',
        ]);
    }
}
