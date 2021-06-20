@extends('layouts.app')
@section('content1')

    <h1>Noticias</h1>
    <p>Bienvenido, aquí podrás encontrar todas las noticias de SENALAB</p>
    @role('Administrador')
    <a class="btn btn-primary btn-sm" href="{{ route('news.create') }}">Crear noticia</a>
    @endrole
    <div class="row mt-3">
        @foreach($news as $new)
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <div class="blog-card">
                            <img src="{{ $new->image }}" alt="" class="img-fluid">
                            <span
                                class="badge badge-purple px-3 py-2 bg-soft-secondary font-weight-semibold mt-3">{{ $new->category }}</span>
                            <h4 class="my-3">
                                <a href="" class="">{{ $new->title }}</a>
                            </h4>
                            <p class="text-muted">{{ $new->content }}</p>
                            <hr class="hr-dashed">
                        </div><!--end blog-card-->
                        @role('Administrador')
                        <a class="btn btn-warning btn-sm" href="{{ route('news.edit', $new->id) }}">Editar</a>
                        @role('Secretario|Administrador')
                        <form action="{{ route('news.destroy', $new->id) }}" method="POST" style="display: inline">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm" type="submit">Eliminar</button>
                        </form>
                        @endrole
                        @endrole
                    </div><!--end card-body-->
                </div><!--end card-->
            </div> <!--end col-->
        @endforeach
    </div>

@endsection
