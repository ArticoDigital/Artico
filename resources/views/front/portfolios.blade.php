@extends('layouts.front')
@section('title') Portafolio Ártico @endsection
@section('header')

@endsection
@section('content')

    <section class="section-topPage row center middle Portfolio-top ">
        <h1>Proyectos</h1>
    </section>
    <section class=" wedo-title">
        <article class="content ">
            <h2>
                Ponemos todo en cada proyecto, creamos apps, web, estrategias de marketing. Recopilamos algunos casos de
                éxito para que eches un vistazo. ¡Disftuta!
            </h2>

        </article>
    </section>
    <section class="Portfolio">
        <div class="content row middle between">
            @component('components.portfolios')
                @slot('services','App web / UX / UI / Diseño')
                @slot('name','Créditos Lilipink')
                @slot('image','img/lilipink.png')
                @slot('slug','lilipink')
            @endcomponent
            @component('components.portfolios')
                @slot('services','App web / UX / UI / Diseño')
                @slot('name',' Agrosellers ')
                @slot('image','img/agrosellers.png')
                @slot('slug','agrosellers')
            @endcomponent
            @component('components.portfolios')
                @slot('services','Web Administrable/ UX / UI / Diseño')
                @slot('name',' Avenacubana  ')
                @slot('image','img/avenacubana.png')
                @slot('slug','avenacubana')
            @endcomponent
            @component('components.portfolios')
                @slot('services','Web Administrable / UX / UI / Diseño')
                @slot('name','Micsur - MinCultura  ')
                @slot('image','img/micsur.png')
                @slot('slug','micsur')
            @endcomponent
            @component('components.portfolios')
                @slot('services','Marketing / Campañas / Redes Sociales ')
                @slot('name','Thermos ')
                @slot('image','img/thermos.png')
                @slot('slug','thermos')
            @endcomponent
            @component('components.portfolios')
                @slot('services','Marketing / Campañas / Redes Sociales')
                @slot('name','Libbey')
                @slot('image','img/libbey.png')
                @slot('slug','libbey')
            @endcomponent
        </div>
    </section>
@endsection
@section('scripts')

@endsection