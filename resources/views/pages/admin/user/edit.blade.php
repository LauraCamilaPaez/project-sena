@extends('layouts.app')
@section('content')

    <h1>Actualizar Usuario</h1>
    <div class="container mt-3">
        <form action="{{ route('users.update',$user->id) }}" method="post">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="">Nombres</label>
                        <input type="text" class="form-control" name="names" id="names" value="{{ $user->names }}">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="">Apellidos</label>
                        <input type="text" class="form-control" name="lastnames" id="lastnames" value="{{ $user->lastnames }}">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="email">Correo electrónico</label>
                        <input type="email" class="form-control" name="email" id="email" value="{{ $user->email }}">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="gender_id">Género</label>
                        <select name="gender_id" id="gender_id" class="form-control" required>
                            @foreach($genders as $gender)
                                <option {{ $gender->id == $user->gender_id ? 'selected' : '' }} value="{{ $gender->id }}">{{ $gender->gender }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="document_type_id">Tipo de Documento</label>
                        <select name="document_type_id" id="document_type_id" class="form-control" required>
                            @foreach($document_types as $document_type)
                                <option {{ $document_type->id == $user->document_type_id ? 'selected' : '' }} value="{{ $document_type->id }}">{{ $document_type->document_type }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="document">Documento</label>
                        <input type="number" class="form-control" name="document" id="document"  value="{{ $user->document }}">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="">Profesión</label>
                        <input type="text" class="form-control" name="profession" id="profession"  value="{{ $user->profession }}">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="phone">Teléfono Fijo</label>
                        <input type="number" class="form-control" name="phone" id="phone"  value="{{ $user->phone }}">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="mobile">Teléfono Móvil</label>
                        <input type="number" class="form-control" name="mobile" id="mobile"  value="{{ $user->mobile }}">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="status">Estado</label>
                        <select name="status" id="status" class="form-control">
                            <option {{ $user->status == 1 ? 'selected' : '' }} value="1">Activo</option>
                            <option {{ $user->status == 1 ? 'selected' : '' }} value="0">Inactivo</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="password">Contraseña</label>
                        <input type="password" class="form-control" name="password" id="password" value="{{ $user->password }}">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="profile_picture">Foto de Perfil</label>
                        <input type="url" class="form-control" name="profile_picture" id="profile_picture" value="{{ $user->profile_picture }}">
                    </div>
                </div>
            </div>
            <hr>
            <button class="btn btn-primary">Actualizar Usuario</button>
            <a class="btn btn-danger" href="{{url('users')}}">Cancelar</a>
        </form>
    </div>
@endsection
