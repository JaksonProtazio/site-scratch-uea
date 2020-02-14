@extends('layout.master-index')

@section('titulo','Página Inicial')

@section('conteudo')
<main>
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
    <section id="resumo-scratch">
        <h2 class="titulos-index">Scratch UEA</h2>
        <div id="txt-resumo">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur dolores officia incidunt distinctio facere, eveniet atque reprehenderit laborum, repellat cum rem hic dicta? Itaque quisquam ut exercitationem dolorem dolorum! Maiores!</p>
        </div>
        <div id="img-resumo">
            <img src="#" alt="">
        </div>
    </section>
    <section id="ferramentas-curso">
        <h2 class="titulos-index">Ferramentas Utilizadas</h2>
        <div class="cards">
            <div id="scratch">Scratch</div>
            <div id="photoshop">Photoshop</div>
            <div id="illustrstor">Illustrator</div>
        </div>
    </section>
</main>
@endsection