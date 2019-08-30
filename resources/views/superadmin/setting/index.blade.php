@extends('superadmin.layouts.app')
@section('title','Setting Dropshipping UMKM')

@section('content')


<body class="pace-done">


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
                            <h4><i class="icon-arrow-left52 position-left"></i> <span class="text-semibold">Setting E-Marketplace</span></h4>
                        </div>
                    </div>

                    <div class="breadcrumb-line breadcrumb-line-component">
                        <ul class="breadcrumb">
                            <li><a href="" {{route('superadmin')}}""><i class="icon-home2 position-left"></i> Home</a></li>
                            <li class="active">Setting</li>
                        </ul>
                    </div>
                </div>
                <!-- /page header -->


                <!-- Content area -->
                <div class="content">


                    <!-- Detached sidebar -->

                    <!-- /detached sidebar -->


                    <!-- Detached content -->
                    <div class="container-detached" style="max-width: 400px;">
                        <div class="content-detached">

                            <!-- Tab content -->
                            <br><br>
                            <div class="tab-content">
                                <div class="tab-pane fade in active" id="profile">

                                    <div class="panel panel-flat">

                                        <div class="panel-body">
                                            <label>Pilih marketplace</label>
                                            <form class="form-inline">
                                                <div class="form-group" style="width: 230px;">
                                                    <select class="select-search select-border-color border-warning" id="pilih" >
                                                        <optgroup label="Marketplace">
                                                            <option>Marketplace</option>
                                                            <option value="Tokopedia">Tokopedia</option>
                                                            <option value="Bukalapak">Bukalapak</option>
                                                            <option value="Lazada">Lazada</option>
                                                            <option value="Kriya">Kriya</option>
                                                            <option value="Zilingo">Zilingo</option>
                                                            <option value="Zalora">Zalora</option>
                                                            <option value="Blanja.com">Blanja.com</option>
                                                            <option value="Amazon">Amazon</option>
                                                            <option value="Alibaba">Alibaba</option>
                                                        </optgroup>
                                                    </select>
                                                </div>
                                                <div class="form-group">

                                                    <button type="button" id="btn" class="btn btn-default"><i class="fa fa-search position-left"></i> Cari</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <!-- /tab content -->
                        </div>
                    </div>
                    <div class="container-detached" style="display:none" id="tokopedia">
                        <div class="content-detached">

                            <!-- Tab content -->
                            <div class="tab-content">
                                <div class="tab-pane fade in active" id="profile">

                                    <div class="panel panel-flat">
                                        <div class="panel-heading">
                                            <h6 class="panel-title">Ubah pengaturan scraping Tokopedia</h6>
                                            <div class="heading-elements">
                                                <ul class="icons-list">
                                                    <li><a data-action="collapse"></a></li>
                                                    <li><a data-action="reload"></a></li>
                                                    <li><a data-action="close"></a></li>
                                                </ul>
                                            </div>
                                        </div>

                                        <div class="panel-body">
                                            <form action="{{route('superadmin.simpan.setting')}}" method="post" >
                                              {{csrf_field()}}
                                              <input type="hidden" name="marketplace" value="Tokopedia">
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-md-10">
                                                            <label>Judul:</label>
                                                            <input type="text" name="judul_tokopedia" id="judul_tokopedia" class="form-control" placeholder="" readonly>
                                                            <br>
                                                        </div>
                                                        <div class="col-md-10">
                                                            <label>Gambar:</label>
                                                            <input type="text" name="gambar_tokopedia" id="gambar_tokopedia" class="form-control" placeholder="" readonly>
                                                        </div>


                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-md-10">
                                                            <label>Harga</label>
                                                            <input type="angka" name="harga_tokopedia" id="harga_tokopedia" placeholder="" class="form-control" readonly>
                                                            <br>
                                                        </div>

                                                        <div class="col-md-10">
                                                            <label>Deskripsi</label>
                                                            <input type="text" name="des_tokopedia" id="des_tokopedia" placeholder="" class="form-control" readonly>
                                                        </div>
                                                    </div>
                                                </div>



                                                <div class="text-right">
                                                    <a class="btnedit btn btn-primary">Edit <i class="fa fa-pencil-square-o position-right"></i></a>
                                                    <button type="submit" style="display:none" class="btnsimpan btn btn-primary">Simpan <i class="fa fa-save  position-right"></i></button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <!-- /tab content -->
                        </div>
                    </div>

                    <div class="container-detached" style="display:none" id="bukalapak">
                        <div class="content-detached">

                            <!-- Tab content -->
                            <div class="tab-content">
                                <div class="tab-pane fade in active" id="profile">

                                    <div class="panel panel-flat">
                                        <div class="panel-heading">
                                            <h6 class="panel-title">Ubah pengaturan scraping Bukalapak</h6>
                                            <div class="heading-elements">
                                                <ul class="icons-list">
                                                    <li><a data-action="collapse"></a></li>
                                                    <li><a data-action="reload"></a></li>
                                                    <li><a data-action="close"></a></li>
                                                </ul>
                                            </div>
                                        </div>

                                        <div class="panel-body">
                                            <form action="{{route('superadmin.simpan.setting')}}" method="post">
                                              {{csrf_field()}}
                                              <input type="hidden" name="marketplace" value="Bukalapak">
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-md-10">
                                                            <label>Judul:</label>
                                                            <input type="text" name="judul_bukalapak" id="judul_bukalapak" class="form-control" placeholder="" readonly>
                                                            <br>
                                                        </div>
                                                        <div class="col-md-10">
                                                            <label>Gambar:</label>
                                                            <input type="text" name="gambar_bukalapak" id="gambar_bukalapak" class="form-control" placeholder="" readonly>
                                                        </div>


                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-md-10">
                                                            <label>Harga</label>
                                                            <input type="angka" name="harga_bukalapak" id="harga_bukalapak" placeholder="" class="form-control" readonly>
                                                            <br>
                                                        </div>

                                                        <div class="col-md-10">
                                                            <label>Deskripsi</label>
                                                            <input type="text" name="des_bukalapak" id="des_bukalapak" placeholder="" class="form-control" readonly>
                                                        </div>
                                                    </div>
                                                </div>



                                                <div class="text-right">
                                                    <a class="btnedit btn btn-primary">Edit <i class="fa fa-pencil-square-o position-right"></i></a>
                                                    <button type="submit" style="display:none" class="btnsimpan btn btn-primary">Simpan <i class="fa fa-save  position-right"></i></button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <!-- /tab content -->
                        </div>
                    </div>

                    <div class="container-detached" style="display:none" id="lazada">
                        <div class="content-detached">

                            <!-- Tab content -->
                            <div class="tab-content">
                                <div class="tab-pane fade in active" id="profile">

                                    <div class="panel panel-flat">
                                        <div class="panel-heading">
                                            <h6 class="panel-title">Ubah pengaturan scraping Lazada</h6>
                                            <div class="heading-elements">
                                                <ul class="icons-list">
                                                    <li><a data-action="collapse"></a></li>
                                                    <li><a data-action="reload"></a></li>
                                                    <li><a data-action="close"></a></li>
                                                </ul>
                                            </div>
                                        </div>

                                        <div class="panel-body">
                                            <form action="{{route('superadmin.simpan.setting')}}" method="post">
                                              {{ csrf_field() }}
                                              <input type="hidden" name="marketplace" value="Lazada">
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-md-10">
                                                            <label>Judul:</label>
                                                            <input type="text" name="judul_lazada" id="judul_lazada" class="form-control" placeholder="" readonly>
                                                            <br>
                                                        </div>
                                                        <div class="col-md-10">
                                                            <label>Gambar:</label>
                                                            <input type="text" name="gambar_lazada" id="gambar_lazada" class="form-control" placeholder="" readonly>
                                                        </div>


                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-md-10">
                                                            <label>Harga</label>
                                                            <input type="angka" name="harga_lazada" id="harga_lazada" placeholder="" class="form-control" readonly>
                                                            <br>
                                                        </div>

                                                        <div class="col-md-10">
                                                            <label>Deskripsi</label>
                                                            <input type="text" name="des_lazada" id="des_lazada" placeholder="" class="form-control" readonly>
                                                        </div>
                                                    </div>
                                                </div>



                                                <div class="text-right">
                                                    <a class="btnedit btn btn-primary">Edit <i class="fa fa-pencil-square-o position-right"></i></a>
                                                    <button type="submit" style="display:none" class="btnsimpan btn btn-primary">Simpan <i class="fa fa-save  position-right"></i></button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <!-- /tab content -->
                        </div>
                    </div>

                    <div class="container-detached" style="display:none" id="kriya">
                        <div class="content-detached">

                            <!-- Tab content -->
                            <div class="tab-content">
                                <div class="tab-pane fade in active" id="profile">

                                    <div class="panel panel-flat">
                                        <div class="panel-heading">
                                            <h6 class="panel-title">Ubah pengaturan scraping Kriya</h6>
                                            <div class="heading-elements">
                                                <ul class="icons-list">
                                                    <li><a data-action="collapse"></a></li>
                                                    <li><a data-action="reload"></a></li>
                                                    <li><a data-action="close"></a></li>
                                                </ul>
                                            </div>
                                        </div>

                                        <div class="panel-body">
                                          <form action="{{route('superadmin.simpan.setting')}}" method="post">
                                            {{csrf_field()}}
                                            <input type="hidden" name="marketplace" value="Kriya">
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-md-10">
                                                            <label>Judul:</label>
                                                            <input type="text" name="judul_kriya" id="judul_kriya" class="form-control" placeholder="" readonly>
                                                            <br>
                                                        </div>
                                                        <div class="col-md-10">
                                                            <label>Gambar:</label>
                                                            <input type="text" name="gambar_kriya" id="judul_kriya" class="form-control" placeholder="" readonly>
                                                        </div>


                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-md-10">
                                                            <label>Harga</label>
                                                            <input type="angka" name="harga_kriya" id="harga_kriya" placeholder="" class="form-control" readonly>
                                                            <br>
                                                        </div>

                                                        <div class="col-md-10">
                                                            <label>Deskripsi</label>
                                                            <input type="text" name="des_kriya" id="des_kriya" placeholder="" class="form-control" readonly>
                                                        </div>
                                                    </div>
                                                </div>



                                                <div class="text-right">
                                                    <a class="btnedit btn btn-primary">Edit <i class="fa fa-pencil-square-o position-right"></i></a>
                                                    <button type="submit" style="display:none" class="btnsimpan btn btn-primary">Simpan <i class="fa fa-save  position-right"></i></button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <!-- /tab content -->
                        </div>
                    </div>

                    <div class="container-detached" style="display:none" id="zilingo">
                        <div class="content-detached">

                            <!-- Tab content -->
                            <div class="tab-content">
                                <div class="tab-pane fade in active" id="profile">

                                    <div class="panel panel-flat">
                                        <div class="panel-heading">
                                            <h6 class="panel-title">Ubah pengaturan scraping Zilingo</h6>
                                            <div class="heading-elements">
                                                <ul class="icons-list">
                                                    <li><a data-action="collapse"></a></li>
                                                    <li><a data-action="reload"></a></li>
                                                    <li><a data-action="close"></a></li>
                                                </ul>
                                            </div>
                                        </div>

                                        <div class="panel-body">
                                          <form action="{{route('superadmin.simpan.setting')}}" method="post">
                                            {{csrf_field()}}
                                            <input type="hidden" name="marketplace" value="Zilingo">
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-md-10">
                                                            <label>Judul:</label>
                                                            <input type="text" name="judul_zilingo" id="judul_zilingo" class="form-control" placeholder="" readonly>
                                                            <br>
                                                        </div>
                                                        <div class="col-md-10">
                                                            <label>Gambar:</label>
                                                            <input type="text" name="gambar_zilingo" id="gambar_zilingo" class="form-control" placeholder="" readonly>
                                                        </div>


                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-md-10">
                                                            <label>Harga</label>
                                                            <input type="angka" name="harga_zilingo" id="harga_zilingo" placeholder="" class="form-control" readonly>
                                                            <br>
                                                        </div>

                                                        <div class="col-md-10">
                                                            <label>Deskripsi</label>
                                                            <input type="text" name="des_zilingo" id="des_zilingo" placeholder="" class="form-control" readonly>
                                                        </div>
                                                    </div>
                                                </div>



                                                <div class="text-right">
                                                    <a class="btnedit btn btn-primary">Edit <i class="fa fa-pencil-square-o position-right"></i></a>
                                                    <button type="submit" style="display:none" class="btnsimpan btn btn-primary">Simpan <i class="fa fa-save  position-right"></i></button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <!-- /tab content -->
                        </div>
                    </div>

                    <div class="container-detached" style="display:none" id="zalora">
                        <div class="content-detached">

                            <!-- Tab content -->
                            <div class="tab-content">
                                <div class="tab-pane fade in active" id="profile">

                                    <div class="panel panel-flat">
                                        <div class="panel-heading">
                                            <h6 class="panel-title">Ubah pengaturan scraping Zalora</h6>
                                            <div class="heading-elements">
                                                <ul class="icons-list">
                                                    <li><a data-action="collapse"></a></li>
                                                    <li><a data-action="reload"></a></li>
                                                    <li><a data-action="close"></a></li>
                                                </ul>
                                            </div>
                                        </div>

                                        <div class="panel-body">
                                          <form action="{{route('superadmin.simpan.setting')}}" method="post">
                                            {{csrf_field()}}
                                            <input type="hidden" name="marketplace" value="Zalora">
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-md-10">
                                                            <label>Judul:</label>
                                                            <input type="text" name="judul_zalora" id="judul_zalora" class="form-control" placeholder="" readonly>
                                                            <br>
                                                        </div>
                                                        <div class="col-md-10">
                                                            <label>Gambar:</label>
                                                            <input type="text" name="gambar_zalora" id="gambar_zalora" class="form-control" placeholder="" readonly>
                                                        </div>


                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-md-10">
                                                            <label>Harga</label>
                                                            <input type="angka" name="harga_zalora" id="harga_zalora" placeholder="" class="form-control" readonly>
                                                            <br>
                                                        </div>

                                                        <div class="col-md-10">
                                                            <label>Deskripsi</label>
                                                            <input type="text" name="des_zalora" id="des_zalora" placeholder="" class="form-control" readonly>
                                                        </div>
                                                    </div>
                                                </div>



                                                <div class="text-right">
                                                    <a class="btnedit btn btn-primary">Edit <i class="fa fa-pencil-square-o position-right"></i></a>
                                                    <button type="submit" style="display:none" class="btnsimpan btn btn-primary">Simpan <i class="fa fa-save  position-right"></i></button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <!-- /tab content -->
                        </div>
                    </div>

                    <div class="container-detached" style="display:none" id="blanja">
                        <div class="content-detached">

                            <!-- Tab content -->
                            <div class="tab-content">
                                <div class="tab-pane fade in active" id="profile">

                                    <div class="panel panel-flat">
                                        <div class="panel-heading">
                                            <h6 class="panel-title">Ubah pengaturan scraping Blanja.com</h6>
                                            <div class="heading-elements">
                                                <ul class="icons-list">
                                                    <li><a data-action="collapse"></a></li>
                                                    <li><a data-action="reload"></a></li>
                                                    <li><a data-action="close"></a></li>
                                                </ul>
                                            </div>
                                        </div>

                                        <div class="panel-body">
                                          <form action="{{route('superadmin.simpan.setting')}}" method="post">
                                            {{csrf_field()}}
                                            <input type="hidden" name="marketplace" value="Blanja">
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-md-10">
                                                            <label>Judul:</label>
                                                            <input type="text" name="judul_blanja" id="judul_blanja" class="form-control" placeholder="" readonly>
                                                            <br>
                                                        </div>
                                                        <div class="col-md-10">
                                                            <label>Gambar:</label>
                                                            <input type="text" name="gambar_blanja" id="gambar_blanja" class="form-control" placeholder="" readonly>
                                                        </div>


                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-md-10">
                                                            <label>Harga</label>
                                                            <input type="angka" name="harga_blanja" id="harga_blanja" placeholder="" class="form-control" readonly>
                                                            <br>
                                                        </div>

                                                        <div class="col-md-10">
                                                            <label>Deskripsi</label>
                                                            <input type="text" name="des_blanja" id="des_blanja" placeholder="" class="form-control" readonly>
                                                        </div>
                                                    </div>
                                                </div>



                                                <div class="text-right">
                                                    <a class="btnedit btn btn-primary">Edit <i class="fa fa-pencil-square-o position-right"></i></a>
                                                    <button type="submit" style="display:none" class="btnsimpan btn btn-primary">Simpan <i class="fa fa-save  position-right"></i></button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <!-- /tab content -->
                        </div>
                    </div>

                    <div class="container-detached" style="display:none" id="amazon">
                        <div class="content-detached">

                            <!-- Tab content -->
                            <div class="tab-content">
                                <div class="tab-pane fade in active" id="profile">

                                    <div class="panel panel-flat">
                                        <div class="panel-heading">
                                            <h6 class="panel-title">Ubah pengaturan scraping Amazon</h6>
                                            <div class="heading-elements">
                                                <ul class="icons-list">
                                                    <li><a data-action="collapse"></a></li>
                                                    <li><a data-action="reload"></a></li>
                                                    <li><a data-action="close"></a></li>
                                                </ul>
                                            </div>
                                        </div>

                                        <div class="panel-body">
                                          <form action="{{route('superadmin.simpan.setting')}}" method="post">
                                            {{csrf_field()}}
                                            <input type="hidden" name="marketplace" value="Amazon">
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-md-10">
                                                            <label>Judul:</label>
                                                            <input type="text" name="judul_amazon" id="judul_amazon" class="form-control" placeholder="" readonly>
                                                            <br>
                                                        </div>
                                                        <div class="col-md-10">
                                                            <label>Gambar:</label>
                                                            <input type="text" name="gambar_amazon" id="gambar_amazon" class="form-control" placeholder="" readonly>
                                                        </div>


                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-md-10">
                                                            <label>Harga</label>
                                                            <input type="angka" name="harga_amazon" id="harga_amazon" placeholder="" class="form-control" readonly>
                                                            <br>
                                                        </div>

                                                        <div class="col-md-10">
                                                            <label>Deskripsi</label>
                                                            <input type="text" name="des_amazon" id="des_amazon" placeholder="" class="form-control" readonly>
                                                        </div>
                                                    </div>
                                                </div>



                                                <div class="text-right">
                                                    <a class="btnedit btn btn-primary">Edit <i class="fa fa-pencil-square-o position-right"></i></a>
                                                    <button type="submit" style="display:none" class="btnsimpan btn btn-primary">Simpan <i class="fa fa-save  position-right"></i></button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <!-- /tab content -->
                        </div>
                    </div>

                    <div class="container-detached" style="display:none" id="alibaba">
                        <div class="content-detached">

                            <!-- Tab content -->
                            <div class="tab-content">
                                <div class="tab-pane fade in active" id="profile">

                                    <div class="panel panel-flat">
                                        <div class="panel-heading">
                                            <h6 class="panel-title">Ubah pengaturan scraping Alibaba</h6>
                                            <div class="heading-elements">
                                                <ul class="icons-list">
                                                    <li><a data-action="collapse"></a></li>
                                                    <li><a data-action="reload"></a></li>
                                                    <li><a data-action="close"></a></li>
                                                </ul>
                                            </div>
                                        </div>

                                        <div class="panel-body">
                                          <form action="{{route('superadmin.simpan.setting')}}" method="post">
                                            {{csrf_field()}}
                                            <input type="hidden" name="marketplace" value="Alibaba">
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-md-10">
                                                            <label>Judul:</label>
                                                            <input type="text" name="judul_alibaba" id="judul_alibaba" class="form-control" placeholder="" readonly>
                                                            <br>
                                                        </div>
                                                        <div class="col-md-10">
                                                            <label>Gambar:</label>
                                                            <input type="text" name="gambar_alibaba" id="gambar_alibaba" class="form-control" placeholder="" readonly>
                                                        </div>


                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-md-10">
                                                            <label>Harga</label>
                                                            <input type="angka" name="harga_alibaba" id="harga_alibaba" placeholder="" class="form-control" readonly>
                                                            <br>
                                                        </div>

                                                        <div class="col-md-10">
                                                            <label>Deskripsi</label>
                                                            <input type="text" name="des_alibaba" id="des_alibaba" placeholder="" class="form-control" readonly>
                                                        </div>
                                                    </div>
                                                </div>



                                                <div class="text-right">
                                                    <a class="btnedit btn btn-primary">Edit <i class="fa fa-pencil-square-o position-right"></i></a>
                                                    <button type="submit" style="display:none" class="btnsimpan btn btn-primary">Simpan <i class="fa fa-save  position-right"></i></button>
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
    <script>
    $(document).ready(function() {
        $('.btnedit').click(function() {
          $('.btnedit').hide();
          $('.btnsimpan').show();
          $('.form-control').attr('readonly',false);
        });
    });
    </script>
    <script>
    function resetu(){
      $('.btnedit').show();
      $('.btnsimpan').hide();
      $('.form-control').attr('readonly',true);
        $('#tokopedia').hide();
        $('#bukalapak').hide();
        $('#lazada').hide();
        $('#kriya').hide();
        $('#zilingo').hide();
        $('#zalora').hide();
        $('#blanja').hide();
        $('#amazon').hide();
        $('#alibaba').hide();


    }
        $(document).ready(function() {
            $('#btn').click(function() {
                var pill = $('#pilih').val();
                console.log(pill);
                if (pill == "Tokopedia") {
                  $.get('{{ URL::to("superadmin/setting/getdata") }}/' + pill, function(data){
                    $.each(data, function(index, set){
                    $('#judul_tokopedia').val(set.nama);
                    $('#harga_tokopedia').val(set.Harga);
                    $('#des_tokopedia').val(set.deskripsi);
                    $('#gambar_tokopedia').val(set.foto);
                    });
                  });
                    resetu();
                    $('#tokopedia').show();

                } else if (pill == "Bukalapak") {
                  $.get('{{ URL::to("superadmin/setting/getdata") }}/' + pill, function(data){
                    $.each(data, function(index, set){
                    $('#judul_bukalapak').val(set.nama);
                    $('#harga_bukalapak').val(set.Harga);
                    $('#des_bukalapak').val(set.deskripsi);
                    $('#gambar_bukalapak').val(set.foto);
                    });
                  });
                  resetu();
                  $('#bukalapak').show();

                } else if (pill == "Lazada") {
                  $.get('{{ URL::to("superadmin/setting/getdata") }}/' + pill, function(data){
                    $.each(data, function(index, set){
                    $('#judul_lazada').val(set.nama);
                    $('#harga_lazada').val(set.Harga);
                    $('#des_lazada').val(set.deskripsi);
                    $('#gambar_lazada').val(set.foto);
                    });
                  });
                  resetu();
                  $('#lazada').show();

                } else if (pill == "Kriya") {
                  $.get('{{ URL::to("superadmin/setting/getdata") }}/' + pill, function(data){
                    $.each(data, function(index, set){
                    $('#judul_kriya').val(set.nama);
                    $('#harga_kriya').val(set.Harga);
                    $('#des_kriya').val(set.deskripsi);
                    $('#gambar_kriya').val(set.foto);
                    });
                  });
                  resetu();
                  $('#kriya').show();

                }  else if (pill == "Zilingo") {
                  $.get('{{ URL::to("superadmin/setting/getdata") }}/' + pill, function(data){
                    $.each(data, function(index, set){
                    $('#judul_zilingo').val(set.nama);
                    $('#harga_zilingo').val(set.Harga);
                    $('#des_zilingo').val(set.deskripsi);
                    $('#gambar_zilingo').val(set.foto);
                    });
                  });
                  resetu();
                  $('#zilingo').show();

                } else if (pill == "Zalora") {
                  $.get('{{ URL::to("superadmin/setting/getdata") }}/' + pill, function(data){
                    $.each(data, function(index, set){
                    $('#judul_zalora').val(set.nama);
                    $('#harga_zalora').val(set.Harga);
                    $('#des_zalora').val(set.deskripsi);
                    $('#gambar_zalora').val(set.foto);
                    });
                  });
                  resetu();
                  $('#zalora').show();


                } else if (pill == "Blanja.com") {
                  $.get('{{ URL::to("superadmin/setting/getdata") }}/' + pill, function(data){
                    $.each(data, function(index, set){
                    $('#judul_blanja').val(set.nama);
                    $('#harga_blanja').val(set.Harga);
                    $('#des_blanja').val(set.deskripsi);
                    $('#gambar_blanja').val(set.foto);
                    });
                  });
                  resetu();
                  $('#blanja').show();


                } else if (pill == "Amazon") {
                  $.get('{{ URL::to("superadmin/setting/getdata") }}/' + pill, function(data){
                    $.each(data, function(index, set){
                    $('#judul_amazon').val(set.nama);
                    $('#harga_amazon').val(set.Harga);
                    $('#des_amazon').val(set.deskripsi);
                    $('#gambar_amazon').val(set.foto);
                    });
                  });
                  resetu();
                  $('#amazon').show();


                } else if (pill == "Alibaba") {
                  $.get('{{ URL::to("superadmin/setting/getdata") }}/' + pill, function(data){
                    $.each(data, function(index, set){
                    $('#judul_alibaba').val(set.nama);
                    $('#harga_alibaba').val(set.Harga);
                    $('#des_alibaba').val(set.deskripsi);
                    $('#gambar_alibaba').val(set.foto);
                    });
                  });
                  resetu();
                  $('#alibaba').show();


                }
            });
        });
    </script>

</body>

@endsection
