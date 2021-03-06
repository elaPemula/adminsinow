@extends('master')
@section('content')

<div class="basic-form-area mg-b-15">
<div class="container-fluid">
<div class="row">
<div class="col-lg-12">
    <div class="sparkline12-list shadow-reset mg-t-3">
        <div class="sparkline12-hd">
            <div class="main-sparkline12-hd">
                <h1>Edit Data Angka</h1>
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
                            <form method="POST" action="/angka/{{ $angka->id }}" enctype="multipart/form-data">
                            @method('patch')
                            @csrf
                                <div class="form-group-inner @error('angka') input-with-error @enderror">
                                    <label for="angka">Angka</label>
                                    <input type="text" class="form-control" id="angka" placeholder="Masukkan Angka" name="angka" value="{{ $angka->angka}}""/>
                                    @error('angka') <div class="invalid-feedback alert-danger">{{$message}}</div>@enderror
                                </div>
                                <div class="form-group-inner @error('tipe') input-with-error @enderror">
                                    <div class="row">
                                        <div class="col-lg-2">
                                            <label for="tipe" class="login2 pull-left pull-left-pro">Tipe</label>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-select-list">
                                                <select id="tipe" type="text" class="form-control custom-select-value" name="tipe" value="{{ $angka->tipe}}">
                                                    @error('tipe') <div class="invalid-feedback alert-danger">{{$message}}</div>@enderror
                                                    <option>Satuan</option>
                                                    <option>Puluhan</option>
                                                    <option>Ratusan</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group @error('gambar') input-with-error @enderror">
                                    <label for="gambar"  class="control-label">Gambar</label>
                                    <div>
                                        <img src="" id="profile-img-tag" width="200px" />
                                        <input type="file" name="gambar" id="gambar" class="form-control" placeholder="Document File..." value="{{ $angka->gambar}}">

                                    </div>
                                </div>
                                <div class="form-group-inner @error('tulisan') input-with-error @enderror">
                                    <label for="tulisan">Tulisan</label>
                                    <input type="text" name="tulisan" id="tulisan" class="form-control" id="tulisan" placeholder="Masukkan Tulisan Bahasa Indonesia" name="tulisan" value="{{ $angka->tulisan}}"/>

                                </div>
                                <div class="form-group @error('sound') input-with-error @enderror">
                                    <label for="sound" class="control-label">Sound ID</label>
                                    <div>
                                        <input type="file" name="sound" id="sound" class="form-control" placeholder="Document File..." value="{{ $angka->sound}}">

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
