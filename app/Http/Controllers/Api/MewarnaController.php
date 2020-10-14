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
        return response()->json([
            'data' => Mewarna::paginate(5),
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
