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
                            <img src="http://metrica.laravel.themesbrand.com/assets/images/users/user-4.jpg" alt=""
                                 class="rounded-circle">
                            <span class="fro-profile_main-pic-change">
                                                            <i class="fas fa-camera"></i>
                                                        </span>
                        </div>
                        <a href="" id="bEdit" type="button"
                           class="btn btn-sm btn-soft-success btn-circle mr-2"
                           onclick="rowEdit(this);">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                 fill="currentColor" class="bi bi-pencil"
                                 viewBox="0 0 16 16">
                                <path
                                    d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
                            </svg>
                        </a>

                        <div class="met-profile_user-detail">
                            <h5 class="met-user-name"> Sophia Dodson</h5>
                            <p class="mb-0 met-user-name-post">Servicio Nacional de Aprendizaje SENA</p>
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
                            </i> <b> Teléfono </b> : +57 320 654 3856
                        </li>
                        <li class="mt-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                 class="bi bi-envelope" viewBox="0 0 16 16">
                                <path
                                    d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2zm13 2.383-4.758 2.855L15 11.114v-5.73zm-.034 6.878L9.271 8.82 8 9.583 6.728 8.82l-5.694 3.44A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.739zM1 11.114l4.758-2.876L1 5.383v5.73z"/>
                            </svg>
                            </i> <b> Correo Electrónico </b> : senalab@senalab.com
                        </li>
                        <li class="mt-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                 class="bi bi-diagram-2" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                      d="M6 3.5A1.5 1.5 0 0 1 7.5 2h1A1.5 1.5 0 0 1 10 3.5v1A1.5 1.5 0 0 1 8.5 6v1H11a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-1 0V8h-5v.5a.5.5 0 0 1-1 0v-1A.5.5 0 0 1 5 7h2.5V6A1.5 1.5 0 0 1 6 4.5v-1zM8.5 5a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1zM3 11.5A1.5 1.5 0 0 1 4.5 10h1A1.5 1.5 0 0 1 7 11.5v1A1.5 1.5 0 0 1 5.5 14h-1A1.5 1.5 0 0 1 3 12.5v-1zm1.5-.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1zm4.5.5a1.5 1.5 0 0 1 1.5-1.5h1a1.5 1.5 0 0 1 1.5 1.5v1a1.5 1.5 0 0 1-1.5 1.5h-1A1.5 1.5 0 0 1 9 12.5v-1zm1.5-.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1z"/>
                            </svg>
                            </i> <b>Profesión</b> : Instructora 2 Nivel
                        </li>
                    </ul>
                    <div class="button-list btn-social-icon">
                        <button type="button" class="btn btn-blue btn-circle">
                            <i class="fab fa-facebook-f"></i>
                        </button>

                        <button type="button" class="btn btn-secondary btn-circle ml-2">
                            <i class="fab fa-twitter"></i>
                        </button>

                        <button type="button" class="btn btn-pink btn-circle  ml-2">
                            <i class="fab fa-dribbble"></i>
                        </button>
                    </div>
                </div><!--end col-->
            </div><!--end row-->
        </div><!--end f_profile-->
    </div>

    <div class="col-lg-12 col-xl-9 mx-auto mt-5">
        <div class="card">
            <div class="card-body">
                <form method="post" class="card-box">
                    <div class="dropify-wrapper has-preview">
                        <div class="dropify-message"><span class="file-icon"></span>
                            <p>Drag and drop a file here or click</p>
                            <p class="dropify-error">Ooops, something wrong appended.</p></div>
                        <div class="dropify-loader" style="display: none;"></div>
                        <div class="dropify-errors-container">
                            <ul></ul>
                        </div>
                        <input type="file" id="input-file-now-custom-1" class="dropify btn btn-info"
                               data-default-file="../assets/images/users/user-4.jpg">
                        <button type="button" class="btn btn-danger ml-2">Cancelar</button>
                        <div class="dropify-preview" style="display: block;"><span class="dropify-render"><img
                                    src="../assets/images/users/user-4.jpg"></span>
                            <div class="dropify-infos">
                                <div class="dropify-infos-inner"><p class="dropify-filename"><span
                                            class="file-icon"></span> <span
                                            class="dropify-filename-inner">user-4.jpg</span></p>
                                    <p class="dropify-infos-message">Drag and drop or click to replace</p></div>
                            </div>
                        </div>
                    </div>
                    <span class="input-icon icon-right">
                                                            <textarea rows="4" class="form-control"
                                                                      placeholder="Post a new message"></textarea>
                                                        </span>
                    <div class="float-right my-3">
                        <a class="btn btn-sm btn-gradient-primary text-white px-4 mb-0">Send</a>
                    </div>
                    <ul class="list-inline mt-1">
                        <li class="list-inline-item">
                            <a href="#"><i class=" fas fa-video font-18 mr-2 mt-2 text-primary"></i></a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#"><i class="fas fa-camera  font-18 mt-2 text-primary"></i></a>
                        </li>
                    </ul>
                </form>

                <div class="">
                    <form class="form-horizontal form-material mb-0">
                        <div class="form-group">
                            <input type="text" placeholder="Full Name" class="form-control">
                        </div>

                        <div class="form-group row">
                            <div class="col-md-4">
                                <input type="email" placeholder="Email" class="form-control" name="example-email"
                                       id="example-email">
                            </div>
                            <div class="col-md-4">
                                <input type="password" placeholder="password" class="form-control">
                            </div>
                            <div class="col-md-4">
                                <input type="password" placeholder="Re-password" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-6">
                                <input type="text" placeholder="Phone No" class="form-control">
                            </div>
                            <div class="col-md-6">
                                <select class="form-control">
                                    <option>London</option>
                                    <option>India</option>
                                    <option>Usa</option>
                                    <option>Canada</option>
                                    <option>Thailand</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <textarea rows="5" placeholder="Message" class="form-control"></textarea>
                            <button class="btn btn-gradient-primary btn-sm px-4 mt-3 float-right mb-0">Update Profile
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
