
<div class="sidebar sidebar-main">
  <div class="sidebar-content">

    <!-- User menu -->

    <div class="sidebar-user">
      <div class="category-content">
        <div class="media">
          <a href="#" class="media-left"><img src="/uploads/avatars/{{Auth::user()->foto}}" class="img-circle img-sm" alt=""></a>
          <div class="media-body">
            <span class="media-heading text-semibold">{{Auth::user()->name}}</span>
            <div class="text-size-mini text-muted">
              <i class="icon-pin text-size-small"></i> &nbsp;indonesia, jakarta
            </div>
          </div>

          <div class="media-right media-middle">
            <ul class="icons-list">
              <li>
                <a href="#"><i class="icon-cog3"></i></a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <!-- /user menu -->


    <!-- Main navigation -->
    <div class="sidebar-category sidebar-category-visible">
      <div class="category-content no-padding">
        <ul class="navigation navigation-main navigation-accordion">

          <!-- Main -->
          <li class="navigation-header"><span>Main</span> <i class="icon-menu" title="Main pages"></i></li>
          <li class="{{active('superadmin')}}"><a href="{{route('superadmin')}}"><i class="fas fa-tachometer-alt"></i> <span>Dashboard</span></a></li>
          <li class="{{active('superadmin.profile')}}"><a href="{{route('superadmin.profile')}}"><i class="fas fa-user-circle"></i> <span>Profile</span></a></li>
          <li>
            <a href="#"><i class="fa fa-users-cog"></i> <span>Data User</span></a>
            <ul>
              <li class="{{active('superadmin.dropshipping')}}"><a href="{{route('superadmin.dropshipping')}}">Daftar User</a></li>
            </ul>
          </li>

          <li>
            <a href="#"><i class="fas fa-box-open"></i> <span>Data Produk</span></a>
            <ul>
              <li class="{{active('superadmin.produk.amazon')}}"><a href="{{route('superadmin.produk.amazon')}}">Amazon.com</a></li>
              <li class="{{active('superadmin.produk.alibaba')}}"><a href="{{route('superadmin.produk.alibaba')}}">Alibaba.com</a></li>
              <li class="{{active('superadmin.produk.blanja')}}"><a href="{{route('superadmin.produk.blanja')}}">Blanja.com</a></li>
              <li class="{{active('superadmin.produk.bukalapak')}}"><a href="{{route('superadmin.produk.bukalapak')}}">Bukalapak.com</a></li>
              <li class="{{active('superadmin.produk.kriya')}}"><a href="{{route('superadmin.produk.kriya')}}">Kriya.co.id</a></li>
              <li class="{{active('superadmin.produk.lazada')}}"><a href="{{route('superadmin.produk.lazada')}}">Lazada.co.id</a></li>
              <li class="{{active('superadmin.produk.tokopedia')}}"><a href="{{route('superadmin.produk.tokopedia')}}">Tokopedia.com</a></li>
              <li class="{{active('superadmin.produk.zalora')}}"><a href="{{route('superadmin.produk.zalora')}}">Zalora.co.id</a></li>
              <li class="{{active('superadmin.produk.zilingo')}}"><a href="{{route('superadmin.produk.zilingo')}}">Zilingo.com</a></li>
            </ul>

          <li>
            <a href="#"><i class="fas fa-wrench"></i></i> <span>Setting Categori</span></a>
            <ul>
              <li class="{{active('superadmin.cat1')}}"><a href="{{route('superadmin.cat1')}}">Categori 1</a></li>
              <li class="{{active('superadmin.cat2')}}"><a href="{{route('superadmin.cat2')}}">Categori 2</a></li>
              <li class="{{active('superadmin.cat3')}}"><a href="{{route('superadmin.cat3')}}">Categori 3</a></li>
            </ul>
          </li>

          <li class="{{active('superadmin.setting')}}"><a href="{{route('superadmin.setting')}}"><i class="fas fa-cogs"></i> <span>Setting</span></a></li>

          <!-- /main -->
        </ul>
      </div>
    </div>
    <!-- /main navigation -->

  </div>
</div>
