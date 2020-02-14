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
                                <div class="bg-contador" id="hora"><p class="txt-number-cont">120</p></div>
                                <div class="bloco-sep">
                                    <div class="separador"></div>
                                    <div class="separador"></div>
                                </div>
                                <div class="bg-contador" id="minuto"><p class="txt-number-cont">120</p></div>
                                <div class="bloco-sep">
                                    <div class="separador"></div>
                                    <div class="separador"></div>
                                </div>
                                <div class="bg-contador" id="segundo"><p class="txt-number-cont">120</p></div>     
                            </div>
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
                <div id="scratch">Scratch</div>
                <div id="photoshop">Photoshop</div>
                <div id="illustrstor">Illustrator</div>
            </div>
        </div>
    </section>
</main>
@endsection