<!-- Menghubungkan dengan view template -->
@extends('layouts/template')

<!-- Judul Halaman -->
@section('judul_halaman', 'Beranda')

{{-- Content --}}
@section('content')

    {{-- Breadcrumb --}}
    <div class="container pt-10 pt-md-14 pb-0">
    <div class="row text-center">
        <div class="col-lg-8 mx-auto">
        <!-- /nav -->
        {{-- Title Page --}}
        <a href="/"><img srcset="{{ asset('img/jdih-logo.png') }} 2x" width="180" alt="" /></a>
        </div>
        <!-- /column -->
    </div>
    <!-- /.row -->

	<!-- section -->
    <section class="wrapper bg-light wrapper-border">
      <div class="container py-14 py-md-16">
        <h2 class="display-5 text-center text-primary">Cari Peraturan Yang Anda Butuhkan </h2>
        <div class="row justify-content-md-center">
            {{-- Search --}}
            <div class="col col-lg-9 mb-3">
            <div class="col-md-auto">
                <form class="search-form">
                <div class="form-label-group mb-0">
                    <input id="search-form" type="text" class="form-control" placeholder="Search">
                    <label for="search-form">Cari Dokumen</label>
                </div>
                </form>
            </div>
            </div>
            {{-- End Search --}}
            {{-- Filter --}}
            <div class="row justify-content-md-center">
            <div class="col col-lg-3">
                <div class="form-select-wrapper">
                <select class="form-select" aria-label="Default select example">
                    <option selected>Semua Tipe Dokumen</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
                </div>
            </div>
            <div class="col col-lg-3">
                <div class="form-select-wrapper">
                <select class="form-select" aria-label="Default select example">
                    <option selected>Semua Jenis Peraturan</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
                </div>
            </div>
            <div class="col col-lg-3">
                <div class="form-label-group mb-4">
                    <input id="textInputExample" type="text" class="form-control" placeholder="Text Input">
                    <label for="textInputExample">Nomor Dokumen</label>
                </div>
            </div>
            <div class="col col-lg-3">
                <div class="form-select-wrapper">
                <select class="form-select" aria-label="Default select example">
                    <option selected>Semua Tahun</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
                </div>
            </div>
            </div>
            {{-- Button --}}
            <div class="row justify-content-md-center">
            <div class="col col-lg-1">
                <a href="/beranda/peraturan"><button class="btn btn-sm btn-primary rounded" data-bs-toggle="modal" data-bs-target="#modal-01">Cari</button></a>
            </div>
            <div class="col col-lg-1">
                <button class="btn btn-sm btn-secondary rounded" data-bs-toggle="modal" data-bs-target="#modal-01">Clear</button>
            </div>
            </div>
            {{-- End Button --}}
            {{-- End Filter --}}
        </div>

        {{-- Counter Bidang Urusan --}}
        <div class="row mt-5">
            <div class="col-2">
                <div class="text-center">
                <div class="card bg-pale-primary">
                    <div class="card-body">
                    <h3 class="counter">4537</h3>
                    <img src="img/icons/handshake.svg" class="svg-inject icon-svg icon-svg-lg mb-3" alt="" />                    
                    <p>Pendidikan</p>
                    </div>
                    <!--/.card-body -->
                </div>
                <!--/.card -->
                </div>
            </div>
            <div class="col-2">
                <div class="text-center">
                <div class="card bg-pale-primary">
                    <div class="card-body">
                    <h3 class="counter">4537</h3>
                    <img src="img/icons/handshake.svg" class="svg-inject icon-svg icon-svg-lg mb-3" alt="" />
                    <p>Pemerintahan Umum</p>
                    </div>
                    <!--/.card-body -->
                </div>
                <!--/.card -->
                </div>
            </div>
            <div class="col-2">
                <div class="text-center">
                <div class="card bg-pale-primary">
                    <div class="card-body">
                    <img src="img/icons/handshake.svg" class="svg-inject icon-svg icon-svg-lg mb-3" alt="" />
                    <h3 class="counter">4537</h3>
                    <p>Satisfied Customers</p>
                    </div>
                    <!--/.card-body -->
                </div>
                <!--/.card -->
                </div>
            </div>
            <div class="col-2">
                <div class="text-center">
                <div class="card bg-pale-primary">
                    <div class="card-body">
                    <img src="img/icons/handshake.svg" class="svg-inject icon-svg icon-svg-lg mb-3" alt="" />
                    <h3 class="counter">4537</h3>
                    <p>Satisfied Customers</p>
                    </div>
                    <!--/.card-body -->
                </div>
                <!--/.card -->
                </div>
            </div>
            <div class="col-2">
                <div class="text-center">
                <div class="card bg-pale-primary">
                    <div class="card-body">
                    <img src="img/icons/handshake.svg" class="svg-inject icon-svg icon-svg-lg mb-3" alt="" />
                    <h3 class="counter">4537</h3>
                    <p>Satisfied Customers</p>
                    </div>
                    <!--/.card-body -->
                </div>
                <!--/.card -->
                </div>
            </div>
            <div class="col-2">
                <div class="card card-block d-flex" style="height: 300px">
                    <div class="card-body align-items-center d-flex justify-content-center">
                        <a href="">Lihat semua Bidang Urusan</a>
                    </div>
                  </div>
                    
            </div>
        </div>
        {{-- End Counter Bidang Urusan --}}
        
        {{-- Peraturan Terbaru dan Dokumen Hukum Covid --}}
        <div class="container mt-5">
        <div class="row">
            {{-- Peraturan Terbaru --}}
            <div class="col-sm-9">
            <div class="row">
                <div class="card">
                <div class="card-header">
                    Peraturan Terbaru
                </div>
                <div class="card-body">
                    <div class="container">
                    <div class="row row-cols-3">
                        <div class="col">
                            <div class="card">
                            <img class="card-img-top" src="..." alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                            <img class="card-img-top" src="..." alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                            <img class="card-img-top" src="..." alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            <div class="row">                
            </div>
            </div>
            <div class="col-sm-3">
            {{-- Dokumen Hukum Covid-9 --}}
            <div class="row">
                <div class="card">
                <div class="card-header">
                    Peraturan Terbaru
                </div>
                <div class="card-body">
                    <h5 class="card-title">Special title treatment</h5>
                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
                </div>
            </div>
            {{-- Dokumen Hukum Terbaru --}}
            <div class="row mt-2">
                <div class="card">
                <div class="card-header">
                    Peraturan Terbaru
                </div>
                <div class="card-body">
                    <h5 class="card-title">Special title treatment</h5>
                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
                </div>
            </div>
            </div>
        </div>
        </div>
        {{-- Peraturan Terbaru dan Dokumen Hukum Covid --}}

        {{-- Anggota JDIH Kab / Kota dan Agenda Kegiatan --}}
        <div class="container mt-5">
        <div class="row">
            {{-- Anggota JDIH Kab / Kota --}}
            <div class="col-sm-9">
                <div class="row">
                <div class="card">
                <div class="card-header">
                    Anggota JDIH Kab / Kota
                </div>
                <div class="card-body">
                    <div class="container">
                    <div class="row row-cols-3">
                        <div class="col">
                            <div class="card">
                            <img class="card-img-top" src="..." alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                            <img class="card-img-top" src="..." alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                            <img class="card-img-top" src="..." alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
                </div>
                </div>
                <div class="row">
                    <div class="row mt-5">
                        <div class="col-3">
                            <div class="text-center">
                            <div class="card bg-pale-primary">
                                <div class="card-body">
                                <h3 class="counter">4537</h3>
                                <img src="img/icons/handshake.svg" class="svg-inject icon-svg icon-svg-lg mb-3" alt="" />                    
                                <p>Pendidikan</p>
                                </div>
                                <!--/.card-body -->
                            </div>
                            <!--/.card -->
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="text-center">
                            <div class="card bg-pale-primary">
                                <div class="card-body">
                                <h3 class="counter">4537</h3>
                                <img src="img/icons/handshake.svg" class="svg-inject icon-svg icon-svg-lg mb-3" alt="" />
                                <p>Pemerintahan Umum</p>
                                </div>
                                <!--/.card-body -->
                            </div>
                            <!--/.card -->
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="text-center">
                            <div class="card bg-pale-primary">
                                <div class="card-body">
                                <img src="img/icons/handshake.svg" class="svg-inject icon-svg icon-svg-lg mb-3" alt="" />
                                <h3 class="counter">4537</h3>
                                <p>Satisfied Customers</p>
                                </div>
                                <!--/.card-body -->
                            </div>
                            <!--/.card -->
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="text-center">
                            <div class="card bg-pale-primary">
                                <div class="card-body">
                                <img src="img/icons/handshake.svg" class="svg-inject icon-svg icon-svg-lg mb-3" alt="" />
                                <h3 class="counter">4537</h3>
                                <p>Satisfied Customers</p>
                                </div>
                                <!--/.card-body -->
                            </div>
                            <!--/.card -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
            {{-- Agenda Kegiatan --}}
                <div class="card">
                <div class="card-header">
                    Peraturan Terbaru
                </div>
                <div class="card-body">
                    <h5 class="card-title">Special title treatment</h5>
                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
                </div>
            </div>
        </div>
        </div>
        {{-- Anggota JDIH Kab / Kota dan Agenda Kegiatan --}}

      </div>
      <!-- /.container -->
    </section>
    {{-- End Section --}}

@endsection