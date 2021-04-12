@extends('admin.layout.layout')
@section('title')
Activismo
@endsection

@section('custom-css')
@endsection

@section('content')
<div class="card shadow mb-4 col-lg-8">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Cantidad</th>
                        <th>Editar</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($counters as $counter)
                        <tr>
                            <td>{{ $counter->act }}</td>
                            <td>{{ $counter->cont }}</td>
                            <th>
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

@endsection
