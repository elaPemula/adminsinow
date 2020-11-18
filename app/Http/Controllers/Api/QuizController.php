<?php

namespace App\Http\Controllers\Api;

use App\Quiz;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class QuizController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $quiz = Quiz::where('tipe', request('tipe'))->paginate(1);
        $quiz[0]->increment('total_akses');
        return response()->json([
            'data' => $quiz->withQueryString(),
            'message' => 'Sukses ambil data',
        ]);
    }


    public function show(Quiz $quiz)
    {
        return response()->json([
            'data' => $quiz,
            'message' => 'Sukses ambil data',
        ]);
    }
}
