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
                            <h1>Data <span class="table-project-n">Hiburan</span> Menyanyi</h1>
                            <div class="sparkline13-outline-icon">
                                <a href="/menyanyi/create" class="btn-xs btn-success fa fa-plus"></a>
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
                                        <th data-field="judul" data-editable="true">Judul</th>
                                        <th data-field="sound">Suara Lagu</th>
                                        <th data-field="gambar">Gambar</th>
                                        <th data-field="action">Action</th>
                                    </tr>
                                </thead>
                                <tbody>

                                @foreach ($menyanyi as $menyanyi)
                                    <tr>
                                        <td></td>
                                        <td>{{ $menyanyi->id }}</td>
                                        <td>{{ $menyanyi->judul }}</td>
                                        <td><audio controls src="{{ $menyanyi->sound }}"></td>
                                        <td><img src="{{ asset ($menyanyi->gambar) }}" width="100"></td>
                                        <td>
                                        <a href="/menyanyi/{{ $menyanyi->id }}/edit" class="btn-sm btn-primary fa fa-pencil"></a>
                                            <form action="/menyanyi/{{ $menyanyi->id }}" method="post" class="d-inline">
                                                @method('delete')
                                                @csrf
                                                <button type="submit" onclick="return confirm('Yakin akan menghapus?')" class="btn-sm btn-danger fa fa-trash"></button>
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
