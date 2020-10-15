@extends('master')
@section('content')
@if (session('status'))
    <div class="alert alert-success">
        {{ session('status')}}
    </div>
@endif
<div class="data-table-area mg-b-15">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="sparkline13-list shadow-reset">
                    <div class="sparkline13-hd">
                        <div class="main-sparkline13-hd">
                            <h1>Data <span class="table-project-n">Kritik</span> dan Saran</h1>
                            <div class="sparkline13-outline-icon">
                                <span class="sparkline13-collapse-link"><i class="fa fa-chevron-up"></i></span>
                                <span><i class="fa fa-wrench"></i></span>
                                <span class="sparkline13-collapse-close"><i class="fa fa-times"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="sparkline13-graph">
                        <div class="datatable-dashv1-list custom-datatable-overright">
                            <div id="toolbar">
                                <select class="form-control">
                                    <option value="">Export Basic</option>
                                    <option value="all">Export All</option>
                                    <option value="selected">Export Selected</option>
                                </select>
                            </div>
                            <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true" data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">

                                <thead>
                                    <tr>
                                        <th data-field="state" data-checkbox="true"></th>
                                        <th data-field="id">ID</th>
                                        <th data-field="nama" data-editable="true">Nama</th>
                                        <th data-field="email" data-editable="true">Email</th>
                                        <th data-field="komentar" data-editable="true">Komentar</th>
                                        <th data-field="action">Action</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @foreach( $kritiksaran as $kritiksaran)
                                    <tr>
                                        <td></td>
                                        <td>{{ $kritiksaran->id }}</td>
                                        <td>{{ $kritiksaran->nama }}</td>
                                        <td>{{ $kritiksaran->email }}</td>
                                        <td>{{ Illuminate\Support\Str::limit($kritiksaran->komentar, 20) }}</td>
                                        <td>
                                            <a href="/kritiksaran/{{$kritiksaran->id}}/edit" class="btn-sm btn-primary glyphicon glyphicon-eye-open"></a>
                                            <form action="/kritiksaran/{{ $kritiksaran->id }}" method="post" class="d-inline">
                                                @method('delete')
                                                @csrf
                                                <button type="submit" onclick="return confirm('Yakin akan menghapus?')"
                                                    class="btn-sm btn-danger fa fa-trash"></button>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
