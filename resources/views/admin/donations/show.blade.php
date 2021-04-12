@extends('admin.layout.layout')
@section('title')
Donación
@endsection

@section('custom-css')
@endsection

@section('content')

<!-- page heading -->
<h1 class="h3 mb-2 text-gray-800">Donación: {{ $donation->folio }}
    @if ($donation->status == 'pending')
    <span class="badge badge-warning">Pendiente</span>
    @elseif ($donation->status == 'paid')
    <span class="badge badge-success">Pagado</span>
    @else
    <span class="badge badge-danger">Cancelado</span>
    @endif
</h1>

<section class="row mt-5">
    <div class="col-lg-2 col-md-4 col-sm-12">
        <div class="card" style="width: 100%;">
            <div class="card-body">
                <h5 class="card-title">Información</h5>
                <p class="card-text">Donador: {{ $donation->user->name }}</p>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">País: {{ $donation->user->country }}</li>
                <li class="list-group-item">Correo: {{ $donation->user->email }}</li>
                <li class="list-group-item">Fecha de donación: {{ date('d M, Y', strtotime($donation->created_at)) }}
                </li>
                <li class="list-group-item"><strong>Total: {{ $donation->totalString() }}</strong></li>
            </ul>
        </div>
    </div>
    <div class="col-lg-8 col-md-8 col-sm-12">
        <div class="table-responsive col-lg-8 col-md-12 card">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Folio</th>
                        <th scope="col">Foto</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Ubicación</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($donation->trees as $tree)
                    <tr>
                        <th>{{ $tree->folio }}</th>
                        <th>
                            @if ($tree->image)
                            <img src="{{ Storage::url($tree->image) }}" style="width: 75px; height: 75px;">
                            @else
                            @if ($tree->needs_image)
                            <img src="https://via.placeholder.com/75x75" style="width:75px;height:75px;">
                            @else
                            -
                            @endif
                            @endif
                        </th>
                        <td>
                            @if ($tree->needs_image)
                            {{ $tree->name }}
                            @else
                            -
                            @endif
                        </td>
                        <td>{{ $tree->location ? $tree->location : 'Sin ubicación' }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</section>

@endsection

@section('custom-js')
@endsection