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
							<h4><i class="icon-arrow-left52 position-left"></i> <span class="text-semibold">Sistem Informasi Webscraping</span> - Data Produk Amazon</h4>
						</div>

					</div>

					<div class="breadcrumb-line breadcrumb-line-component">
						<ul class="breadcrumb">
							<li><a href="{{route('dropshipper')}}"><i class="icon-home2 position-left"></i> Home</a></li>
							<li class="active">Data Produk Amazon</li>
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

					<!-- Basic datatable -->
					<div class="panel panel-flat">
						<div class="panel-heading">
							<h5 class="panel-title">Data Produk Amazon</h5>
							<div class="heading-elements">
								<ul class="icons-list">
			                		<li><a data-action="collapse"></a></li>
			                		<li><a data-action="reload"></a></li>
			                		<li><a data-action="close"></a></li>
			                	</ul>
		                	</div>
						</div>



						<div class="text-right">
							<a href="{{route('tambahproduk')}}" class="btn btn-primary" style="margin-right:20px" type="submit"> <i class="icon-plus2" > </i> Tambah Barang  </a>
						</div>
						{{-- @if(session()->has('success'))
							<div id="succesToast"></div>
						@endif --}}
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
								@foreach ($amazons as $amazon)
									<tr>
										<td>
											<img src="{{$amazon->foto}}" alt="" class="img-rounded img-preview">
										</td>
										<td>{{$amazon->nama_barang}}</td>
										<td>{{$amazon->harga}}</td>
										<td>{{$amazon->stock}}</td>
										<td>
											@if ($amazon->stock>=1)
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
													<li><a href="{{$amazon->url}}"><i class="fas fa-globe"></i> GO TO URL</a></li>
													<li><a href="{{route('lihatproduk', ['mp' => 'amazon','id'=>$amazon->id])}}"><i class="fas fa-eye"></i> Lihat</a></li>
													<li><a href="#modal_edit" class="editbutton" data-toggle="modal" data-id="{{$amazon->id}}"><i class="fas fa-edit"></i> Edit</a></li>
													<li><a href="#modalHapus" class="hapusbutton" data-toggle="modal" data-id="{{$amazon->id}}" data-nama="{{$amazon->nama_barang}}"><i class="fas fa-trash-alt"></i> Hapus</a></li>
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
	<div id="modal_edit" class="modal fade">
		<div class="modal-dialog modal-lg" style="width:1250px">
			<div class="modal-content" style="width:1200px">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h5 class="modal-title">Edit Data Barang</h5>
				</div>
				<form action="{{route('updatemodalamazon')}}" class="form-horizontal" method="post">
					{{ csrf_field() }}
					<input type="hidden" id="id_edit" name="id_edit" >
					<div class="panel-body">
						<div class="row">
							<div class="col-md-6">
								<fieldset>
									<legend class="text-semibold"><i class="con-box position-left"></i> Data Barang</legend>
									<div class="form-group">
										<label class="col-lg-3 control-label">URL</label>
										<div class="col-lg-9">
											<input name="modal_url" type="text" id="modal_url2" class="form-control" readonly="readonly" value="{{old('modal_url')}}">
										</div>
									</div>

									<div class="form-group">
										<label class="col-lg-3 control-label">Judul / Nama Barang</label>
										<div class="col-lg-9">
											<input value="{{old('modal_nama_barang')}}" name="modal_nama_barang" type="text" class="form-control" id="modal_nama_barang" required>
										</div>
									</div>

									<div class="form-group">
										<label class="col-lg-3 control-label">Harga Barang:</label>
										<div class="col-lg-9">
											<input value="{{old('modal_harga')}}" name="modal_harga" type="text" class="form-control" id="modal_harga" required>
										</div>
									</div>

									<div class="form-group">
										<label class="col-lg-3 control-label">Berat Barang:</label>
										<div class="col-lg-9">
											<div class="input-group">
											<input value="{{old('modal_berat')}}" name="modal_berat" type="text" id="modal_berat" class="form-control" required>
											<span class="input-group-addon">Kg</span>
										</div>
										</div>
									</div>

									<div class="form-group">
										<label class="col-lg-3 control-label">Stock Barang:</label>
										<div class="col-lg-9">
											<input value="{{old('modal_stock')}}" name="modal_stock" type="text" id="modal_stock" class="form-control" required>
										</div>
									</div>

									{{-- <div class="form-group">
											<label class="col-lg-3 control-label">Deskripsi Barang:</label>
											<div class="col-lg-9">
												<textarea rows="10" cols="5" name="deskripsi" id="deskripsi" class="form-control" ></textarea>
											</div>
										</div> --}}

									<div class="form-group">
										<label class="col-lg-3 control-label">Categori 1:</label>
										<div class="col-lg-9">
											<select class="select-search select-border-color border-warning" name="modal_cat1" id="modal_categori1">
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
												<select class="select-search select-border-color border-warning" name="modal_cat2" id="modal_categori2" required>
												<option selected="true" disabled>Pilih Categori</option>
											</select>
										</div>
									</div>

									<div class="form-group">
										<label class="col-lg-3 control-label">Categori 3:</label>
										<div class="col-lg-9">
											<select class="select-search select-border-color border-warning" name="modal_cat3" id="modal_categori3">
												<option selected="true" disabled>Pilih Categori</option>
											</select>
										</div>
									</div>

									<div class="form-group modal_ukuran">
										<label class="col-lg-3 control-label">Ukuran:</label>
										<div class="col-lg-9">
											<select class="select-search select-border-color border-warning" name="modal_ukuran" id="modal_ukuran">
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

									{{-- <div class="form-group">
												<label class="col-lg-3 control-label">Warna:</label>
												<div class="col-lg-9">
													<select class="select-search select-border-color border-warning" name="modal_warna" id="modal_warna">
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
											</div> --}}
									<div class="form-group modal_warna">
										<label class="col-lg-3 control-label">Warna:</label>
										<div class="col-lg-9">
											<input name="modal_warna" type="color" id="modal_warna" class="form-control" value="{{old('modal_warna')}}">
										</div>
									</div>
								</fieldset>
							</div>

							<div class="col-md-6">
								<fieldset>
									<legend class="text-semibold"><i class="icon-camera position-left"></i> Foto Barang</legend>
									<div class="form-group">
										<div class="col-lg-9">
											<img alt="" id="modal_foto" class="img-fluid img-thumbnail" src="{{asset('global_assets/images/placeholders/placeholder.jpg')}}"> </img>
											<input type="hidden" id="modal_foto2" name="modal_foto" value="">
										</div>
									</div>

								</fieldset>
								{{-- <legend class="text-semibold"><i class="icon-camera position-left"></i> Ganti foto</legend>
								<input type="file" class="file-input" data-show-caption="false" data-show-upload="false" name="modal_ganti_foto" id="modal_ganti_foto"> --}}
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<div class="form-group">
									<label class="col-lg-3 control-label">Deskripsi Barang:</label>
									<div class="col-lg-12">
										<textarea class="form-control" id="editor1" name="modal_deskripsi"></textarea>
									</div>
								</div>
							</div>
						</div>
						<div class="modal-footer">
							<button type="submit" class="btn btn-link" data-dismiss="modal">Keluar</button>
							<button type="submit" id="noty_success" class="btn btn-primary">Simpan</button>
						</div>

						{{-- <div class="text-right">
									<button type="submit" class="btn btn-primary"> Simpan Barang <i class="icon-arrow-right14 position-right"></i></button>
								</div> --}}
					</div>

					{{-- <div class="modal-footer">
		          <button type="button" class="btn btn-link" data-dismiss="modal">Keluar</button>
		          <button type="submit" class="btn btn-primary">Simpan</button>
		        </div> --}}
				</form>

			</div>
		</div>
	</div>

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
					<form action="{{route('hapusmodalamazon')}}" method="post">
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
		$('#modal_categori1').on('change', function(e) {
			var cat1 = $(this).val();
			if(cat1 == 11 || cat1 == 12 || cat1 == 13 || cat1 == 16 || cat1 == 17 || cat1 == 18 || cat1 == 19 || cat1 == 20 || cat1 == 21 || cat1 == 22 || cat1 == 24 || cat1 == 25 || cat1 == 26 || cat1 == 27 || cat1 == 28 || cat1 == 29){
				$('.modal_warna').hide();
				$('.modal_ukuran').hide();
			}
			else if (cat1 == 14 || cat1 == 15 || cat1 == 23) {
				$('.modal_warna').show();
				$('.modal_ukuran').show();
			}
		});
	</script>

