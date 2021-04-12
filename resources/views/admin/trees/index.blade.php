@extends('admin.layout.layout')
@section('title')
Árboles
@endsection

@section('custom-css')
@endsection

@section('content')

<!-- Page Heading -->
<div class="row">
    <div class="col-lg-8">
        <h1 class="h3 mb-2 text-gray-800">Árboles</h1>
        <p class="mb-4">Analiza los últimos árboles y actualiza sus fotos</p>
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
                <th scope="col">Foto</th>
                <th scope="col">Nombre</th>
                <th scope="col">Ubicación</th>
                <th scope="col">Acciones</th>
                <th scope="col">ID para Señal</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($trees as $tree)
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
                <td>
                    @if ($tree->needs_image)
                    <button type="button" class="btn btn-secondary btn-sm"
                        onclick="openPhotoSearch({{ $tree->id }})">Cambiar foto</button>
                    @endif
                </td>
                <td>
                    @if ($tree->needs_image)
                    {{ $tree->getSignId() }}
                    @else
                    -
                    @endif
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{ $trees->appends(request()->except('page'))->links('admin.components.custom-pag') }}
</div>

<form action="{{ route('admin.tree.update_photo') }}" method="POST" id="changeTreePhotoForm"
    enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="tree_id" id="treeIdData">
    <input type="file" style="display: none" id="newPhotoInput" name="image"
        onchange="document.getElementById('changeTreePhotoForm').submit()">
</form>

@endsection

@section('custom-js')
<script>
    function openPhotoSearch(id) {
        document.getElementById('treeIdData').value = id;
        document.getElementById('newPhotoInput').click();
    }
</script>
@endsection