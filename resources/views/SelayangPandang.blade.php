<!-- Menghubungkan dengan view template -->
@extends('layouts/template')

<!-- Judul Halaman -->
@section('judul_halaman', 'Selayang Pandang')

@section('content')

  {{-- Breadcrumb --}}
  <div class="container pt-10 pt-md-14 pb-0 text-center">
    <div class="row">
        <div class="col-lg-8 mx-auto">
        <nav class="d-inline-block" aria-label="breadcrumb">
            <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Beranda</a></li>
            <li class="breadcrumb-item active" aria-current="page">@yield('judul_halaman')</li>
            </ol>
        </nav>
        <!-- /nav -->
        {{-- Title Page --}}
        <h2 class="display-5 text-center">@yield('judul_halaman')</h2>
        </div>
        <!-- /column -->
    </div>
    <!-- /.row -->
    </div>

	<!-- section -->
	<section class="wrapper bg-light">
      <div class="container py-14 py-md-17">
        <div class="row gy-10 gy-sm-13 gx-lg-3 align-items-center mb-14 mb-md-19">
        <!-- Card Content -->
        <div class="card">
        <div class="card-body">
            <h5 class="card-title"><span class="text-primary">@yield('judul_halaman')</span></h5>
            <p class="card-text">Biro Hukum dan HAM merupakan salah satu unsur dari organisasi Pemerintah Daerah Provinsi Jawa Barat. Keberadaan Biro Hukum dan HAM tertuang dalam Peraturan Daerah Propinsi Daerah Tingkat I Jawa Barat Nomor 8/DP.040/PD/76 tentang Susunan Organisasi dan Tata Kerja Sekretariat Wilayah/Daerah Tingkat I Jawa Barat dan Sekretariat Dewan Perwakilan Rakyat Daerah Tingkat I Jawa Barat. Pada saat itu Biro Hukum dan HAM masih bernama Biro Hukum yang berada dibawah Asisten Sekretaris Wilayah Daerah (Assekwilda) I Tingkat I Jawa Barat bidang pemerintahan. Bertugas untuk membantu Sekretariat Wilayah/Daerah dalam bidang hukum.</p>
            <p>Berdasarkan Peraturan Daerah Provinsi Jawa Barat Nomor 20 Tahun 2008 tentang Organisasi dan Tata Kerja Sekretariat Daerah dan Sekretariat Dewan Perwakilan Rakyat Daerah sebagaimana telah diubah dengan Peraturan Daerah Provinsi Jawa Barat Nomor 1 Tahun 2014 tentang Perubahan Atas Peraturan Daerah Provinsi Jawa Barat Nomor 20 Tahun 2008, serta berdasarkan Peraturan Gubernur Nomor 11 Tahun 2015 tentang Tugas Pokok, Fungsi Rincian Tugas Unit dan Tata Kerja Sekretariat Daerah Provinsi Jawa Barat, bahwa Biro Hukum dan HAM Sekretariat Daerah Provinsi Jawa Barat mempunyai tugas pokok menyelenggarakan perumusan bahan kebijakan umum bidang hukum dan hak asasi manusia, membantu Asisten Pemerintahan, Hukum, dan Hak Asasi Manusia, melakukan koordinasi, pembinaan, dan pengendalian serta fasilitasi pelaksanaan urusan pemerintahan Daerah Provinsi di bidang hukum dan hak asasi manusia, meliputi aspek perundang-undangan, dokumentasi, dan penyuluhan hukum, fasilitasi produk hukum Daerah Kabupaten/Kota serta bantuan hukum dan hak asasi manusia.</p>
        </div>
        </div>
        <!-- End Card Content -->
        </div>
        <!--/.row -->
        <!--/.row -->
      </div>
      <!-- /.container -->
    </section>
    <!-- /section -->

@endsection