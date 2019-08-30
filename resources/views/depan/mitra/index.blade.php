@extends('depan.layouts.app')
@section('title','Persebaran User')

@section('content')

<section id="page-title">

    <div class="container clearfix">
        <h1>Scraping</h1>
        <span>Persebaran Pengguna Scraping</span>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('beranda')}}">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">pengguna</li>
        </ol>
    </div>

</section><br><br>

<div class="row">
    <div class="col-md-12">
        <div class="row mt-xl">
             <div class="col-md-12 center">
                     <h2 class="mt-xl mb-none">Persebaran Pengguna <strong style="color: #000">SCRA</strong> <strong style="color: #2aafea"> PING</strong></h2>
                     <div class="divider divider-primary divider-small divider-small-center mb-xl">
                             <hr>
                     </div>
             </div>
     </div>
<!-- Google Maps - Go to the bottom of the page to change settings and map location. -->
<div id="dvMap" style="width: 100%; height: 500px;"> </div>

        </div>
</div>
<br>
<br>


@endsection




@section('js')
<script src="{{asset('depan/js/jquery.js')}}"></script>
	<script src="{{asset('depan/js/plugins.js')}}"></script>

	<!-- Footer Scripts
	============================================= -->
    <script src="{{asset('depan/js/functions.js')}}"></script>
    
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAOpdBpwYOOlEcMywl8vXLTBjoHqYXtKDU" async defer></script>
  <script type="text/javascript">
    var markers = [

@foreach( $d as $a)

{
 "lat": '{{$a->lat}}',
         "long": '{{$a->long}}',
         "nama": '{{$a->nama}}',
         "alamat": '{{$a->alamat}}' },

@endforeach
    ];

        window.onload = function () {

            var mapOptions = {
            center: new google.maps.LatLng(-4.9452476,103.7705639),
                zoom: 8,
                mapTypeId: google.maps.MapTypeId.ROADMAP
            };
            var infoWindow = new google.maps.InfoWindow();
            var map = new google.maps.Map(document.getElementById("dvMap"), mapOptions);

            for (i = 0; i < markers.length; i++) {
                var data = markers[i];
        var latnya = data.lat;
        var longnya = data.long;

        var myLatlng = new google.maps.LatLng(latnya, longnya);
                var marker = new google.maps.Marker({
                    position: myLatlng,
                    map: map,
										icon: {
											url: "depan/images/marker.png",
											scaledSize: new google.maps.Size(30, 30)
													},
                    title: data.alamat,
                    title: data.nama
                    // title: data.alamat
                });
                (function (marker, data) {
                    google.maps.event.addListener(marker, "click", function (e) {
                        infoWindow.setContent('<b>Alamat</b> :' + data.alamat + '<br>');
                        infoWindow.open(map, marker);
                    });
                })(marker, data);
            }
  google.maps.event.addListener(map, 'click', function( event ){
  alert( "Latitude: "+event.latLng.lat()+" "+", longitude: "+event.latLng.lng() );
});
        }
    </script>
@endsection