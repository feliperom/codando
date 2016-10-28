<div class="container">
    <div class="header-inner">
        <h1><a href="/">CODANDO<span>.CO</span></a></h1>
        <nav role="navigation">
            <ul>
                <li class="{{ Request::segment(1) === '/' ? 'active' : null }}"><a href="<?=url('/');?>">Home</a></li>
                <li class="{{ Request::segment(1) === 'portfolio' ? 'active' : null }}"><a href="<?=url('/portfolio');?>">Portfolio</a></li>
                <li class="{{ Request::segment(1) === 'servicos' ? 'active' : null }}"><a href="<?=url('/servicos');?>">Serviços</a></li>
                <li class="{{ Request::segment(1) === 'sobre' ? 'active' : null }}"><a href="<?=url('/sobre');?>">Sobre</a></li>
                <li class="{{ Request::segment(1) === 'contato' ? 'active' : null }}"><a  href="<?=url('/contato');?>">Contato</a></li>
            </ul>
        </nav>
    </div>
</div>
