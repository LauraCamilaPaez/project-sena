@extends('layouts.app')
@section('content1')

    <h1>Editar Noticia</h1>
    <p>Edita una noticia en el sistema.</p>
    <div class="container mt-3">
        <form action="{{ route('news.update', $new->id) }}" method="post">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="category">Categoría</label>
                        <input type="text" class="form-control" name="category" id="category" value="{{ $new->category }}" required>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="title">Titulo</label>
                        <input type="text" class="form-control" name="title" id="title" value="{{ $new->title }}" required>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="content">Contenido</label>
                <textarea class="form-control" rows="5" id="content" name="content"  required>{{ $new->content }}</textarea>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="image">Imagen</label>
                        <input type="url" class="form-control" name="image" id="image" value="{{ $new->image }}" required>
                    </div>
                </div>
            </div>
            @role('Administrador')
            <div class="col-md-4">
                <div class="form-group">
                    <label for="status">Estado</label>
                    <select name="status" id="status" class="form-control">
                        <option value="">Seleccionar...</option>
                        <option value="1" {{ $new->status == 1 ? 'selected' : '' }}>Activo</option>
                        <option value="0" {{ $new->status == 0 ? 'selected' : '' }}>Inactivo</option>
                    </select>
                </div>
            </div>
            @endrole
            <button class="btn btn-warning">Editar Noticia</button>
            <a class="btn btn-danger" href="{{url('news')}}">Cancelar</a>
        </form>
    </div>
@endsection
