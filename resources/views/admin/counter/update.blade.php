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
<p class="mb-4">Edita contadores de grupos de activismo</p>

<div class="card shadow mb-4 col-lg-8">
    <div class="card-body">
        <form method="POST" action="{{ route('admin.counter.update')}}">
            @csrf
            <input name="counter_id" type="hidden" value="{{ $counters->id }}">
            <div class="row">
                <div class="col-sm-12 col-md-6">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nombre</label>
                        <input name="act" type="text" class="form-control" value="{{ $counters->act }}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Cantidad</label>
                        <input name="cont" type="text" class="form-control" value="{{ $counters->cont }}">
                    </div>
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <button type="submit" class="btn btn-primary">Registrar Cambios</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection

@section('custom-js')
<script src="{{ asset('admin_assets/vendor/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('admin_assets/vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('admin_assets/js/demo/datatables-demo.js') }}"></script>
@endsection