<script>

	$('#modal_categori1').on('change', function(e) {
		var id = e.target.value;

		$.get('{{ URL::to("ajaxcat2/") }}/' + id, function(data){

		$('#modal_categori2').empty();
		$.each(data, function(index, id_cat2){

		$('#modal_categori2').append('<option value="'+id_cat2.id+'">'+id_cat2.nama+'</option>');

	});

	$('#modal_categori2').on('change', function(e){
		var cat2 = $(this).val();
		if (cat2 == 135 || cat2 == 151 || cat2 == 152 || cat2 == 157 || cat2 == 158 || cat2 == 159 || cat2 == 160 || cat2 == 161 || cat2 == 164 || cat2 == 173 || cat2 == 174 || cat2 == 179 || cat2 == 180 || cat2 == 181 || cat2 == 182 || cat2 == 183 || cat2 == 184 ) {
			$('.modal_warna').hide();
			$('.modal_ukuran').hide();
		}
		else if (cat2 == 133 || cat2 == 131 || cat2 == 134 || cat2 == 137 || cat2 == 138 || cat2 == 139 || cat2 == 153 || cat2 == 154 || cat2 == 162 || cat2 == 166 || cat2 == 167 || cat2 == 168 || cat2 == 172) {
			$('.modal_warna').show();
			$('.modal_ukuran').show();
		}
		else if (cat2 == 130 || cat2 == 132 || cat2 == 136 || cat2 == 140 || cat2 == 141 || cat2 == 142 || cat2 == 143 || cat2 == 145 || cat2 == 144 || cat2 == 146 || cat2 == 147 || cat2 == 148 || cat2 == 149 || cat2 == 150 || cat2 == 155 || cat2 == 156 || cat2 == 163 || cat2 == 165 || cat2 == 169 || cat2 == 170 || cat2 == 171 || cat2 == 175 || cat2 == 176 || cat2 == 177 || cat2 == 178 || cat2 == 291 || cat2 == 292 || cat2 == 293 || cat2 == 294 || cat2 == 295) {
			$('.modal_warna').hide();
			$('.modal_ukuran').show();
		}
	});

}); 

});

