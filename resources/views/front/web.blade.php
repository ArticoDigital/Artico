@extends('layouts.front')
@section('title') Diseño de páginas web en Bogotá @endsection
@section('header')

@endsection
@section('content')
    <section class="section-topPage row center middle wedo-top">
        <h1>Diseño de Páginas Web en Bogotá </h1>
    </section>
    <section class=" wedo-title">
        <article class="content ">
            <h2>
                Es claro que un sitio web es la herramienta de marketing más importante. Su mensaje es
                entregado en un corto período de tiempo a su público objetivo. Diseñamos sitios
                web intuitivas, pensando en los usuarios, haciendo que tengan una experiencia agradable, positiva e
                inolvidable.
            </h2>

        </article>
    </section>

    <section id="particles-js" class="wedo-content">
        <div class="content row between">
            <h4></h4>
            <article class="col-5 medium-7 small-14">
                <img src="{{asset('img/web.jpg')}}" alt="">
                <h3>Sitio web básico</h3>
                <p>Cada sitio web es completamente a la medida, diseñado desde cero para adaptarse a las especificaciones de los clientes. Esta opción es perfecta para empendedores o empresas que esten iniciando y quieran dar a conocer o suministrar información a sus clientes, bien sean servicios, productos, ubicación o cualquier medio de contacto. </p>
            </article>
            <article class="col-5 medium-7 small-14">
                <img src="{{asset('img/administrable.jpg')}}" alt="">
                <h3>web administrable</h3>
                <p>Tener un sitio web que no se actualiza, no traerá visitas.
                    Los CMS son intuitivo, por lo que ni siquiera tendrás que preguntar cómo usarlo!. Si se trata de actualizar el blog, los horarios de la tienda, perfiles o la adición de productos, nuestro CMS se encargará de que lo hagas de la manera más simple. Además de poder agregar las páginas que desee, puede añadir imágenes, PDF, vídeos y audio.

                </p>
            </article>
            <article class="col-5 medium-7 small-14">
                <img src="{{asset('img/catalog.jpg')}}" alt="">
                <h3>Cátalogo en línea</h3>
                <p>
                    Pequeñas y grandes empresas se han dado cuenta de la importancia de tener la capacidad de ofrecer sus productos las 24 horas del día, 7 días a la semana. Llegue a sus  clientes mostrando sus productos de manera rápida y sencilla a través de nuestra opción de cátalogo en línea. Esta opción le permite escalar facilmente y  convertir su cátalogo en una tienda en línea cuando lo desee.
                </p>
            </article>
            <article class="col-5 medium-7 small-14">
                <img src="{{asset('img/ecommerce.jpg')}}" alt="">
                <h3>Tienda en línea</h3>
                <p>
                    Tenemos  la capacidad de investigar su competencia y crear una experiencia de compra que le hará destacar entre la competencia y aumentar la presencia de su marca, mejorando sus ventas. Te ofrecemos una  herramienta con todas las funcionalidades que una tienda en línea necesita, invetarios, búsquedas y filtros, integración con pasarelas de pagos, conexiónes seguras SSL, y todo para que empiece a vener lo más pronto posible.




                </p>
            </article>
            <article class="col-5 medium-7 small-14">
                <img src="{{asset('img/landing.jpg')}}" alt="">
                <h3>Landing page</h3>
                <p>Comunicar a través de una página de aterrizaje o landing page, se ha convertido en una de las maneras más óptimas para llegar y captar a más interesados en el producto o servicio que se desea impulsar. Para este tipo de páginas el diseño debe ser el adecuado y único, tanto como la experiencia soportado en un plan de marketing digital que fortalezca los resultados que se desean tener. </p>
            </article>
            <article class="col-5 medium-7 small-14">
                <img src="{{asset('img/server.jpg')}}" alt="">
                <h3>Dominio y hosting</h3>
                <p>
                    Te asesoramos en la compra y la creación del dominio para tu sitio web, ya sea  .com. .co .org .edu.co, etc. Además ofrecemos según las necesidades del proyecto, hosting compartidos a muy bajo costo e incluso gratis al adquirir alguno de nuestros servicios, o servidores dedicados cuando los proyectos sean grandes o tengan un alto flujo de visitantes.
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