@extends('master')
@section('content')

<div class="basic-form-area mg-b-15">
<div class="container-fluid">
<div class="row">
<div class="col-lg-12">
    <div class="sparkline12-list shadow-reset mg-t-3">
        <div class="sparkline12-hd">
            <div class="main-sparkline12-hd">
                <h1>Edit Data Soal Quiz</h1>
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
                            <form method="POST" action="/quiz/{{ $quiz->id }}" enctype="multipart/form-data">
                            @method('patch')
                            @csrf
                            <div class="form-group @error('pertanyaan') input-with-error @enderror">
                                    <label for="pertanyaan"  class="control-label">Pertanyaan</label>
                                    <div>
                                        <img src="" id="profile-img-tag" width="200px" />
                                        <input type="file" name="pertanyaan" id="pertanyaan" class="form-control" placeholder="Document File..." value="{{ $quiz->pertanyaan}}">

                                    </div>
                                </div>
                                <div class="form-group-inner @error('tipe') input-with-error @enderror">
                                    <div class="row">
                                        <div class="col-lg-2">
                                            <label for="tipe" class="login2 pull-left pull-left-pro">Tipe</label>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-select-list">
                                                <select id="tipe" type="text" class="form-control custom-select-value" name="tipe" value="{{ $quiz->tipe}}">
                                                    <option>Membaca</option>
                                                    <option>Menghitung</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group-inner @error('opsi_a') input-with-error @enderror">
                                <div class="col-md-6">
                                    <label for="opsi_a">opsi A</label>
                                    <input type="text" class="form-control" id="opsi_a" placeholder="" name="opsi_a"  value="{{ $quiz->opsi_a }}"/>

                                </div>
                                </div>
                                <div class="form-group-inner @error('opsi_b') input-with-error @enderror">
                                <div class="col-md-6">
                                    <label for="opsi_b">opsi B</label>
                                    <input type="text" class="form-control" id="opsi_b" placeholder="" name="opsi_b"  value="{{ $quiz->opsi_b }}"/>

                                </div>
                                </div>
                                <div class="form-group-inner @error('opsi_c') input-with-error @enderror">
                                <div class="col-md-6">
                                    <label for="opsi_c">opsi C</label>
                                    <input type="text" class="form-control" id="opsi_c" placeholder="" name="opsi_c"  value="{{ $quiz->opsi_c }}"/>
                                </div>
                                </div>
                                <div class="form-group-inner @error('opsi_d') input-with-error @enderror">
                                <div class="col-md-6">
                                    <label for="opsi_d">opsi D</label>
                                    <input type="text" class="form-control" id="opsi_d" placeholder="" name="opsi_d"  value="{{ $quiz->opsi_d }}"/>
                                </div>
                                </div>
                                <div class="form-group-inner @error('jawaban') input-with-error @enderror">
                                    <div class="row">
                                        <div class="col-lg-2">
                                            <label class="login2 pull-right pull-right-pro">Jawaban</label>
                                        </div>
                                <div class="col-lg-12">
                                            <div class="form-select-list">
                                                <input type="text" class="form-control custom-select-value" name="jawaban" value="{{ $quiz->jawaban }}">
                                                     @error('jawaban') <div class="invalid-feedback alert-danger">{{$message}}</div>@enderror
                                                </input>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="login-btn-inner">
                                    <div class="inline-remember-me">
                                        <button class="btn btn-sm btn-primary pull-right login-submit-cs" type="submit">Simpan</button>
                                        <a class="btn btn-custon-rounded-three pull-right btn-danger btn-close" href="/quiz">Cancel</a>
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
