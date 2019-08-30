@extends('admin.layouts.app')
@section('title','Profile Dropshipping UMKM')

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
                            <li><a href="{{route('dropshipper')}}"><i class="icon-home2 position-left"></i> Home</a></li>
                            <li class="active">Profile {{Auth::user()->name}}</li>
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
                                                <span>{{Auth::user()->name}}</span>
                                            </h6>

                                            <span class="display-block">{{$profile->email}}</span>
                                        </div>

                                        <a  class="display-inline-block content-group-sm">
                                            {{-- <img src="/uploads/avatars/{{$profile->foto}}" class="img-circle img-responsive" style="width:32px; height:32px; position:absolute; top:10px; left:10px; border-radius:50%"> --}}
                                        <img src="/uploads/avatars/{{Auth::user()->foto}}" class="img-circle img-responsive" alt="" style="width: 110px; height: 110px;">
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
                      											<li><a href="#editinformasi" data-toggle="tab" class="edit_informasi" data-id="{{$profile->id}}"><i class="fas fa-user-cog"></i> Setting</a></li>
                      											<li><a href="#editemailpassword" data-toggle="tab" class="edit_pass" data-id="{{$profile->id}}"><i class="fas fa-key"></i> Edit Email dan Password</a></li>
                                            <li class="navigation-divider"></li>
                                            <li><a href="{{route ('logout' )}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit()"><i class="fas fa-power-off"></i> Log out</a>
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

                              <div class="tab-pane fade" id="editinformasi">

                                    <!-- Available hours -->
                                    <div class="panel panel-flat row">
                                        <div class="panel-heading">
                                            <h5 class="panel-title">Setting Informasi</h5>
                                            <div class="heading-elements">
                                                <ul class="icons-list">
                                                    <li><a data-action="collapse"></a></li>
                                                    <li><a data-action="reload"></a></li>
                                                </ul>
                                            </div>
                                        </div>

                                        <div class="panel-body">
                                            <form action="{{route('simpan.profile')}}" method="post" enctype="multipart/form-data">
                                              {{ csrf_field() }}
                                              <input type="hidden" name="id_user" id="id_user" value="{{Auth::user()->id}}">
                                              <input type="hidden" name="namaFoto" id="namaFoto" value="{{$profile->foto}}">
                                                <div class="form-group">
                                                  <div class="col-md-10">
                                                  <div class="row">
                                                    <div class="form-group has-feedback">
                                                      <label>Nama Anda</label>
                                                      <input type="text" class="form-control" value="" name="nama" id="nama">
                                                      <div class="form-control-feedback">
                                                        <i class="fa fa-user text-muted"></i>
                                                      </div>
                                                    </div>
                                                    <div class="form-group has-feedback">
                                                      <label> No.Identitas (KTP/Kartu Pelajar)</label>
                                                      <input type="number" class="form-control" name="no_identitas" id="no_identitas" value="">
                                                      <div class="form-control-feedback">
                                                        <i class="fa fa-credit-card text-muted"></i>
                                                      </div>
                                                    </div>
                                                    <div class="form-group has-feedback">
                                                      <label> Tanggal Lahir</label>
                                                      <input type="date" id="date" class="floating-label mdl-textfield_input form-control tanggal_lahir" name="tanggal_lahir">
                                                      <div class="form-control-feedback">
                                                        <i class="fa fa-calendar text-muted"></i>
                                                      </div>
                                                    </div>
                                                    <div class="form-group has-feedback">
                                                      <label> Pekerjaan</label>
                                                      <select class="select-search select-border-color border-warning" name="pekerjaan" id="pekerjaan" >
                                                          <option selected="true" disabled>Pilih Pekerjaan</option>
                                                              <option value="pelajar">Pelajar</option>
                                                              <option value="pengusaha">Pengusaha</option>
                                                              <option value="pegawai negeri">Pegawai Negeri Sipil</option>
                                                              <option value="pegawai swasta">Pegawai Swasta</option>
                                                              <option value="lainnya">Lainnya</option>
                                                      </select>
                                                      <div class="form-control-feedback">
                                                        <i class="fa fa-mortar-board text-muted"></i>
                                                      </div>
                                                    </div>
                                                    <div class="form-group has-feedback">
                                                      <label> No.Handhone</label>
                                                      <input type="text" class="form-control required" name="no_hp" id="no_hp">
                                                      <div class="form-control-feedback">
                                                        <i class="icon-user-plus text-muted"></i>
                                                      </div>
                                                    </div>
                                                    <div class="form-group has-feedback">
                                                      <label> Provinsi</label>
                                                      <select class="select-search select-border-color border-warning" name="provinsi" id="provinsi" >
                                                          <option selected="true" disabled>Pilih Provinsi</option>
                                                          @foreach ($provs as $prov)
                                                            <option value="{{$prov->id}}">{{$prov->nama}}</option>
                                                          @endforeach
                                                      </select>
                                                      <div class="form-control-feedback">
                                                        <i class="fa fa-map-pin text-muted"></i>
                                                      </div>
                                                    </div>
                                                    <div class="form-group has-feedback">
                                                      <label> Kabupaten</label>
                                                      <select class="select-search select-border-color border-warning" name="kabupaten" id="kabupaten" >
                                                          <option selected="true" disabled>Pilih Kabupaten</option>
                                                      </select>
                                                      <div class="form-control-feedback">
                                                        <i class="fa fa-map-pin text-muted"></i>
                                                      </div>
                                                    </div>
                                                    <div class="form-group has-feedback">
                                                      <label> Alamat</label>
                                                      <textarea rows="5" cols="5"  class="form-control" name="alamat" id="alamat"></textarea>
                                                      <div class="form-control-feedback">
                                                        <i class="fa fa-map-signs text-muted"></i>
                                                      </div>
                                                    </div>

                                                    <div class="form-group has-feedback">
                                                      <div class="form-group">
                                                          <input type="text" class="form-control" name="mapsearch" id="mapsearch" placeholder="Search Your location">
                                                          <div id="dvMap" style="width: 100%; height: 300px;"></div>
                                                      </div>
                                                    </div>

                                                    <div class="form-group has-feedback">
                                                      <label> Langitude</label>
                                                      <input type="text" name="lat" class="form-control form-field" required="" id="lat">
                                                      <div class="form-control-feedback">
                                                        <i class="fa fa-map-marker text-muted"></i>
                                                      </div>
                                                    </div>
                                                    <div class="form-group has-feedback">
                                                      <label> Longitude</label>
                                                      <input type="text" name="long" class="form-control form-field" required="" id="long">
                                                      <div class="form-control-feedback">
                                                        <i class="fa fa-map-marker text-muted"></i>
                                                      </div>
                                                    </div>
                                                    <div class="form-group has-feedback">
                                                        <input type="hidden" name="namaFoto" id="namaFoto" value="{{$profile->foto}}">
                                                      <label> Photo Profile</label><br>
                                                      <span class="required" style="color:red;">*gunakan 225x250px untuk hasil lebih baik</span>
                                                      <img src="/uploads/avatars/{{Auth::user()->foto}}" class="img-responsive" alt="" style="width: 110px; height: 110px;">
                                                    {{-- <img src="{{asset('global_assets/images/placeholders/3.jpg')}}" class="img-responsive" alt="" style="width: 110px; height: 110px;"> --}}
                                                      <input type="file" name="foto" class="form-control form-field"  id="profile_picture">
                                                    </div>
                                                    <div class="text-left">
                                                      <br><button type="submit" class="btn btn-primary">Simpan <i class="fa fa-floppy-o position-right"></i></button>
                                                    </div>
                                                  </div>
                                                </div>
                                                </div>
                                            </form>
                                        </div>

                                    </div>

                                    <!-- /available hours -->

                                </div>

                                <div class="tab-pane fade" id="editemailpassword">

                                    <div class="panel panel-flat">
                                        <div class="panel-heading">
                                            <h6 class="panel-title">Ubah Email dan Password Jika di Butuhkan</h6>
                                            <div class="heading-elements">
                                                <ul class="icons-list">
                                                    <li><a data-action="collapse"></a></li>
                                                    <li><a data-action="reload"></a></li>
                                                    <li><a data-action="close"></a></li>
                                                </ul>
                                            </div>
                                        </div>

                                        <div class="panel-body">
                                            <form action="{{route('pass.profile')}}" method="post">
                                              {{ csrf_field() }}
                                              <input type="hidden" name="id" id="id" value="{{Auth::user()->id}}">
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-md-10">
                                                            <label>Email:</label>
                                                            <input type="email" name="email" class="form-control required" value="{{$profile->email}}" >
                                                        </div>


                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-md-10">
                                                            <label>Password Baru</label>
                                                            <input type="password" name="password" placeholder="Enter new password" class="form-control">
                                                            <br>
                                                        </div>

                                                        <div class="col-md-10">
                                                            <label>Ulangi Password Baru</label>
                                                            <input type="password" name="password_confirmation" placeholder="Repeat new password" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>

                                                <p class="notif help-block text-danger"></p>



                                                <div class="text-right">
                                                    <button type="submit" disabled class="btn btn-primary btnPass">Simpan <i class="fa fa-floppy-o position-right"></i></button>
                                                </div>
                                            </form>
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
    <script type="text/javascript">
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
  	<script src="{{asset('assets/material-datetimepicker/datetimepicker.js')}}"></script>

</body>

@endsection
