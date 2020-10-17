@extends('master')
@section('content')
<div class="basic-form-area mg-b-15">
<div class="container-fluid">
<div class="row">
<div class="col-lg-12">
    <div class="sparkline12-list shadow-reset mg-t-3">
        <div class="sparkline12-hd">
            <div class="main-sparkline12-hd">
                <h1>Input Data Menyanyi</h1>
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
                            <form method="POST" action="/menyanyi" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group-inner @error('judul') input-with-error @enderror">
                                <label for="judul">Judul</label>
                                <input type="text" class="form-control" id="judul" placeholder="Masukkan Judul" name="judul" value="{{ old('judul')}}"/>
                                @error('judul') <div class="invalid-feedback alert-danger">{{$message}}</div>@enderror
                            </div>
                            <div class="form-group @error('icon') input-with-error @enderror">
                                <label class="pull-left" for="icon">Icon</label>
                                <div>
                                    <input type="file" name="icon" id="icon" class="form-control" placeholder="Document File..."
                                        value="{{ old('icon')}}">
                                    @error('icon') <div class="invalid-feedback alert-danger">{{$message}}</div>@enderror
                                </div>
                            </div>

                            <div class="row">
                            <div class="login-btn-inner">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="form-group @error('sound') input-with-error @enderror">
                      <label class="pull-left" for="sound">Sound Lagu</label>
                      <div>
                        <input type="file" name="sound" id="sound" class="form-control" placeholder="Document File..." value="{{ old('sound')}}">
                         @error('sound') <div class="invalid-feedback alert-danger">{{$message}}</div>@enderror
                      </div>
                    </div>
                </div>
                    <div class="col-lg-12">
                        <div class="form-group @error('gambar') input-with-error @enderror">
                            <label class="pull-left" for="gambar">Gambar Lirik</label>
                            <div>
                                <img src="" id="profile-img-tag" width="200px" />
                                <input type="file" name="gambar" id="gambar" class="form-control" placeholder="Document File..." value="{{ old('gambar')}}">
                                @error('gambar') <div class="invalid-feedback alert-danger">{{$message}}</div>@enderror
                            </div>
                        </div>
                            <div class="inline-remember-me">
                                <button class="btn btn-custon-rounded-three pull-right btn-warning" type="submit">Simpan</button>
                                <a class="btn btn-custon-rounded-three pull-right btn-danger btn-close" href="/menyanyi">Cancel</a>
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
