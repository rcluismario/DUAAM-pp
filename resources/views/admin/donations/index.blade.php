@extends('admin.layout.layout')
@section('title')
Donaciones
@endsection

@section('custom-css')
@endsection

@section('content')

<!-- Page Heading -->
<div class="row">
    <div class="col-lg-8">
        <h1 class="h3 mb-2 text-gray-800">Donaciones</h1>
        <p class="mb-4">Analiza las donaciones y obtén información sobre ellas</p>
    </div>
    <div class="col-lg-4">
        <form>
            <div class="form-group" style="display: flex; align-items: center">
                <label for="search" style="margin-bottom: 0; margin-right: 10px">Buscar: </label>
                <input type="text" name="search" class="form-control">
            </div>
        </form>
    </div>
</div>

<div class="table-responsive col-lg-12 col-md-12">
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Folio</th>
                <th scope="col">Total</th>
                <th scope="col">Estatus</th>
                <th scope="col">Fecha de creación</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($donations as $donation)
            <tr>
                <th>{{ $donation->folio }}</th>
                <th>{{ $donation->totalString() }}</th>
                <td>
                    @if ($donation->status == 'pending')
                    <span class="badge badge-warning">Pendiente</span>
                    @elseif ($donation->status == 'paid')
                    <span class="badge badge-success">Pagado</span>
                    @else
                    <span class="badge badge-danger">Cancelado</span>
                    @endif
                </td>
                <td>{{ date('d M, Y', strtotime($donation->created_at)) }}</td>
                <td>
                    <a href="{{ route('admin.donation.show', ['id'=>$donation->id]) }}">
                        <button type="button" class="btn btn-secondary btn-sm">Más información</button>
                    </a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{ $donations->links('admin.components.custom-pag') }}
</div>

@endsection

@section('custom-js')
@endsection
