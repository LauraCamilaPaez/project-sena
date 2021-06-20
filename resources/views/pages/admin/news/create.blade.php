@extends('layouts.app')
@section('content1')

    <h1>Nueva Noticia</h1>
    <p>Crea una nueva noticia en el sistema.</p>
    <div class="container mt-3">
        <form action="{{ url('news') }}" method="post">
            @csrf
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="category">Categoría</label>
                        <input type="text" class="form-control" name="category" id="category" required>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="title">Titulo</label>
                        <input type="text" class="form-control" name="title" id="title" required>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="message">Contenido</label>
                <textarea class="form-control" rows="5" id="content" name="content" required></textarea>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="image">Imagen</label>
                        <input type="url" class="form-control" name="image" id="image" required>
                    </div>
                </div>
            </div>
            @role('Administrador')
            <div class="col-md-4">
                <div class="form-group">
                    <label for="status">Estado</label>
                    <select name="status" id="status" class="form-control" required>
                        <option value="" selected>Seleccionar...</option>
                            <option value="1">Activo</option>
                            <option value="0">Inactivo</option>
                    </select>
                </div>
            </div>
            @endrole
            <button class="btn btn-primary">Crear Noticia</button>
            <a class="btn btn-danger" href="{{url('news')}}">Cancelar</a>
        </form>
    </div>
@endsection
