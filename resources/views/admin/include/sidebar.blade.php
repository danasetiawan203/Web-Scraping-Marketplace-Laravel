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
          <li class="{{active('dropshipper')}}"><a href="{{route('dropshipper')}}"><i class="fas fa-tachometer-alt"></i> <span>Dashboard</span></a></li>
          <li class="{{active('profile')}}"><a href="{{route('profile')}}"><i class="fas fa-user-circle"></i> <span>Profile</span></a></li>
          <li class="{{active('tambahproduk')}}"><a href="{{route('tambahproduk')}}"><i class="fas fa-cart-plus"></i></i> <span>Tambah Produk</span></a></li>

          <li>
            <a href="#"><i class="fas fa-box-open"></i> <span>Data Produk</span></a>
            <ul>
              <li class="{{active('alibaba')}}"><a href="{{route('alibaba')}}">Alibaba.com</a></li>
              <li class="{{active('amazon')}}"><a href="{{route('amazon')}}">Amazon.com</a></li>
              <li class="{{active('blanja')}}"><a href="{{route('blanja')}}">Blanja.com</a></li>
              <li class="{{active('bukalapak')}}"><a href="{{route('bukalapak')}}">Bukalapak.com</a></li>
              <li class="{{active('kriya')}}"><a href="{{route('kriya')}}">Kriya.co.id</a></li>
              <li class="{{active('lazada')}}"><a href="{{route('lazada')}}">Lazada.co.id</a></li>
              <li class="{{active('tokopedia')}}"><a href="{{route('tokopedia')}}">Tokopedia.com</a></li>
              <li class="{{active('zalora')}}"><a href="{{route('zalora')}}">Zalora.co.id</a></li>
              <li class="{{active('zilingo')}}"><a href="{{route('zilingo')}}">Zilingo.com</a></li>
            </ul>
          </li>

          <!-- /main -->
        </ul>
      </div>
    </div>
    <!-- /main navigation -->

  </div>
</div>
