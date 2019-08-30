<!DOCTYPE html>
@section('title','Register User Dropshipping UMKM')
<html lang="en">
<head>

@include('admin.include.head')
<link href='{{asset('global_assets/images/placeholders/logoicon1.png')}}' rel='shortcut icon'>
<title>@yield('title')</title>


</head>

<body class="login-container">


	<!-- Page container -->
	<div class="page-container">

		<!-- Page content -->
		<div class="page-content">

			<!-- Main content -->
			<div class="content-wrapper">

				<!-- Content area -->
				<div class="content">
						{{-- @if(session()->has('success'))
						<div class="alert alert-success">
						{{ session()->get('success') }}
						</div>
						@elseif ($errors->any())
						<div class="alert alert-danger">
							<ul>
						@foreach ($errors->all() as $error)
							<li>{{ $error }}</li>
						@endforeach
							</ul>
						</div>
						@endif --}}
					<!-- Registration form -->
					<form action="{{route('register')}}" method="post">
						<div class="row">
							<div class="col-lg-8 col-lg-offset-2">
								<div class="panel registration-form">
									<div class="panel-body">
										<div class="text-center">
											<div class="text-center">
											<a href="{{ route('beranda') }}">	<img src="{{asset('global_assets/images/placeholders/login1.jpg')}}" class="img-circle" alt="logo" style="width: 110px; height: 110px;"> </a>
											</div>
											<h5 class="content-group-lg">Daftar Scraping <small class="display-block">Daftarkan diri anda di untuk melakukan scraping, Isi data di bawah ini dengan benar.</small></h5>
											@if ($errors->any())
											<div class="alert alert-danger alert-styled-left alert-bordered">
													<button type="button" class="close" data-dismiss="alert"><span>&times;</span><span class="sr-only">Close</span></button>
													<ul>
														@foreach ($errors->all() as $error)
															<li>{{ $error }}</li>
														@endforeach
													</ul>
											</div>
											@elseif(session()->has('success'))
											<div class="alert alert-success alert-styled-left alert-bordered">
													<button type="button" class="close" data-dismiss="alert"><span>&times;</span><span class="sr-only">Close</span></button>
													<ul>
													{{ session()->get('success') }}
													</ul>
											</div>
											@endif
										</div>

										{{csrf_field()}}
										<div class="row">
											<div class="form-group has-feedback">
												<label>Nama Anda <span class="required" style="color:red;">*</span></label>
												<input type="text" class="form-control" placeholder="Kurnia Rocki" name="nama" required>
												<div class="form-control-feedback">
													<i class="fa fa-user text-muted"></i>
												</div>
											</div>
											<div class="form-group has-feedback">
												<label> No.Identitas (KTP/Kartu Pelajar)<span class="required"  style="color:red;">*</span></label>
												<input type="number" class="form-control" name="identitas" required>
												<div class="form-control-feedback">
													<i class="fa fa-credit-card text-muted"></i>
												</div>
											</div>
											<div class="form-group has-feedback">
												<label> Tanggal Lahir<span class="required"  style="color:red;">*</span></label>
												<input type="text" id="date" class="floating-label mdl-textfield_input form-control" name="tanggal">
												<div class="form-control-feedback">
													<i class="fa fa-calendar text-muted"></i>
												</div>
											</div>
											<div class="form-group has-feedback">
												<label> Pekerjaan<span class="required"  style="color:red;">*</span></label>
												<select class="select-search select-border-color border-warning" name="pekerjaan" id="pekerjaan">
														<option>Pilih Pekerjaan</option>
														<optgroup label="Marketplace">
																<option value="Pelajar">Pelajar</option>
																<option value="pengusaha">Pengusaha</option>
																<option value="pegawai negeri">Pegawai Negeri Sipil</option>
																<option value="pegawai swasta">Pegawai Swasta</option>
																<option value="lainnya">Lainnya</option>
														</optgroup>
												</select>
												<div class="form-control-feedback">
													<i class="fa fa-mortar-board text-muted"></i>
												</div>
											</div>
											<div class="form-group has-feedback">
												<label> No.Handhone<span class="required"  style="color:red;">*</span></label>
												<input type="number" name="tel" class="form-control" data-mask="9999-9999-9999" required>
												<div class="form-control-feedback">
													<i class="icon-user-plus text-muted"></i>
												</div>
											</div>
											<div class="form-group has-feedback">
												<label> Email<span class="required" style="color:red;">*</span></label>
												<input type="email" class="form-control" name="email" placeholder="kurnia@gmail.com" required>
												<div class="form-control-feedback">
													<i class="icon-user-plus text-muted"></i>
												</div>
											</div>
											<div class="form-group has-feedback">
												<label> Kata Sandi<span class="required" style="color:red;">*</span></label>
												<input type="password" class="form-control" name="password" placeholder="********" required>
												<div class="form-control-feedback">
													<i class="fa fa-lock text-muted"></i>
												</div>
											</div>
											<div class="form-group has-feedback">
												<label> konfirmasi Sandi<span class="required" style="color:red;">*</span></label>
												<input type="password" class="form-control" name="password_confirmation" placeholder="********" required>
												<div class="form-control-feedback">
													<i class="fa fa-lock text-muted"></i>
												</div>

											</div>
											<p class="notif help-block text-danger"></p>
											<div class="form-group has-feedback">
												<label> Provinsi<span class="required" style="color:red;">*</span></label>
												<select class="select-search select-border-color border-warning" name="provinsi" id="provinsi">
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
												<label> Kabupaten<span class="required" style="color:red;">*</span></label>
												<select class="select-search select-border-color border-warning" name="kabupaten" id="kabupaten">
														<option selected="true" disabled>Pilih Kabupaten</option>
												</select>
												<div class="form-control-feedback">
													<i class="fa fa-map-pin text-muted"></i>
												</div>
											</div>
											<div class="form-group has-feedback">
												<label> Alamat<span class="required" style="color:red;">*</span></label>
												<textarea rows="5" cols="5"  class="form-control" name="alamat" placeholder="Alamat"></textarea>
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
												<label> Langitude<span class="required" style="color:red;">*</span></label>
												<input type="text" name="lat" class="form-control form-field" id="lat" >
												<div class="form-control-feedback">
													<i class="fa fa-map-marker text-muted"></i>
												</div>
											</div>
											<div class="form-group has-feedback">
												<label> Longitude<span class="required" style="color:red;">*</span></label>
												<input type="text" name="long" class="form-control form-field" id="long" >
												<div class="form-control-feedback">
													<i class="fa fa-map-marker text-muted"></i>
												</div>
											</div>



										</div>





										<div class="text-right">
											<a href="{{route('login')}}" class="btn btn-link"><i class="icon-arrow-left13 position-left"></i> Kembali ke form login</a>
											<button type="submit" class="btn bg-teal-400 btn-labeled btn-labeled-right ml-10 btnPass" data-loading-text="Loading..."><b><i class="icon-plus3"></i></b> Buat akun</button>
										</div>
									</div>
								</div>
							</div>
						</div>
					</form>
					<!-- /registration form -->


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
				$('.notif').text('Password tidak sama');
				$('.btnPass').attr('disabled', 'true');
			}
		});
	</script>

	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDP3Pgxfyxnzmop6amI-Un99r3MYjapD_4&libraries=places" async defer> </script>
	<script type="text/javascript">
		window.onload = function() {

			var mapOptions = {
				center: new google.maps.LatLng(-5.404791274345431, 105.27569085312507),
				zoom: 9,
				mapTypeId: google.maps.MapTypeId.ROADMAP
			};
			var infoWindow = new google.maps.InfoWindow();
			var map = new google.maps.Map(document.getElementById("dvMap"), mapOptions);

			var marker = new google.maps.Marker({
				position: {
					lat: -5.404791274345431,
					lng: 105.27569085312507
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
			$('#date').datetimepicker({
				format: "dd/mm/yyyy",
				autoclose: true
			});
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


	<script src="{{asset('assets/material-datetimepicker/bootstrap-material-datetimepicker.js')}}"></script>
	<script src="{{asset('assets/material-datetimepicker/datetimepicker.js')}}"></script>

</body>
</html>
