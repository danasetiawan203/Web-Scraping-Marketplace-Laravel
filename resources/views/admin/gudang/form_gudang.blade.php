@extends('admin.layouts.app')
@section('title','Daftar Gudang Dropshipping UMKM')

@section('content')


<!-- Page container -->
<div class="page-container">

    <!-- Page content -->
    <div class="page-content">

        <!-- Main content -->
        <div class="content-wrapper">

            <!-- Content area -->
            <div class="content">

                <!-- Wizard with validation -->
                <div class="panel panel-white">
                    <div class="panel-heading">
                        <h6 class="panel-title">Form Tambah Gudang Dropshipping</h6>
                        <div class="heading-elements">
                            <ul class="icons-list">
                                <li><a data-action="collapse"></a></li>
                                <li><a data-action="reload"></a></li>
                                <li><a data-action="close"></a></li>
                            </ul>
                        </div>
                    </div>

                    <form class="steps-validation" action="#">
                        <h6>data Gudang</h6>
                        <fieldset>
                            <div class="row">
                                <div class="col-md-10">
                                    <div class="form-group">
                                        <label>Nama Gudang: <span class="text-danger">*</span></label>
                                        <input type="text" name="university" placeholder="koko xioami" class="form-control required">
                                    </div>
                                </div>

                                <div class="col-lg-10">
                                    <div class="form-group">
                                        <label>Categori Gudang <span class="text-danger">*</span></label>
                                        <select name="Categori Gudang" class="form-control required">
                                            <option>Categori Gudang</option>

                                            <option value="FW">Fashion Wanita</option>
                                            <option value="FP">Fashion Pria</option>
                                            <option value="HP">Handphone</option>
                                            <option value="Komp">Komputer</option>
                                            <option value="Elek">Elektronik</option>
                                            <option value="Kam">Kamera</option>
                                            <option value="Olah">Olahraga</option>
                                            <option value="Sepe">Sepeda</option>
                                            <option value="Mot">Motor</option>
                                            <option value="Mob">Mobil</option>

                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-10">
                                    <div class="form-group">
                                        <label>No Handphone: <span class="text-danger">*</span></label>
                                        <input type="text" name="tel" class="form-control required" placeholder="0813-9999-9999" data-mask="9999-9999-9999">
                                    </div>
                                </div>


                                <div class="col-md-10">
                                    <div class="form-group">
                                        <label>Tentang Gudang: <span class="text-danger">*</span></label>
                                        <textarea name="experience-description" rows="4" cols="4" placeholder="gudang ini berjualan untuk produk ..." class="form-control required"></textarea>
                                    </div>
                                </div>

                            </div>
                        </fieldset>

                        <h6>Upload Foto</h6>
                        <fieldset>

                            <div class="row">
                                <div class="col-md-10">
                                    <div class="form-group">
                                        <label>Upload Foto Gudang: <span class="text-danger">*</span></label>

                                        <input type="file" class="file-input-custom required" data-show-caption="true" data-show-upload="true" accept="image/*">
                                        <span class="help-block">Upload foto Hanya izinkan ekstensi file tertentu. Dalam contoh ini, hanya ekstensi <code>jpg</code> dan <code>png</code> yang diizinkan.</span>

                                    </div>
                                </div>
                            </div>
                        </fieldset>

                        <h6>Informasi Lokasi</h6>
                        <fieldset>
                            <div class="row">

                                <div class="col-lg-10">
                                    <div class="form-group">
                                        <label>Pilih Provinsi <span class="text-danger">*</span></label>
                                        <select name="Categori Gudang" class="form-control required">
                                            <option>Pilih Provinsi</option>

                                            <option value="FW">Fashion Wanita</option>
                                            <option value="FP">Fashion Pria</option>
                                            <option value="HP">Handphone</option>
                                            <option value="Komp">Komputer</option>
                                            <option value="Elek">Elektronik</option>
                                            <option value="Kam">Kamera</option>
                                            <option value="Olah">Olahraga</option>
                                            <option value="Sepe">Sepeda</option>
                                            <option value="Mot">Motor</option>
                                            <option value="Mob">Mobil</option>

                                        </select>
                                    </div>
                                </div>

                                <div class="col-lg-10">
                                    <div class="form-group">
                                        <label>Pilih Kabupaten <span class="text-danger">*</span></label>
                                        <select name="Categori Gudang" class="form-control required">
                                            <option>Pilih Kabupaten</option>

                                            <option value="FW">Fashion Wanita</option>
                                            <option value="FP">Fashion Pria</option>
                                            <option value="HP">Handphone</option>
                                            <option value="Komp">Komputer</option>
                                            <option value="Elek">Elektronik</option>
                                            <option value="Kam">Kamera</option>
                                            <option value="Olah">Olahraga</option>
                                            <option value="Sepe">Sepeda</option>
                                            <option value="Mot">Motor</option>
                                            <option value="Mob">Mobil</option>

                                        </select>
                                    </div>
                                </div>

                            </div>

                            <div class="row">
                                <div class="col-md-10">
                                    <div class="form-group">
                                        <label>Alamat: <span class="text-danger">*</span></label>
                                        <textarea name="experience-description" rows="4" cols="4" placeholder="Jl. Sriwijaya GG.Melati No.20 Enggal Bandar Lampung" class="form-control required"></textarea>
                                    </div>
                                </div>
                            </div>


                            <div class="col-md-10">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="mapsearch" id="mapsearch" placeholder="Search Your location">
                                    <div id="dvMap" style="width: 100%; height: 300px;"></div>
                                </div>
                            </div>


                            <div class="row">
                                <div class="col-md-10">
                                    <div class="form-group">
                                        <label>Latitude:</label>
                                        <input type="text" name="lat" class="form-control form-field" required="" id="lat">
                                    </div>
                                </div>

                                <div class="col-md-10">
                                    <div class="form-group">
                                        <label>Longitude:</label>
                                        <input type="text" name="long" class="form-control form-field" required="" id="long">
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                    </form>

                </div>
            </div>
            <!-- /wizard with validation -->

            <!-- Remote content source -->

            <!-- /remote content source -->


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


