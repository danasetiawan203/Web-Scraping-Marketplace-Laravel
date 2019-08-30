@extends('superadmin.layouts.app')
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
							<h4><i class="icon-arrow-left52 position-left"></i> <span class="text-semibold">Sistem Informasi Webscraping</span> - Data Produk Zalora</h4>
						</div>

					</div>

					<div class="breadcrumb-line breadcrumb-line-component">
						<ul class="breadcrumb">
							<li><a href="{{route('superadmin')}}"><i class="icon-home2 position-left"></i> Home</a></li>
							<li class="active">Data Produk Zalora</li>
						</ul>
					</div>
				</div>
				<!-- /page header -->


				<!-- Content area -->
				<div class="content">

					<!-- Basic datatable -->
					<div class="panel panel-flat">
						<div class="panel-heading">
							<h5 class="panel-title">Data Produk Zalora</h5>
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
									<th>Review</th>
									<th>Nama Barang</th>
									<th>Harga</th>
									<th>Stock</th>
									<th>Status Barang</th>
									<th class="text-center">Actions</th>
								</tr>
							</thead>
							<tbody>
								@foreach ($zaloras as $zalora)
						<tr>

							<td>
								<img src="{{$zalora->foto}}" alt="" class="img-rounded img-preview">
							</td>
							<td>{{$zalora->nama_barang}}</td>
							<td>{{$zalora->harga}}</td>
							<td>{{$zalora->stock}}</td>
							<td>
								@if ($zalora->stock>=1)
										<span class="label label-primary">Tersedia</span></td>
								@else
									<span class="label label-danger">Tidak Tersedia</span></td>
								@endif
									<td class="text-center">
										<ul class="icons-list">
											<li class="dropdown">
												<a href="#" class="dropdown-toggle" data-toggle="dropdown">
													<i class="icon-menu9"></i>
												</a>

												<ul class="dropdown-menu dropdown-menu-right">
													<li><a href="{{$zalora->url}}"><i class="fas fa-globe"></i> GO TO URL</a></li>
													<li><a href="{{route('lihat.produk.superadmin', ['mp' => 'zalora','id'=>$zalora->id])}}"><i class="fas fa-eye"></i> Lihat</a></li>
													<li><a href="#modalHapus" class="hapusbutton" data-toggle="modal" data-id="{{$zalora->id}}" data-nama="{{$zalora->nama_barang}}"><i class="fas fa-trash-alt"></i> Hapus</a></li>
												</ul>
											</li>
										</ul>
									</td>
								</tr>
							@endforeach
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

	<div id="modalHapus" class="modal fade" tabindex="-1">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h5 class="modal-title">Hapus Data</h5>
					</div>
	
					<div class="modal-body">
						<p class="hapusnama"></p>
					</div>
	
					<div class="modal-footer">
						<form action="{{route('hapusmodalzaloraSA')}}" method="post">
							@csrf
							<input type="hidden" class="field_modal_id" name="id">
							<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
							<button type="submit" class="btn btn-danger">Hapus</button>
						</form>
					</div>
				</div>
			</div>
		</div>

		<script>
			$(document).on('click', '.hapusbutton', function(e){
			// $(".hapusbutton").click(function (e) {
				var nama = $(this).data('nama');
				var id = $(this).data('id');

				$(".field_modal_id").val(id);
				$(".hapusnama").html("Apakah Anda Yakini Hapus Data <b>"+nama+"?</b>");
			});
		</script>

@endsection