</script>

		<script>

				$('#modal_categori2').on('change', function(e) {

					var id = e.target.value;
					$.get('{{ URL::to("ajaxcat3/") }}/' + id, function(data){

					$('#modal_categori3').empty();
					$.each(data, function(index, id_cat3){
					$('#modal_categori3').append('<option value="'+id_cat3.id+'">'+id_cat3.nama+'</option>');
				});

			});

		});
		</script>

		<script>
		$(document).on('click', '.editbutton', function(e){
			// $('.editbutton').click(function(){
				var iD = $(this).attr('data-id');
				$.get('{{URL::to("dropshipper/amazon/edit") }}/' + iD, function (data){
					$.each(data, function (index,amazons_edit) {
						$('#id_edit').val(iD);
						$('#modal_nama_barang').val(amazons_edit.nama_barang);
						$("#modal_url2").val(amazons_edit.url);
						$("#modal_foto").attr('src', amazons_edit.foto);
						$("#modal_foto2").val(amazons_edit.foto);
						$('#modal_harga').val(amazons_edit.harga);
						// $('#modal_deskripsi').data("wysihtml5").editor.setValue(tokopedias_edit.deskripsi);
						CKEDITOR.instances.editor1.setData(amazons_edit.deskripsi);
						$('#modal_berat').val(amazons_edit.berat);
						$('#modal_stock').val(amazons_edit.stock);
						$('#modal_categori1').val(amazons_edit.cat1).change();
						// $('#modal_categori2').val(amazons_edit.cat2).change();
						// $('#modal_categori3').val(amazons_edit.cat3);
						$('#modal_ukuran').val(amazons_edit.ukuran).change();
						$('#modal_warna').val(amazons_edit.warna);
						
						var id_cate2 = amazons_edit.cat2;
						var id_cate3 = amazons_edit.cat3;
						// console.log(id_cat2);
						$.get('{{ URL::to("ajaxcat2/") }}/' + amazons_edit.cat1, function(data){
							$('#modal_categori2').empty();
							$.each(data, function(index, id_cat2){
								var select="";
								if(id_cat2.id==id_cate2){
									select="selected";
								}
								// console.log(select);
							$('#modal_categori2').append('<option '+select+' value="'+id_cat2.id+'">'+id_cat2.nama+'</option>');

							});
					});
					$.get('{{ URL::to("ajaxcat3/") }}/' + amazons_edit.cat2, function(data){

							$('#modal_categori3').empty();
							$.each(data, function(index, id_cat3){
								var select="";
								if(id_cat3.id==id_cate3){
									select="selected";
								}
							$('#modal_categori3').append('<option '+select+' value="'+id_cat3.id+'">'+id_cat3.nama+'</option>');
							});

					});
				});

			});
		});
			$(document).on('click', '.hapusbutton', function(e){
			// $(".hapusbutton").click(function (e) {
				var nama = $(this).data('nama');
				var id = $(this).data('id');

				$(".field_modal_id").val(id);
				$(".hapusnama").html("Apakah Anda Yakini Hapus Data <b>"+nama+"?</b>");
			});
		</script>

		{{-- <script>
	// Command: toastr["success"]("Selamat data anda telah tersimpan", "Berhasil")

	toastr.options = {
	"closeButton": false,
	"debug": false,
	"newestOnTop": false,
	"progressBar": true,
	"positionClass": "toast-top-right",
	"preventDuplicates": false,
	"onclick": null,
	"showDuration": "300",
	"hideDuration": "1000",
	"timeOut": "5000",
	"extendedTimeOut": "1000",
	"showEasing": "swing",
	"hideEasing": "linear",
	"showMethod": "fadeIn",
	"hideMethod": "fadeOut"
	}

	if($('#succesToast').is(':visible')) {
		toastr.success("Data Amazon","Berhasil");
	}
		</script> --}}

		<script>
		// Replace the <textarea id="editor1"> with a CKEditor
								// instance, using default configuration.
		CKEDITOR.replace( 'editor1',{height: 500});
		$("form").submit( function(e) {
		var messageLength = CKEDITOR.instances['editor1'].getData().replace(/<[^>]*>/gi, '').length;
		if( !messageLength ) {
			alert( 'Deskripsi tidak boleh kosong. Mohon diisi :)' );
			e.preventDefault();
		}
		});
		</script>



		@include('sweet::alert')
	@if ($message=Session::get('success'))

	<script> swal("Sukses..","{{ $message }}","success") </script>

	@elseif ($message=Session::get('error'))

	<script> swal("Oops...","{{ $message }}","error") </script>

	@elseif ($message=Session::get('danger'))

	<script> swal("Oops...","{{ $message }}","error") </script>

	@elseif ($message=Session::get('warning'))

	<script> swal("Oops...","{{ $message }}","warning") </script>

	@endif


 {{-- <script>
 	$("#editbutton").click(function (e) {
		var id = $(this).data('id');

		$.getJSON('dropshipper/amazon/edit/' + id, function(data){

		}).done(function(element) {
			$("#nama").val(element.nama_barang);
		});

	});
 </script> --}}

@endsection
