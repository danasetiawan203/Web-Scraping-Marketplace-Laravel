
<form class="form-horizontal" action="{{route('posttambahbarang')}}" method="post">
  {{csrf_field()}}
  <div class="panel panel-flat">
    <div class="panel-heading">
      <h5 class="panel-title">Data Barang </h5>
      <div class="heading-elements">
        <ul class="icons-list">
          <li><a data-action="collapse"></a></li>
          <li><a data-action="reload"></a></li>
          <li><a data-action="close"></a></li>
        </ul>
      </div>
    </div>

    <div class="panel-body">
      <div class="row">
        <div class="col-md-6">
          <fieldset>
            <legend class="text-semibold"><i class="con-box position-left"></i> Data Barang</legend>
            <div class="form-group">
              <label class="col-lg-3 control-label">URL</label>
              <div class="col-lg-9">
                <input value="{{$url}}" name="url" type="text" class="form-control" readonly="readonly" value="readonly">
              </div>
            </div>

            <div class="form-group">
              <label class="col-lg-3 control-label">Judul / Nama Barang</label>
              <div class="col-lg-9">
                <input name="nama_barang" value="{{$nama}}" type="text" class="form-control">
              </div>
            </div>

            <div class="form-group">
              <label class="col-lg-3 control-label">Harga Barang:</label>
              <div class="col-lg-9">
                <input name="harga" type="text" class="form-control" value="{{$harga}}">

              </div>
            </div>

            <div class="form-group">
              <label class="col-lg-3 control-label">Berat Barang:</label>
              <div class="col-lg-9">
                <input name="berat" type="number" class="form-control">
              </div>
            </div>

            <div class="form-group">
              <label class="col-lg-3 control-label">Stock Barang:</label>
              <div class="col-lg-9">
                <input name="stock" type="number" class="form-control">
              </div>
            </div>

            {{-- <div class="form-group">
              <label class="col-lg-3 control-label">Deskripsi Barang:</label>
              <div class="col-lg-9">
                <textarea rows="5" cols="5" name="deskripsi" class="form-control">{{$des}}</textarea>

              </div>
            </div> --}}

            <div class="form-group">
              <label class="col-lg-3 control-label">Categori 1:</label>
              <div class="col-lg-9">
                <select class="select-search select-border-color border-warning" name="cat1" id="pilih">
                  <option>Pilih Categori Barang</option>
                  <optgroup label="Marketplace">
                    <option value="Perlengkapan Bayi">Perlengkapan Bayi</option>
                    <option value="Fashion Wanita">Fashion Wanita</option>
                    <option value="Fashion Pria">Fashion Pria</option>
                    <option value="Handphone">Handphone</option>
                    <option value="Komputer">Komputer</option>
                    <option value="Elektronik">Elektronik</option>
                    <option value="Kamera">Kamera</option>
                    <option value="Hobi dan Koleksi">Hobi dan Koleksi</option>
                    <option value="Olahraga">Olahraga</option>
                    <option value="Fashion Anak">Fashion Anak</option>
                  </optgroup>
                </select>
              </div>
            </div>

            <div class="form-group">
              <label class="col-lg-3 control-label">Categori 2:</label>
              <div class="col-lg-9">
                <select class="select-search select-border-color border-warning" name="cat2" id="pilih">
                  <option>Pilih Categori Barang</option>
                  <optgroup label="Marketplace">
                    <option value="Perlengkapan Bayi">Perlengkapan Bayi</option>
                    <option value="Fashion Wanita">Fashion Wanita</option>
                    <option value="Fashion Pria">Fashion Pria</option>
                    <option value="Handphone">Handphone</option>
                    <option value="Komputer">Komputer</option>
                    <option value="Elektronik">Elektronik</option>
                    <option value="Kamera">Kamera</option>
                    <option value="Hobi dan Koleksi">Hobi dan Koleksi</option>
                    <option value="Olahraga">Olahraga</option>
                    <option value="Fashion Anak">Fashion Anak</option>
                  </optgroup>
                </select>
              </div>
            </div>

            <div class="form-group">
              <label class="col-lg-3 control-label">Categori 3:</label>
              <div class="col-lg-9">
                <select class="select-search select-border-color border-warning" name="cat3" id="pilih">
                  <option>Pilih Categori Barang</option>
                  <optgroup label="Perlengkapan Bayi">
                    <option value="Tokopedia">Tokopedia</option>
                    <option value="Bukalapak">Bukalapak</option>
                    <option value="Lazada">Lazada</option>
                    <option value="Shopee">Shopee</option>
                    <option value="Jd.id">Jd.id</option>
                    <option value="Blibli">Blibli</option>
                    <option value="Elevania">Elevania</option>
                    <option value="Zalora">Zalora</option>
                    <option value="Blanja.com">Blanja.com</option>
                    <option value="Amazon">Amazon</option>
                    <option value="Alibaba">Alibaba</option>
                  </optgroup>
                  <optgroup label="Fashion Wanita">
                    <option value="Tokopedia">Tokopedia</option>
                    <option value="Bukalapak">Bukalapak</option>
                    <option value="Lazada">Lazada</option>
                    <option value="Shopee">Shopee</option>
                    <option value="Jd.id">Jd.id</option>
                    <option value="Blibli">Blibli</option>
                    <option value="Elevania">Elevania</option>
                    <option value="Zalora">Zalora</option>
                    <option value="Blanja.com">Blanja.com</option>
                    <option value="Amazon">Amazon</option>
                    <option value="Alibaba">Alibaba</option>
                  </optgroup>
                  <optgroup label="Fashion Pria">
                    <option value="Tokopedia">Tokopedia</option>
                    <option value="Bukalapak">Bukalapak</option>
                    <option value="Lazada">Lazada</option>
                    <option value="Shopee">Shopee</option>
                    <option value="Jd.id">Jd.id</option>
                    <option value="Blibli">Blibli</option>
                    <option value="Elevania">Elevania</option>
                    <option value="Zalora">Zalora</option>
                    <option value="Blanja.com">Blanja.com</option>
                    <option value="Amazon">Amazon</option>
                    <option value="Alibaba">Alibaba</option>
                  </optgroup>
                </select>
              </div>
            </div>

            <div class="form-group">
              <label class="col-lg-3 control-label">Ukuran:</label>
              <div class="col-lg-9">
                <select class="select-search select-border-color border-warning" name="ukuran" id="pilih">
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
                  <select class="select-search select-border-color border-warning" name="warna" id="pilih">
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
              <div class="form-group">
                <label class="col-lg-3 control-label">Warna:</label>
                <div class="col-lg-9">
                  <input name="warna" type="color" id="warna" class="form-control" >
                </div>
              </div>
            </fieldset>
          </div>

          <div class="col-md-6">
            <fieldset>
              <legend class="text-semibold"><i class="icon-camera position-left"></i> Foto Barang</legend>
              <div class="form-group">
                <div class="col-lg-9">
                  <img alt="" name="foto" class="img-fluid img-thumbnail" src="{{$img}}"> </img>
                </div>
              </div>

            </fieldset>
          </div>
        </div>

        <div class="row">
          <div class="col-md-12">
            <div class="form-group">
              <label class="col-lg-3 control-label">Deskripsi Barang:</label>
              <div class="col-lg-12">
            <textarea class="form-control" id="editor1" name="deskripsi"	></textarea>
          </div>
        </div>
      </div>
      </div>
      <br>
      <br>

        <div class="text-right">
          <button type="submit" class="btn btn-primary"> Simpan Barang <i class="icon-arrow-right14 position-right"></i></button>
        </div>
      </div>
    </div>
  </form>
