@extends('layouts.front')
@section('title') Portafolio - {{$porfolio->name}} @endsection
@section('header')

@endsection
@section('content')

    <section class="Portfolio-page-header row "
             style= "{{($porfolio->is_header_img_complete)?
             'background-image: url(' . asset($porfolio->img_header) . ')' : 'background: ' . $porfolio->color}} ">
        <article class="Portfolio-page-headerContent ">
            <div class="row col-8 bottom small-16">
                <div class="Portfolio-pageTitle">
                    <sup>{{$porfolio->service}}</sup>
                    <h1>{{$porfolio->name}}</h1>
                    <p style="color: {{$porfolio->color}};">{{$porfolio->slogan}}</p>
                </div>
                <div class="Portfolio-arrow">
                    <svg width="11px" height="20px" viewBox="0 0 11 20" version="1.1" xmlns="http://www.w3.org/2000/svg"
                         xmlns:xlink="http://www.w3.org/1999/xlink">

                        <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"
                           stroke-linecap="round"
                           stroke-linejoin="round">
                            <g id="iPad-Pro-Portrait" transform="translate(-324.000000, -600.000000)" stroke="#FFFFFF"
                               stroke-width="1.56521739">
                                <g id="1" transform="translate(325.000000, 601.000000)">
                                    <polyline id="Shape"
                                              points="9 13.3043478 4.5 17.5304348 4.5 0.626086957"></polyline>
                                    <path d="M0.163636364,13.3043478 L4.5,17.5304348" id="Shape"></path>
                                </g>
                            </g>
                        </g>
                    </svg>
                </div>
            </div>
        </article>
        @if(!$porfolio->is_header_img_complete)
            <article class="col-16 small-16"
                     style='background-image: url({{asset($porfolio->img_header)}}); background-color: {{$porfolio->color}}'>

            </article>
        @endif
    </section>
    <section class="Portfolio-info">
        <div class="content row between">
            <article class="col-10 medium-9 small-16">
                <h3>Objetivo del proyecto</h3>
                <p class="label">Aplicación web</p>
                <p>{{$porfolio->target}} </p>
            </article>
            <article class="col-5 row offset-1  medium-7  small-16 Portfolio-infoData">
                <h3>Datos</h3>
                <div>
                    <table class="project_info case-anim active">
                        <tbody>
                        <tr valign="middle">
                            <td>

                            </td>
                            <td valign="middle">
                                Sitio web:
                            </td>
                            <td valign="middle">
                                <a href="{{$porfolio->website}}" target="_blank">{{$porfolio->website}}</a>
                            </td>
                        </tr>
                        <tr valign="middle">
                            <td>

                            </td>
                            <td valign="middle">
                                Cliente:
                            </td>
                            <td valign="middle">
                                {{$porfolio->client_name}}
                            </td>
                        </tr>
                        <tr valign="middle">
                            <td>

                            </td>
                            <td valign="middle">
                                Servicio:
                            </td>
                            <td valign="middle">
                                {{$porfolio->service}}
                            </td>
                        </tr>
                        <tr valign="middle">
                            <td>

                            </td>
                            <td valign="middle">
                                Año:
                            </td>
                            <td valign="middle">
                                {{$porfolio->year}}
                            </td>
                        </tr>

                        </tbody>
                    </table>
                </div>
            </article>
            <article class="col-16 medium-16  small-16">
                <h3>La solución</h3>
                <p class="label">a la medida</p>
                <p>{{$porfolio->solution}}</p>
            </article>
            <article class="col-16 medium-16 small-16 Portfolio-infoDataCreate">
                <h3>Nosotros creamos</h3>
                <p>{{$porfolio->create}} </p>
                <ul class="row between center ">
                    @foreach($porfolio->icons as $icons)
                        <li class="col-4 medium-4  small-8">
                            {!! $icons->svg !!}
                            <em>{{$icons->name}} </em>
                        </li>
                    @endforeach
                </ul>
            </article>
            {{--<article class="col-16 medium-16 small-16">
                <h3>Vamos a verlo </h3>

                <div class="carousel gallery">
                    @foreach($porfolio->images as $images)
                        <img src="{{asset($images->url)}}" class="carousel__item">
                    @endforeach
                </div>
            </article>--}}
        </div>
    </section>
@endsection
@section('scripts')
    <script src="{{asset('js/zenscroll-min.js')}}"></script>
    <script src="https://unpkg.com/flickity@2.0/dist/flickity.pkgd.min.js"></script>
    <script>
        const morePort = document.querySelector('.Portfolio-arrow')
        morePort.addEventListener('click', function () {
            zenscroll.toY(window.innerHeight - 58, 1000)
        })
        var flky = new Flickity('.gallery', {
            adaptiveHeight: true,
            autoPlay: true,
            cellAlign: 'center',
            draggable: true,

            dragThreshold: 3,
            lazyLoad: true,
            // enable lazy-loading images
            // set img data-flickity-lazyload="src.jpg"
            // set to number to load images adjacent cells

            percentPosition: true,
            // sets positioning in percent values, rather than pixels
            // Enable if items have percent widths
            // Disable if items have pixel widths, like images

            prevNextButtons: true,
            // creates and enables buttons to click to previous & next cells

            pageDots: true,
            // create and enable page dots

            resize: true,
            // listens to window resize events to adjust size & positions

            rightToLeft: false,
            // enables right-to-left layout

            setGallerySize: true,
            // sets the height of gallery
            // disable if gallery already has height set with CSS

            watchCSS: false,
            // watches the content of :after of the element
            // activates if #element:after { content: 'flickity' }

            wrapAround: false
            // at end of cells, wraps-around to first for infinite scrolling

        });
    </script>
@endsection
@section('styles')
    <link rel="stylesheet" href="https://unpkg.com/flickity@2.0/dist/flickity.min.css">
@endsection