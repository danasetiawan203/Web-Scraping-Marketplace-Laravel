@extends('admin.layouts.app')
@section('title','Daftar Pesanan Dropshipping UMKM')
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
							<h4><i class="icon-arrow-left52 position-left"></i> <span class="text-semibold">Sistem Informasi Dropshipping</span> - Daftar Pesanan</h4>
						</div>

					</div>

					<div class="breadcrumb-line breadcrumb-line-component">
						<ul class="breadcrumb">
							<li><a href="{{route('dropshipper')}}"><i class="icon-home2 position-left"></i> Home</a></li>
							<li class="active">Daftar Pesanan
						</ul>
					</div>
				</div>
				<!-- /page header -->


				<!-- Content area -->
				<div class="content">

					<!-- Basic datatable -->
					<div class="panel panel-flat">
						<div class="panel-heading">
							<h5 class="panel-title">Daftar Pesanan</h5>
							<div class="heading-elements">
								<ul class="icons-list">
			                		<li><a data-action="collapse"></a></li>
			                		<li><a data-action="reload"></a></li>
			                		<li><a data-action="close"></a></li>
			                	</ul>
		                	</div>
						</div>



						<div class="text-right">
							<button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modal_form_horizontal" style="margin-right:20px" > <i class="icon-plus2" > </i> Tambah Data </button>
						</div>

						<table class="table datatable-basic">
							<thead>
								<tr>
									<th>Nama Pembeli</th>
									<th>Nama Barang</th>
									<th>Jumlah Barang</th>
									<th>Harga</th>
									<th>Status</th>
									<th class="text-center">Actions</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>Yuda</td>
									<td>Flashdisk Sandisk</td>
									<td>2</td>
									<td>Rp.65.000</td>
									<td><span class="label label-info">Barang Sudah Sampai</span></td>
									<td class="text-center">
										<ul class="icons-list">
											<li class="dropdown">
												<a href="#" class="dropdown-toggle" data-toggle="dropdown">
													<i class="icon-menu9"></i>
												</a>

												<ul class="dropdown-menu dropdown-menu-right">
													<li><a href="#"><i class="icon-list2"></i> Lihat</a></li>
													<li><a href="#"><i class="icon-checkmark5"></i> Verifikasi</a></li>
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

	<div id="modal_form_horizontal" class="modal fade" tabindex="-1">
	  <div class="modal-dialog modal-lg">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal">&times;</button>
	        <h5 class="modal-title">Daftar Pesanan</h5>
	      </div>

	      <form action="#" class="form-horizontal">
	        <div class="modal-body">
	          <div class="form-group">
	            <label class="control-label col-sm-3">Nama Pembeli</label>
	            <div class="col-sm-9">
	              <input type="text" placeholder="Wahyudha Makhutha" class="form-control">
	            </div>
	          </div>

	          <div class="form-group">
	            <label class="control-label col-sm-3">Nama Baranag</label>
	            <div class="col-sm-9">
	              <input type="text" placeholder="Hanphone Xioami Mi4i" class="form-control">
	            </div>
	          </div>

						<div class="form-group">
	            <label class="control-label col-sm-3">Jumlah Barang</label>
	            <div class="col-sm-9">
	              <input type="number" placeholder="2" class="form-control">
	            </div>
	          </div>

						<div class="form-group">
	            <label class="control-label col-sm-3">Harga Barang</label>
	            <div class="col-sm-9">
	              <input type="number" placeholder="Rp 2.000.000" class="form-control">
	            </div>
	          </div>

						<div class="form-group">
	            <label class="control-label col-sm-3">Tanggal</label>
	            <div class="col-sm-9">
	              <input type="text" id="date" class="floating-label mdl-textfield_input form-control" name="tanggal" placeholder="2019-01-01">
	            </div>
	          </div>

	          <div class="form-group">
	            <label class="control-label col-sm-3">No Handphone</label>
	            <div class="col-sm-9">
	              <input type="text" name="tel" placeholder="0813-9999-9999" data-mask="9999-9999-9999"  class="form-control">
	            </div>
	          </div>

						<div class="form-group">
							<label class="control-label col-sm-3">Provinsi</label>
							<div class="col-sm-9">
								<select name="select" class="form-control">
 									 <option>Provinsi</option>
 									 <option value="opt2">Option 2</option>
 									 <option value="opt3">Option 3</option>
 									 <option value="opt4">Option 4</option>
 									 <option value="opt5">Option 5</option>
 									 <option value="opt6">Option 6</option>
 									 <option value="opt7">Option 7</option>
 									 <option value="opt8">Option 8</option>
 							 </select>
							</div>
						</div>

						<div class="form-group">
	            <label class="control-label col-sm-3">Kabupaten</label>
	            <div class="col-sm-9">
								<select name="select" class="form-control">
 									 <option>Kabupaten</option>
 									 <option value="opt2">Option 2</option>
 									 <option value="opt3">Option 3</option>
 									 <option value="opt4">Option 4</option>
 									 <option value="opt5">Option 5</option>
 									 <option value="opt6">Option 6</option>
 									 <option value="opt7">Option 7</option>
 									 <option value="opt8">Option 8</option>
 							 </select>
	            </div>
	          </div>

						<div class="form-group">
	            <label class="control-label col-sm-3">Alamat</label>
	            <div class="col-sm-9">
	             <textarea name="experience-description" rows="4" cols="4" placeholder="Jl. Sriwijaya GG.Melati No.20 Enggal Bandar Lampung" class="form-control"></textarea>
	            </div>
	          </div>


	        </div>

	        <div class="modal-footer">
	          <button type="button" class="btn btn-link" data-dismiss="modal">Keluar</button>
	          <button type="submit" class="btn btn-primary">Simpan</button>
	        </div>
	      </form>
	    </div>
	  </div>
	</div>

	<!-- /page container -->

	<script src="{{asset('assets/material-datetimepicker/bootstrap-material-datetimepicker.js')}}"></script>
	<script src="{{asset('assets/material-datetimepicker/datetimepicker.js')}}"></script>
@endsection
