<?php

namespace App\Http\Controllers\Api;

use App\Kritiksaran;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class KritiksaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        return response()->json([
            'data' => Kritiksaran::all(),
            'message' => 'Sukses ambil data',
        ]);
    }


    public function store(Kritiksaran $kritiksaran)
    {
        $kritiksaran = Kritiksaran::All();

        return response()->json([
            'data' => $kritiksaran,
            'message' => 'Sukses ambil data'
        ]);
    }

}

