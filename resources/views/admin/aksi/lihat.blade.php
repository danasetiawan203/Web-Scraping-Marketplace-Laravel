@extends('admin.layouts.app')
@section('title','Lihat Produk Dropshipping UMKM')

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
                        <h4><i class="fas fa-box-open position-left"></i> <span class="text-semibold">Lihat
                                Produk</span></h4>
                    </div>
                </div>

                <div class="breadcrumb-line breadcrumb-line-component">
                    <ul class="breadcrumb">
                        <li><a href="{{ URL::previous() }}"><i class="icon-home2 position-left"></i> Kembali</a></li>
                        <li class="active">{{$datas->categori1->nama}}</li>
                        <li class="active">{{$datas->categori2->nama}}</li>
                        @if (count($datas->cat3)>0)
                        <li class="active">{{$datas->categori3->nama}}</li>
                        @endif
                    </ul>
                </div>
            </div>
            <!-- /page header -->


            <!-- Content area -->
            <div class="content">

                <!-- Detached sidebar -->
                <div class="row">
                    <div class="col-md-3">
                        <div class="sidebar-detached">
                            <div class="sidebar sidebar-default sidebar-separate" style="width:307px">
                                <div class="sidebar-content">

                                    <!-- User details -->
                                    <div class="content-group">
                                        <img alt="" id="foto" class="img-fluid img-thumbnail" style="height:342px;"
                                            src="{{$datas->foto}}"> </img>
                                        <input type="hidden" id="foto2" name="foto" value="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-9">
                        <div class="container-detached">
                            <div class="content-detached">

                                <!-- Tab content -->
                                <div class="tab-content">
                                    <div class="tab-pane fade in active" id="profile">

                                        <div class="panel panel-flat">
                                            <div class="panel-heading">

                                                <h3 class="panel-title">{{$datas->nama_barang}}</h3> <br> <br> <br>


                                                <h3 class="panel-title text-warning-800">{{$datas->harga}}</h3>


                                                <br>
                                                <br>
                                                <br>
                                                <br>
                                            </div>
                                            <div class="row text-center">
                                                <div class="col-xs-4">
                                                    <p><i
                                                            class="fas fa-weight-hanging icon-2x display-inline-block text-info"></i>
                                                    </p>
                                                    <h5 class="text-semibold no-margin">{{$datas->berat}} Kg</h5>
                                                    <span class="text-muted text-size-small">Berat</span>
                                                </div>

                                                <div class="col-xs-4">
                                                    <p><i
                                                            class="fas fa-pallet icon-2x display-inline-block text-warning"></i>
                                                    </p>
                                                    <h5 class="text-semibold no-margin">{{$datas->stock}}</h5>
                                                    <span class="text-muted text-size-small">Stock</span>
                                                </div>

                                                <div class="col-xs-4">
                                                    <p><i
                                                            class="fas fa-tags icon-2x display-inline-block text-success"></i>
                                                    </p>
                                                    <h5 class="text-semibold no-margin">1</h5>
                                                    <span class="text-muted text-size-small">Min.Beli</span>
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                </div>
                                <!-- /tab content -->
                            </div>
                        </div>

                    </div>

                </div>

                <div class="panel panel-flat">
                    <div class="panel-heading">
                        <h6 class="panel-title"><b>Deskripsi</b></h6>
                        <div class="heading-elements">
                            <ul class="icons-list">
                                <li><a data-action="collapse"></a></li>
                                <li><a data-action="reload"></a></li>
                                <li><a data-action="close"></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="panel-body">
                        {!! $datas->deskripsi !!}
                    </div>
                    {{-- <textarea cols="18" rows="18" class="wysihtml5 wysihtml5-min form-control" name="modal_deskripsi" id="modal_deskripsi" placeholder=""></textarea> --}}
                </div>
                <!-- /detached sidebar -->


                <!-- Detached content -->
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


@endsection