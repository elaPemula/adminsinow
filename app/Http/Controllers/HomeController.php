<?php

namespace App\Http\Controllers;

use App\Angka;
use App\Huruf;
use App\Kritiksaran;
use App\Membaca;
use App\Warna;
use App\Menyanyi;
use App\Mewarna;
use App\Quiz;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $totalAngka = Angka::sum('total_akses');
        $dataAngka = Angka::count('id');

        $totalHuruf = Huruf::sum('total_akses');
        $dataHuruf = Huruf::count('id');

        $totalMembaca = Membaca::sum('total_akses');
        $dataMembaca = Membaca::count('id');

        $totalWarna = Warna::sum('total_akses');
        $dataWarna= Warna::count('id');

        $totalMenyanyi = Menyanyi::sum('total_akses');
        $dataMenyanyi = Menyanyi::count('id');

        $totalMewarna = Mewarna::sum('total_akses');
        $dataMewarna = Mewarna::count('id');

        $totalQuiz = Quiz::sum('total_akses');
        $dataQuiz = Quiz::count('id');

        $totalKritiksaran = Kritiksaran::sum('total_akses');
        $dataKritiksaran = Kritiksaran::count('id');

        return view('home', [
            'total_angka' => $totalAngka,
            'data_angka' => $dataAngka,

            'total_huruf' => $totalHuruf,
            'data_huruf' => $dataHuruf,

            'total_membaca' => $totalMembaca,
            'data_membaca' => $dataMembaca,

            'total_warna' => $totalWarna,
            'data_warna' => $dataWarna,

            'total_menyanyi' => $totalMenyanyi,
            'data_menyanyi' => $dataMenyanyi,

            'total_mewarna' => $totalMewarna,
            'data_mewarna' => $dataMewarna,

            'total_quiz' => $totalQuiz,
            'data_quiz' => $dataQuiz,

            'total_kritiksaran' => $totalKritiksaran,
            'data_kritiksaran' => $dataKritiksaran,
        ]);
    }
}
