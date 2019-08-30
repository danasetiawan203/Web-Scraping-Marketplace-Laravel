@extends('superadmin.layouts.app')
@section('title','Daftar User Dropshipping UMKM')

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
                        <h4><i class="icon-arrow-left52 position-left"></i> <span class="text-semibold">Sistem Informasi Web Scraping</span> - Data User</h4>
                    </div>

                </div>

                <div class="breadcrumb-line breadcrumb-line-component">
                    <ul class="breadcrumb">
                        <li><a href="{{route('superadmin')}}"><i class="icon-home2 position-left"></i> Home</a></li>
                        <li class="active">Data User</li>
                    </ul>
                </div>
            </div>
            <!-- /page header -->


            <!-- Content area -->
            <div class="content">

                <!-- Basic datatable -->
                <div class="panel panel-flat">
                    <div class="panel-heading">
                        <h5 class="panel-title">Data User</h5>
                        <div class="heading-elements">
                            <ul class="icons-list">
                                <li><a data-action="collapse"></a></li>
                                <li><a data-action="reload"></a></li>
                                <li><a data-action="close"></a></li>
                            </ul>
                        </div>
                    </div>



                    <div class="panel-body">
                        <table class="table datatableuser">
                            <thead>
                                <tr>
                                    <th>Nama Lengkap</th>
                                    <th>Email</th>
                                    <th>No.HP</th>
                                    <th>Status</th>
                                    <th>Aktif</th>
                                    <th class="text-center" style="width:300px">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $us)
                                <tr>
                                    <td>{{$us->scraping->nama}}</td>
                                    <td>{{$us->scraping->email}}</td>
                                    <td>{{$us->scraping->no_hp}}</td>
                                    @if( $us->aktif == 1)
                                    <td><span class="label label-primary">Aktif</span></td>
                                    @else
                                    <td><span class="label label-danger">Suspend</span></td>
                                    @endif

                                    @if( $us->isOnline())
                                    <td><span class="label label-success">Online</span></td>
                                    @else
                                    <td><span class="label bg-grey-600">Offline</span></td>
                                    @endif
                                    <td>
                                    @if ( $us->aktif == 1 )
                                    <a href="{{route('superadmin.user.profil', $us->scraping->id)}}" class="modal-with-form btn btn-info">Lihat Profil </a>
                                    <button value="{{$us->id}}" type="button" data-toggle="modal" class="btn btn-warning suspend">Suspend</button>
                                    @else
                                    <a href="" class="modal-with-form btn btn-info">Lihat Profil </a>
                                    <button value="{{$us->id}}" type="button" data-toggle="modal" class="btn btn-success restore">Restore</button>
                                    <button value="{{$us->id}}" type="button" data-toggle="modal" class="btn btn-danger hapus">Hapus</button></td>
                                    @endif
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
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

<!-- SUSPEND  -->
<form id="" enctype="multipart/form-data" method="post" class="form-horizontal mb-lg" action="{{route('user.suspend')}}">
    {{ csrf_field() }}
    <div class="modal fade" id="suspend" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header" style=" color: #ffffff;text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.25);background-color: tomato ;border-color: tomato;">
                    <h4 class="modal-title">Suspend User</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <form>
                        <p>Anda yakin ingin meng-suspend user ini?</p>
                        <input type="hidden" class="form-control" id="id_suspend" name="id_suspend">
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-warning">Suspend</button>
                </div>
            </div><!-- /.modal-content -->
        </form>
    </div><!-- /.modal-dialog -->
</div>
<!-- end of suspend  -->


<!-- RESTORE  -->
<form id="" enctype="multipart/form-data" method="post" class="form-horizontal mb-lg" action="{{route('user.restore')}}">
    {{ csrf_field() }}
    <div class="modal fade" id="restore" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header"
                    style="	color: #ffffff;text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.25);background-color: lawngreen ;border-color: lawngreen;">
                    <h4 class="modal-title">Restore User</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <form>
                        <p>Anda yakin ingin mengembalikan user ini?</p>
                        <input type="hidden" class="form-control" id="id_restore" name="id_restore">
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-success">Restore</button>
                </div>
            </div><!-- /.modal-content -->
        </form>
    </div><!-- /.modal-dialog -->
</div>
<!-- end of RESTORE  -->


<!-- hapus  -->
<form id="" enctype="multipart/form-data" method="post" class="form-horizontal mb-lg" action="{{route('user.delete')}}">
    {{ csrf_field() }}
    <div class="modal fade" id="hapus" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header"
                    style="	color: #ffffff;text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.25);background-color: red ;border-color: red;">
                    <h4 class="modal-title">Hapus user</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <form>
                        <p>Apakah Anda Yakini Hapus Data <b>?</b></p>
                        <input type="hidden" class="form-control" id="id_hapus" name="id_hapus">
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-danger">Hapus</button>
                </div>
            </div><!-- /.modal-content -->
        </form>
    </div><!-- /.modal-dialog -->
</div>
<!--  end of hapus -->

<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>

<script>
    $(".datatableuser").DataTable();

</script>

<script>
    $(document).on('click', '.suspend', function (e) {
        // $('.suspend').click(function(){
        var iD = $(this).val();
        $('#id_suspend').val(iD);

        $('#suspend').modal('show');
    });

    $(document).on('click', '.restore', function (e) {
        // $('.restore').click(function(){
        var iD = $(this).val();
        $('#id_restore').val(iD);

        $('#restore').modal('show');
    });

    $(document).on('click', '.hapus', function (e) {
        // $('.hapus').click(function(){
        var iD = $(this).val();
        $('#id_hapus').val(iD);

        $('#hapus').modal('show');
    });

</script>

@endsection
