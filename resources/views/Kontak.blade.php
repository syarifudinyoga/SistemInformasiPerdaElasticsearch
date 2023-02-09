<!-- Menghubungkan dengan view template -->
@extends('layouts/template')

<!-- Judul Halaman -->
@section('judul_halaman', 'Kontak')

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
            <p>Biro Hukum dan HAM Provinsi Jawa Barat <br>
            birohukum@jabarprov.go.id <br>
            Telp: (022) 4231385</br>
            Fax: (022) 4231385</p>
			<img class="rounded mx-auto d-block" src="{{ asset('img/maps.png') }}" alt="" />
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