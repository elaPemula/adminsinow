@extends('master')
@section('content')

<div class="basic-form-area mg-b-15">
<div class="container-fluid">
<div class="row">
<div class="col-lg-12">
    <div class="sparkline12-list shadow-reset mg-t-3">
        <div class="sparkline12-hd">
            <div class="main-sparkline12-hd">
                <h1>Input Data Hewan Buah dan Sayur</h1>
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
                            <form method="POST" action="/warna">
                            @csrf
                                <div class="form-group-inner">
                                    <label for="keterangan">Nama </label>
                                    <input type="text" class="form-control @error('pertanyaan') is-invalid @enderror" id="pertanyaan" placeholder="Masukkan Keterangan" name="pertanyaan" value="{{ old('pertanyaan')}}"/>
                                </div>
                                <div class="col-lg-12">
                                            <div class="form-select-list">
                                                <select type="text" class="form-control custom-select-value  @error('tipe') is-invalid @enderror" name="tipe" value="{{ old('tipe')}}">
                                                    <option>Hewan</option>
                                                    <option>Buah dan Sayur</option>
                                                </select>
                                            </div>
                                        </div>
                                <div class="form-group">
                                    <label class="control-label">Gambar</label>
                                    <div>
                                        <input type="file" class="form-control" placeholder="Document File..." data-validate="required">
                                    </div>
                                </div>
                                <div class="form-group-inner">
                                    <label for="keterangan">Tulisan ID</label>
                                    <input type="text" class="form-control @error('pertanyaan') is-invalid @enderror" id="pertanyaan" placeholder="Masukkan Keterangan" name="pertanyaan" value="{{ old('pertanyaan')}}"/>
                                </div>
                                <div class="form-group">
                                    <label class="control-label">Sound ID</label>
                                    <div>
                                        <input type="file" class="form-control" placeholder="Document File..." data-validate="required">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label">Sound EN</label>
                                    <div>
                                        <input type="file" class="form-control" placeholder="Document File..." data-validate="required">
                                    </div>
                                </div>
                                <div class="form-group-inner">
                                    <label for="keterangan">Tulisan EN</label>
                                    <input type="text" class="form-control @error('pertanyaan') is-invalid @enderror" id="pertanyaan" placeholder="Masukkan Keterangan" name="pertanyaan" value="{{ old('pertanyaan')}}"/>
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