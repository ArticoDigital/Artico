@extends('layouts.front')
@section('title') Quienes somos cultura @endsection
@section('header')

@endsection
@section('content')
    <div class="Culture">
        <div class="Culture-header">
            <video autoplay="autoplay" loop="loop" muted="" width="100%">
                <source src="{{asset('video/artico.mp4')}}" type="video/mp4"/>
                <source src="{{asset('video/artico.webm')}}" type="application/webm"/>
                <img src="https://www.saastr.com/wp-content/uploads/2015/04/annual_2016_bg.jpg"/>
            </video>
            <div class="pattern"></div>
        </div>
        <section class="content first">
            <div class="row middle">
           <span class="Rectangle middle row center">

<svg width="15px" height="14px" viewBox="0 0 15 14" version="1.1" xmlns="http://www.w3.org/2000/svg"
     xmlns:xlink="http://www.w3.org/1999/xlink">

    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <g id="Desktop-HD" transform="translate(-193.000000, -981.000000)" fill="#FFFFFF">
            <g id="Group-7" transform="translate(183.000000, 971.000000)">
                <g id="Group-2">
                    <g id="Group">
                        <path d="M17.71875,22.1003467 L14.2633521,23.8370437 C13.4022601,24.269832 12.822034,23.8492592 12.9676836,22.8956854 L13.5516039,19.0727378 L10.8321303,16.323128 C10.1544321,15.6379198 10.3751208,14.9561278 11.3270316,14.7999784 L15.1433121,14.1739638 L16.9179829,10.7379145 C17.3602343,9.88164422 18.0768536,9.88084643 18.5195171,10.7379145 L20.2941879,14.1739638 L24.1104684,14.7999784 C25.0614931,14.9559825 25.2836994,15.6372814 24.6053697,16.323128 L21.8858961,19.0727378 L22.4698164,22.8956854 C22.6153305,23.8483715 22.0360422,24.2702352 21.1741479,23.8370437 L17.71875,22.1003467 Z"
                              id="Star"></path>
                    </g>
                </g>
            </g>
        </g>
    </g>
