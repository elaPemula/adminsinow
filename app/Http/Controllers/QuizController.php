<?php

namespace App\Http\Controllers;

use App\Quiz;
use Illuminate\Http\Request;

class QuizController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $quiz = Quiz::all();
        return view('quiz.readquiz',  compact('quiz'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('quiz.createquiz');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'pertanyaan' => 'required',
            'tipe' => 'required',
            'opsi_a' => 'required',
            'opsi_b' => 'required',
            'opsi_c' => 'required',
            'opsi_d' => 'required',
            'jawaban' => 'required',
        ]);
        $data = $request->except(['pertanyaan']);

            $filename = strtotime(date('Y-m-d H:i:s'));
            $extension = $request->pertanyaan->extension();
            $filename = "{$filename}.{$extension}";
            $request->pertanyaan->storeAs('quiz/quiz', $filename);
            $data['pertanyaan'] = asset("/storage/quiz/quiz'/{$filename}");

        Quiz::create($data);
        return redirect('/quiz')->with('status', 'Data Berhasil Ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Quiz  $quiz
     * @return \Illuminate\Http\Response
     */
    public function show(Quiz $quiz)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Quiz  $quiz
     * @return \Illuminate\Http\Response
     */
    public function edit(Quiz $quiz)
    {
        return view('quiz.editquiz', compact('quiz'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Quiz  $quiz
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Quiz $quiz)
    {
        $request->validate([
            'pertanyaan' => 'required',
            'tipe' => 'required',
            'opsi_a' => 'required',
            'opsi_b' => 'required',
            'opsi_c' => 'required',
            'opsi_d' => 'required',
            'jawaban' => 'required',
        ]);
        
        $data = $request->except(['pertanyaan']);

        $filename = strtotime(date('Y-m-d H:i:s'));
        $extension = $request->pertanyaan->extension();
        $filename = "{$filename}.{$extension}";
        $request->pertanyaan->storeAs('quiz/quiz', $filename);
        $data['pertanyaan'] = asset("/storage/quiz/quiz'/{$filename}");
        Quiz::where('id', $quiz->id)
        ->update([
            'pertanyaan' => $request->pertanyaan->store($filename),
            'tipe' => $request->tipe,
            'opsi_a' => $request->opsi_a,
            'opsi_b' => $request->opsi_b,
            'opsi_c' => $request->opsi_c,
            'opsi_d' => $request->opsi_d,
            'jawaban' => $request->jawaban,
        ]);
        return redirect('/quiz')->with('status', 'Data Berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Quiz  $quiz
     * @return \Illuminate\Http\Response
     */
    public function destroy(Quiz $quiz)
    {
        Quiz::destroy($quiz->id);
        return redirect('/quiz')->with('status', 'Data Berhasil dihapus');
    }
}
