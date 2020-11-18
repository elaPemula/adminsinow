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
        if (request('list', 'single') == 'single') {
            $huruf = Huruf::paginate(1);
            $huruf[0]->increment('total_akses');
        } else {
            $huruf = Huruf::orderBy('huruf', 'ASC')->get();
        }

        return response()->json([
            'data' => $huruf,
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
