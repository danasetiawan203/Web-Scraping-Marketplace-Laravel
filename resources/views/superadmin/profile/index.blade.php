@extends('superadmin.layouts.app')
@section('title','Profile Dropshipping UMKM')

@section('content')


<body class="sidebar-xs has-detached-left">


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
                            <h4><i class="icon-arrow-left52 position-left"></i> <span class="text-semibold">Profile</span></h4>
                        </div>
                    </div>

                    <div class="breadcrumb-line breadcrumb-line-component">
                        <ul class="breadcrumb">
                            <li><a href="{{route('superadmin')}}"><i class="icon-home2 position-left"></i> Home</a></li>
                            {{-- <li><a href="user_profile_tabbed.html">User pages</a></li> --}}
                            <li class="active">profile {{Auth::user()->name}}</li>
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

                    <!-- Detached sidebar -->
                    <div class="sidebar-detached">
                        <div class="sidebar sidebar-default sidebar-separate">
                            <div class="sidebar-content">

                                <!-- User details -->
                                <div class="content-group">
                                    <div class="panel-body bg-blue border-radius-top text-center" style="background-image: url(http://demo.interface.club/limitless/assets/images/bg.png); background-size: contain;">
                                        <div class="content-group-sm">
                                            <h6 class="text-semibold no-margin-bottom">
                                                <span>{{Auth::user()->name}}</span>
                                            </h6>
                                            <span class="display-block">{{Auth::user()->email}}</span>


                                        </div>

                                        <a href="#" class="display-inline-block content-group-sm">
                                            <img src="/uploads/avatars/{{Auth::user()->foto}}" class="img-circle img-responsive" alt="" style="width: 110px; height: 110px;">
                                        </a>

                                        <ul class="list-inline list-inline-condensed no-margin-bottom">
                                            <li><a href="https://twitter.com/DanaSetiawan203" class="btn bg-blue-700 btn-rounded btn-icon"><i class="icon-twitter"></i></a></li>
                                            <li><a href="https://www.facebook.com/dana.febrisetiawan" class="btn bg-blue-700 btn-rounded btn-icon"><i class="icon-facebook"></i></a></li>
                                            <li><a href="https://www.instagram.com/danafebrisetiawan/" class="btn bg-blue-700 btn-rounded btn-icon"><i class="icon-instagram"></i></a></li>
                                        </ul>
                                        <li class="divider"></li>
                                    </div>

                                    <div class="panel panel-body no-border-top no-border-radius-top">
                                            <div class="form-group mt-5">
                                                <label class="text-semibold">Nama Lengkap:</label>
                                                <span class="pull-right-sm">{{$lihat->nama}}</span>
                                            </div>

                                            <div class="form-group">
                                                <label class="text-semibold">No.Handphone:</label>
                                                <span class="pull-right-sm">{{$lihat->no_hp}}</span>
                                            </div>

                                    <div class="form-group">
                                                <label class="text-semibold">No.Identitas</label>
                                                <span class="pull-right-sm">{{$lihat->no_identitas}}</span>
                                            </div>
                                        </div>

                                    <div class="panel no-border-top no-border-radius-top">
                                        <ul class="navigation">
                                            <li class="navigation-header">Navigation</li>
                                            <li><a href="#profile" data-toggle="tab"><i class="fas fa-key"></i> Edit Email Dan Password</a></li>
                                            <li><a href="#schedule" data-toggle="tab"><i class="fas fa-file-image"></i> Ganti Foto</a></li>
                                            <li class="navigation-divider"></li>
                                            <li><a href="{{route ('logout' )}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit()"><i class="fas fa-power-off"></i> Log out</a>
                                                <form id="logout-form" action="{{route ('logout') }}" method="post" style="display : none;">
                                                {{ csrf_field() }}
                                                </form>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- /user details -->


                                <!-- Online users -->
                                <div class="sidebar-category">
                                    <div class="category-title">
                                        <span>Online User</span>
                                        <ul class="icons-list">
                                            <li><a href="#" data-action="collapse"></a></li>
                                        </ul>
                                    </div>

                                    <ul class="media-list dropdown-content-body width-250">
                                            @foreach ($profile as $prof)
                                            <li class="media">
                                                <div class="media-left"><img src="/uploads/avatars/{{$prof->foto}}" class="img-circle img-sm" alt=""></div>
                                                <div class="media-body">
                                                        <a href="{{route('superadmin.user.profil', $prof->scraping->id)}}" class="media-heading text-semibold">{{$prof->scraping->nama}}</a>
                                                        @if( $prof->isOnline())
                                                        <td><span class="text-size-mini text-muted display-block">Online</span></td>
                                                        @else
                                                        <td><span class="text-size-mini text-muted display-block">Offline</span></td>
                                                        @endif
                                                </div>
                                                <div class="media-right media-middle">
                                                @if( $prof->isOnline())
                                                <td><span class="status-mark border-success"></span></td>
                                                @else
                                                <td><span class="status-mark border-grey-600"></span></td>
                                                @endif
                                            </div>
                                            </li>
                                            @endforeach
                                        </ul>
                                </div>
                                <!-- /online-users -->
                            </div>
                        </div>
                    </div>
                    <!-- /detached sidebar -->


                    <!-- Detached content -->
                    <div class="container-detached">
                        <div class="content-detached">

                            <!-- Tab content -->
                            <div class="tab-content">
                                <div class="tab-pane fade in active" id="profile">

                                    <div class="panel panel-flat">
                                        <div class="panel-heading">
                                            <h6 class="panel-title">Ubah Email dan Password Jika di Butuhkan</h6>
                                            <div class="heading-elements">
                                                <ul class="icons-list">
                                                    <li><a data-action="collapse"></a></li>
                                                    <li><a data-action="reload"></a></li>
                                                    <li><a data-action="close"></a></li>
                                                </ul>
                                            </div>
                                        </div>

                                        <div class="panel-body">
                                                <form action="{{route('pass.profiles')}}" method="post">
                                                {{ csrf_field() }}
                                                <input type="hidden" name="id" id="id" value="{{Auth::user()->id}}">
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-md-10">
                                                            <label>Email:</label>
                                                        <input type="email" name="email" class="form-control required" value="{{$lihat->email}}">
                                                        </div>


                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-md-10">
                                                            <label>Password Baru</label>
                                                            <input type="password" name="password" placeholder="Enter new password" class="form-control">
                                                            <br>
                                                        </div>

                                                        <div class="col-md-10">
                                                            <label>Ulangi Password Baru</label>
                                                            <input type="password" name="password_confirmation" placeholder="Repeat new password" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                                <p class="notif help-block text-danger"></p>
                                                <div class="text-right">
                                                    <button type="submit" class="btn btn-primary">Simpan <i class="icon-floppy-disk position-right"></i></button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="schedule">

                                    <!-- Available hours -->
                                    <div class="panel panel-flat">
                                        <div class="panel-heading">
                                            <h5 class="panel-title">Ganti Foto</h5>
                                            <div class="heading-elements">
                                                <ul class="icons-list">
                                                    <li><a data-action="collapse"></a></li>
                                                    <li><a data-action="reload"></a></li>
                                                    <li><a data-action="close"></a></li>
                                                </ul>
                                            </div>
                                        </div>

                                        <div class="panel-body">
                                            {{-- <input type="hidden" name="namaFoto" id="namaFoto" value="{{$lihat->foto}}"> --}}
                                            <form action="{{route('simpan.profiles')}}" method="post" enctype="multipart/form-data">
                                            {{ csrf_field() }}
                                            <p class="content-group">Gunakan Foto dengan Ukuran <code>225x250px</code> untuk mendapatkan hasil yang lebih baik.</p> <br>
                                            <input type="hidden" name="namaFoto" id="namaFoto" value="{{$lihat->foto}}">
                                            <input type="hidden" name="id_user" id="id_user" value="{{Auth::user()->id}}">
                                            {{-- <img src="/uploads/avatars/{{Auth::user()->foto}}" class="img-responsive" alt="" style="width: 110px; height: 110px;"> --}}
                                                    {{-- <img src="{{asset('global_assets/images/placeholders/3.jpg')}}" class="img-responsive" alt="" style="width: 110px; height: 110px;"> --}}
                                            <input type="file" name="foto" class="dropify"  id="profile_picture">

                                            <div class="text-left">
                                                    <br><button type="submit" class="btn btn-primary">Simpan <i class="fa fa-floppy-o position-right"></i></button>
                                            </div>
                                        </form>
                                        </div>

                                        
                                    </div>

                                    <!-- /available hours -->

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
    <script type="text/javascript">
        $('[name=password]').keyup(function(){
          var pass = $(this).val().length;
          if(pass>5){
            $('.btnPass').removeAttr('disabled');
            $('.notif').hide();
          }else{
            $('.notif').show();
            $('.notif').text('Password Kurang dari enam');
            $('.btnPass').attr('disabled', 'true');
          }
        });
          $('[name=password_confirmation]').keyup(function(){
            var pass = $('[name=password]').val();
            if(pass==$('[name=password_confirmation]').val()){
              $('.btnPass').removeAttr('disabled');
              $('.notif').hide();
            }else{
              $('.notif').show();
              $('.notif').text('Password tidak sama harap periksa kembali');
              $('.btnPass').attr('disabled', 'true');
            }
          });
        </script>
        <script type="text/javascript" src="{{asset('vendor/dropify/js/dropify.min.js')}}"></script>
        <script type="text/javascript">
            $(document).ready(function(){

                    // Basic
                    $('.dropify').dropify({
                        messages: {
                        'default': 'Drag and drop a file here or click',
                        'replace': 'Drag and drop or click to replace',
                        'remove':  'Remove',
                        'error':   'Ooops, something wrong happended.'}
                    });
            });
        </script>

</body>



@endsection


