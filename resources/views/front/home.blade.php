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
        <article class="Home-Client">

        </article>
    </section>
@endsection
@section('scripts')

    <script src="{{asset('js/typed.js')}}"></script>
    <script src="{{asset('js/zenscroll-min.js')}}"></script>
    <script>
        const more = document.querySelector('.Header-more'),
            target = document.getElementById("target")

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
      /*  if ('ondeviceorientation' in window) {
            window.addEventListener('deviceorientation', function (e) {
                document.querySelector('.Header-arrowContent').style.transform = "rotate(" + e.alpha + "deg)"
            }, false);
        }*/
    </script>
@endsection