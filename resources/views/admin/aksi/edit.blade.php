@extends('admin.layouts.app')
@section('title','Edit Produk Dropshipping UMKM')

@section('content')

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
						<h4><i class="icon-arrow-left52 position-left"></i> <span class="text-semibold">Sistem Informasi Dropshipping</span> - Tambah Barang</h4>
					</div>

				</div>

				<div class="breadcrumb-line breadcrumb-line-component">
					<ul class="breadcrumb">
						<li><a href="{{route('dropshipper')}}"><i class="far fa-frown-open"></i> Home</a></li>
						<li class="active">Tambah Barang</li>
					</ul>
				</div>
			</div>
			<!-- /page header -->


			<!-- Content area -->
			<div class="content">

				<!-- 2 columns form -->
				<form class="form-horizontal" action="#">
					<div class="panel panel-flat">
						<div class="panel-heading">
							<h5 class="panel-title">URL Panel</h5>
							<div class="heading-elements">
								<ul class="icons-list">
									<li><a data-action="collapse"></a></li>
									<li><a data-action="reload"></a></li>
									<li><a data-action="close"></a></li>
								</ul>
							</div>
						</div>

						<div class="panel-body">
							<div class="row">
								<div class="col-md-12">
									<fieldset>
										<legend class="text-semibold"><i class="icon-reading position-left"></i> Masukkan URL E-Commerce Anda di bawah ini</legend>


										<div class="form-group">
											<label class="col-lg-3 control-label">URL E-Commerce :</label>
											<div class="col-lg-9">
												<input type="text" id="url" class="form-control" placeholder="https://www.tokopedia.com/dokistore/new-xiaomi-mi-8-lite-4gb-64gb-garansi-1-tahun-midnight-black?src=topads">
											</div>
										</div>
									</fieldset>
								</div>
							</div>

							<div class="text-right">
								<button type="button" class="btn btn-primary" id="cariButton" data-loading-text="<i class='fa fa-spinner fa-spin '></i> Processing Order">Submit Order</button>
							</div>
						</div>
					</div>
				</form>
				<!-- /2 columns form -->

			</div>
			<!-- /content area -->


			<!-- Content area -->
			<div class="content">

				<!-- 2 columns form -->
				<div class="panelajax" id="paneldata" style="display:none">
						<form class="form-horizontal" action="{{route('posttambahbarang')}}" method="post">
						{{csrf_field()}}
						<div class="panel panel-flat">
							<div class="panel-heading">
								<h5 class="panel-title">Data Barang </h5>
								<div class="heading-elements">
									<ul class="icons-list">
										<li><a data-action="collapse"></a></li>
										<li><a data-action="reload"></a></li>
										<li><a data-action="close"></a></li>
									</ul>
								</div>
							</div>

							<div class="panel-body">
								<div class="row">
									<div class="col-md-6">
										<fieldset>
											<legend class="text-semibold"><i class="con-box position-left"></i> Data Barang</legend>
											<div class="form-group">
												<label class="col-lg-3 control-label">URL</label>
												<div class="col-lg-9">
													<input name="url" type="text" id="url2" class="form-control">
												</div>
											</div>

											<div class="form-group">
												<label class="col-lg-3 control-label">Judul / Nama Barang</label>
												<div class="col-lg-9">
													<input name="nama_barang" type="text" class="form-control" id="nama">
												</div>
											</div>

											<div class="form-group">
												<label class="col-lg-3 control-label">Harga Barang:</label>
												<div class="col-lg-9">
													<input name="harga" type="text" class="form-control" id="harga" >
												</div>
											</div>

											<div class="form-group">
												<label class="col-lg-3 control-label">Berat Barang:</label>
												<div class="col-lg-9">
													<input name="berat" type="text" id="berat" class="form-control" >
												</div>
											</div>

											<div class="form-group">
												<label class="col-lg-3 control-label">Stock Barang:</label>
												<div class="col-lg-9">
													<input name="stock" type="text" id="stock" class="form-control" >
												</div>
											</div>

											<div class="form-group">
												<label class="col-lg-3 control-label">Deskripsi Barang:</label>
												<div class="col-lg-9">
													<textarea rows="5" cols="5" name="deskripsi" id="deskripsi" class="form-control" ></textarea>
												</div>
											</div>

											<div class="form-group">
												<label class="col-lg-3 control-label">Categori 1:</label>
												<div class="col-lg-9">
													<select class="select-search select-border-color border-warning" name="cat1" id="categori1">
														<option selected="true" disabled>Pilih Categori</option>
														@foreach ($cats1 as $cat1)
															<option value="{{$cat1->id}}">{{$cat1->nama}}</option>
														@endforeach
													</select>
												</div>
											</div>

											<div class="form-group">
												<label class="col-lg-3 control-label">Categori 2:</label>
												<div class="col-lg-9">
													<select class="select-search select-border-color border-warning" name="cat2" id="categori2">
														<option selected="true" disabled>Pilih Categori</option>
													</select>
												</div>
											</div>

											<div class="form-group">
												<label class="col-lg-3 control-label">Categori 3:</label>
												<div class="col-lg-9">
													<select class="select-search select-border-color border-warning" name="cat3" id="categori3">
														<option selected="true" disabled>Pilih Categori</option>
													</select>
												</div>
											</div>

											<div class="form-group">
												<label class="col-lg-3 control-label">Ukuran:</label>
												<div class="col-lg-9">
													<select class="select-search select-border-color border-warning" name="ukuran" id="pilih">
														<optgroup label="Marketplace">
															<option>Pilih Ukuran</option>
															<option value="XS">XS</option>
															<option value="S">S</option>
															<option value="M">M</option>
															<option value="L">L</option>
															<option value="XL">XL</option>
															<option value="XXL">XXL</option>
															<option value="XXXL">XXXL</option>
															<option value="Semua Ukuran">Semua Ukuran</option>
														</select>
													</div>
												</div>

												<div class="form-group">
													<label class="col-lg-3 control-label">Warna:</label>
													<div class="col-lg-9">
														<select class="select-search select-border-color border-warning" name="warna" id="pilih">
															<optgroup label="Marketplace">
																<option>Pilih Warna</option>
																<option value="Merah">Merah</option>
																<option value="Hijau">Hijau</option>
																<option value="Abu-abu">Abu-abu</option>
																<option value="Cream">Cream</option>
																<option value="Hitam">Hitam</option>
																<option value="Putih">Putih</option>
																<option value="Tidakada">Tidak Ada</option>
															</optgroup>
														</select>
													</div>
												</div>
											</fieldset>
										</div>

										<div class="col-md-6">
											<fieldset>
												<legend class="text-semibold"><i class="icon-camera position-left"></i> Foto Barang</legend>
												<div class="form-group">
													<div class="col-lg-9">
														<img alt=""  id="foto" class="img-fluid img-thumbnail" src="{{asset('global_assets/images/placeholders/placeholder.jpg')}}"> </img>
														<input type="hidden" id="foto2" name="foto" value="">
													</div>
												</div>

											</fieldset>
										</div>
									</div>

									<div class="text-right">
										<button type="submit" class="btn btn-primary"> Simpan Barang <i class="icon-arrow-right14 position-right"></i></button>
									</div>
								</div>
							</div>
						</form>
				</div>
				<!-- /2 columns form -->

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
<script src="{{asset('global_assets/js/core/libraries/bootstrap.min.js')}}"></script>
<script>
	$(document).ready(function() {
		$("#cariButton").click(function() {
			var url = $("#url").val();
			$(this).button('loading');
			$.ajax({
				url: '{{route('urlajax')}}',
				type: 'POST',
				data: {"_token": "{{ csrf_token() }}",
			"url":url},
			success: function (data) {
				$("#url2").val(url);
				$("#nama").val(data['nama']);
				$("#harga").val(data['harga']);
				$("#deskripsi").val(data['des']);
				$("#foto").attr('src', data['img']);
				$("#foto2").val(data['img']);
				$("#cariButton").button('reset');
				$("#paneldata").show();
			}
		});
	});
	});
</script>
<script>
	$('#categori1').on('change', function(e) {

	});
</script>
<script>

		$('#categori1').on('change', function(e) {

			var id = e.target.value;
			$.get('{{ URL::to("ajaxcat2/") }}/' + id, function(data){

			$('#categori2').empty();
			$.each(data, function(index, id_cat2){
			$('#categori2').append('<option value="'+id_cat2.id+'">'+id_cat2.nama+'</option>');
		});

	});

});
</script>

<script>

		$('#categori2').on('change', function(e) {

			var id = e.target.value;
			$.get('{{ URL::to("ajaxcat3/") }}/' + id, function(data){

			$('#categori3').empty();
			$.each(data, function(index, id_cat3){
			$('#categori3').append('<option value="'+id_cat3.id+'">'+id_cat3.nama+'</option>');
		});

	});

});
</script>

{{-- <script>
$('.btn').on('click', function() {
	var $this = $(this);
$this.button('loading');
	setTimeout(function() {
		 $this.button('reset');
 }, 8000);
});
</script> --}}
@endsection
