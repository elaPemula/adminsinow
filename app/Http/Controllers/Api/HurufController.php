<?php

namespace App\Http\Controllers\Api;

use App\Huruf;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HurufController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json([
            'data' => Huruf::where('tipe', request('tipe'))->paginate(1),
            'message' => 'Sukses ambil data',
        ]);
    }

    public function show(Huruf $huruf)
    {
        return response()->json([
            'data' => $huruf,
            'message' => 'Sukses ambil data',
        ]);
    }
}
