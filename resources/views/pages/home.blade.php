@extends('layouts.default')

@section('content')
<aside id="fh5co-hero" class="js-fullheight">
    <div class="flexslider js-fullheight">
        <ul class="slides">
            <li style="background-image: url(images/slide_1.jpg);">
                <div class="overlay-gradient"></div>
                <div class="container">
                    <div class="col-md-12 text-center js-fullheight slider-text">
                        <div class="slider-text-inner">
                            <h2>Explore novos caminhos para sua empresa na Internet</h2>
                            <p><a href="/contato" class="btn btn-codando btn-lg">Saiba Como</a></p>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</aside>
<div id="fh5co-services-section">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3 text-center fh5co-heading animate-box">
                <h2>O que Fazemos</h2>
                <p>Inserimos o Marketing Digital e a Inovação focada na obtenção de resultados na sua empresa através de soluções integradas.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 animate-box">
                <div class="services">
                    <i class="icon-laptop"></i>
                    <div class="desc">
                        <h3>Sites Responsivos e Customizáveis</h3>
                        <p>Interagimos on-line através de diversos dispositivos e é vital ter um site ágil e personalizado que se adapte a todos eles.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 animate-box">
                <div class="services">
                    <i class="icon-server"></i>
                    <div class="desc">
                        <h3>Sistemas Sob Medida</h3>
                        <p>Desenvolvemos sistemas sob medida que podem ajudá-lo a automatizar processos e ter controle total dessa informação.Otimimizando ainda mais os custos e produtos da sua empresa.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 animate-box">
                <div class="services">
                    <i class="icon-money"></i>
                    <div class="desc">
                        <h3>Redes Sociais</h3>
                        <p>Produção de conteúdo relevante e eficaz para seu público alvo nas Redes Sociais, trazendo grandes resultados, interação e rotatividade para sua marca.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 animate-box">
                <div class="services">
                    <i class="icon-tablet"></i>
                    <div class="desc">
                        <h3>SEO</h3>
                        <p>Otimize seu site para que o Google entenda a relevância da sua empresa dentro do segmento e alcance as primeiras posições da busca, aumentando a visibilidade do seu negócio.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 animate-box">
                <div class="services">
                    <i class="icon-mail-forward"></i>
                    <div class="desc">
                        <h3>E-mail Marketing</h3>
                        <p>Criação, envio e mensuração de campanhas de e-mail marketing. Obtenha ótimos resultados executando ações planejadas.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 animate-box">
                <div class="services">
                    <i class="icon-rocket"></i>
                    <div class="desc">
                        <h3>Produtora Digital</h3>
                        <p>Acreditamos na colaboração e estamos prontos para formar uma parceria com sua agência, seja ela on ou offline.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="fh5co-cta" style="background-image: url(images/slide_2.jpg);">
    <div class="overlay"></div>
    <div class="container">
        <div class="col-md-12 text-center animate-box">
            <h3>Marketing Digital e Inovação focados na obtenção de resultados!</h3>
            <p><a href="/contato" class="btn btn-codando btn-outline with-arrow">Fale Conosco! <i class="icon-arrow-right"></i></a></p>
        </div>
    </div>
</div>


@stop
