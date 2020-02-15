@extends('layout.master-index')

@section('titulo','Página Inicial')

@section('conteudo')
<main>
    <!-- Seção Banner -->
    <section id="banner">
        <div id="filtro-banner">
            <div class="container">
                <div class="row">
                    <div id="txt-contador" class="col s12">
                        <div id="txt-banner">
                            <h1 id="titulo-pagina-princ">Curso Scratch 2020</h1>
                            <p id="txt-sub">Início em 25 de Março - Escola Superior de Tecnologia</p>
                        </div>
                        <div id="contador">
                        </div>
                    </div> 
                </div>
            </div> 
        </div>
        <div id="bg-banner"> 
        </div>
    </section>

    <!-- Seção Scratch UEA -->
    <section id="resumo-scratch">
        <div class="container">
            <h2 class="titulos-index">Scratch UEA</h2>
            <div class="row">
                <div id="txt-resumo" class="col xl6 l6 m12 s12">
                    <p>O curso Scratch acontece no primeiro semestre do ano e tem como público alvo calouros dos cursos de computação da UEA. O curso ocorre na Escola Superior de Tecnologia (EST) – UEA.  </p>
                </div>
                <div id="img-resumo" class="col xl6 l6 m12 s12">
                    <img src="{{asset('img/curso.png')}}" alt="Curso de Scratch" class="responsive-img">
                </div>
            </div>
        </div>
    </section>

    <!-- Seção Ferramentas Utilizadas -->
    <section id="ferramentas-curso">
        <div class="container">
            <h2 class="titulos-index">Ferramentas Utilizadas</h2>
            <div class="cards">
                <div class="row">
                    <div class="col xl4 l4 m4 s12">
                        <div class="card card-ferramenta">
                            <div class="card-image">
                                <img src="{{asset('img/ferramentas/scratch2.png')}}" class="responsive-img">
                                <span class="card-title">Card Title</span>
                            </div>
                            <div class="card-content">
                                <p class="nome-ferramenta">Scratch 3.0</p>
                            </div>
                        </div>
                    </div>

                    <div class="col xl4 l4 m4 s12">
                        <div class="card card-ferramenta">
                            <div class="card-image">
                                <img src="{{asset('img/ferramentas/photoshop2.png')}}" class="responsive-img">
                                <span class="card-title">Card Title</span>
                            </div>
                            <div class="card-content">
                                <p class="nome-ferramenta">Photoshop</p>
                            </div>
                        </div>
                    </div>

                    <div class="col xl4 l4 m4 s12">
                        <div class="card card-ferramenta">
                            <div class="card-image">
                                <img src="{{asset('img/ferramentas/illustrator2.png')}}" class="responsive-img">
                            </div>
                            <div class="card-content">
                                <p class="nome-ferramenta">Illustrator</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<script type="text/javascript">
  $('#contador').countdown('2020/03/25').on('update.countdown', function(event) {
  var $this = $(this).html(event.strftime('<div class="bg-contador" ><p class="txt-number-cont" id="dia">%D</p> <p class="descricao-number-cont">Dia%!d</p></div> '
    + '<div class="bloco-sep"><div class="separador"></div><div class="separador"></div></div> '
    + '<div class="bg-contador" ><p class="txt-number-cont" id="hora">%H</p><p class="descricao-number-cont">Hora%!H</p></div> '
    + '<div class="bloco-sep"><div class="separador"></div><div class="separador"></div></div> '
    + '<div class="bg-contador" ><p class="txt-number-cont" id="minuto">%M</p><p class="descricao-number-cont">Minuto%!M</p></div> '
    + '<div class="bloco-sep"><div class="separador"></div><div class="separador"></div></div> '
    + '<div class="bg-contador" ><p class="txt-number-cont" id="segundo">%S</p><p class="descricao-number-cont">Segundo%!S</p></div> '));
});
</script>
@endsection