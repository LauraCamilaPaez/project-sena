@extends('layouts.app')


@section('content')

    <h1>Perfil</h1>
    <p>Aquí podrás revisar tu perfil.</p>
    <div class="card-body  met-pro-bg" style="background: #0a2c48; border-radius: 15px">
        <div class="met-profile">
            <div class="row">
                <div class="col-lg-4 align-self-center mb-3 mb-lg-0">
                    <div class="met-profile-main">
                        <div class="met-profile-main-pic">
                            <img src="{{ auth()->user()->profile_picture }}" alt=""
                                 class="rounded-circle">
                        </div>

                        <div class="met-profile_user-detail">
                            <h5 class="met-user-name">{{ auth()->user()->names }} {{ auth()->user()->lastnames }}</h5>
                            <p class="mb-0 met-user-name-post">Servicio Nacional de Aprendizaje SENA @foreach(Auth::user()->roles as $role) {{ $role->name }} @endforeach</p>
                        </div>
                    </div>
                </div><!--end col-->
                <div class="col-lg-4 ml-auto">
                    <ul class="list-unstyled personal-detail">
                        <li class="">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                 class="bi bi-phone" viewBox="0 0 16 16">
                                <path
                                    d="M11 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h6zM5 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H5z"/>
                                <path d="M8 14a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
                            </svg>
                            </i> <b> Teléfono </b> : +57 {{ auth()->user()->mobile }}
                        </li>
                        <li class="mt-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                 class="bi bi-envelope" viewBox="0 0 16 16">
                                <path
                                    d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2zm13 2.383-4.758 2.855L15 11.114v-5.73zm-.034 6.878L9.271 8.82 8 9.583 6.728 8.82l-5.694 3.44A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.739zM1 11.114l4.758-2.876L1 5.383v5.73z"/>
                            </svg>
                            </i> <b> Correo Electrónico </b> : {{ auth()->user()->email }}
                        </li>
                        <li class="mt-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                 class="bi bi-diagram-2" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                      d="M6 3.5A1.5 1.5 0 0 1 7.5 2h1A1.5 1.5 0 0 1 10 3.5v1A1.5 1.5 0 0 1 8.5 6v1H11a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-1 0V8h-5v.5a.5.5 0 0 1-1 0v-1A.5.5 0 0 1 5 7h2.5V6A1.5 1.5 0 0 1 6 4.5v-1zM8.5 5a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1zM3 11.5A1.5 1.5 0 0 1 4.5 10h1A1.5 1.5 0 0 1 7 11.5v1A1.5 1.5 0 0 1 5.5 14h-1A1.5 1.5 0 0 1 3 12.5v-1zm1.5-.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1zm4.5.5a1.5 1.5 0 0 1 1.5-1.5h1a1.5 1.5 0 0 1 1.5 1.5v1a1.5 1.5 0 0 1-1.5 1.5h-1A1.5 1.5 0 0 1 9 12.5v-1zm1.5-.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1z"/>
                            </svg>
                            </i> <b>Profesión</b> : {{ auth()->user()->profession }}
                        </li>
                    </ul>
                    <div class="button-list btn-social-icon">
                        <button type="button" class="btn btn-blue btn-circle">
                            <a target="_blank" href="https://www.facebook.com/pages/Sena%20CEET/789699831197094/"><i class="fab fa-facebook-f text-white"></i></a>
                        </button>

                        <button type="button" class="btn btn-secondary btn-circle ml-2">
                            <a target="_blank" href="https://twitter.com/soylidersena"><i class="fab fa-twitter text-white"></i></a>
                        </button>

                        <button type="button" class="btn btn-pink btn-circle  ml-2">
                            <a target="_blank" href="https://electricidadelectronicaytelecomu.blogspot.com/"><i class="fab fa-dribbble text-white"></i></a>
                        </button>
                    </div>
                </div><!--end col-->
            </div><!--end row-->
        </div><!--end f_profile-->
    </div>

    <div class="col-lg-12 col-xl-9 mx-auto mt-5">
        <div class="card">
            <div class="card-body">
                <div class="">
                    <form action="{{ url('update-profile') }}" class="form-horizontal form-material mb-0"
                          method="post">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <input type="text" placeholder="Nombres" name="names" id="names" class="form-control"
                                   value="{{ auth()->user()->names }}">
                        </div>
                        <div class="form-group">
                            <input type="text" placeholder="Apellidos" name="lastnames" id="lastnames"
                                   class="form-control" value="{{ auth()->user()->lastnames }}">
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6">
                                <input type="email" placeholder="Correo Electrónico" class="form-control" id="email"
                                       name="email" value="{{ auth()->user()->email }}">
                            </div>
                            <div class="col-md-6">
                                <select class="form-control">
                                    <option style="display: none">Seleccionar...</option>
                                     @foreach($genders as $gender)
                                        <option {{ $gender->id ==  auth()->user()->gender_id ? 'selected'  : '' }} value="{{ $gender->gender }}">{{ $gender->gender }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-6">
                                <select class="form-control">
                                    <option style="display: none">Seleccionar...</option>
                                  @foreach($document_types as $document_type)
                                        <option {{ $document_type->id == auth()->user()->document_type_id ? 'selected' : '' }} value="{{ $document_type->document_type }}">{{ $document_type->document_type }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-6">
                                <input type="text" placeholder="Número de documento" class="form-control"
                                       name="document"
                                       id="document" value="{{ auth()->user()->document }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-6">
                                <input type="text" placeholder="Número de móvil" class="form-control"
                                       name="mobile"
                                       id="mobile" value="{{ auth()->user()->mobile }}">
                            </div>
                            <div class="col-md-6">
                                <input type="text" placeholder="Número de teléfono" class="form-control"
                                       name="phone"
                                       id="phone" value="{{ auth()->user()->phone }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-gradient-primary btn-sm px-4 mt-3 float-right mb-0">
                                Guardar Perfil
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
