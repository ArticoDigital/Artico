@extends('layouts.front')
@section('title') Diseño y animación 3D @endsection
@section('header')

@endsection
@section('content')
    <section class="section-topPage row center middle wedo-top ">
        <h1>Diseño y animación 3D</h1>
    </section>

    <section class=" wedo-title">
        <article class="content ">
            <h2>
                El diseño 3D, supone una gran ventaja competitiva al momento de mostrar o diseñar un producto y
                servicios, por eso contamos con las más avanzadas técnicas de visualización 3D como la Animación,
                Rendering, la Realidad Aumentada, la Realidad Virtual o los Simuladores Virtuales on line.
            </h2>
        </article>
    </section>
    <section class="wedo-content wedo-marketing ThreeD" id="particles-js">
        <div class="content row middle">
            <article class="col-16 medium-16 small-13 ">
                <h2>Renders Arquitectonicos</h2>
                <p>Infografías 3D o 2D para la comercialización de espacios inmobiliarios.  </p>
            </article>
            <article class="col-16 medium-16 small-13 ">
                <h2>Animación Arquitectónica</h2>
                <p>
                    ecorridos virtuales en video, donde se muestra de una forma más detallada, amplía y estética los proyectos arquitectónicos.Realización de fotomontajes arquitectónicos, mezclando renders arquitectónicos con ambientes reales.
                </p>
            </article>
            <article class="col-16 medium-16 small-13 ">
                <h2>3D Mobile Marketing, Aplicaciones de Realidad Virtual y Aumentada.</h2>
                <p>
                    Aplicaciones en 3D para la comercialización de proyectos que busquen diferenciación en el mercado, Por medio de la personalización y el manejo de modelos 3D interactivos, enfocados en la experiencia positiva del espectador o usuario.
                </p>
            </article>
            <article class="col-16 medium-16 small-13 ">
                <h2>Animación 3D para videos industriales</h2>
                <p>
                    Simulaciones en video para mostrar de forma más detallada procesos industriales de productos o servicios.

                </p>
            </article>
            <article class="col-16 medium-16 small-13 ">
                <h2>Diseño Y publicidad 3D</h2>
                <p>
                    Presentación de Proyectos en 3D de exposiciones, congresos, conferencias, diseño de stands e infografías corporativas.

                </p>
            </article>
           
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
