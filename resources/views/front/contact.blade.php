@extends('layouts.front')
@section('title') Contacto @endsection
@section('header')

@endsection
@section('content')
    <div id="map"></div>
    <section class="container Contact">
        <h2 class="Contact-h2">Deseamos trabajar contigo</h2>
        <p class="Contact-p">
            Aquí, en la forma, no usamos plantillas, no hacemos sitios web estándar. Esto significa que creamos
            soluciones a medida para usted y su marca. Así que cuanta más información nos puede dar, más precisa será la
            cita será. Si prefiere encontrarse cara a cara, eso está bien, rellene el siguiente formulario y nos
            pondremos en contacto tan pronto como sea posible o, alternativamente, el anillo Andy en 01942 894596
        </p>
        <ul class="row center middle Contact-ul">
            <li class="col-4 small-16 medium-8">
                <svg width="63px" height="59px" viewBox="0 0 63 59" version="1.1" xmlns="http://www.w3.org/2000/svg"
                     xmlns:xlink="http://www.w3.org/1999/xlink">
                    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <g id="iPad-Pro-Portrait-Copy-2" transform="translate(-597.000000, -746.000000)"
                           fill-rule="nonzero" fill="#367DFF">
                            <g id="Group-2" transform="translate(553.000000, 743.000000)">
                                <g id="noun_1046031_cc" transform="translate(44.000000, 2.000000)">
                                    <g id="Group" transform="translate(0.000000, 0.439876)">
                                        <path d="M29.5258614,0.856455172 L0.560343793,22.2345862 C0.21150931,22.492 -0.00335965517,22.9217172 -1.03448267e-06,23.3552207 L-1.03448267e-06,57.836069 C0.000102413793,58.5582069 0.65713,59.2151724 1.37930931,59.2153103 L60.6896545,59.2153103 C61.4118338,59.2151724 62.0688614,58.5582069 62.0689648,57.836069 L62.0689648,23.3552207 C62.0724131,22.9217172 61.8574545,22.492 61.50862,22.2345862 L32.5431028,0.856455172 C32.3065786,0.686751724 32.0152338,0.594744828 31.7241372,0.597848276 L30.3448269,0.597848276 C30.0380821,0.567503448 29.7549234,0.758434483 29.5258614,0.856455172 L29.5258614,0.856455172 Z M30.7758614,3.35631724 L31.2931028,3.35631724 L57.8879303,23.0104069 L31.2499993,42.6644828 L30.8189648,42.6644828 L4.18103379,23.0104069 L30.7758614,3.35631724 Z M2.75861966,25.3809655 L29.5258614,45.1428276 C29.7597166,45.320069 30.0513648,45.4198621 30.3448269,45.4229655 L31.7241372,45.4229655 C32.0175993,45.4229655 32.3092476,45.320069 32.5431028,45.1428276 L59.3103441,25.3809655 L59.3103441,56.4568276 L2.75861966,56.4568276 L2.75861966,25.3809655 Z"
                                              id="Shape"></path>
                                    </g>
                                </g>
                            </g>
                        </g>
                    </g>
                </svg>
                <span class="Contact-span">Envíenos un correo</span>
                <a class="Contact-link" href="mailto:hola@artico.io">hola@artico.io</a>
            </li>
            <li class="col-4 small-16 medium-8">
                <svg width="36px" height="60px" viewBox="0 0 36 60" version="1.1" xmlns="http://www.w3.org/2000/svg"
                     xmlns:xlink="http://www.w3.org/1999/xlink">
                    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <g id="iPad-Pro-Portrait-Copy-2" transform="translate(-832.000000, -745.000000)"
                           fill-rule="nonzero" fill="#367DFF">
                            <g id="Group-2" transform="translate(553.000000, 743.000000)">
                                <g id="noun_892021_cc" transform="translate(279.000000, 2.000000)">
                                    <g id="Group" transform="translate(0.000000, 0.425213)">
                                        <path d="M7.33333333,3.55271368e-15 C3.29373333,3.55271368e-15 0,3.29372 0,7.33333333 L0,51.3333667 C0,55.3729667 3.29373333,58.6667 7.33333333,58.6667 L28.6666667,58.6667 C32.7062667,58.6667 36,55.3729667 36,51.3333667 L36,7.33333333 C36,3.29372 32.7062667,3.55271368e-15 28.6666667,3.55271368e-15 L7.33333333,3.55271368e-15 Z M7.33333333,2.66666667 L28.6666667,2.66666667 C31.0484,2.66666667 32.9754667,4.38262667 33.2916667,6.66666667 L2.70833333,6.66666667 C3.02453333,4.38262667 4.9516,2.66666667 7.33333333,2.66666667 Z M2.66666667,9.33333333 L33.3333333,9.33333333 L33.3333333,46.6667 L2.66666667,46.6667 L2.66666667,9.33333333 Z M2.66666667,49.3333667 L33.3333333,49.3333667 L33.3333333,51.3333667 C33.3333333,53.9417667 31.2750667,56.0000333 28.6666667,56.0000333 L7.33333333,56.0000333 C4.72493333,56.0000333 2.66666667,53.9417667 2.66666667,51.3333667 L2.66666667,49.3333667 Z M18,50.6667 C16.8954667,50.6667 16,51.5621 16,52.6667 C16,53.7712333 16.8954667,54.6667 18,54.6667 C19.1046,54.6667 20,53.7712333 20,52.6667 C20,51.5621 19.1046,50.6667 18,50.6667 Z"
                                              id="Shape"></path>
                                    </g>
                                </g>
                            </g>
                        </g>
                    </g>
                </svg>
                <span class="Contact-span">Llámenos </span>
                <a class="Contact-link" href="tel:573005549372">(+57) 300 554 93 72</a>
            </li>
            <li class="col-4 small-16 medium-8">
                <svg width="43px" height="60px" viewBox="0 0 43 60" version="1.1" xmlns="http://www.w3.org/2000/svg"
                     xmlns:xlink="http://www.w3.org/1999/xlink">
                    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <g id="iPad-Pro-Portrait-Copy-2" transform="translate(-1052.000000, -743.000000)"
                           fill-rule="nonzero" fill="#367DFF">
                            <g id="Group-2" transform="translate(553.000000, 743.000000)">
                                <g id="noun_934413_cc" transform="translate(499.000000, 0.000000)">
                                    <path d="M21.2903226,2.41935484 C31.6749375,2.4005833 40.1159596,10.7896606 40.1612903,21.1741935 C40.1612903,25.8580645 37.1080645,34.2677419 32.1967742,43.1129032 C30.2403675,46.702241 28.0095338,50.1350394 25.5241935,53.3806452 C23.0032258,56.5741935 21.6532258,57.3629032 21.2903226,57.5419355 C20.9080645,57.3629032 19.5774194,56.5741935 17.0564516,53.3806452 C14.5713216,50.1365894 12.3404924,46.7054155 10.383871,43.1177419 C5.47258065,34.2677419 2.41935484,25.8629032 2.41935484,21.1741935 C2.46468561,10.7896606 10.9057076,2.4005833 21.2903226,2.41935484 L21.2903226,2.41935484 Z M21.2903226,5.20014397e-14 C15.6591712,-0.0154207418 10.2525336,2.20676715 6.25981903,6.17770328 C2.26710446,10.1486394 0.0153786278,15.5430421 0,21.1741935 C-1.71905501e-15,32.8741935 15.9677419,60 21.2903226,60 C26.6129032,60 42.5806452,32.8741935 42.5806452,21.1741935 C42.5652665,15.5430421 40.3135407,10.1486394 36.3208261,6.17770328 C32.3281116,2.20676715 26.9214739,-0.0154207418 21.2903226,4.86707706e-14 L21.2903226,5.20014397e-14 Z"
                                          id="Shape"></path>
                                    <path d="M21.2903226,13.4467742 C24.5820222,13.4467753 27.2507208,16.1147534 27.2516107,19.4064529 C27.2525006,22.6981524 24.5852449,25.3675731 21.2935458,25.369354 C18.0018466,25.3711348 15.3317041,22.7046018 15.3290323,19.4129032 C15.3316957,16.1208935 17.9983161,13.4521086 21.2903226,13.4467742 L21.2903226,13.4467742 Z M21.2903226,11.0274194 C16.6624501,11.0274201 12.9105691,14.7785802 12.909679,19.4064525 C12.9087888,24.0343249 16.6592265,27.786928 21.2870986,27.7887091 C25.9149708,27.7904901 29.6682958,24.0407749 29.6709677,19.4129032 C29.6722515,17.1893797 28.78986,15.0564865 27.218045,13.483764 C25.64623,11.9110415 23.5138465,11.027419 21.2903226,11.0274194 L21.2903226,11.0274194 Z"
                                          id="Shape"></path>
                                </g>
                            </g>
                        </g>
                    </g>
                </svg>
                <span class="Contact-span">Visítenos</span>
                <a class="Contact-link" href="#">Cra 22 # 80-10 Bogotá - Col </a>
            </li>
            <li class="col-4 small-16 medium-8">
                <svg width="44px" height="60px" viewBox="0 0 44 60" version="1.1" xmlns="http://www.w3.org/2000/svg"
                     xmlns:xlink="http://www.w3.org/1999/xlink">
                    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <g id="iPad-Pro-Portrait-Copy-2" transform="translate(-1299.000000, -745.000000)"
                           fill-rule="nonzero">
                            <g id="Group-2" transform="translate(553.000000, 743.000000)">
                                <g id="noun_924752_cc" transform="translate(746.000000, 2.000000)">
                                    <g id="Group-3">
                                        <path d="M31.358,9.89 L12.642,9.89 C12.098,9.89 11.656,9.448 11.656,8.90133333 L11.656,0.989333333 C11.656,0.442666667 12.0973333,0 12.642,0 L31.358,0 C31.902,0 32.344,0.442666667 32.344,0.989333333 L32.344,8.90133333 C32.344,9.448 31.9026667,9.89 31.358,9.89 Z M13.6266667,7.91266667 L30.3733333,7.91266667 L30.3733333,1.978 L13.6266667,1.978 L13.6266667,7.91266667 Z"
                                              id="Shape" fill="#367DFF"></path>
                                        <ellipse id="Oval" fill="#367DFF" cx="18.3953333" cy="4.94533333"
                                                 rx="1.58666667" ry="1.59333333"></ellipse>
                                        <ellipse id="Oval" fill="#367DFF" cx="25.6053333" cy="4.94533333"
                                                 rx="1.58733333" ry="1.59333333"></ellipse>
                                        <rect id="Rectangle-path" fill="#367DFF" x="5.962" y="15.8246667" width="16.038"
                                              height="1.97733333"></rect>
                                        <rect id="Rectangle-path" fill="#367DFF" x="5.962" y="26.154" width="31.5526667"
                                              height="1.978"></rect>
                                        <rect id="Rectangle-path" fill="#367DFF" x="5.962" y="32.1433333"
                                              width="31.5526667" height="1.978"></rect>
                                        <rect id="Rectangle-path" fill="#367DFF" x="5.962" y="38.132" width="31.5526667"
                                              height="1.978"></rect>
                                        <rect id="Rectangle-path" fill="#367DFF" x="5.962" y="44.1213333"
                                              width="31.5526667" height="1.978"></rect>
                                        <rect id="Rectangle-path" fill="#367DFF" x="5.962" y="50.11" width="31.5526667"
                                              height="1.978"></rect>
                                        <path d="M43.0146667,60 L0.985333333,60 C0.441333333,60 0,59.558 0,59.0113333 L0,4.94533333 C0,4.39866667 0.441333333,3.95666667 0.985333333,3.95666667 L12.642,3.95666667 C13.186,3.95666667 13.6273333,4.39933333 13.6273333,4.94533333 L13.6273333,7.91266667 L30.3733333,7.91266667 L30.3733333,4.94533333 C30.3733333,4.39866667 30.814,3.95666667 31.3586667,3.95666667 L43.0153333,3.95666667 C43.56,3.95666667 44.0006667,4.39933333 44.0006667,4.94533333 L44.0006667,59.0113333 C44,59.558 43.56,60 43.0146667,60 Z M1.97,58.022 L42.03,58.022 L42.03,5.934 L32.344,5.934 L32.344,8.90133333 C32.344,9.448 31.9026667,9.89 31.358,9.89 L12.642,9.89 C12.098,9.89 11.656,9.448 11.656,8.90133333 L11.656,5.934 L1.97,5.934 L1.97,58.022 Z"
                                              id="Shape" fill="#367DFF"></path>
                                    </g>
                                </g>
                            </g>
                        </g>
                    </g>
                </svg>
                <span class="Contact-span"> Listo para iniciar una idea </span>
                <a class="Contact-link" href="#">Escríbenos en el formulario</a>
            </li>
        </ul>
        <article>
            <ul class="Contact-selectForm row center middle small-16">
                <li class="col-8 medium-8 Contact-selectFormSelect small-16">Planea tu proyecto</li>
                <li class="col-8 medium-8">Envia un mensaje</li>
            </ul>
            <form action="" class="Contact-form">
                <fieldset>
                    <h3>Háblanos de ti</h3>
                    <hr>
                    <div class="Contact-contentForm">
                        <div class="row between">
                            <label for="" class="col-8 medium-8 small-16"><input type="text"
                                                                                 placeholder="Nombre"></label>
                            <label for="" class="col-8 medium-8 small-16"><input type="email"
                                                                                 placeholder="Email"></label>
                        </div>
                        <div class="row between">
                            <label for="" class="col-8 medium-8 small-16"><input type="text"
                                                                                 placeholder="Celular"></label>
                            <label for="" class="col-8 medium-8 small-16"><input type="text"
                                                                                 placeholder="Teléfono "></label>
                        </div>
                        <h3>Cuéntanos de tu empresa</h3>
                        <hr>
                        <div class="row between">
                            <label for="" class="col-8 medium-8 small-16"><input type="text"
                                                                                 placeholder="Nombre Empresa"></label>
                            <label for="" class="col-8 medium-8 small-16"><input type="text"
                                                                                 placeholder="Sitio web"></label>
                        </div>
                        <div class="row between">
                            <label for="" class="col-8 medium-8 small-16"><input type="text"
                                                                                 placeholder="¿En qué ciudad están?"></label>
                            <label for="" class="col-8 medium-8 small-16"><input type="text"
                                                                                 placeholder="¿A qué se dedica tu empresa?"></label>
                        </div>
                    </div>
                    <h3>¿Con que necesitas ayuda?</h3>
                    <hr>

                    <div class="row between">
                        <label for="website" class="col-5 medium-5 small-16">
                            <input id="website" type="checkbox"> <span>Sitio web</span>
                        </label>
                        <label for="appmobile" class="col-5 medium-5 small-16">
                            <input id="appmobile" type="checkbox"> <span>Aplicación móvil</span>
                        </label>
                        <label for="appweb" class="col-5 medium-5 small-16  ">
                            <input type="checkbox" id="appweb"> <span>Aplicación web</span>
                        </label>
                        <label for="seo" class="col-5 medium-5 small-16  ">
                            <input type="checkbox" id="seo"> <span>Posicionamiento web</span>
                        </label>
                        <label for="3d" class="col-5 medium-5 small-16  ">
                            <input type="checkbox" id="3d"> <span>Animación y diseño 3D</span>
                        </label>
                        <label for="3d" class="col-5 medium-5 small-16 ">
                            <input type="checkbox" id="3d"> <span>E-learning</span>
                        </label>
                        <label for="rrss" class="col-5 medium-5 small-16  ">
                            <input type="checkbox" id="rrss"> <span>Campaña en redes </span>
                        </label>
                        <label for="landing" class="col-5 medium-5 small-16  ">
                            <input type="checkbox" id="landing"> <span>E-mail marketing</span>
                        </label>
                        <label for="adwords" class="col-5 medium-5 small-16  ">
                            <input type="checkbox" id="adwords"> <span>Pauta en adwords</span>
                        </label>
                    </div>
                    <h3>¿Cuál es el presupuesto?</h3>
                    <hr>
                    <div class="Contact-range row middle">
                        <div class="col-4 medium-6 small-16 Contact-rangeNumber">
                            <input type="text" value="$3,000,000" min="500000" max="20000000" readonly/> -
                            <input type="text" value="$4,000,000" min="500000" max="20000000" readonly/>
                        </div>
                        <div class="col-12 medium-10 small-16">
                            <input value="3000000" min="500000" max="20000000" step="100000" type="range"/>
                            <input value="4000000" min="500000" max="20000000" step="100000" type="range"/>
                        </div>
                    </div>
                    <div class="row middle between">
                        <label for="datei" class="col-5 medium-5 small-16  ">
                            <em>Fecha inicio ideal</em>
                            <input type="date" id="datei">
                        </label>
                        <label for="datel" class="col-5 medium-5 small-16  ">
                            <em>Fecha final ideal</em>
                            <input type="date" id="datel">
                        </label>
                        <label for="notsure" class="col-5 medium-5 small-16  ">
                            <input type="checkbox" id="notsure"> <span>No tengo idea</span>
                        </label>
                    </div>
                    <h3>Resumen del proyecto</h3>
                    <hr>
                    <textarea name="" id="" placeholder="Escriba de que trata su proyecto"></textarea>
                    <button class="button  Contact-formButton">ENVIAR SOLICITUD  </button>
                </fieldset>

            </form>
        </article>
    </section>
