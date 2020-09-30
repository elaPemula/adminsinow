@extends('master')
@section('content')

<div class="basic-form-area mg-b-15">
<div class="container-fluid">
<div class="row">
<div class="col-lg-12">
    <div class="sparkline12-list shadow-reset mg-t-3">
        <div class="sparkline12-hd">
            <div class="main-sparkline12-hd">
                <h1>Input Data Membaca</h1>
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
                            <form method="POST" action="/membaca" enctype="multipart/form-data">
                            @csrf
                                <div class="form-group-inner">
                                    <label for="membaca">Nama</label>
                                    <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" placeholder="Masukkan Nama" name="nama" value="{{ old('nama')}}"/>
                                </div>
                                <div class="form-group-inner">
                                    <div class="row">
                                        <div class="col-lg-2">
                                            <label for="tipe" class="login2 pull-left pull-left-pro">Tipe</label>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-select-list">
                                                <select id="tipe" type="text" class="form-control custom-select-value @error('tipe') is-invalid @enderror" name="tipe" value="{{ old('tipe')}}">
                                                    <option>Hewan</option>
                                                    <option>Buah dan Sayur</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="gambar"  class="control-label">Gambar</label>
                                    <div>
                                        <input type="file" name="gambar" id="gambar" class="form-control" placeholder="Document File..." value="{{ old('gambar')}}">
                                    </div>
                                </div>
                                <div class="form-group-inner">
                                    <label for="tulisan_id">Tulisan ID</label>
                                    <input type="text" name="tulisan_id" id="tulisan_id" class="form-control @error('tulisan_id') is-invalid @enderror" id="tulisan_id" placeholder="Masukkan Tulisan Bahasa Indonesia" name="tulisan_id" value="{{ old('tulisan_id')}}"/>
                                </div>
                                <div class="form-group">
                                    <label for="sound_id" class="control-label">Sound ID</label>
                                    <div>
                                        <input type="file" name="sound_id" id="sound_id" class="form-control" placeholder="Document File..." value="{{ old('sound_id')}}">
                                    </div>
                                </div>
                                <div class="form-group-inner">
                                    <label for="tulisan_en">Tulisan EN</label>
                                    <input type="text" name="tulisan_en" id="tulisan_en" class="form-control @error('tulisan_en') is-invalid @enderror" id="tulisan_en" placeholder="Masukkan Tulisan Bahasa Indonesia" name="tulisan_en" value="{{ old('tulisan_en')}}"/>
                                </div>
                                <div class="form-group">
                                    <label for="sound_en" class="control-label">Sound EN</label>
                                    <div>
                                        <input type="file" name="sound_en" id="sound_en" class="form-control" placeholder="Document File..." value="{{ old('sound_en')}}">
                                    </div>
                                </div>
                                <div class="login-btn-inner">
                                    <div class="inline-remember-me">
                                        <button class="btn btn-custon-rounded-three pull-right btn-warning" type="submit">Simpan</button>
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