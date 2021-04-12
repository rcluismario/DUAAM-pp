@extends('admin.layout.layout')
@section('title')
Administradores
@endsection

@section('custom-css')
<link href="{{ asset('admin_assets/vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
@endsection

@section('content')

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Administradores</h1>
<p class="mb-4">Agrega o edita nuevos administradores para el administrador</p>

<div class="card shadow mb-4 col-lg-8">
    <div class="card-body">
        <form method="POST" action="{{ route('admin.admins.update')}}">
            <!-- name, email, password password_confirmation -->
            @csrf
            <input name="admin_id" type="hidden" value="{{ $admin->id }}">
            <div class="row">
                <div class="col-sm-12 col-md-6">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nombre</label>
                        <input name="name" type="text" class="form-control" value="{{ $admin->name }}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Correo</label>
                        <input name="email" type="email" class="form-control" value="{{ $admin->email }}">
                    </div>
                </div>
                <div class="col-sm-12 col-md-6">
                    <div class="form-group">
                        <label for="exampleInputPassword1">Contraseña</label>
                        <input name="password" type="password" class="form-control" s>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Confirmar Contraseña</label>
                        <input name="password_confirmation" type="password" class="form-control">
                    </div>  
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Registrar Cambios</button>
        </form>
    </div>
</div>
@endsection

@section('custom-js')
<script src="{{ asset('admin_assets/vendor/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('admin_assets/vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('admin_assets/js/demo/datatables-demo.js') }}"></script>
@endsection