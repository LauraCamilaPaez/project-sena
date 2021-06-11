@extends('layouts.app')
@section('content')

    <h1>Enviar incapacidad</h1>

    <form action="{{route('incapacidades.store')}}" method="POST">

        @csrf

        <label for="">
            Nombre:
            <br>
            <input type="text" name="name">
        </label>
        <br>

        @error('name')
            <p><strong>{{$message}}</strong></p>
        @enderror

        <label for="">
            Correo:
            <br>
            <input type="email" name="correo">
        </label>
        <br>
        

        @error('correo')
            <p><strong>{{$message}}</strong></p>
        @enderror


        <label for="">
            Mensaje:
            <br>
            <textarea name="mensaje" rows="4"></textarea>
        </label>
        <br>
        
        
        @error('mensaje')
            <p><strong>{{$message}}</strong></p>
        @enderror

        <label for="">
            Incapacidad:
            <br>
            <input type="file" name="incapacidad" id="">
        </label>
        <br>
        
        
        @error('incapacidad')
            <p><strong>{{$message}}</strong></p>
        @enderror


        <button type="submit">Enviar</button>

    </form>

    @if (session('info'))
        <script>
            alert("{{session('info')}}");
        </script>
    @endif


@endsection