</svg>
           </span>
                <h2>Team Ártico</h2>
                <p>Somos un experimentado equipo de estrategas digitales, Diseñadores,
            Desarrolladores
            y Analistas apasionados <b>creativos</b> - <b>geeks</b>, que resolvemos problemas a través de un buen
            diseño y una experiencia de usuario efectiva.</p>
            </div>
            <div class="row around Team">
                @component('components.teams')
                    @slot('image', asset('img/jk.gif'))
                    @slot('name','Juan Ramos')
                    @slot('email','juan@artico.io')
                    @slot('position','DIRECTOR DESARROLLO')
                    @slot('facebook','https://www.facebook.com/juan2ramos')
                    @slot('youtube','')
                    @slot('twitter','https://twitter.com/juan2ramos')
                    @slot('instagram','https://www.instagram.com/juandosramos')
                @endcomponent
                @component('components.teams')
                    @slot('image', asset('img/sammy.jpg'))
                    @slot('name','Sandra Triviño')
                    @slot('email','sammy@artico.io')
                    @slot('position','GERENTE DE PROYECTOS')
                    @slot('facebook','')
                    @slot('youtube','')
                    @slot('twitter','')
                    @slot('instagram','')
                @endcomponent
                @component('components.teams')
                    @slot('image', asset('img/fabilot.jpg'))
                    @slot('name','Fabian Moncada')
                    @slot('email','fabian@artico.io')
                    @slot('position','DIRECTOR CREATIVO')
                    @slot('facebook','')
                    @slot('youtube','')
                    @slot('twitter','')
                    @slot('instagram','')
                @endcomponent
              
                @component('components.teams')
                    @slot('image', asset('img/doris.jpg'))
                    @slot('name','Doris Moncada')
                    @slot('email','doris@artico.io')
                    @slot('position','FINANZAS')
                    @slot('facebook','')
                    @slot('youtube','')
                    @slot('twitter','')
                    @slot('instagram','')
                @endcomponent

                @component('components.teams')
                    @slot('image', asset('img/jeff.jpg'))
                    @slot('name','Jefferson Castiblanco')
                    @slot('email','jeff@artico.io')
                    @slot('position','DIRECTOR 3D')
                    @slot('facebook','')
                    @slot('youtube','')
                    @slot('twitter','')
                    @slot('instagram','')
                @endcomponent

                @component('components.teams')
                    @slot('image', asset('img/david.jpg'))
                    @slot('name','David Lopez')
                    @slot('email','soporte@artico.io')
                    @slot('position','SOPORTE ')
                    @slot('facebook','')
                    @slot('youtube','')
                    @slot('twitter','')
                    @slot('instagram','')
                @endcomponent
                @component('components.teams')
                    @slot('image', asset('img/clara.jpg'))
                    @slot('name','Clara ')
                    @slot('email','clara@artico.io')
                    @slot('position','DISEÑADORA')
                    @slot('facebook','')
                    @slot('youtube','')
                    @slot('twitter','')
                    @slot('instagram','')
                @endcomponent

                <article class="col-5 medium-7 small-16 row center middle">
                    <div class="col-16">
                        <svg width="61px" height="59px" viewBox="0 0 61 59" version="1.1"
                             xmlns="http://www.w3.org/2000/svg"
                             xmlns:xlink="http://www.w3.org/1999/xlink">

                            <defs>
                                <ellipse id="path-1" cx="47.892562" cy="45.8888889" rx="13.107438"
                                         ry="13.1111111"></ellipse>
                            </defs>
                            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <g id="Desktop-HD" transform="translate(-1042.000000, -1655.000000)">
                                    <g id="Group-7" transform="translate(183.000000, 971.000000)">
                                        <g id="Group-5" transform="translate(798.000000, 684.000000)">
                                            <g id="Group-2" transform="translate(61.000000, 0.000000)">
                                                <g id="Group" transform="translate(11.090909, 9.076923)"
                                                   stroke="#BDC1CD"
                                                   stroke-width="2">
                                                    <path d="M34.6225583,39.0501254 C34.6225583,39.0501254 24.7919798,34.2595271 23.7837154,32.2424331 L23.7837154,27.7039716 C26.3043765,25.9390143 26.1886187,22.0386504 26.8085087,20.9943324 C27.4283988,19.9500145 28.5729716,20.139869 28.5729716,19.6355955 C28.5729716,19.131322 28.5729716,14.0885869 28.5729716,14.0885869 L27.312641,13.0800399 L27.312641,5.51593737 C27.312641,2.0035167 21.677686,0.394522908 16.8884298,0.252136752"
                                                          id="Combined-Shape"></path>
                                                    <path d="M0,39.0501254 C0,39.0501254 9.83057851,34.2595271 10.838843,32.2424331 L10.838843,27.7039716 C8.31818182,25.9390143 8.43393967,22.0386504 7.81404959,20.9943324 C7.19415951,19.9500145 6.04958678,20.139869 6.04958678,19.6355955 C6.04958678,19.131322 6.04958678,14.0885869 6.04958678,14.0885869 L7.30991736,13.0800399 L7.30991736,5.51593737 C7.30991736,2.0035167 12.136471,0.252136752 17.1404959,0.252136752"
                                                          id="Path-2"></path>
                                                </g>
                                                <ellipse id="Oval" stroke="#BDC1CD" stroke-width="2" cx="27.7272727"
                                                         cy="27.7350427" rx="26.7272727" ry="26.7350427"></ellipse>
                                                <g id="Oval-2">
                                                    <use fill="#EBECF1" fill-rule="evenodd" xlink:href="#path-1"></use>
                                                    <ellipse stroke="#BDC1CD" stroke-width="2" cx="47.892562"
                                                             cy="45.8888889" rx="12.107438" ry="12.1111111"></ellipse>
                                                </g>
                                                <rect id="Rectangle" fill="#BDC1CD" x="46.8842975" y="38.8290598"
                                                      width="2.52066116" height="14.1196581" rx="1"></rect>
                                                <rect id="Rectangle" fill="#BDC1CD"
                                                      transform="translate(48.144628, 45.888889) rotate(90.000000) translate(-48.144628, -45.888889) "
                                                      x="46.8842975" y="38.8290598" width="2.52066116"
                                                      height="14.1196581"
                                                      rx="1"></rect>
                                            </g>
                                        </g>
                                    </g>
                                </g>
                            </g>
                        </svg>

                        <em> Estamos constantemente en busca de talento.</em>
                    </div>
                    <a class="form" href=""></a>
                </article>
            </div>
        </section>
        <section class="content">
            <div class="row middle">
           <span class="Rectangle middle row center">
               <svg width="11px" height="17px" viewBox="0 0 11 17" version="1.1" xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink">
                   <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                       <g id="Desktop-HD" transform="translate(-195.000000, -546.000000)" fill-rule="nonzero"
                          fill="#FFFFFF">
                           <g id="Group-2" transform="translate(183.000000, 537.000000)">
                               <g id="Group">
                                   <path d="M12.5372372,25.8608725 L16.7422659,23.078098 C17.1608583,22.801062 17.8400934,22.8009337 18.2588916,23.078098 L22.4638861,25.8608725 C22.598145,25.9497185 22.7119986,25.9948513 22.7998615,26 C22.9937918,25.9898032 23.0493323,25.8234082 22.9553308,25.5301359 L17.7674469,9.34483137 C17.6200614,8.88510433 17.3810961,8.88500809 17.2337107,9.34483137 L12.0457924,25.5301359 C11.9519529,25.8229099 12.0070987,25.9893275 12.1676965,26 L12.2020294,26 C12.2897741,25.9946194 12.4033459,25.9494829 12.5372372,25.8608725 Z"
                                         id="path-1"></path>
                               </g>
                           </g>
                       </g>
                   </g>
               </svg>
           </span>
                <h2>CULTURA ÁRTICO</h2>
                <p>Presentación de Proyectos en 3D de exposiciones, congresos, conferencias, diseño de stands e infografías corporativas.
                </p>
                <p>Nuestros principios, como personas y profesionales, son firmes y las aplicamos en nuestro día a día.
                    Así logramos grandes relaciones de trabajo con nuestros clientes, ofreciendo un producto final al
                    gusto de nuestros clientes y sus usuarios.</p>

                <p><b>Pensamos en el usuario</b> Nos centramos en la investigación del mercado, el grupo demográfico de los usuarios de nuestros clientes y creamos diseños personalizados que proporcionan la experiencia de usuario más amigable y dinámica para ellos.
                </p>
                <p><b>APOYAMOS SER DIFERENTES</b> Sabemos que encontrar un lugar bajo el sol es un reto para cualquier negocio. Trabajar con nosotros es más que el desarrollo de un sitio en internet. Es entender las necesidades de cada cliente y darles una solución estratégica acorde a sus necesidades de manera óptima y exitosa.</p>
                <p><b>LA INVESTIGACIÓN ES PRIMORDIAL. </b> No tiene sentido si no se entiende el problema que estamos tratando de resolver. Empezamos por la investigación y la comprensión de tus desafíos. El problema contiene la solución.
                </p>
                <p><b>100% INNOVADORES.</b> No hacemos lo mismo en cada proyecto. Cada necesidad es única y por eso creamos una solución diferente, creativa y exitosa para cada uno de nuestros clientes.
                </p>
                <p><b>TRABAJO EN EQUIPO.</b>Trabajar con alegría y empatía es la clave del éxito en cada proyecto. Por eso trabajamos en equipo con nuestros clientes, como socios en todo el proceso.
                </p>
                <p><b>LA CALIDAD ANTE TODO. </b> Con más de 8 años de experiencia, apoyamos a pequeñas y grandes marcas en su posicionamiento en la web desde 2009, con un alto nivel de calidad y profesionalismo.
                </p>
                <p id="yeah">
                    <b>SEGUIMIENTO Y GARANTÍA.</b> a calidad de nuestros productos y la satisfacción de nuestros clientes es nuestra prioridad. Creamos relaciones con nuestros clientes a largo plazo y proponemos varias soluciones para asegurarle los productos digitales más actualizados y efectivos del mercado.
                </p>
            </div>
        </section>

    </div>
@endsection
@section('scripts')
    <script>
        const yeah = document.querySelector('#yeah');
        const config = {
            // If the image gets within 50px in the Y axis, start the download.
            rootMargin: '50px 0px',
            threshold: 0.01
        };
        var observer = new IntersectionObserver(onIntersection, config);
        observer.observe(yeah);

        function onIntersection(entries) {
            console.log(entries[0]);
        }


    </script>
@endsection
