@extends('templates.master')

@section('css-view')
@endsection

@section('conteudo-view')

<!--
    <header class="masthead">
        <div class="container">
            <div class="row">
                <div class="col-md-12" ></div>
                <h3>Pagina principal</h3>
            </div>

        </div>
    </header>
-->

<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="http://placehold.it/1200x500" class="d-block w-100" alt="primeira imagem">
        </div>
        <div class="carousel-item">
            <img src="http://placehold.it/1200x500" class="d-block w-100" alt="segunda imagem">
        </div>
        <div class="carousel-item">
            <img src="http://placehold.it/1200x500" class="d-block w-100" alt="terceira imagem">
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>

    <section id="conheca">
        <div class="container">
            <h1>Promocional</h1>
            <div class="row">
                <div class="col-md-12">

                </div>
            </div>
        </div>

    </section>

    <section id="creditos">
        <div class="container">
            <h1>Creditos</h1>
            <div class="col-md-12">
            </div>
        </div>

    </section>

@endsection



