@extends('master')
@section('content')

<div class="basic-form-area mg-b-15">
<div class="container-fluid">
<div class="row">
<div class="col-lg-12">
    <div class="sparkline12-list shadow-reset mg-t-3">
        <div class="sparkline12-hd">
            <div class="main-sparkline12-hd">
                <h1>Update Data Soal Quiz Menghitung</h1>
                <div class="sparkline8-outline-icon">
                    <span class="sparkline8-collapse-link"><i class="fa fa-chevron-up"></i></span>
                    <span><i class="fa fa-wrench"></i></span>
                    <span class="sparkline8-collapse-close"><i class="fa fa-times"></i></span>
                </div>
            </div>
        </div>
        <div class="sparkline8-graph">
            <div class="basic-login-form-ad">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="basic-login-inner">
                            <form method="POST" action="/counts">
                            @csrf
                                <div class="form-group-inner">
                                    <label for="pertanyaan">Pertanyaan</label>
                                    <input type="text" class="form-control @error('pertanyaan') is-invalid @enderror" id="pertanyaan" placeholder="Masukkan Pertanyaan" name="pertanyaan" value="{{ $count->pertanyaan}}"/>
                                </div>
                                <div class="form-group-inner">
                                <div class="col-md-6">
                                    <label for="opsiA">opsi A</label>
                                    <input type="text" class="form-control @error('opsiA') is-invalid @enderror" id="opsiA" placeholder="" name="opsiA"  value="{{ $count->opsiA }}"/>
                                </div>
                                </div>
                                <div class="form-group-inner">
                                <div class="col-md-6">
                                    <label for="opsiB">opsi B</label>
                                    <input type="text" class="form-control @error('opsiB') is-invalid @enderror" id="opsiB" placeholder="" name="opsiB"  value="{{ $count->opsiB }}"/>
                                </div>
                                </div>
                                <div class="form-group-inner">
                                <div class="col-md-6">
                                    <label for="opsiC">opsi C</label>
                                    <input type="text" class="form-control @error('opsiC') is-invalid @enderror" id="opsiC" placeholder="" name="opsiC"  value="{{ $count->opsiC }}"/>
                                </div>
                                </div>
                                <div class="form-group-inner">
                                <div class="col-md-6">
                                    <label for="opsiD">opsi D</label>
                                    <input type="text" class="form-control @error('opsiD') is-invalid @enderror" id="opsiD" placeholder="" name="opsiD"  value="{{ $count->opsiD }}"/>
                                </div>
                                </div>
                                <div class="form-group-inner">
                                    <div class="row">
                                        <div class="col-lg-2">
                                            <label class="login2 pull-right pull-right-pro">Jawaban</label>
                                        </div>
                                <div class="col-lg-12">
                                            <div class="form-select-list">
                                                <select type="text" class="form-control custom-select-value  @error('jawaban') is-invalid @enderror" name="jawaban" value="{{ $count->jawaban }}">
                                                    <option>A</option>
                                                    <option>B</option>
                                                    <option>C</option>
                                                    <option>D</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="login-btn-inner">
                                    <div class="inline-remember-me">
                                        <button class="btn btn-sm btn-primary pull-right login-submit-cs" type="submit">Simpan</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection