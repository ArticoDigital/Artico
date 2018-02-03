@extends('layouts.front')
@section('title') Agencia Diseño de Páginas Web en Bogotá @endsection
@section('description')Diseñamos páginas web en Bogotá. Creamos sitios intuitivas, pensando en los usuarios, haciendo que tengan una experiencia agradable, positiva e inolvidable.@endsection
@section('header')

@endsection
@section('content')
    <section class="section-topPage row center middle wedo-top web">
        <h1>Diseño de Páginas Web en Bogotá </h1>

    </section>
    <section class=" wedo-title">
        <article class="content ">
            <h2>
                Es claro que un sitio web es la herramienta de marketing más importante. Su mensaje es entregado
                directamente su público objetivo en un corto periodo de tiempo. Diseñamos sitios web intuitivos, pensado
                en los usuarios, haciendo que tengan una experiencia agradable, positiva e inolvidable.
            </h2>

        </article>
    </section>

    <section id="particles-js" class="wedo-content">
        <div class="content row between">
            <h4></h4>
            <article class="col-5 medium-7 small-14">
                <img src="{{asset('img/web.jpg')}}" alt="Sitio web ">
                <h3>Sitio web básico</h3>
                <p>Cada sitio web es completamente a la medida, diseñado desde cero para adaptarse a las
                    especificaciones de los clientes. Esta opción es perfecta para empendedores o empresas que esten
                    iniciando y quieran dar a conocer o suministrar información a sus clientes, bien sean servicios,
                    productos, ubicación o cualquier medio de contacto. </p>
            </article>
            <article class="col-5 medium-7 small-14">
                <img src="{{asset('img/administrable.jpg')}}" alt="sitio web administrable">
                <h3>Web administrable</h3>
                <p>Tener un sitio web que no se actualiza, no traerá visitas. Nuestro gestor de contenido (CMS) son
                    intuitivos, por lo que ni siquiera tendrás que preguntar cómo usarlo!. Si se trata de actualizar el
                    blog, los horarios de la tienda, perfiles o la adición de productos, nuestro CMS se encargará de que
                    lo hagas de la manera más simple. Además de poder agregar las páginas que desees, puedes añadir
                    imágenes, PDF, vídeos y audio.
                </p>
            </article>
            <article class="col-5 medium-7 small-14">
                <img src="{{asset('img/catalog.jpg')}}" alt="Sitio web cátalogo">
                <h3>Cátalogo en línea</h3>
                <p>
                    Pequeñas y grandes empresas se han dado cuenta de la importancia de tener la capacidad de ofrecer
                    sus productos las 24 horas del día, 7 días a la semana. Llega a tus clientes mostrando tus productos
                    de manera rápida y sencilla a través de nuestra opción de catálogo en línea. Posiciónate fácilmente
                    en internet y convierte tu catálogo en una tienda en línea cuando lo desees.
                </p>
            </article>
            <article class="col-5 medium-7 small-14">
                <img src="{{asset('img/ecommerce.jpg')}}" alt="Tienda en línea e-commerce">
                <h3>Tienda en línea</h3>
                <p>
                    Tenemos la capacidad de investigar tu competencia y crear una experiencia de compra que te hará
                    destacar entre la competencia, aumentando la presencia de tu marca y mejorando tus ventas. Te
                    ofrecemos una herramienta con todas las funciones que una tienda en línea necesita (inventarios,
                    búsquedas y filtros, integración con pasarelas de pagos, conexiones seguras SSL...) con el fin de
                    que empieces a vender lo más pronto posible.
                </p>
            </article>
            <article class="col-5 medium-7 small-14">
                <img src="{{asset('img/landing.jpg')}}" alt="Landing page">
                <h3>Landing page</h3>
                <p>
                    Una de las maneras más óptimas para llegar y captar a más interesados en el producto o servicio que
                    se desea impulsar, es comunicar a través de una página de aterrizaje o Landing page. Para este tipo
                    de páginas el diseño y la experiencia de usuario debe ser única. Por eso planificamos una estrategia
                    de marketing digital que fortalezca los resultados que se desean tener.
                </p>
            </article>
            <article class="col-5 medium-7 small-14">
                <img src="{{asset('img/server.jpg')}}" alt="Dominio y hosting">
                <h3>Dominio y hosting</h3>
                <p>
                    Te asesoramos en la compra y creación del dominio para tu sitio web, ya sea .com. .co .org .edu.co,
                    etc. Además ofrecemos según las necesidades del proyecto, hosting compartidos a muy bajo costo e
                    incluso gratuito al adquirir alguno de nuestros servicios. También te ofrecemos servidores dedicados
                    de alta capacidad, necesarios cuando las plataformas web son grandes o tienen un alto flujo de
                    visitantes.
                </p>
            </article>
        </div>
        <div class="row center">
            <div class=" portfolioButton ">
                <a href="/portafolio"> NUESTROS LOGROS</a>
            </div>
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