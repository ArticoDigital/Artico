@extends('layouts.front')
@section('title') Desarrollo de Cursos Virtuales en Bogotá @endsection
@section('header')
@section('description')
    Desarrollo de cursos virtuales e-learning, herramientas LMS Moodle, procesos pedagógicos y generación de contenido dirigido a educación virtual.
@endsection
@endsection
@section('content')
    <section class="section-topPage row center middle wedo-top learning">
        <h1>Desarrollo de Cursos Virtuales en Bogotá</h1>
    </section>

    <section class=" wedo-title">
        <article class="content ">
            <h2>
                Ofrecemos una amplia gama de servicios en el sector e-learning, para la comodidad de la empresa u
                organización, dejando en manos expertas las tareas de construcción de cursos, implementaciones de
                tecnología e-learning, administración de plataformas o desarrollo de interactividades especializadas.
            </h2>
        </article>
    </section>
    <section class="wedo-content wedo-marketing elearning" id="particles-js">
        <div class="content row middle">
            <article class="col-16 medium-16 small-13 ">
                <h2>¿Cómo lo hacemos?</h2>
                <p>
                    Implementamos el LMS Moodle (Plataforma open-source más usada en el mundo) y contamos con un amplio conocimiento en el desarrollo de cursos con HTML5, CSS3, JAVASCRIPT y  estándar SCORM para el seguimiento y control adecuado de los estudiantes en los cursos.
                </p>
                <p>
                    Hemos desarrollado soluciones e-learning para instituciones reconocidas como la Universidad Nacional de Colombia, Lumni Colombia, Unipanamericana, Universidad Central, e-lernova.
                </p>
            </article>
            <article class="col-16 medium-16 small-13 ">
                <h2>Asesorías:</h2>
                <p>
                    Asesoramos en la adquisición de herramientas LMS, o desarrollo de nuevas funcionalidades en la plataforma moodle. Al igual para la creación de cursos virtuales y generación de contenido web dirigido  a la educación virtual (e-learning y b-learning).

                </p>
            </article>
            <article class="col-16 medium-16 small-13 ">
                <h2>Desarrollo de cursos.</h2>
                <p>
                    Desarrollamos, diseñamos y realizamos todo el proceso para la creación de cursos virtuales, a través de procesos pedagógicos, corrección de estilo, diseño y desarrollo, para garantizar la calidad del contenido educativo en la web de acuerdo a su grupo objetivo. Desarrollamos los cursos con el estándar SCORM para poder generar registros en el LMS.
                </p>
            </article>
            <article class="col-16 medium-16 small-13 ">
                <h2>SCORM</h2>
                <p>
                    Si tienes contenidos en html o flash y deseas que cumplan con el estándar SCORM, nosotros te podemos asesorar y ayudar para que los contenidos puedan generar información valiosa a la plataforma, como tiempo del estudiante en el contenido, calificación por actividades, calificación general, última página visitada, módulos o temas finalizados y estado del estudiante en el curso.

                </p>
            </article>
            <article class="col-16 medium-16 small-13 ">
                <h2>Implementación LMS </h2>
                <p>
                    Ofrecemos el servicio de administración y soporte de moodle por horas, ajustándose a sus necesidades.
                    Algunas de las acciones administrativas son:
                    Creación de cursos con las herramientas estándar de moodle.
                    Creación de evaluaciones a partir de guión.
                    Instalación de plugins.
                    Administración de cursos.
                    Asesorías.
                    Creación de usuarios.
                    Inscripción de usuarios a cursos.
                    Soporte a usuarios.
                    Modificaciones de temas gráficos.

                </p>
            </article>
            <article class="col-16 medium-16 small-13 ">
                <h2>Administración y soporte Moodle</h2>
                <p>
                    Implementamos el LMS moodle de acuerdo a su necesidad, apoyando la adquisición de la infraestructura adecuada en su organización, universidad, instituto, colegio o empresa.
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