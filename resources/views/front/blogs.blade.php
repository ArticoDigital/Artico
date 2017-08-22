@extends('layouts.front')
@section('title') Diseño de páginas web en Bogotá @endsection
@section('header')

@endsection
@section('content')
    <section class="section-topPage row center middle wedo-top web">
        <h1>Blogs </h1>
    </section>
    

    <section id="particles-js" class="blogs-content">
        <div class="content row">

            <div class="col-12" id="blog-zone">
                <div class="row blog-block">
                    <img src="{{asset('img/web.jpg')}}" class="col-8" alt="">
                    <div class="col-8">
                        <h3 class="blog-title">Sitio web básico</h3>
                        <p><span class="thumb-date">Agosto 15, 2017/<img class="inner-image" src="{{asset('img/blog-view.svg')}}"> 63 / <img class="inner-image" src="{{asset('img/blog-comments.svg')}}"> 0 comentarios</span></p>
                        <p>Cada sitio web es completamente a la medida, diseñado desde cero para adaptarse a las especificaciones de los clientes. Esta opción es perfecta para empendedores o empresas que esten iniciando y quieran dar a cualquier medio de contacto. </p>
                        <a class="read-more" href="">Seguir leyendo</a>
                    </div>    

                </div>
                <div class="row blog-block">
                    <img src="{{asset('img/web.jpg')}}" class="col-8" alt="">
                    <div class="col-8">
                        <h3 class="blog-title">Sitio web básico</h3>
                        <p><span class="thumb-date">Agosto 15, 2017/<img class="inner-image" src="{{asset('img/blog-view.svg')}}"> 63 / <img class="inner-image" src="{{asset('img/blog-comments.svg')}}"> 0 comentarios</span></p>
                        <p>Cada sitio web es completamente a la medida, diseñado desde cero para adaptarse a las especificaciones de los clientes. Esta opción es perfecta para empendedores o empresas que esten iniciando y quieran dar a cualquier medio de contacto. </p>
                        <a class="read-more" href="">Seguir leyendo</a>
                    </div>    

                </div>
                
            </div>
            <div class="col-4" id="right-side">
                <h4>Búsqueda</h4>
                
<div class="flexsearch">
        <div class="flexsearch--wrapper">
            <form class="flexsearch--form" action="#" method="post">
                <div class="flexsearch--input-wrapper">
                    <input class="flexsearch--input" type="search" placeholder="Buscar">
                </div>
                <input class="flexsearch--submit" type="submit" value="&#10140;"/>
            </form>
        </div>
</div>
                <h4>Categorías</h4>
                    <ul class="blog-categorias">
                        <li>DESARROLLO</li>
                        <li>DISEÑO</li>
                    </ul>
                
                <h4>Populares</h4>
                 <div class="row blog-mini">
                    <div class="col-4">
                        <div class="thumbnail">
                            <img class="portrait" src="{{asset('img/web.jpg')}}" alt="">
                        </div>
                    </div>
                    <div class="col-12">
                        <span class="thumb-title">Programación básica</span><br>
                        <span class="thumb-date">Agosto 15, 2017</span>
                    </div>    

                </div>
                <div class="row blog-mini">
                    <div class="col-4">
                        <div class="thumbnail">
                            <img class="portrait" src="{{asset('img/web.jpg')}}" alt="">
                        </div>
                    </div>
                    <div class="col-12">
                        <span class="thumb-title">Programación básica</span><br>
                        <span class="thumb-date">Agosto 15, 2017</span>
                    </div>    

                </div>
                
            </div>
        

        </div>
        
        
    
    </section>

@endsection
@section('scripts')
<style type="text/css">
    /*@import "compass/css3";

/***********************
 * Essential Structure *
 ***********************/
.flexsearch--wrapper {
    height: auto;
    width: auto;
    max-width: 100%;
    overflow: hidden;
    background: transparent;
    margin: 0;
    position: static;
}
    
.flexsearch--form {
    overflow: hidden;
    position: relative;
}
    
.flexsearch--input-wrapper {
    padding: 0 66px 0 0; /* Right padding for submit button width */
    overflow: hidden;
}

.flexsearch--input {
  width: 100%;
}

/***********************
 * Configurable Styles *
 ***********************/


.flexsearch--input {
  -webkit-box-sizing: content-box;
    -moz-box-sizing: content-box;
    box-sizing: content-box;
    height: 50px;
  padding: 0 46px 0 10px;
    border-color: #fafafa;
  border-radius: 35px; /* (height/2) + border-width */
  border-style: solid;
    border-width: 5px;
  margin-top: 15px;
  color: #333;
  font-family: 'Helvetica', sans-serif;
    font-size: 20px;
    -webkit-appearance: none;
    -moz-appearance: none;
   background-color: #fafafa;
}
    
.flexsearch--submit {
  position: absolute;
    right: 0;
    top: 0;
    display: block;
    width: 50px;
    height: 50px;
  padding: 0;
  border: none;
    margin-top: 20px; /* margin-top + border-width */
  margin-right: 5px; /* border-width */
    background: transparent;
  color: #888;
  font-size: 35px;
  line-height: 50px;
}

.flexsearch--input:focus {
  outline: none;
  border-color: #adadad;
}

.flexsearch--input:focus.flexsearch--submit {
    color: #333; 
}

.flexsearch--submit:hover {
  color: #333;
  cursor: pointer;
}

::-webkit-input-placeholder {
    color: #888;  
}

input:-moz-placeholder {
  color: #888
}


</style>
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