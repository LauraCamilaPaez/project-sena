@extends('layouts.app')
@section('content')

    <h1>Nuevo Usuario</h1>
    <div class="container mt-3">
        <form action="{{ url('users') }}" method="post">
            @csrf
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="">Nombres</label>
                        <input type="text" class="form-control" name="names" id="names" required>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="">Apellidos</label>
                        <input type="text" class="form-control" name="lastnames" id="lastnames" required>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="email">Correo electrónico</label>
                        <input type="email" class="form-control" name="email" id="email" required>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="gender_id">Género</label>
                        <select name="gender_id" id="gender_id" class="form-control" required>
                            <option value="" selected>Seleccionar...</option>
                            @foreach($genders as $gender)
                                <option value="{{ $gender->id }}">{{ $gender->gender }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="document_type_id">Tipo de Documento</label>
                        <select name="document_type_id" id="document_type_id" class="form-control" required>
                            <option value="" selected>Seleccionar...</option>
                            @foreach($document_types as $document_type)
                                <option value="{{ $document_type->id }}">{{ $document_type->document_type }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="document">Documento</label>
                        <input type="number" class="form-control" name="document" id="document" required>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="">Profesión</label>
                        <input type="text" class="form-control" name="profession" id="profession" required>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="phone">Teléfono Fijo</label>
                        <input type="number" class="form-control" name="phone" id="phone" required>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="mobile">Teléfono Móvil</label>
                        <input type="number" class="form-control" name="mobile" id="mobile" required>
                    </div>
                </div>
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
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="password">Contraseña</label>
                        <input type="password" class="form-control" name="password" id="password" required>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="profile_picture">Foto de Perfil</label>
                        <input type="url" class="form-control" name="profile_picture" id="profile_picture" required>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="role">Rol</label>
                        <select name="role" id="role" class="form-control" required>
                            <option value="" selected>Seleccionar...</option>
                            @foreach($roles as $role)
                                <option value="{{ $role->name }}">{{ $role->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="training_center_id">Centro de Formación</label>
                        <select name="training_center_id" id="training_center_id" class="form-control" required>
                            <option value="" selected>Seleccionar...</option>
                            @foreach($training_centers as $training_center)
                                <option value="{{ $training_center->id }}">{{ $training_center->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
            <hr>
            <button class="btn btn-primary">Crear Usuario</button>
            <a class="btn btn-danger" href="{{url('users')}}">Cancelar</a>
        </form>
    </div>
@endsection
