@extends('superadmin.layouts.app')
@section('title','profile Dropshipping UMKM')

@section('content')

<body class="sidebar-xs has-detached-left">


    <!-- Page container -->
    <div class="page-container">

        <!-- Page content -->
        <div class="page-content">

            <!-- Main content -->
            <div class="content-wrapper">

                <!-- Page header -->
                <div class="page-header">
                    <div class="page-header-content">
                        <div class="page-title">
                            <h4><i class="icon-arrow-left52 position-left"></i> <span class="text-semibold">Profile</span></h4>
                        </div>
                    </div>

                    <div class="breadcrumb-line breadcrumb-line-component">
                        <ul class="breadcrumb">
                            <li><a href="{{route('superadmin')}}"><i class="icon-home2 position-left"></i> Home</a></li>
                            <li class="active">Tabbed profile</li>
                        </ul>
                    </div>
                </div>
                <!-- /page header -->


                <!-- Content area -->
                <div class="content">
                    @if(session()->has('success'))
                    <div class="alert alert-success">
                        <strong>Berhasil!</strong> {{ session()->get('success') }}
                    </div>
                    @elseif ($errors->any())
                      <div class="alert alert-danger">
                          <ul>
                      @foreach ($errors->all() as $error)
                          <li>{{ $error }}</li>
                      @endforeach
                          </ul>
                      </div>
              @endif

                    <!-- Detached sidebar -->
                    <div class="sidebar-detached">
                        <div class="sidebar sidebar-default sidebar-separate">
                            <div class="sidebar-content">

                                <!-- User details -->
                                <div class="content-group">
                                    <div class="panel-body bg-blue border-radius-top text-center" style="background-image: url(http://demo.interface.club/limitless/assets/images/bg.png); background-size: contain;">
                                        <div class="content-group-sm">
                                            <h6 class="text-semibold no-margin-bottom">
                                                <span>{{$profile->nama}}</span>
                                            </h6>

                                            <span class="display-block">{{$profile->email}}</span>
                                        </div>

                                        <a  class="display-inline-block content-group-sm">
                                            {{-- <img src="/uploads/avatars/{{$profile->foto}}" class="img-circle img-responsive" style="width:32px; height:32px; position:absolute; top:10px; left:10px; border-radius:50%"> --}}
                                        <img src="/uploads/avatars/{{$profile->foto}}" class="img-circle img-responsive" alt="" style="width: 110px; height: 110px;">
                                        {{-- <img src="{{asset('global_assets/images/placeholders/3.jpg')}}" class="img-circle img-responsive" alt="" style="width: 110px; height: 110px;"> --}}
                                        </a>

                                        
                                    </div>

                                    <div class="panel panel-body no-border-top no-border-radius-top">
                    									<div class="form-group mt-5">
                    										<label class="text-semibold">No.Identitas</label>
                    										<span class="pull-right-sm">{{$profile->no_identitas}}</span>
                    									</div>

                    									<div class="form-group">
                    										<label class="text-semibold">No.HP:</label>
                    										<span class="pull-right-sm">{{$profile->no_hp}}</span>
                    									</div>

                    								</div>

                                    <div class="panel no-border-top no-border-radius-top">
                                        <ul class="navigation">
                                            <li class="navigation-header">Navigation</li>
                                            <li><a href="#profile" data-toggle="tab"><i class="fas fa-info"></i> Informasi Akun</a></li>
                                            <li class="navigation-divider"></li>
                                            <li><a href="{{route ('logout' )}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit()"><i class="icon-switch2"></i> Log out</a>
                                              <form id="logout-form" action="{{route ('logout') }}" method="post" style="display : none;">
                                                {{ csrf_field() }}
                                              </form>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- /user details -->


                                <!-- Online users -->

                                <!-- /online-users -->
                            </div>
                        </div>
                    </div>
                    <!-- /detached sidebar -->


                    <!-- Detached content -->
                    <div class="container-detached">
                        <div class="content-detached">

                            <!-- Tab content -->
                            <div class="tab-content">

                              <div class="tab-pane fade in active" id="profile">

                                  <div class="panel panel-flat">
                                      <div class="panel-heading">
                                          <h3 class="panel-title"><b>INFORMASI AKUN</b></h3>
                                          <div class="heading-elements">
                                              <ul class="icons-list">
                                                  <li><a data-action="collapse"></a></li>
                                                  <li><a data-action="reload"></a></li>
                                                  <li><a data-action="close"></a></li>
                                              </ul>
                                          </div>
                                      </div>

                                      <div class="panel-body">
                                        <div class="table-responsive">
                                          <table class="table">
                                            <tbody>
                                              <tr>
                                                <td>Name Lengkap</td>
                                                <td><b>{{$profile->nama}}</b></td>
                                              </tr>
                                              <tr>
                                                <td>No.Identitas</td>
                                                <td><b>{{$profile->no_identitas}}</b></td>
                                              </tr>
                                              <tr>
                                                <td>Tanggal Lahir</td>
                                                <td><b>{{$profile->tanggal_lahir}}</b></td>
                                              </tr>
                                              <tr>
                                                <td>Pekerjaan</td>
                                                <td><b>{{$profile->pekerjaan}}</b></td>
                                              </tr>
                                              <tr>
                                                <td>No.Handphone</td>
                                                <td><b>{{$profile->no_hp}}</b></td>
                                              </tr>
                                              <tr>
                                                <td>Provinsi</td>
                                                <td><b>{{$profile->provinsi->nama}}</b></td>
                                              </tr>
                                              <tr>
                                                <td>Kabupaten</td>
                                                <td><b>{{$profile->kabupaten->nama}}</b></td>
                                              </tr>
                                              <tr>
                                                <td>Alamat</td>
                                                <td><b>{{$profile->alamat}}</b></td>
                                              </tr>
                                              <tr>
                                                <td>Longitude</td>
                                                <td><b>{{$profile->long}}</b></td>
                                              </tr>
                                              <tr>
                                                <td>Latitude</td>
                                                <td><b>{{$profile->lat}}</b></td>
                                              </tr>
                                            </tbody>
                                          </table>
                                        </div>
                                      </div>
                                  </div>
                              </div>

                              
                            </div>
                            <!-- /tab content -->
                        </div>
                    </div>
                    <!-- /detached content -->


                    <!-- Footer -->
                    @include('admin.include.footer')
                    <!-- /footer -->

                </div>
                <!-- /content area -->

            </div>
            <!-- /main content -->

        </div>
        <!-- /page content -->

    </div>
    <!-- /page container -->
    {{-- <script type="text/javascript">
    $('[name=password]').keyup(function(){
      var pass = $(this).val().length;
      if(pass>5){
        $('.btnPass').removeAttr('disabled');
        $('.notif').hide();
      }else{
        $('.notif').show();
        $('.notif').text('Password Kurang dari enam');
        $('.btnPass').attr('disabled', 'true');
      }
    });
      $('[name=password_confirmation]').keyup(function(){
        var pass = $('[name=password]').val();
        if(pass==$('[name=password_confirmation]').val()){
          $('.btnPass').removeAttr('disabled');
          $('.notif').hide();
        }else{
          $('.notif').show();
          $('.notif').text('Password tidak sama harap periksa kembali');
          $('.btnPass').attr('disabled', 'true');
        }
      });
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDP3Pgxfyxnzmop6amI-Un99r3MYjapD_4&libraries=places" async defer> </script>
  	<script type="text/javascript">
  	    window.onload = function() {

  	        var mapOptions = {
  	            center: new google.maps.LatLng(-5.4129796, 105.2467449),
  	            zoom: 10,
  	            mapTypeId: google.maps.MapTypeId.ROADMAP
  	        };
  	        var infoWindow = new google.maps.InfoWindow();
  	        var map = new google.maps.Map(document.getElementById("dvMap"), mapOptions);

  	        var marker = new google.maps.Marker({
  	            position: {
  	                lat: -5.4129796,
  	                lng: 105.2467449
  	            },
  	            map: map,
  	            draggable: true
  	        });
  	        var searchBox = new google.maps.places.SearchBox(document.getElementById('mapsearch'));

  	        google.maps.event.addDomListener(searchBox, 'places_changed', function() {
  	            var places = searchBox.getPlaces();
  	            var bounds = new google.maps.LatLngBounds();
  	            var i, place;

  	            for (i = 0; place = places[i]; i++) {
  	                bounds.extend(place.geometry.location);
  	                marker.setPosition(place.geometry.location);
  	            }
  	            map.fitBounds(bounds);
  	            map.setZoom(15);
  	        })


  	        google.maps.event.addListener(marker, 'drag', function(event) {

  	            document.getElementById('lat').value = event.latLng.lat();
  	            document.getElementById('long').value = event.latLng.lng();
  	        });

  	        google.maps.event.addListener(marker, 'click', function(event) {

  	            document.getElementById('lat').value = event.latLng.lat();
  	            document.getElementById('long').value = event.latLng.lng();
  	        });
  	    }
  	</script>

<script>

        $('#provinsi').on('change', function(e) {

          var id = e.target.value;
          $.get('{{ URL::to("ajaxkab/") }}/' + id, function(data){

          $('#kabupaten').empty();
          $.each(data, function(index, id_kabu){
          $('#kabupaten').append('<option value="'+id_kabu.id+'">'+id_kabu.nama+'</option>');
        });

      });

      });
</script>

    <script>
    $(document).ready(function() {
      var iD = {{$profile->id}};
    $.get('{{ URL::to("dropshipper/profile/getData") }}/' + iD, function(data){
      $.each(data, function(index, profile_edit){
      $('#id_user').val(iD);
      $('#nama').val(profile_edit.nama);
      $('#no_identitas').val(profile_edit.no_identitas);
      $('.tanggal_lahir').val(profile_edit.tanggal_lahir);
      $('#pekerjaan').val(profile_edit.pekerjaan).change();
      $('#no_hp').val(profile_edit.no_hp);
      $('#provinsi').val(profile_edit.id_prov).change();
      $('#kabupaten').val(profile_edit.id_kab);
      $('#lat').val(profile_edit.lat);
      $('#long').val(profile_edit.long);
      $('#alamat').val(profile_edit.alamat);
      });
    });
  });
    </script>

  	<script src="{{asset('assets/material-datetimepicker/bootstrap-material-datetimepicker.js')}}"></script>
  	<script src="{{asset('assets/material-datetimepicker/datetimepicker.js')}}"></script> --}}

</body>

@endsection
