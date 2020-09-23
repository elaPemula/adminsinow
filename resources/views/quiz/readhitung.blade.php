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
                            <h1>Data <span class="table-project-n">Soal Quiz</span> Menghitung</h1>
                            <div class="sparkline13-outline-icon">
                                <a href="/counts/create" class="btn-xs btn-success fa fa-plus"></a>
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
                                        <th data-field="name" data-editable="true">Pertanyaan</th>
                                        <th data-field="email" data-editable="true">opsiA</th>
                                        <th data-field="phone" data-editable="true">opsiB</th>
                                        <th data-field="company" data-editable="true">opsiC</th>
                                        <th data-field="task" data-editable="true">opsiD</th>
                                        <th data-field="date" data-editable="true">Jawaban</th>
                                        <th data-field="action">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach( $counts as $count)
                                    <tr>
                                        <td></td>
                                        <td>{{ $count->id }}</td>
                                        <td>{{ $count->pertanyaan }}</td>
                                        <td>{{ $count->opsiA }}</td>
                                        <td>{{ $count->opsiB }}</td>
                                        <td>{{ $count->opsiC }}</td>
                                        <td>{{ $count->opsiD }}</td>
                                        <td>{{ $count->jawaban }}</td>
                                        <td>
                                        <a href="/counts/{{$count->id}}/edit" class="btn-sm btn-primary fa fa-pencil"></a>
                                            <form action="/counts/{{ $count->id }}" method="post" class="d-inline">
                                                @method('delete')
                                                @csrf
                                                <button type="submit" class="btn-sm btn-danger fa fa-trash"></button>
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