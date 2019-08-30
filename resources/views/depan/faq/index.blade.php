@extends('depan.layouts.app')
@section('title','FAQ')

@section('content')

<section id="page-title">

        <div class="container clearfix">
            <h1>FAQ</h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('beranda')}}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">FAQ</li>
            </ol>
        </div>

    </section><br><br>

    <div class="container">

            <h2>Frequently Asked <strong>Questions</strong></h2>

            <div class="row">
                <div class="col-md-12">
                    <p class="lead">
                        Pertanyaan - pertanyaan yang ditanyakan kepada sistem informasi scraping. Berikut daftar pertanyaan beserta jawaban yang sudah disediakan oleh Sistem informasi scraping.
                    </p>
                </div>
            </div>

            <hr>

            <div class="row">
                <div class="col-md-12">

                        <div id="faqs" class="faqs">

                                <div class="toggle faq faq-marketplace faq-authors">
                                    <div class="togglet"><i class="toggle-closed icon-question-sign"></i><i class="toggle-open icon-question-sign"></i>Bagaimana cara mendaftar ke sistem?</div>
                                    <div class="togglec">user  cukup daftar ke daftar sistem dengan email yamg aktif karena untuk verivikasi data pengguna.</div>
                                </div>
    
                                <div class="toggle faq faq-authors faq-miscellaneous">
                                    <div class="togglet"><i class="toggle-closed icon-comments-alt"></i><i class="toggle-open icon-comments-alt"></i>bagaimana jika user lupa password</div>
                                    <div class="togglec">user hanya klik lupa password lalu masukkan email yang sudah mendaftar, di email tersebut mendapatka tautan email kemudian klik ganti passwor. Masukkan email dan rubah passwordnya.</div>
                                </div>
    
                                <div class="toggle faq faq-miscellaneous">
                                    <div class="togglet"><i class="toggle-closed icon-lock3"></i><i class="toggle-open icon-lock3"></i>bagaimana jika scraping tidak bisa digunakan?</div>
                                    <div class="togglec">superadmin melihat data yang ingin di parsing, lalu rubah data yang sesuai pada marketplace.</div>
                                </div>
    
                            </div>

                </div>

            </div>

        </div>


    @endsection




@section('js')
<script src="{{asset('depan/js/jquery.js')}}"></script>
	<script src="{{asset('depan/js/plugins.js')}}"></script>

	<!-- Footer Scripts
	============================================= -->
	<script src="{{asset('depan/js/functions.js')}}"></script>
@endsection