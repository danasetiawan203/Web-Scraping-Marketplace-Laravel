@extends('admin.layouts.app')
@section('title','Tambah Barang Dropshipping UMKM')

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
						<li><a href="{{route('dropshipper')}}"><i class="icon-home2 position-left"></i> Home</a></li>
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
												<input type="text" class="form-control" placeholder="https://www.tokopedia.com/dokistore/new-xiaomi-mi-8-lite-4gb-64gb-garansi-1-tahun-midnight-black?src=topads">
											</div>
										</div>
									</fieldset>
								</div>
							</div>

							<div class="text-right">
								<button type="submit" class="btn btn-primary">Cari Data <i class="icon-arrow-right14 position-right"></i></button>
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
				<form class="form-horizontal" action="#">
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
												<input type="text" class="form-control" placeholder="https://www.tokopedia.com/dokistore/new-xiaomi-mi-8-lite-4gb-64gb-garansi-1-tahun-midnight-black?src=topads">
											</div>
										</div>

										<div class="form-group">
											<label class="col-lg-3 control-label">Judul / Nama Barang</label>
											<div class="col-lg-9">
												<input type="text" class="form-control" placeholder="Redmi Note 7">
											</div>
										</div>

										<div class="form-group">
											<label class="col-lg-3 control-label">Harga Barang:</label>
											<div class="col-lg-9">
												<input type="number" class="form-control" placeholder="Rp.1.000.000">
											</div>
										</div>

										<div class="form-group">
											<label class="col-lg-3 control-label">Berat Barang:</label>
											<div class="col-lg-9">
												<input type="number" class="form-control" placeholder="500 gr">
											</div>
										</div>

										<div class="form-group">
											<label class="col-lg-3 control-label">Deskripsi Barang:</label>
											<div class="col-lg-9">
												<textarea rows="5" cols="5" class="form-control" placeholder="deskripsi barang iphone"></textarea>
											</div>
										</div>
									</fieldset>
								</div>

								<div class="col-md-6">
									<fieldset>
										<legend class="text-semibold"><i class="icon-camera position-left"></i> Foto Barang</legend>
										<div class="form-group">
											<div class="col-lg-9">
												<img alt="" class="img-fluid img-thumbnail" src="{{asset('global_assets/images/placeholders/placeholder.jpg')}}"> </img>
											</div>
										</div>

									</fieldset>
								</div>
							</div>

							<div class="text-right">
								<a href="{{route('daftarbarang')}}" div type="submit" class="btn btn-primary"> Simpan Barang <i class="icon-arrow-right14 position-right"></i></a>
							</div>
						</div>
					</div>
				</form>
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

@endsection

@section('js')

	<!-- Core JS files -->
	<script src="{{asset('global_assets/js/plugins/loaders/pace.min.js')}}"></script>
	<script src="{{asset('global_assets/js/core/libraries/jquery.min.js')}}"></script>
	<script src="{{asset('global_assets/js/core/libraries/bootstrap.min.js')}}"></script>
	<script src="{{asset('global_assets/js/plugins/loaders/blockui.min.js')}}"></script>
	<!-- /core JS files -->

	<!-- Theme JS files -->
	<script src="{{asset('global_assets/js/plugins/forms/selects/select2.min.js')}}"></script>
	<script src="{{asset('global_assets/js/plugins/forms/styling/uniform.min.js')}}"></script>

	<script src="{{asset('assets/js/app.js')}}"></script>
	<script src="{{asset('global_assets/js/demo_pages/form_layouts.js')}}"></script>
	<!-- /theme JS files -->

@endsection
