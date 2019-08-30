@extends('superadmin.layouts.app')
@section('title','Penjualan Selesai Dropshipping UMKM')

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
							<h4><i class="icon-arrow-left52 position-left"></i> <span class="text-semibold">Sistem Informasi Dropshipping</span> - Penjualan Selesai</h4>
						</div>

					</div>

					<div class="breadcrumb-line breadcrumb-line-component">
						<ul class="breadcrumb">
							<li><a href="{{route('superadmin')}}"><i class="icon-home2 position-left"></i> Home</a></li>
							<li class="active">Penjualan Selesai
						</ul>
					</div>
				</div>
				<!-- /page header -->


				<!-- Content area -->
				<div class="content">

					<!-- Basic datatable -->
					<div class="panel panel-flat">
						<div class="panel-heading">
							<h5 class="panel-title">Penjualan Selesai</h5>
							<div class="heading-elements">
								<ul class="icons-list">
			                		<li><a data-action="collapse"></a></li>
			                		<li><a data-action="reload"></a></li>
			                		<li><a data-action="close"></a></li>
			                	</ul>
		                	</div>
						</div>

						



						<table class="table datatable-basic">
							<thead>
								<tr>
									<th>Nama Pembeli</th>
									<th>Nama Barang</th>
									<th>Tanggal Pembelian</th>
									<th>Harga</th>
									<th>Status</th>
									<th class="text-center">Actions</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>Yuda</td>
									<td>Flashdisk Sandisk</td>
									<td>30-01-2019</td>
									<td>Rp.65.000</td>
									<td><span class="label label-primary">Sedang Di Proses</span></td>
									<td class="text-center">
										<div class="text-right">
											<button class="btn btn-primary" style="margin-right:20px" type="submit"> <i class="icon-list2" > </i> Lihat Penjualan Selesai </button>
										</div>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
					<!-- /basic datatable -->

					<!-- Footer -->
						@include('superadmin.include.footer')
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
