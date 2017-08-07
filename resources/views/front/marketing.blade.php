@extends('layouts.front')
@section('title') Marketing Digital @endsection
@section('header')

@endsection
@section('content')
    <section class="section-topPage row center middle wedo-top marketing">
        <h1>Marketing digital</h1>
    </section>

    <section class=" wedo-title">
        <article class="content ">
            <h2>
                La calidad de nuestros productos y la satisfacción de nuestros clientes es nuestra prioridad. Creamos
                relaciones con nuestros clientes a largo plazo y proponemos varias soluciones post-desarrollo para
                asegurarle los productos digitales más actualizados y rentables.
            </h2>
        </article>
    </section>
    <section class="wedo-content wedo-marketing" id="particles-js">
        <div class="content row">
            <article class="col-7 medium-7 small-13">
                <h2>Posicionamiento SEO y SEM</h2>
                <p>
                    El propósito de su sitio web es generar valor ya sea generando ventas o en posicionamiento de marca.
                </p>
                <p>
                    <b>SEO </b>significa Search Engine Optimization (optimización de motor de búsqueda) y es el proceso
                    de mejorar la visibilidad de su sitio web en los resultados orgánicos de los diferentes buscadores.
                </p>
                <p>
                    <b>SEM</b> significa Search Engine Marketing (Mercadeo en motor de búsqueda) y se refiere a la
                    promoción de un sitio web en motores de búsqueda, mediante el uso de métodos de pago u otros medios,
                    como la colocación de anuncios en sitios webs o blogs muy visitados y relevantes para su público
                    objetivo.
                </p>

                </p>
            </article>
            <figure class="col-7">
                <img src="{{url('img/marketing.svg')}}" alt="">
            </figure>
        </div>
    </section>
@endsection
@section('scripts')
    <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
    <script>
        particlesJS('particles-js', {
            "particles": {
                "number": {
                    "value": 10,
                    "density": {
                        "enable": true,
                        "value_area": 800
                    }
                },
                "color": {
                    "value": "red",
                    "value": {r: 255, g: 255, b: 255},
                    "value": ["#f00", "#0f0", "#00f"],
                    "value": "random"
                },
                "shape": {
                    "type": "circle",
                    "stroke": {
                        "width": 0,
                        "color": "#930e0e"
                    },
                    "polygon": {
                        "nb_sides": 3
                    },
                    "image": {
                        "src": "img/github.svg",
                        "width": 100,
                        "height": 100
                    }
                },
                "opacity": {
                    "value": 0.5,
                    "random": false,
                    "anim": {
                        "enable": false,
                        "speed": 1,
                        "opacity_min": 0.1,
                        "sync": false
                    }
                },
                "size": {
                    "value": 5,
                    "random": true,
                    "anim": {
                        "enable": false,
                        "speed": 40,
                        "size_min": 0.1,
                        "sync": false
                    }
                },
                "line_linked": {
                    "enable": false,
                    "distance": 678.6669718037544,
                    "color": "#c83232",
                    "opacity": 1,
                    "width": 12.626362266116363
                },
                "move": {
                    "enable": true,
                    "speed": 6,
                    "direction": "none",
                    "random": false,
                    "straight": false,
                    "out_mode": "out",
                    "bounce": false,
                    "attract": {
                        "enable": false,
                        "rotateX": 600,
                        "rotateY": 1200
                    }
                }
            },
            "interactivity": {
                "detect_on": "canvas",
                "events": {
                    "onhover": {
                        "enable": false,
                        "mode": "grab"
                    },
                    "onclick": {
                        "enable": false,
                        "mode": "push"
                    },
                    "resize": true
                },
                "modes": {
                    "grab": {
                        "distance": 1500,
                        "line_linked": {
                            "opacity": 1
                        }
                    },
                    "bubble": {
                        "distance": 400,
                        "size": 272.0458661209506,
                        "duration": 2,
                        "opacity": 8,
                        "speed": 3
                    },
                    "repulse": {
                        "distance": 200,
                        "duration": 0.4
                    },
                    "push": {
                        "particles_nb": 4
                    },
                    "remove": {
                        "particles_nb": 2
                    }
                }
            },
            "retina_detect": true
        });
    </script>
@endsection