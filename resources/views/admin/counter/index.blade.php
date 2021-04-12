@extends('admin.layout.layout')
@section('title')
Contadores
@endsection

@section('custom-css')
<link href="{{ asset('admin_assets/vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
@endsection

@section('content')

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Contadores</h1>
<p class="mb-4">Agrega, edita o elimina grupos de activismo</p>

<div class="card shadow p-3 mb-4 col-lg-8">
    <form method="POST" action="{{ route('admin.counter.store') }}">
        @csrf
        <div class="row">
            <div class="col-sm-12 col-md-6">
                <div class="form-group">
                    <label for="exampleInputEmail1">Nombre</label>
                    <input name="act" type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Cantidad</label>
                    <input name="cont" type="text" class="form-control", value="0">
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Registrar Contador</button>
    </form>
</div>
<!-- DataTales Example -->
<div class="card shadow mb-4 col-lg-8">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Cantidad</th>
                    </tr>
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                </thead>
                <tbody>
                    @foreach ($counters as $counter)
                    <tr>
                        <td>{{ $counter->act }}</td>
                        <td>{{ $counter->cont }}</td>
                        <th>
                            <form method="POST" action="{{ route('admin.counter.delete') }}"> 
                                @method("DELETE")
                                @csrf
                                <input type="hidden" name="counter_id" value="{{ $counter->id }}">
                                <button style="border:none; background:none; color:#de0000;" class="" type="submit"><i class="fas fa-user-minus"></i></button>
                            </form>
                            <a href="{{ route('admin.counter.edit',["id" => $counter->id]) }}"><i class="fas fa-user-edit"></i></a>
                        </th>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection

@section('custom-js')
<script src="{{ asset('admin_assets/vendor/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('admin_assets/vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('admin_assets/js/demo/datatables-demo.js') }}"></script>
@endsection
