@extends('layout.master-index')

@section('titulo','Página Inicial')

@section('conteudo')
<main>
    <section id="banner">
        <div id="filtro-banner">
        </div>
        <div id="bg-banner">
            <div id="txt-banner">
                <h1>Curso Scratch 2020</h1>
                <h6>Início em 25 de Março - Escola Superior de Tecnologia</h6>
            </div>
            <div id="contador">
                <div class="bg-contador" id="hora">120</div>
                <div class="bg-contador" id="minuto">120</div>
                <div class="bg-contador" id="segundo">120</div>
            </div>
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