<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDP3Pgxfyxnzmop6amI-Un99r3MYjapD_4&libraries=places" async defer> </script>
<script type="text/javascript">
    window.onload = function() {

        var mapOptions = {
            center: new google.maps.LatLng(-4.9452476, 103.7705639),
            zoom: 8,
            mapTypeId: google.maps.MapTypeId.ROADMAP
        };
        var infoWindow = new google.maps.InfoWindow();
        var map = new google.maps.Map(document.getElementById("dvMap"), mapOptions);

        var marker = new google.maps.Marker({
            position: {
                lat: -4.9452476,
                lng: 103.7705639
            },
            map: map,
            draggable: true
        });
        var searchBox = new google.maps.places.SearchBox(document.getElementById('mapsearch'));

        google.maps.event.addDomListener(searchBox, 'places_changed', function() {
            var places = searchBox.getPlaces();
            var bounds = new google.maps.LatLngBounds();
            var i, place;

            for (i = 0; place = places[i]; i++) {
                bounds.extend(place.geometry.location);
                marker.setPosition(place.geometry.location);
            }
            map.fitBounds(bounds);
            map.setZoom(15);
        })


        google.maps.event.addListener(marker, 'drag', function(event) {

            document.getElementById('lat').value = event.latLng.lat();
            document.getElementById('long').value = event.latLng.lng();
        });

        google.maps.event.addListener(marker, 'click', function(event) {

            document.getElementById('lat').value = event.latLng.lat();
            document.getElementById('long').value = event.latLng.lng();
        });
    }
</script>
<script>
    function idn() {
        var nam = document.getElementById('nama');
        var name = nam.value;
        var delimeter = ' ';
        if (name) {

            var array = name.split(delimeter);

            switch (array.length) {

                case 1:

                    return array[0].charAt(0).toUpperCase();

                    break;

                case 2:

                    return array[0].charAt(0).toUpperCase() + array[1].charAt(0).toUpperCase();

                    break;


                case 3:

                    return array[0].charAt(0).toUpperCase() + array[1].charAt(0).toUpperCase() + array[2].charAt(0).toUpperCase();

                    break

                case 4:

                    return array[0].charAt(0).toUpperCase() + array[1].charAt(0).toUpperCase() + array[2].charAt(0).toUpperCase() + array[3].charAt(0).toUpperCase();

                    break;

                case 5:

                    return array[0].charAt(0).toUpperCase() + array[1].charAt(0).toUpperCase() + array[2].charAt(0).toUpperCase() + array[3].charAt(0).toUpperCase() + array[4].charAt(0).toUpperCase();

                    break;
                default:

                    return array[0].charAt(0).toUpperCase() + array[array.length - 1].charAt(0).toUpperCase();
            }

        } else
            return false;
    }

    $('#nama').keyup(function() {

        var nama = idn();
        var idd = document.getElementById('idaa');
        var id = document.getElementById('idkoperasi');
        var idtoko_jb = document.getElementById('idtoko_jb');
        var idtoko_sewa = document.getElementById('idtoko_sewa');
        var a = parseInt(document.getElementById('idaa').value, 10);
        document.getElementById('idaaa').value = a + 1;
        id.value = document.getElementById('idaaa').value + nama;
        idtoko_jb.value = id.value + ".JB";
        idtoko_sewa.value = id.value + ".SEWA";
    });
</script>

<script>
    function formatCurrency(num) {
        num = num.toString().replace(/\$|\,/g, '');
        if (isNaN(num))
            num = "0";
        sign = (num == (num = Math.abs(num)));
        num = Math.floor(num * 100 + 0.50000000001);
        cents = num % 100;
        num = Math.floor(num / 100).toString();
        if (cents < 10)
            cents = "0" + cents;
        for (var i = 0; i < Math.floor((num.length - (1 + i)) / 3); i++)
            num = num.substring(0, num.length - (4 * i + 3)) + '.' +
            num.substring(num.length - (4 * i + 3));
        return (((sign) ? '' : '-') + 'Format Rupiah : ' + 'Rp' + num + ',' + cents);
    }
</script>

</script>

<!-- /page container -->
@endsection
