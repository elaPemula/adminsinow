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
        return response()->json([
            'data' => Quiz::paginate(1),
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
