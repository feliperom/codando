@extends('layouts.default')

@section('content')

<aside id="fh5co-hero" class="">
    <div class="flexslider">
        <ul class="slides">
        <li style="background-image: url(images/slide_3.jpg);">
            <div class="overlay-gradient"></div>
            <div class="container">
                <div class="col-md-10 col-md-offset-1 text-center slider-text">
                    <div class="slider-text-inner">
                        <h2>Quem Somos</h2>
                    </div>
                </div>
            </div>
        </li>
        </ul>
    </div>
</aside>

<div class="fh5co-about animate-box">
    <div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
        <!-- <h2>Company History</h2> -->
        <p>Nascemos a partir da idéia de que somos apaixonados pelo que fazemos, e buscamos transmitir isso aos nossos parceiros. Descobrindo novas maneiras de construir suas marcas com a internet e seu público alvo. </p>
    </div>
    <div class="container">
        <div class="col-md-12 animate-box">
            <figure>
                <img src="images/about-img.jpg" alt="Free HTML5 Template" class="img-responsive">
            </figure>
        </div>
    </div>
</div>

<!-- <div class="fh5co-team fh5co-light-grey-section">
    <div class="container">

            <div class="row">
                <div class="col-md-6 col-md-offset-3 text-center fh5co-heading animate-box">
                    <h2>The Team</h2>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
                </div>
                <div class="col-md-4 fh5co-staff text-center animate-box">
                    <img src="images/person1.jpg" alt="Free HTML5 Bootstrap Template" class="img-responsive">
                    <h3>Athan Smith</h3>
                    <h4>Co-Founder, CEO</h4>
                    <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
                    <ul class="fh5co-social">
                        <li><a href="#"><i class="icon-google"></i></a></li>
                        <li><a href="#"><i class="icon-dribbble"></i></a></li>
                        <li><a href="#"><i class="icon-twitter"></i></a></li>
                        <li><a href="#"><i class="icon-facebook"></i></a></li>
                        <li><a href="#"><i class="icon-instagram"></i></a></li>
                    </ul>
                </div>
                <div class="col-md-4 fh5co-staff text-center animate-box">
                    <img src="images/person2.jpg" alt="Free HTML5 Bootstrap Template" class="img-responsive">
                    <h3>Nathalie Kosley</h3>
                    <h4>Co-Founder, CTO</h4>
                    <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
                    <ul class="fh5co-social">
                        <li><a href="#"><i class="icon-google"></i></a></li>
                        <li><a href="#"><i class="icon-dribbble"></i></a></li>
                        <li><a href="#"><i class="icon-twitter"></i></a></li>
                        <li><a href="#"><i class="icon-facebook"></i></a></li>
                        <li><a href="#"><i class="icon-instagram"></i></a></li>
                    </ul>
                </div>
                <div class="col-md-4 fh5co-staff text-center animate-box">
                    <img src="images/person3.jpg" alt="Free HTML5 Bootstrap Template" class="img-responsive">
                    <h3>Yanna Kuzuki</h3>
                    <h4>Co-Founder, Principal</h4>
                    <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
                    <ul class="fh5co-social">
                        <li><a href="#"><i class="icon-google"></i></a></li>
                        <li><a href="#"><i class="icon-dribbble"></i></a></li>
                        <li><a href="#"><i class="icon-twitter"></i></a></li>
                        <li><a href="#"><i class="icon-facebook"></i></a></li>
                        <li><a href="#"><i class="icon-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
    </div>
</div> -->


<div id="fh5co-services-section">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 text-center fh5co-heading animate-box">
                <h2>Somos apaixonados pelo que fazemos!</h2>
                <!-- <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p> -->
            </div>
            <div class="col-md-4 text-center item-block animate-box">
                <h3>Estratégia</h3>
                <p>Pensamos em estratégias baseadas nas necessidades do Cliente. Soluções certas para o seu negócio.</p>
            </div>
            <div class="col-md-4 text-center item-block animate-box">
                <h3>Inovação</h3>
                <p>Temos paixão por soluções inovadoras e pelo poder com que elas geram resultados.</p>
            </div>
            <div class="col-md-4 text-center item-block animate-box">
                <h3>Criação</h3>
                <p>Criamos e desenvolvemos os projetos com base na estratégia e inovação, sempre buscando atingir a expectativa do parceiro de negócio.</p>
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
