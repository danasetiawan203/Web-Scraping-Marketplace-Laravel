@extends('admin.layouts.app')
@section('title','Daftar Barang Dropshipping UMKM')

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
							<h4><i class="icon-arrow-left52 position-left"></i> <span class="text-semibold">Sistem Informasi Dropshipping</span> - Daftar Barang</h4>
						</div>

					</div>

					<div class="breadcrumb-line breadcrumb-line-component">
						<ul class="breadcrumb">
							<li><a href="{{route('dropshipper')}}"><i class="icon-home2 position-left"></i> Home</a></li>
							<li class="active">Daftar Barang</li>
						</ul>
					</div>
				</div>
				<!-- /page header -->


				<!-- Content area -->
				<div class="content">

					<!-- Basic datatable -->
					<div class="panel panel-flat">
						<div class="panel-heading">
							<h5 class="panel-title">Daftar Barang</h5>
							<div class="heading-elements">
								<ul class="icons-list">
			                		<li><a data-action="collapse"></a></li>
			                		<li><a data-action="reload"></a></li>
			                		<li><a data-action="close"></a></li>
			                	</ul>
		                	</div>
						</div>



						<div class="text-right">
							<a href="{{route('tambahbarang')}}" class="btn btn-primary" style="margin-right:20px" type="submit"> <i class="icon-plus2" > </i> Tambah Barang  </a>
						</div>

						<table class="table datatable-basic">
							<thead>
								<tr>
									<th>Review</th>
									<th>Nama Barang</th>
									<th>Harga</th>
									<th>Berat</th>
									<th>Status Barang</th>
									<th class="text-center">Actions</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>
										<a href="{{ url('assets/images/demo/flat/2.png') }}" data-popup="lightbox">
											<img src="{{asset('global_assets/images/placeholders/barang.jpg')}}" alt="" class="img-rounded img-preview">
										</a>
									</td>
									<td>xioami MI4I</td>
									<td>Rp. 1.000.000 </td>
									<td>500gr</td>
									<td><span class="label label-danger">Tidak Tersedia</span></td>
									<td class="text-center">
										<ul class="icons-list">
											<li class="dropdown">
												<a href="#" class="dropdown-toggle" data-toggle="dropdown">
													<i class="icon-menu9"></i>
												</a>

												<ul class="dropdown-menu dropdown-menu-right">
													<li><a href="#"><i class="icon-sphere"></i> GO TO URL</a></li>
													<li><a href="#"><i class="icon-list2"></i> Lihat</a></li>
													<li><a href="#"><i class="icon-pencil7"></i> Edit</a></li>
													<li><a href="#"><i class="icon-bin"></i> Hapus</a></li>
												</ul>
											</li>
										</ul>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
					<!-- /basic datatable -->

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
	<script src="{{asset('global_assets/js/plugins/media/fancybox.min.js')}}"></script>
	<script src="{{asset('global_assets/js/plugins/forms/styling/uniform.min.js')}}"></script>
	<script src="{{asset('global_assets/js/plugins/forms/selects/select2.min.js')}}"></script>
	<script src="{{asset('global_assets/js/plugins/tables/datatables/datatables.min.js')}}"></script>

	<script src="{{asset('assets/js/app.js')}}"></script>
	<script src="{{asset('global_assets/js/demo_pages/gallery_library.js')}}"></script>
	<!-- /theme JS files -->

@endsection
