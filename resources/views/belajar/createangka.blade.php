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
                    <div class="col-lg-12">
                        <div class="basic-login-inner">
                            <form method="POST" action="/menyanyi">
                            @csrf
                            <div class="form-group-inner">
                                <label for="angka">Angka</label>
                                <input type="text" class="form-control @error('angka') is-invalid @enderror" id="angka" placeholder="Masukkan angka" name="angka" value="{{ old('angka')}}"/>
                            </div>
                            <div class="row">
                            <div class="login-btn-inner">
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="form-group">
                      <label class="pull-left" for="gambar">Gambar</label>
                      <div>
                        <input type="file" class="form-control" placeholder="Document File..." data-validate="required">
                      </div>
                    </div>
                </div>
                <div class="form-group-inner">
                    <label for="tulisan">Tulisan</label>
                    <input type="text" class="form-control @error('tulisan') is-invalid @enderror" id="tulisan" placeholder="Masukkan tulisan" name="tulisan" value="{{ old('tulisan')}}"/>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="form-group">
                        <label class="pull-left" for="sound_id">sound_id Indonesia</label>
                        <div>
                            <input type="file" id="sound_id" class="form-control"  namae="sound_id" placeholder="Document File..." data-validate="required">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="form-group">
                        <label class="pull-left" for="sound_en">sound_id English</label>
                        <div>
                            <input type="file" id="sound_en" class="form-control"  namae="sound_en" placeholder="Document File..." data-validate="required">
                        </div>
                    </div>
                </div>
                <div class="form-group-inner">
                    <div class="row">
                        <div class="col-lg-2">
                            <label class="login2 pull-right pull-right-pro">Tipe</label>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-select-list">
                                <select type="text" class="form-control custom-select-value  @error('tipe') is-invalid @enderror" name="tipe" value="{{ old('tipe')}}">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="inline-remember-me">
                            <button class="btn btn-custon-rounded-three pull-right btn-warning" type="submit">Simpan</button>
                        </div>
                    </div>
                    </div>     
                </div>
            </div>
        </div>
    </div>
</div>
@endsection