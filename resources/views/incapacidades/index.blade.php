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

        <label for="">
            Correo:
            <br>
            <input type="email" name="email">
        </label>
        <br>
        

        <label for="">
            Asunto:
            <br>
            <textarea name="subject" rows="4"></textarea>
        </label>
        <br>
        <label for="">
            Mensaje:
            <br>
            <textarea name="content" rows="4"></textarea>
        </label>
        <br>
        
        <label for="">
            Incapacidad:
            <br>
            <input type="file" name="archivo" id="">
        </label>
        <br>
        
        <button type="submit">Enviar</button>

    </form>


@endsection