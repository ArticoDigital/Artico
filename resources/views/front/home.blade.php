@extends('layouts.front')
@section('headerClass') Header-home @endsection
@section('header')
    @include('front.includes.header-home')
@endsection
@section('content')
    @include('front.includes.polo-footer')
    <section class="container Home">
        @include('front.includes.wedo-home')
        @include('front.includes.make-home')
        @include('front.includes.porfolio-home')
    </section>
    <section class="Home-about row center middle">
        <blockquote>
            <span>‘‘</span>
            Somos una agencia creativa digital con sede en Bogotá, Colombia, especializada en <b>posicionamiento digital</b>.
            Logramos que su marca, producto y/o servicio llegue de manera efectiva al público objetivo de su
            interés en internet. Contamos con un experimentado equipo de estrategas digitales, Diseñadores, Desarrolladores
            y Analistas apasionados <b>creativos</b> - <b>geeks</b>, que resolvemos problemas a través de un buen
            diseño y una experiencia de usuario efectiva.<span>’’</span>
            <div class="col-16">
                <a href=""> Cultura Artico <em> → </em></a>
            </div>
        </blockquote>

    </section>

    <section class="Home-contact row center middle">
            <div class=" center Home-contactButton ">
                <p>¿Estás listo?<span>Hagámos algo grande juntos</span></p>
                <a href="/contacto">INICIA TU PROYECTO</a>
            </div>
    </section>
@endsection
@section('scripts')

    <script src="{{asset('js/typed.js')}}"></script>
    <script src="{{asset('js/zenscroll-min.js')}}"></script>
    <script>
        const more = document.querySelector('.Header-more'),
            target = document.getElementById("target"),
            weDo = document.querySelector('#WeDo'),
            portfolio = document.querySelector('#Portfolio'),
            culture = document.querySelector('#Culture')

        document.addEventListener('DOMContentLoaded', function () {
            Typed.new('#typed', {
                strings: ["Amamos lo que hacemos y por eso nunca trabajamos", "Creativos", "Creativos/Geeks"],
                typeSpeed: 50,
                backDelay: 20,
                startDelay: 20,
                cursorChar: "_"
            });
        });
        more.addEventListener('click', function () {
            zenscroll.toY(window.innerHeight + 100, 500)
        })
        weDo.addEventListener('click', function (e) {
            zenscroll.toY(800, 500)
        })
        portfolio.addEventListener('click', function () {
            zenscroll.toY(2600)
        })
        culture.addEventListener('click', function () {
            zenscroll.toY(3281, 500)
        })
        /*  if ('ondeviceorientation' in window) {
         window.addEventListener('deviceorientation', function (e) {
         document.querySelector('.Header-arrowContent').style.transform = "rotate(" + e.alpha + "deg)"
         }, false);
         }*/
    </script>
@endsection