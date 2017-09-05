@extends('layouts.front')
@section('title') Blogs @php if(isset($blog_name_category)) echo '/'.$blog_name_category; @endphp @endsection
@section('header')

@endsection
@section('content')
    <section class="section-topPage row left middle wedo-top web">


        <div class="header-blogs"><p class="col-16 top-menu"><a href="/blogs">Inicio</a></p>
        <h1>Blogs @php if(isset($blog_name_category)) echo '/'.$blog_name_category; @endphp</h1></div>
    </section>
    

    <section id="particles-js" class="blogs-content">
        <div class="content row">

            <div class="col-12 medium-10 small-16" id="blog-zone">
                
                @foreach($blog_posts as $blog_post)
                @php
                    $date = new DateTime($blog_post->updated_at);
                    $date_formated = $date->format('F j, Y');
                    
                @endphp 
                <div class="row blog-block">      
                    <img src="{{$blog_post->post_img}}" class="col-8 medium-6 small-16" alt="">
                    <div class="col-8 medium-10 small-16">
                        <a href="/blog/{{$blog_post->post_slug}}"><h3 class="blog-title">{{$blog_post->post_title}}</h3></a>
                        <p><span class="thumb-date" itemprop="datePublished" content="{{$blog_post->created_at}}">{{$date_formated}}/<img class="inner-image" src="{{asset('img/blog-view.svg')}}"> {{$blog_post->post_views_count}} / <img class="inner-image" src="{{asset('img/blog-comments.svg')}}"> {{$blog_post->post_comments_count}} comentarios</span></p>
                        <p>{!!$blog_post->post_abstract!!} </p>
                        <a class="read-more" href="/blog/{{$blog_post->post_slug}}">Seguir leyendo</a>  <br><a class="read-more thumb-date" href="/blog/{{$blog_post->post_slug}}#disqus_thread">Comentarios</a>
                    </div>    

                </div>
                @endforeach
            {{ $blog_posts->links() }}
                
            </div>
            <div class="col-4 medium-6 small-16" id="right-side">
                <h4>Búsqueda</h4>
                
                <div class="flexsearch">
                        <div class="flexsearch--wrapper">
                            <form class="flexsearch--form" action="{{route('search')}}" method="get">
                                <div class="flexsearch--input-wrapper">
                                    <input class="flexsearch--input" name="searchfor" id="searchfor" required type="search" placeholder="Buscar">
                                </div>
                                <input class="flexsearch--submit" type="submit" value="&#10140;"/>
                            </form>
                        </div>
                </div>

                <h4 class="text_margin">Categorías</h4>
                    <ul class="blog-categorias">
                    @foreach($blog_categories as $blog_category)
                        <li><a href="/blog_categoria/{{$blog_category->slug}}">{{$blog_category->name}}</a></li>
                    @endforeach
                    </ul>
                
                <h4>Populares</h4>
                    @foreach($blog_posts_viewed as $blog_view)
                        @php
                            $date = new DateTime($blog_view->updated_at);
                            $date_formated = $date->format('F j, Y');
                        @endphp 
                         <div class="row blog-mini">
                            <div class="col-4">
                                <div class="thumbnail">
                                    <a href="/blog/{{$blog_view->post_slug}}"><img class="portrait" src="{{$blog_view->post_img}}" alt=""></a>
                                </div>
                            </div>
                            <div class="col-12">
                                <a href="/blog/{{$blog_view->post_slug}}"><span class="thumb-title">{{$blog_view->post_title}}</span></a><br>
                                <span class="thumb-date">{{$date_formated}}</span>
                            </div>    

                        </div>
                    @endforeach
                
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
    <script id="dsq-count-scr" src="//artico.disqus.com/count.js" async></script>
@endsection