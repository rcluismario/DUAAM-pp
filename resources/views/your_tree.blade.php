@extends('layout.layout')
@section('title')
Tu arbolito
@endsection
@section('custom-css')
@endsection


@section('content')
<section class="container" style="margin-top: 70px; margin-bottom: 30px">
    <div class="row">
        <div class="col-lg-12">
            <h1>Mira tu o tus arbolitos</h1>
        </div>
    </div>
</section>
<section class="container" style="margin-bottom: 50px">
    <div class="row">
        <div class="col-lg-12">
            <form action="{{ route('your_tree') }}" method="GET">
                <div class="form-group">
                    <label>Introduce el folio de una donación o un arbolito</label>
                    <input type="text" class="form-control" name="folio" placeholder="Ej. D2320172020 o T27320112020">
                </div>
                <button type="submit" class="btn btn-primary">Buscar fotos</button>
            </form>
        </div>
    </div>
</section>

@isset($trees)

@if ($trees->isNotEmpty())

<section class="container" style="margin-top: 70px; margin-bottom: 30px">
    <div class="row">
        <div class="col-lg-12">
            <h3>Resultados</h3>
        </div>
    </div>
</section>
<section class="container" style="margin-bottom: 70px">
    <div class="row">
        @foreach ($trees as $tree)

        <div class="col-lg-4 col-md-6 col-sm-12">
            <div class="card" style="width: 100%">
                @if ($tree->image)
                <img src="{{ Storage::url($tree->image) }}" style="width: 100%; max-height:350px">
                @else
                <img class="card-img-top" src="https://via.placeholder.com/500x500"
                    style="width: 100%; max-height:350px">
                @endif
                <div class="card-body">
                    <p>Nombre: {{ $tree->name }}</p>
                    @if ($tree->image)
                    <a href="{{ Storage::url($tree->image) }}" class="btn btn-primary"
                        download="arbol-{{ $tree->folio }}" target="_blank">Descargar</a>
                    @else
                    <button disabled="disabled" class="btn btn-primary">Sin foto</button>
                    @endif
                </div>
            </div>
        </div>

        @endforeach
    </div>
</section>

@else

<section class="container" style="margin-top: 70px; margin-bottom: 100px">
    <div class="row">
        <div class="col-lg-12">
            <h3>Sin Resultados</h3>
        </div>
    </div>
</section>

@endif

@endisset

@endsection


@section('custom-js')

@endsection