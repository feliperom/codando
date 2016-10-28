@extends('layouts.default')

@section('content')

<aside id="fh5co-hero" class="">
    <div class="flexslider ">
        <ul class="slides">
        <li style="background-image: url(images/slide_4.jpg);">
            <div class="overlay-gradient"></div>
            <div class="container">
                <div class="col-md-10 col-md-offset-1 text-center  slider-text">
                    <div class="slider-text-inner">
                        <h2>Fale Conosco</h2>
                    </div>
                </div>
            </div>
        </li>
        </ul>
    </div>
</aside>

<div class="fh5co-contact animate-box">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 col-md-push-2 animate-box">
                <h2>Fale Conosco</h2>

            </div>
            <div class="col-md-3">
                <h3>Infos</h3>
                <ul class="contact-info">
                    <li><i class="icon-map"></i>Rua Riachuelo, 82 - Cj. 96 Centro - Santos/SP</li>
                    <li><i class="icon-phone"></i>+ 55 13 98183-9444</li>
                    <li><i class="icon-envelope"></i><a href="mailto:contato@codando.co">contato@codando.co</a></li>
                </ul>
            </div>
            <div class="col-md-8 col-md-push-1 col-sm-12 col-sm-push-0 col-xs-12 col-xs-push-0">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <input class="form-control" placeholder="Nome" type="text">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <input class="form-control" placeholder="E-mail" type="text">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <textarea name="" class="form-control" id="" cols="30" rows="7" placeholder="Mensagem"></textarea>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <input value="ENVIAR" class="btn btn-codando" type="submit">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- <div id="map" class="animate-box" data-animate-effect="fadeIn"></div> -->

@stop
