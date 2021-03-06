@extends('layouts.front')
@section('title', 'Agencia de Publicidad en Bogotá')
@section('headerClass') Header-home @endsection
@section('classBody') home @endsection
@section('header')
    @include('front.includes.header-home')
@endsection
@section('content')
    @include('front.includes.polo-footer')
    <aside class="Home-menu">
        <ul>
            <li><a href="#body" rel="nofollow" class="active" data-index="0"></a></li>
            <li><a href="#portafolio" rel="nofollow" rel="nofollow" data-index="1"></a></li>
            <li><a href="#artico" rel="nofollow" data-index="2"></a></li>
            <li><a href="#servicios" rel="nofollow" data-index="3"></a></li>
            <li><a href="#como-lo-hacemos" rel="nofollow" data-index="4"></a></li>
            <li><a href="#contacto" rel="nofollow" data-index="5"></a></li>
            <li><a href="#redes-sociales" rel="nofollow" data-index="6"></a></li>
        </ul>
    </aside>
    <section class="container Home">
        @include('front.includes.porfolio-home')
    </section>
    <section class="Home-about row center middle scrollTarget" id="#artico">
        <blockquote>
            <span>‘‘</span>
            <svg width="152px" height="33px" viewBox="0 0 152 33" version="1.1" xmlns="http://www.w3.org/2000/svg"
                 xmlns:xlink="http://www.w3.org/1999/xlink">

                <defs></defs>
                <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <g id="iPad-Pro-Landscape" transform="translate(-80.000000, -90.000000)" fill="#FFFFFF">
                        <g id="Group-7" transform="translate(80.000000, 90.000000)">
                            <path d="M43.4059091,25 L41.1839091,25 L39.5559091,20.666 L33.4399091,20.666 L31.8339091,25 L29.7219091,25 L35.3979091,10.722 L37.8619091,10.722 L43.4059091,25 Z M39.0279091,19.192 L36.6079091,12.746 L36.4099091,12.746 L33.9899091,19.192 L39.0279091,19.192 Z M39.7099091,6.74 L36.9599091,9.534 L35.3319091,9.534 L37.3119091,6.74 L39.7099091,6.74 Z M51.1939091,15.826 L50.0939091,15.826 C49.1845712,15.826 48.5135779,15.9433322 48.0809091,16.178 C47.6482403,16.4126678 47.4319091,16.8526634 47.4319091,17.498 L47.4319091,25 L45.4519091,25 L45.4519091,14.352 L47.3219091,14.352 L47.3219091,16.09 C47.3219091,15.5766641 47.6409059,15.122002 48.2789091,14.726 C48.9169123,14.329998 49.5659058,14.132 50.2259091,14.132 L51.1939091,14.132 L51.1939091,15.826 Z M59.8619091,25.044 C59.1579056,25.1613339 58.4172463,25.22 57.6399091,25.22 C56.3052358,25.22 55.3739117,24.9890023 54.8459091,24.527 C54.3179065,24.0649977 54.0539091,23.1886731 54.0539091,21.898 L54.0539091,15.65 L51.6779091,15.65 L51.6779091,14.352 L54.0539091,14.352 L54.0539091,11.052 L56.0559091,11.052 L56.0559091,14.352 L59.8619091,14.352 L59.8619091,15.65 L56.0559091,15.65 L56.0559091,22.008 C56.0559091,22.7706705 56.2025743,23.280332 56.4959091,23.537 C56.7892439,23.7936679 57.383238,23.922 58.2779091,23.922 C58.5125769,23.922 59.0405717,23.8633339 59.8619091,23.746 L59.8619091,25.044 Z M63.9979091,12.57 L62.0179091,12.57 L62.0179091,10.502 L63.9979091,10.502 L63.9979091,12.57 Z M63.9979091,25 L62.0179091,25 L62.0179091,14.352 L63.9979091,14.352 L63.9979091,25 Z M75.1299091,24.912 C74.1619043,25.1173344 73.025249,25.22 71.7199091,25.22 C71.0745725,25.22 70.5722442,25.2090001 70.2129091,25.187 C69.853574,25.1649999 69.4429114,25.0916673 68.9809091,24.967 C68.5189068,24.8423327 68.1669103,24.6626678 67.9249091,24.428 C67.6829079,24.1933322 67.47391,23.8523356 67.2979091,23.405 C67.1219082,22.9576644 67.0339091,22.4040033 67.0339091,21.744 L67.0339091,17.828 C67.0339091,17.2413304 67.0889085,16.7353355 67.1989091,16.31 C67.3089096,15.8846645 67.4812413,15.5400013 67.7159091,15.276 C67.9505769,15.0119987 68.1925745,14.7993341 68.4419091,14.638 C68.6912437,14.4766659 69.0322403,14.3630003 69.4649091,14.297 C69.8975779,14.2309997 70.2789074,14.1870001 70.6089091,14.165 C70.9389107,14.1429999 71.382573,14.132 71.9399091,14.132 C72.9519142,14.132 73.963904,14.2419989 74.9759091,14.462 L74.9759091,15.914 C73.8319034,15.6206652 72.7392476,15.474 71.6979091,15.474 C70.5979036,15.474 69.8829107,15.6059987 69.5529091,15.87 C69.2229074,16.1340013 69.0579091,16.6913291 69.0579091,17.542 L69.0579091,21.898 C69.0579091,22.6753372 69.2449072,23.1923321 69.6189091,23.449 C69.992911,23.7056679 70.7592366,23.834 71.9179091,23.834 C72.9592476,23.834 74.0299036,23.6946681 75.1299091,23.416 L75.1299091,24.912 Z M87.0539091,17.938 L87.0539091,21.634 C87.0539091,22.2940033 86.9732432,22.8513311 86.8119091,23.306 C86.650575,23.7606689 86.4452437,24.1126654 86.1959091,24.362 C85.9465745,24.6113346 85.5909114,24.8019993 85.1289091,24.934 C84.6669068,25.0660007 84.2269112,25.1466665 83.8089091,25.176 C83.390907,25.2053335 82.8372459,25.22 82.1479091,25.22 C81.2679047,25.22 80.5822449,25.190667 80.0909091,25.132 C79.5995733,25.073333 79.1082449,24.9303345 78.6169091,24.703 C78.1255733,24.4756655 77.7735768,24.1126692 77.5609091,23.614 C77.3482414,23.1153308 77.2419091,22.4553374 77.2419091,21.634 L77.2419091,17.938 C77.2419091,17.2339965 77.3262416,16.6400024 77.4949091,16.156 C77.6635766,15.6719976 77.8689079,15.2980013 78.1109091,15.034 C78.3529103,14.7699987 78.7085734,14.568334 79.1779091,14.429 C79.6472448,14.289666 80.0835737,14.2053335 80.4869091,14.176 C80.8902444,14.1466665 81.4439056,14.132 82.1479091,14.132 C82.8519126,14.132 83.4055737,14.1466665 83.8089091,14.176 C84.2122444,14.2053335 84.6485734,14.289666 85.1179091,14.429 C85.5872448,14.568334 85.9429079,14.7699987 86.1849091,15.034 C86.4269103,15.2980013 86.6322416,15.6719976 86.8009091,16.156 C86.9695766,16.6400024 87.0539091,17.2339965 87.0539091,17.938 Z M85.0299091,21.92 L85.0299091,17.608 C85.0299091,16.6253284 84.8319111,16.0166678 84.4359091,15.782 C84.0399071,15.5473322 83.2772481,15.43 82.1479091,15.43 C81.0185701,15.43 80.2559111,15.5473322 79.8599091,15.782 C79.4639071,16.0166678 79.2659091,16.6253284 79.2659091,17.608 L79.2659091,21.92 C79.2659091,22.3893357 79.3172419,22.7633319 79.4199091,23.042 C79.5225763,23.3206681 79.713241,23.5223327 79.9919091,23.647 C80.2705772,23.7716673 80.5565743,23.8486665 80.8499091,23.878 C81.1432439,23.9073335 81.5759062,23.922 82.1479091,23.922 C82.719912,23.922 83.1525743,23.9073335 83.4459091,23.878 C83.7392439,23.8486665 84.025241,23.7716673 84.3039091,23.647 C84.5825772,23.5223327 84.7732419,23.3206681 84.8759091,23.042 C84.9785763,22.7633319 85.0299091,22.3893357 85.0299091,21.92 Z M101.947909,14.814 L101.947909,21.128 C101.947909,23.7093462 99.9532624,25 95.9639091,25 L90.2659091,25 L90.2659091,10.722 L95.9419091,10.722 C99.9459291,10.722 101.947909,12.0859864 101.947909,14.814 Z M99.9019091,21.084 L99.9019091,14.792 C99.9019091,14.2493306 99.7919102,13.7983351 99.5719091,13.439 C99.351908,13.0796649 99.0402444,12.8156675 98.6369091,12.647 C98.2335737,12.4783325 97.8192446,12.3610003 97.3939091,12.295 C96.9685736,12.2289997 96.4772452,12.196 95.9199091,12.196 L92.3999091,12.196 L92.3999091,23.548 L95.8099091,23.548 C98.5379227,23.548 99.9019091,22.7266749 99.9019091,21.084 Z M107.051909,12.57 L105.071909,12.57 L105.071909,10.502 L107.051909,10.502 L107.051909,12.57 Z M107.051909,25 L105.071909,25 L105.071909,14.352 L107.051909,14.352 L107.051909,25 Z M119.569909,14.352 L119.569909,26.012 C119.569909,27.5226742 119.148247,28.5383307 118.304909,29.059 C117.461572,29.5796693 116.196584,29.84 114.509909,29.84 C112.999235,29.84 111.77458,29.7593341 110.835909,29.598 L110.835909,28.19 C112.522584,28.3953344 113.805905,28.498 114.685909,28.498 C115.697914,28.498 116.434907,28.3366683 116.896909,28.014 C117.358911,27.6913317 117.589909,27.1560037 117.589909,26.408 L117.589909,23.856 C117.560576,24.3546692 117.219579,24.7066656 116.566909,24.912 C115.914239,25.1173344 115.169913,25.22 114.333909,25.22 C112.691234,25.22 111.572912,24.9780024 110.978909,24.494 C110.384906,24.0099976 110.087909,23.1740059 110.087909,21.986 L110.087909,17.652 C110.087909,16.3906604 110.428906,15.4886694 111.110909,14.946 C111.792913,14.4033306 112.911235,14.132 114.465909,14.132 C116.313918,14.132 117.399241,14.5499958 117.721909,15.386 L117.721909,14.352 L119.569909,14.352 Z M117.589909,22.118 L117.589909,17.3 C117.589909,16.6106632 117.402911,16.137668 117.028909,15.881 C116.654907,15.624332 115.881248,15.496 114.707909,15.496 C113.607904,15.496 112.889244,15.6206654 112.551909,15.87 C112.214574,16.1193346 112.045909,16.5959965 112.045909,17.3 L112.045909,22.118 C112.045909,22.851337 112.225574,23.3316655 112.584909,23.559 C112.944244,23.7863345 113.66657,23.9 114.751909,23.9 C115.749247,23.9 116.471574,23.7790012 116.918909,23.537 C117.366245,23.2949988 117.589909,22.8220035 117.589909,22.118 Z M124.981909,12.57 L123.001909,12.57 L123.001909,10.502 L124.981909,10.502 L124.981909,12.57 Z M124.981909,25 L123.001909,25 L123.001909,14.352 L124.981909,14.352 L124.981909,25 Z M135.101909,25.044 C134.397906,25.1613339 133.657246,25.22 132.879909,25.22 C131.545236,25.22 130.613912,24.9890023 130.085909,24.527 C129.557906,24.0649977 129.293909,23.1886731 129.293909,21.898 L129.293909,15.65 L126.917909,15.65 L126.917909,14.352 L129.293909,14.352 L129.293909,11.052 L131.295909,11.052 L131.295909,14.352 L135.101909,14.352 L135.101909,15.65 L131.295909,15.65 L131.295909,22.008 C131.295909,22.7706705 131.442574,23.280332 131.735909,23.537 C132.029244,23.7936679 132.623238,23.922 133.517909,23.922 C133.752577,23.922 134.280572,23.8633339 135.101909,23.746 L135.101909,25.044 Z M145.661909,25 L143.747909,25 L143.747909,23.988 C143.586575,24.8093374 142.515919,25.22 140.535909,25.22 C139.069235,25.22 138.053579,24.9963356 137.488909,24.549 C136.92424,24.1016644 136.641909,23.1960068 136.641909,21.832 C136.641909,20.6439941 136.905906,19.8263356 137.433909,19.379 C137.961912,18.9316644 138.981235,18.708 140.491909,18.708 L143.681909,18.708 L143.681909,17.014 C143.681909,16.4273304 143.502244,16.0313344 143.142909,15.826 C142.783574,15.6206656 142.105247,15.518 141.107909,15.518 C140.02257,15.518 138.805249,15.6059991 137.455909,15.782 L137.455909,14.33 C138.907916,14.1979993 140.22057,14.132 141.393909,14.132 C143.183251,14.132 144.341906,14.3483312 144.869909,14.781 C145.397912,15.2136688 145.661909,16.1119932 145.661909,17.476 L145.661909,25 Z M143.681909,22.844 L143.681909,19.94 L140.623909,19.94 C139.714571,19.94 139.146244,20.0573322 138.918909,20.292 C138.691575,20.5266678 138.577909,21.0619958 138.577909,21.898 C138.577909,22.6460037 138.698908,23.1703318 138.940909,23.471 C139.18291,23.7716682 139.692572,23.922 140.469909,23.922 L140.865909,23.922 C141.247244,23.922 141.566241,23.9146667 141.822909,23.9 C142.079577,23.8853333 142.369241,23.8450003 142.691909,23.779 C143.014577,23.7129997 143.260242,23.6030008 143.428909,23.449 C143.597577,23.2949992 143.681909,23.0933346 143.681909,22.844 Z M151.073909,25 L149.093909,25 L149.093909,9.6 L151.073909,9.6 L151.073909,25 Z"
                                  id="Logotipo"></path>
                            <path d="M1.67999619,32.5327698 C0.369334029,33.465245 -0.318861521,32.9657448 0.141454539,31.4218469 L9.1653928,1.15560004 C9.62634187,-0.390420993 10.374321,-0.388297875 10.8346371,1.15560004 L19.8585753,31.4218469 C20.3195244,32.9678679 19.6288007,33.4638967 18.3200337,32.5327698 L12.3731787,28.3018587 C11.0625165,27.3693834 8.93561814,27.3707317 7.62685115,28.3018587 L1.67999619,32.5327698 Z"
                                  id="Path-12"></path>
                        </g>
                    </g>
                </g>
            </svg>
            <h1>es una agencia creativa con sede en Bogotá, Colombia,</h1> especializada en <b>POSICIONAMIENTO
                DIGITAL.</b> <br>
            Si quieres que tu marca, producto o servicio sea visto por tu público objetivo y se venda por internet,
            <br> habla conmigo. ¡Yo sé cómo hacerlo! 👊👌👍
            <span>’’</span>
            <div class="col-16">
                <a href="/quienes-somos"> Cultura Ártico <em> → </em></a>
            </div>
        </blockquote>
    </section>
    <section class="container Home">
        @include('front.includes.make-home')
        @include('front.includes.wedo-home')
    </section>


    <section class="Home-contact row center middle scrollTarget" id="#contacto">
        <div class=" center Home-contactButton ">
            <p>¿Estás listo?<span>Hagámos algo grande juntos</span></p>
            <a href="/contacto">INICIA TU PROYECTO</a>
        </div>
    </section>
