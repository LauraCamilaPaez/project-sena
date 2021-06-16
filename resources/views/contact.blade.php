@extends('layouts.app')

@section('content1')

    <body id="page-top">
        <!-- Contact-->
        <section class="page-section" id="contact">
            <div class="container"><br><br><br>
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Contáctenos</h2>
                    <h3 class="section-subheading text-muted">Para tener el gusto de atenderlo.</h3>
                </div>

                @if (session()->has('flash'))
                <div class="alert alert-success alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    {{session()->get('flash')}}
                </div>
                @endif

                <br>
                <form id="contactForm" name="sentMessage" method="post" action="{{ route('messagescontact') }}" role="form">
                    {{ csrf_field() }}
                    <div class="row align-items-stretch mb-5">
                        <div class="col-md-6">

                            <div class="form-group wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".6s">
                                <input type="text" placeholder="Your Name" class="form-control" name="name" id="name"
                                    required="required" data-validation-required-message="Please enter your name." />
                            </div>

                            <div class="form-group wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".8s">
                                <input type="email" placeholder="Your Email" class="form-control" name="email" id="email"
                                    required="required"
                                    data-validation-required-message="Please enter your email address." />
                                <p class="help-block text-danger"></p>
                            </div>

                            <div class="form-group mb-md-0" data-wow-duration="500ms" data-wow-delay="1s">
                                <input type="text" placeholder="Subject" class="form-control" name="subject" id="subject"
                                    required="required"
                                    data-validation-required-message="Please enter your phone number." />
                                <p class="help-block text-danger"></p>

                            </div>

                            <div class="form-group mb-md-0">
                                <input class="form-control" name="phone" id="phone" type="tel" placeholder="Teléfono *"
                                    required="required"
                                    data-validation-required-message="Please enter your phone number." />
                                <p class="help-block text-danger"></p>
                            </div> 
                        </div>

                        <div class="col-md-6">
                            <div class="form-group form-group-textarea mb-md-0 wow fadeInDown" data-wow-duration="500ms"
                                data-wow-delay="1.2s">
                                <textarea rows="6" placeholder="Message" class="form-control" name="body"
                                    id="messagescontact"></textarea>
                            </div>
                        </div>

                    </div>
            </div>
            <div class="text-center">
                <div id="success"></div>
                <button class="btn btn-primary btn-xl text-uppercase" id="sendMessageButton" type="submit">Enviar
                    Mensaje</button>
            </div>
            </form>
            </div><br>

    @stop
