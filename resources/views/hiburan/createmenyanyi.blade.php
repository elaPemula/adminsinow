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
                @if ($errors->any())
                    <div class="alert alert-danger pull-left">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div class="row">
                    <div class="col-lg-12">
                        <div class="basic-login-inner">
                            <form method="POST" action="/menyanyi" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group-inner  @error('judul') input-with-error @enderror ">
                                <label for="judul">Judul</label>
                                <input type="text" class="form-control" id="judul" placeholder="Masukkan Judul" name="judul" value="{{ old('judul')}}"/>
                            </div>
                            <div class="row">
                            <div class="login-btn-inner">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="form-group">
                      <label class="pull-left" for="suara">Suara</label>
                      <div>
                        <input type="file" name="suara" id="suara" class="form-control" placeholder="Document File..." value="{{ old('suara')}}">
                      </div>
                    </div>
                </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <label class="pull-left" for="gambar">Gambar</label>
                            <div>
                                <input type="file" name="gambar" id="gambar" class="form-control" placeholder="Document File..." value="{{ old('gambar')}}">
                            </div>
                        </div>
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
@endsection