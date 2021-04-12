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

<div class="card shadow p-3 mb-4 col-lg-8">
    <form method="POST" action="{{ route('admin.admins.store') }}">
        <!-- name, email, password password_confirmation -->
        @csrf
        <div class="row">
            <div class="col-sm-12 col-md-6">
                <div class="form-group">
                    <label for="exampleInputEmail1">Nombre</label>
                    <input name="name" type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Correo</label>
                    <input name="email" type="email" class="form-control">
                </div>
            </div>
            <div class="col-sm-12 col-md-6">
                <div class="form-group">
                    <label for="exampleInputPassword1">Contraseña</label>
                    <input name="password" type="password" class="form-control">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Confirmar Contraseña</label>
                    <input name="password_confirmation" type="password" class="form-control">
                </div>
            </div>
        </div>

        <button type="submit" class="btn btn-primary">Registrar Admin</button>
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
                        <th>Correo</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($admins as $admin)
                    <tr>
                        <td>{{ $admin->name }}</td>
                        <td>{{ $admin->email }}</td>
                        <th>
                            <form method="POST" action="{{ route('admin.admins.delete') }}">
                                @method("DELETE")
                                @csrf
                                <input type="hidden" name="admin_id" value="{{ $admin->id }}">
                                <button style="border:none; background:none; color:#de0000;" class="" type="submit"><i class="fas fa-user-minus"></i></button>
                            </form>
                            <a href="{{ route('admin.admins.edit',["id" => $admin->id]) }}"><i class="fas fa-user-edit"></i></a>
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
