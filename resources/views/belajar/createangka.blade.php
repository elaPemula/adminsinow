@extends('master')
@section('content')

<div class="basic-form-area mg-b-15">
<div class="container-fluid">
<div class="row">
<div class="col-lg-12">
    <div class="sparkline12-list shadow-reset mg-t-3">
        <div class="sparkline12-hd">
            <div class="main-sparkline12-hd">
                <h1>Input Data Angka</h1>
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
                            <form method="POST" action="/angka" enctype="multipart/form-data">
                            @csrf
                                <div class="form-group-inner @error('angka') input-with-error @enderror" >
                                    <label for="angka">Angka</label>
                                    <input type="text" class="form-control" id="angka" placeholder="Masukkan Angka" name="angka" value="{{ old('angka')}}"/>
                                    @error('angka') <div class="invalid-feedback alert-danger">{{$message}}</div>@enderror
                                </div>
                                <div class="form-group-inner @error('tipe') input-with-error @enderror">
                                    <div class="row">
                                        <div class="col-lg-2">
                                            <label for="tipe" class="login2 pull-left pull-left-pro">Tipe</label>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-select-list">
                                                <select id="tipe" type="text" class="form-control custom-select-value" name="tipe">
                                                    @error('tipe') <div class="invalid-feedback alert-danger">{{$message}}</div>@enderror
                                                    <option value="satuan">Satuan</option>
                                                    <option value="puluhan">Puluhan</option>
                                                    <option value="ratusan">Ratusan</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group @error('gambar') input-with-error @enderror">
                                    <label for="gambar"  class="control-label">Gambar</label>
                                    <div>
                                        <img src="" id="profile-img-tag" width="200px" />
                                        <input type="file" name="gambar" id="gambar" class="form-control" placeholder="Document File..." value="{{ old('gambar')}}">
                                        @error('gambar') <div class="invalid-feedback alert-danger">{{$message}}</div>@enderror
                                    </div>
                                </div>
                                <div class="form-group-inner @error('tulisan') input-with-error @enderror">
                                    <label for="tulisan">Tulisan</label>
                                    <input type="text" name="tulisan" id="tulisan" class="form-control @error('tulisan') is-invalid @enderror" id="tulisan" placeholder="Masukkan Tulisan Bahasa Indonesia" name="tulisan" value="{{ old('tulisan')}}"/>
                                    @error('tulisan') <div class="invalid-feedback alert-danger">{{$message}}</div>@enderror
                                </div>
                                <div class="form-group @error('sound_id') input-with-error @enderror">
                                    <label for="sound_id" class="control-label">Sound ID</label>
                                    <div>
                                        <input type="file" name="sound_id" id="sound_id" class="form-control" placeholder="Document File..." value="{{ old('sound_id')}}">
                                        @error('sound_id') <div class="invalid-feedback alert-danger">{{$message}}</div>@enderror
                                    </div>
                                </div>
                                <div class="form-group @error('sound_en') input-with-error @enderror">
                                    <label for="sound_en" class="control-label">Sound EN</label>
                                    <div>
                                        <input type="file" name="sound_en" id="sound_en" class="form-control" placeholder="Document File..." value="{{ old('sound_en')}}">
                                        @error('sound_en') <div class="invalid-feedback alert-danger">{{$message}}</div>@enderror
                                    </div>
                                </div>
                                <div class="login-btn-inner">
                                    <div class="inline-remember-me">
                                        <button class="btn btn-custon-rounded-three pull-right btn-warning" type="submit">Simpan</button>
                                        <a class="btn btn-custon-rounded-three pull-right btn-danger btn-close" href="/angka">Cancel</a>
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