@endsection
@section('scripts')

    <script src="{{asset('js/typed.js')}}"></script>
    <script src="{{asset('js/zenscroll-min.js')}}"></script>
    <script>
        const more = document.querySelector('.Header-more'),
            target = document.getElementById("target"),
            messages = document.querySelectorAll("#MessagesTyping li"),
            messagesLength = messages.length,
            messagesArray = [];
        for (var i = 0; i < messagesLength; i++) {
            var message = messages[i];
            messagesArray.push(message.dataset.message + " ^" + message.dataset.delay)
        }


        document.addEventListener('DOMContentLoaded', function () {
            Typed.new('#typed', {
                strings: messagesArray,
                typeSpeed: 20,
                backDelay: 20,
                startDelay: 20,
                backSpeed: 5,
                cursorChar: "_",
                smartBackspace: true,
                loop: true
            });
        });

        const buttonNavHome = document.querySelectorAll(".Home-menu a"),
            scrollTarget = document.querySelectorAll(".scrollTarget");

        function scrollButtons(el) {
            this.DOM = {}
            this.DOM.el = el
            this.initEvents();
        }

        scrollButtons.prototype.initEvents = function () {

            this.DOM.el.addEventListener('click', this.clickFn, false);
        };
        scrollButtons.prototype.clickFn = function (e) {
            e.preventDefault();
            var top = document.getElementById(this.getAttribute('href')).offsetTop;
            zenscroll.toY(top - 58, 500)
            actionsClass(buttonNavHome, function (el) {
                el.classList.remove('active')
            })
            this.classList.add('active')
            scrollObject.index = this.dataset.index;

        }

        function actionsClass(array, callback, scope) {

            [].map.call(array, function (el) {
                callback.call(scope, el, array[el]);
            });
        };
        [].map.call(buttonNavHome, function (el) {
            new scrollButtons(el)
        });
        var animation = true;

        function scrollMove() {
            this.DOM = {}
            this._initEvents();
            this.index = 0;
            this.isKey = false;
        }

        scrollMove.prototype._initEvents = function () {
            window.addEventListener('mousewheel', this.someAction, false);
            window.addEventListener('wheel', this.someAction, false);
            window.addEventListener('keydown', this.someAction, false);
            more.addEventListener('click', function () {
                scrollObject.index = 1;
                zenscroll.toY(document.getElementById('wedo').offsetTop - 58, 1000)
                actionsClass(buttonNavHome, function (el) {
                    el.classList.remove('active')
                })
                buttonNavHome[1].classList.add('active');
                animation = true;
            })
        };
        scrollMove.prototype.someAction = function (e) {
            scrollObject.isKey = (e.keyCode == 40 || e.keyCode == 38) ? true : false;
            if (e.deltaY > 0 || e.keyCode == 40) {
                if (!zenscroll.moving() && animation) {
                    animation = false;
                    if (scrollObject.index >= 6) {
                        scrollObject.index = 6
                    } else {
                        scrollObject.index++;
                    }
                    scrollObject.down();
                }
            }
            else if (e.deltaY < 0 || e.keyCode == 38) {
                if (!zenscroll.moving() && animation) {
                    animation = false;
                    if (scrollObject.index <= 0) {
                        scrollObject.index = 0
                    } else {
                        scrollObject.index--;
                    }
                    scrollObject.up();
                }
            }
        }
        scrollMove.prototype.time = function () {

            if (scrollObject.isKey) {
                animation = true
            } else {
                setTimeout(function () {
                    animation = true
                }, 1300);
            }
        }
        scrollMove.prototype.up = function () {
            scrollObject.time();
            zenscroll.toY(scrollTarget[scrollObject.index].offsetTop - 58, 1000)
            actionsClass(buttonNavHome, function (el) {
                el.classList.remove('active')
            })
            buttonNavHome[scrollObject.index].classList.add('active');
        }
        scrollMove.prototype.down = function () {
            scrollObject.time();
            zenscroll.toY(scrollTarget[scrollObject.index].offsetTop - 58, 1000)
            actionsClass(buttonNavHome, function (el) {
                el.classList.remove('active')
            })
            buttonNavHome[scrollObject.index].classList.add('active');
        }
        const scrollObject = new scrollMove()
        /*  if ('ondeviceorientation' in window) {
         window.addEventListener('deviceorientation', function (e) {
         document.querySelector('.Header-arrowContent').style.transform = "rotate(" + e.alpha + "deg)"
         }, false);
         }*/
    </script>
@endsection