@extends('layouts.default')

@section('content')

<aside id="fh5co-hero" class="">
    <div class="flexslider ">
        <ul class="slides">
        <li style="background-image: url(images/slide_3.jpg);">
            <div class="overlay-gradient"></div>
            <div class="container">
                <div class="col-md-10 col-md-offset-1 text-center  slider-text">
                    <div class="slider-text-inner">
                        <h2>Alguns dos Nossos Projetos</h2>
                        <!-- <p class="fh5co-lead">Designed with <i class="icon-heart"></i> by the fine folks at <a href="http://freehtml5.co" target="_blank">FreeHTML5.co</a></p> -->
                    </div>
                </div>
            </div>
        </li>
        </ul>
    </div>
</aside>

<div id="fh5co-work-section" class="fh5co-light-grey-section">
    <div class="container">
        <div class="row">
            <div class="col-md-4 animate-box">
                <a href="http://www.hebromlog.com.br" target="_blank" class="item-grid text-center">
                    <div class="image" style="background-image: url(images/hebrom.jpg)"></div>
                    <div class="v-align">
                        <div class="v-align-middle">
                            <h3 class="title">Hebrom Logística</h3>
                            <h5 class="category">Web Site</h5>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-4 animate-box">
                <a href="http://www.atriuscargo.com.br" target="_blank" class="item-grid text-center">
                    <div class="image" style="background-image: url(images/atrius.jpg)"></div>
                    <div class="v-align">
                        <div class="v-align-middle">
                            <h3 class="title">Atrius Cargo</h3>
                            <h5 class="category">Web Site</h5>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-4 animate-box">
                <a href="#" class="item-grid text-center">
                    <div class="image" style="background-image: url(images/jfernando.jpg)"></div>
                    <div class="v-align">
                        <div class="v-align-middle">
                            <h3 class="title">J. Fernando Advogados</h3>
                            <h5 class="category">Web Site</h5>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>

<div class="fh5co-cta" style="background-image: url(images/slide_1.jpg);">
    <div class="overlay"></div>
    <div class="container">
        <div class="col-md-12 text-center animate-box">
            <h3>Solicite um orçamento sem compromisso, ou venha tomar um café conosco!</h3>
            <p><a href="#" class="btn btn-primary btn-outline with-arrow">Venha! <i class="icon-arrow-right"></i></a></p>
        </div>
    </div>
</div>

@stop