@endsection
@section('scripts')
    <script async defer
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDrhX-WElUsi_iyMJ2NNC741pN_mQUIhVE&callback=initMap">
    </script>
    <script>
        const formBtn = document.querySelectorAll('.Contact-selectForm li');
        formBtn.forEach(function (el) {
            el.addEventListener('click', function () {
                formBtn.forEach(function (e) {
                    e.classList.remove('Contact-selectFormSelect')
                })
                this.classList.add('Contact-selectFormSelect')
            });
        })
        function initMap() {
            const bogota = {lat: 4.6679914, lng: -74.0620331},
                map = new google.maps.Map(document.getElementById('map'), {
                    zoom: 16,
                    center: bogota,
                    styles: styleMap,
                    scrollwheel: false,
                }),
                marker = new google.maps.Marker({
                    position: bogota,
                    map: map,
                    icon: '/img/pin.png'
                });
            marker.addListener('click', function () {
                infowindow.open(map, marker);
            });
            var infowindow = new google.maps.InfoWindow({
                content: '<h4 >Ártico Digital</h4>' +
                '<div id="bodyContent">' +
                '<p>Cra 22 #80-10 Bogotá - Colombia</p>' +
                '</div>'
            });
        }
        (function () {

            const parent = document.querySelector(".Contact-range");
            if (!parent) return;

            const rangeS = parent.querySelectorAll(".Contact-range input[type=range]"),
                numberS = parent.querySelectorAll(".Contact-range input[type=text]");

            rangeS.forEach(function (el) {
                el.oninput = function () {
                    var slide1 = parseFloat(rangeS[0].value),
                          slide2 = parseFloat(rangeS[1].value);

                    if (slide1 > slide2) {
                        [slide1, slide2] = [slide2, slide1];
                    }
                    numberS[0].style.width = (slide1 > 10000000) ? '108px' : '97px';

                    numberS[0].value = '$' + slide1.toLocaleString();
                    numberS[1].value = '$' + slide2.toLocaleString();
                }
            });
        })();
        const styleMap = [
            {
                "featureType": "administrative",
                "elementType": "labels.text.fill",
                "stylers": [
                    {
                        "color": "#444444"
                    }
                ]
            },
            {
                "featureType": "administrative.country",
                "elementType": "geometry.fill",
                "stylers": [
                    {
                        "visibility": "on"
                    }
                ]
            },
            {
                "featureType": "landscape",
                "elementType": "all",
                "stylers": [
                    {
                        "color": "#f2f2f2"
                    }
                ]
            },
            {
                "featureType": "poi",
                "elementType": "all",
                "stylers": [
                    {
                        "visibility": "off"
                    }
                ]
            },
            {
                "featureType": "road",
                "elementType": "all",
                "stylers": [
                    {
                        "saturation": -100
                    },
                    {
                        "lightness": 45
                    }
                ]
            },
            {
                "featureType": "road.highway",
                "elementType": "all",
                "stylers": [
                    {
                        "visibility": "simplified"
                    }
                ]
            },
            {
                "featureType": "road.arterial",
                "elementType": "labels.icon",
                "stylers": [
                    {
                        "visibility": "off"
                    }
                ]
            },
            {
                "featureType": "transit",
                "elementType": "all",
                "stylers": [
                    {
                        "visibility": "off"
                    }
                ]
            },
            {
                "featureType": "water",
                "elementType": "all",
                "stylers": [
                    {
                        "color": "#5E89E0"
                    },
                    {
                        "visibility": "on"
                    }
                ]
            }
        ]
    </script>
@endsection