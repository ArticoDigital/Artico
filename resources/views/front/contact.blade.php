@extends('layouts.front')
@section('title') Contacto @endsection
@section('header')

@endsection
@section('content')
    <div id="map"></div>
    <section class="container Contact">
        <h2>¿Iniciamos una conversación?</h2>
        <ul class="row center middle">
            <li class="col-4">
                <a href="mailto:hola@artico.io">hola@artico.io</a>
            </li>
            <li class="col-4">(+57) 300 554 93 73</li>
            <li class="col-4">Bogotá -  Colombia</li>
            <li class="col-4">Listo para iniciar una idea</li>
        </ul>
    </section>
@endsection
@section('scripts')
    <script async defer
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDrhX-WElUsi_iyMJ2NNC741pN_mQUIhVE&callback=initMap">
    </script>
    <script>
        function initMap() {
            var bogota = {lat: 4.6679914, lng: -74.0620331};
            var map = new google.maps.Map(document.getElementById('map'), {
                zoom: 16,
                center: bogota,
                styles: styleMap
            });
            var marker = new google.maps.Marker({
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

        var styleMap = [
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