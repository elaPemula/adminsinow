@extends('master')
@section('content')
<div class="basic-form-area mg-b-15">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="sparkline12-list shadow-reset mg-t-3">
                    <div class="sparkline12-hd">
                        <div class="main-sparkline12-hd">
                            <h1>Input Data Huruf</h1>
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
                                <div class="col-lg-12">
                                    <div class="basic-login-inner">
                                        <form method="POST" action="/huruf" enctype="multipart/form-data">
                                            @csrf
                                            <div class="form-group-inner @error('huruf') input-with-error @enderror">
                                                <label for="huruf">Huruf</label>
                                                <input type="text" class="form-control" id="huruf" placeholder="Masukkan Judul" name="huruf" value="{{ old('huruf')}}"/>
                                                @error('huruf') <div class="invalid-feedback alert-danger">{{$message}}</div>@enderror
                                            </div>
                                            <div class="row">
                                                <div class="login-btn-inner">
                                                </div>
                                            </div>
                                    </div>
                                </div>
                                <div class="form-group-inner @error('huruf') input-with-error @enderror">
                                    <div class="row">
                                        <div class="col-lg-2">
                                            <label for="tipe" class="login2 pull-left pull-left-pro">Tipe</label>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-select-list">
                                                <select id="tipe" type="text"
                                                    class="form-control custom-select-value  @error('tipe') is-invalid @enderror"
                                                    name="tipe" value="{{ old('tipe')}}">
                                                    <option>Satu Huruf</option>
                                                    <option>Dua Huruf</option>
                                                    <option>Tiga Huruf</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="form-group @error('huruf') input-with-error @enderror">
                                        <label class="pull-left" for="gambar">Gambar</label>
                                        <div>
                                            <input type="file" name="gambar" id="gambar" class="form-control" placeholder="Document File..." value="{{ old('gambar')}}">
                                            @error('gambar') <div class="invalid-feedback alert-danger">{{$message}}</div>@enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="form-group @error('huruf') input-with-error @enderror">
                                        <label class="pull-left" for="sound">Suara</label>
                                        <div>
                                            <input type="file" name="sound" id="sound" class="form-control" placeholder="Document File..." value="{{ old('sound')}}">
                                            @error('sound') <div class="invalid-feedback alert-danger">{{$message}}</div>@enderror
                                        </div>
                                    </div>
                                    <div class="inline-remember-me">
                                        <button class="btn btn-custon-rounded-three pull-right btn-warning"
                                            type="submit">Simpan</button>
                                    </div>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endsection
