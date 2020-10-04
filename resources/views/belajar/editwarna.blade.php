@extends('master')
@section('content')

<div class="basic-form-area mg-b-15">
<div class="container-fluid">
<div class="row">
<div class="col-lg-12">
    <div class="sparkline12-list shadow-reset mg-t-3">
        <div class="sparkline12-hd">
            <div class="main-sparkline12-hd">
                <h1>Edit Data Warna</h1>
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
                            <form method="POST" action="/warna/{{ $warna->id }}" enctype="multipart/form-data">
                            @method('patch')
                            @csrf
                                <div class="form-group-inner @error('nama') input-with-error @enderror">
                                    <label for="nama">Nama</label>
                                    <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" placeholder="Masukkan nama" name="nama" value="{{ $warna->nama}}">
                                    @error('nama') <div class="invalid-feedback alert-danger">{{$message}}</div>@enderror
                                </div>
                                <div class="form-group @error('gambar') input-with-error @enderror">
                                    <label for="gambar"  class="control-label">Gambar</label>
                                    <div>
                                        <input type="file" name="gambar" id="gambar" class="form-control" placeholder="Document File..." value="{{ $warna->gambar}}">
                                        @error('gambar') <div class="invalid-feedback alert-danger">{{$message}}</div>@enderror
                                    </div>
                                </div>
                                <div class="form-group-inner @error('tulisan_id') input-with-error @enderror">
                                    <label for="tulisan_id">Tulisan ID</label>
                                    <input type="text" name="tulisan_id" id="tulisan_id" class="form-control @error('tulisan_id') is-invalid @enderror" id="tulisan_id" placeholder="Masukkan Tulisan Bahasa Indonesia" name="tulisan_id" value="{{ $warna->tulisan_id}}"/>
                                    @error('tulisan_id') <div class="invalid-feedback alert-danger">{{$message}}</div>@enderror
                                </div>
                                <div class="form-group @error('sound_id') input-with-error @enderror">
                                    <label for="sound_id" class="control-label">Sound ID</label>
                                    <div>
                                        <input type="file" name="sound_id" id="sound_id" class="form-control" placeholder="Document File..." value="{{ $warna->sound_id}}">
                                        @error('sound_id') <div class="invalid-feedback alert-danger">{{$message}}</div>@enderror
                                    </div>
                                </div>
                                <div class="form-group-inner @error('tulisan_en') input-with-error @enderror">
                                    <label for="tulisan_en">Tulisan EN</label>
                                    <input type="text" name="tulisan_en" id="tulisan_en" class="form-control @error('tulisan_en') is-invalid @enderror" id="tulisan_en" placeholder="Masukkan Tulisan Bahasa Indonesia" name="tulisan_en" value="{{ $warna->tulisan_en}}"/>
                                    @error('tulisan_en') <div class="invalid-feedback alert-danger">{{$message}}</div>@enderror
                                </div>
                                <div class="form-group @error('sound_en') input-with-error @enderror">
                                    <label for="sound_en" class="control-label">Sound EN</label>
                                    <div>
                                        <input type="file" name="sound_en" id="sound_en" class="form-control" placeholder="Document File..." value="{{ $warna->sound_en}}">
                                        @error('sound_en') <div class="invalid-feedback alert-danger">{{$message}}</div>@enderror
                                    </div>
                                </div>
                                <div class="login-btn-inner">
                                    <div class="inline-remember-me">
                                        <button class="btn btn-custon-rounded-three pull-right btn-warning" type="submit">Simpan</button>
                                        <a class="btn btn-custon-rounded-three pull-right btn-danger btn-close" href="/warna">Cancel</a>
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
