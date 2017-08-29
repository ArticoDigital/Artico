@extends('layouts.front')
@section('title') Pagina no encontrada @endsection
@section('header')

@endsection
@section('content')
    <section class="error404 row center middle">
        <div>
            <h1>404</h1>
            <h2>¡Ups!, No encontramos la página que buscas, o tal vez se hundió llegando al Ártico.io</h2>
        </div>
    </section>
    <div class="error404-polo">
        @include('front.includes.polo-footer')
    </div>
@endsection
@section('scripts')

@endsection