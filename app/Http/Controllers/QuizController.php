<?php

namespace App\Http\Controllers;

use App\Quiz;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Ramsey\Uuid\Uuid;

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

        $extension = $request->pertanyaan->extension();
        $filename = Uuid::uuid4() . ".{$extension}";
        $request->pertanyaan->storeAs('quiz/quiz', $filename);
        $data['pertanyaan'] = asset("/storage/public/quiz/quiz/{$filename}");

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
            'pertanyaan' => '',
            'tipe' => 'required',
            'opsi_a' => 'required',
            'opsi_b' => 'required',
            'opsi_c' => 'required',
            'opsi_d' => 'required',
            'jawaban' => 'required',
        ]);
        $data = $request->except(['pertanyaan']);
        
        if ($request->hasFile('pertanyaan')) {
        $extension = $request->pertanyaan->extension();
        $filename = Uuid::uuid4() . ".{$extension}";
        $oldfile = basename($quiz->gambar);
        Storage::delete("belajar/quiz/{$oldfile}");
        $request->pertanyaan->storeAs('quiz/quiz', $filename);
        $data['pertanyaan'] = asset("/storage/public/quiz/quiz/{$filename}");
        }

        $quiz->fill($data);
        $quiz->save();
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
