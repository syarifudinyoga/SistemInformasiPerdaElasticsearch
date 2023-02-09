<!-- Menghubungkan dengan view template -->
@extends('layouts/template')

<!-- Judul Halaman -->
@section('judul_halaman', 'Visi & Misi')

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
            <h5 class="card-title mb-3"><span class="text-primary">@yield('judul_halaman')</span></h5>
            <p class="card-text">Visi :</p>
			<p>"Menjadi Penegak Supremasi dan Harmonisasi Hukum dan HAM di Lingkungan Pemerintah Provinsi Jawa Barat."</p>
            <p class="mt-1">Misi :</p>
			<ol>
				<li>Mewujudkan Tertib Hukum dan HAM di Lingkungan Pemerintahkan Provinsi Jawa Barat dan Kabupaten/ Kota.</li>
				<li>Meningkatkan Kapasitas Sumber Daya Pelayanan.</li>
			</ol>
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