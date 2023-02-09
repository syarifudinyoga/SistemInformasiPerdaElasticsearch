<!-- Menghubungkan dengan view template -->
@extends('layouts/template')

<!-- Judul Halaman -->
@section('judul_halaman', 'Peraturan DPRD')

{{-- Content --}}
@section('content')

    {{-- Breadcrumb --}}
    <div class="container pt-10 pt-md-14 pb-0 text-center">
      <div class="row">
        <div class="col-lg-8 mx-auto">
          <nav class="d-inline-block" aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="#">Dokumen Hukum</a></li>
              <li class="breadcrumb-item active" aria-current="page">Dokumen Hukum @yield('judul_halaman')</li>
            </ol>
          </nav>
          <!-- /nav -->
        {{-- Title Page --}}
        <h2 class="display-5 text-center">Dokumen Hukum <font style="color:#FC0101">@yield('judul_halaman')</font></h2>
        </div>
        <!-- /column -->
      </div>
      <!-- /.row -->
    </div>

	<!-- section -->
    <section class="wrapper bg-light wrapper-border">
      <div class="container py-14 py-md-16">
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
                    <option selected>Peraturan DPRD</option>
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
                <button class="btn btn-sm btn-primary rounded" data-bs-toggle="modal" data-bs-target="#modal-01">Cari</button>
            </div>
            <div class="col col-lg-1">
                <button class="btn btn-sm btn-secondary rounded" data-bs-toggle="modal" data-bs-target="#modal-01">Clear</button>
            </div>
            </div>
            {{-- End Button --}}
            {{-- End Filter --}}
        </div>
        {{-- Konten --}}
        <div class="row mt-5">
            <div class="col-4">
                {{-- Accordion --}}
                <div class="accordion accordion-wrapper" id="accordionExample">
                    <div class="card accordion-item">
                    <div class="card-header" id="headingOne">
                        <button class="accordion-button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne"> <font color="black">Berdasarkan Tipe Dokumen</font> </button>
                    </div>
                    <!--/.card-header -->
                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                        <div class="card-body mb-1">
                        <ul class="unordered-list bullet-primary">
                            <li><a href="#">Peratuan Perundang-udangan (751)</a></li>
                            <li><a href="#">Monografi Hukum (82)</a></li>
                            <li><a href="#">Artikel Hukum (18)</a></li>
                            <li><a href="#">Putusan Pengadilan (121)</a></li>
                            <li><a href="#">Lainnya (24)</a></li>
                        </ul>
                        </div>
                        <!--/.card-body -->
                    </div>
                    <!--/.accordion-collapse -->
                    </div>
                    <!--/.accordion-item -->
                    <div class="card accordion-item">
                    <div class="card-header" id="headingOne">
                        <button class="accordion-button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne"> <font color="black">Berdasarkan Tipe Dokumen</font> </button>
                    </div>
                    <!--/.card-header -->
                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                        <div class="card-body mb-1">
                        <ul class="unordered-list bullet-primary">
                            <li><a href="#">Peraturan DPRD (311)</a></li>
                        </ul>                        
                        </div>
                        <!--/.card-body -->
                    </div>
                    <!--/.accordion-collapse -->
                    </div>
                    <!--/.accordion-item -->
                </div>
                {{-- End Accordion --}}
            </div>
            {{-- Result Doc --}}
            <div class="col-8">
                Ditemukan <font color="red">311</font> dokumen hukum peraturan DPRD
                {{-- Dokumen --}}
                <article class="item post col-md-12">
                <div class="card">
                    <div class="card-body">
                    <div class="post-header">
                        <div class="post-content">Dokumen : Peraturan Perundang-Undangan</div>
                        
                        <!-- /.post-category -->
                        <h2 class="post-title h3 mt-1 mb-3"><a href="#" class="hover" rel="category">Peraturan Daerah Nomor 2 Tahun 2021</a></h2>
                    </div>
                    <div class="post-content">
                        <span><b>Tentang PENYELENGGARAAN PELINDUNGAN PEKERJA MIGRAN INDONESIA ASAL DAERAH PROVINSI JAWA BARAT</b></span>
                        <p>Pekerja Migran Indonesia (PMI) asal Jawa Barat memiliki peran yang sangat penting dalam pembangunan daerah maupun nasional sebagai potensi sumber daya manusia. Hal tersebut menyebabkan para pekerja migran beserta calon pekerja migran Indonesia asal Jawa Barat membutuhkan perlindungan dari perdagangan or...</p>
                    </div>
                    <!-- /.post-content -->
                    </div>
                    <!--/.card-body -->
                    <div class="card-footer">
                    <ul class="post-meta d-flex mb-0">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>Tanggal Penetapan : 10 Februari 2021</span></li>
                        <li class="post-comments"><i class="uil uil-map"></i>Tempat Penetapan : Bandung</li>
                        <li class="post-likes"><i class="uil uil-cloud-download"></i>Diunduh : 251</li>
                    </ul>
                    <!-- /.post-meta -->
                    </div>
                    <!-- /.card-footer -->
                </div>
                <!-- /.card -->
                </article>
                {{-- End Document --}}
                <article class="item post col-md-12">
                <div class="card">
                    <div class="card-body">
                    <div class="post-header">
                        <div class="post-content">Dokumen : Peraturan Perundang-Undangan</div>
                        
                        <!-- /.post-category -->
                        <h2 class="post-title h3 mt-1 mb-3"><a href="#" class="hover" rel="category">Peraturan Daerah Nomor 2 Tahun 2021</a></h2>
                    </div>
                    <div class="post-content">
                        <span><b>Tentang PENYELENGGARAAN PELINDUNGAN PEKERJA MIGRAN INDONESIA ASAL DAERAH PROVINSI JAWA BARAT</b></span>
                        <p>Pekerja Migran Indonesia (PMI) asal Jawa Barat memiliki peran yang sangat penting dalam pembangunan daerah maupun nasional sebagai potensi sumber daya manusia. Hal tersebut menyebabkan para pekerja migran beserta calon pekerja migran Indonesia asal Jawa Barat membutuhkan perlindungan dari perdagangan or...</p>
                    </div>
                    <!-- /.post-content -->
                    </div>
                    <!--/.card-body -->
                    <div class="card-footer">
                    <ul class="post-meta d-flex mb-0">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>Tanggal Penetapan : 10 Februari 2021</span></li>
                        <li class="post-comments"><i class="uil uil-map"></i>Tempat Penetapan : Bandung</li>
                        <li class="post-likes"><i class="uil uil-cloud-download"></i>Diunduh : 251</li>
                    </ul>
                    <!-- /.post-meta -->
                    </div>
                    <!-- /.card-footer -->
                </div>
                <!-- /.card -->
                </article>
                <article class="item post col-md-12">
                <div class="card">
                    <div class="card-body">
                    <div class="post-header">
                        <div class="post-content">Dokumen : Peraturan Perundang-Undangan</div>
                        
                        <!-- /.post-category -->
                        <h2 class="post-title h3 mt-1 mb-3"><a href="#" class="hover" rel="category">Peraturan Daerah Nomor 2 Tahun 2021</a></h2>
                    </div>
                    <div class="post-content">
                        <span><b>Tentang PENYELENGGARAAN PELINDUNGAN PEKERJA MIGRAN INDONESIA ASAL DAERAH PROVINSI JAWA BARAT</b></span>
                        <p>Pekerja Migran Indonesia (PMI) asal Jawa Barat memiliki peran yang sangat penting dalam pembangunan daerah maupun nasional sebagai potensi sumber daya manusia. Hal tersebut menyebabkan para pekerja migran beserta calon pekerja migran Indonesia asal Jawa Barat membutuhkan perlindungan dari perdagangan or...</p>
                    </div>
                    <!-- /.post-content -->
                    </div>
                    <!--/.card-body -->
                    <div class="card-footer">
                    <ul class="post-meta d-flex mb-0">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>Tanggal Penetapan : 10 Februari 2021</span></li>
                        <li class="post-comments"><i class="uil uil-map"></i>Tempat Penetapan : Bandung</li>
                        <li class="post-likes"><i class="uil uil-cloud-download"></i>Diunduh : 251</li>
                    </ul>
                    <!-- /.post-meta -->
                    </div>
                    <!-- /.card-footer -->
                </div>
                <!-- /.card -->
                </article>
                <article class="item post col-md-12">
                <div class="card">
                    <div class="card-body">
                    <div class="post-header">
                        <div class="post-content">Dokumen : Peraturan Perundang-Undangan</div>
                        
                        <!-- /.post-category -->
                        <h2 class="post-title h3 mt-1 mb-3"><a href="#" class="hover" rel="category">Peraturan Daerah Nomor 2 Tahun 2021</a></h2>
                    </div>
                    <div class="post-content">
                        <span><b>Tentang PENYELENGGARAAN PELINDUNGAN PEKERJA MIGRAN INDONESIA ASAL DAERAH PROVINSI JAWA BARAT</b></span>
                        <p>Pekerja Migran Indonesia (PMI) asal Jawa Barat memiliki peran yang sangat penting dalam pembangunan daerah maupun nasional sebagai potensi sumber daya manusia. Hal tersebut menyebabkan para pekerja migran beserta calon pekerja migran Indonesia asal Jawa Barat membutuhkan perlindungan dari perdagangan or...</p>
                    </div>
                    <!-- /.post-content -->
                    </div>
                    <!--/.card-body -->
                    <div class="card-footer">
                    <ul class="post-meta d-flex mb-0">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>Tanggal Penetapan : 10 Februari 2021</span></li>
                        <li class="post-comments"><i class="uil uil-map"></i>Tempat Penetapan : Bandung</li>
                        <li class="post-likes"><i class="uil uil-cloud-download"></i>Diunduh : 251</li>
                    </ul>
                    <!-- /.post-meta -->
                    </div>
                    <!-- /.card-footer -->
                </div>
                <!-- /.card -->
                </article>
                <article class="item post col-md-12">
                <div class="card">
                    <div class="card-body">
                    <div class="post-header">
                        <div class="post-content">Dokumen : Peraturan Perundang-Undangan</div>
                        
                        <!-- /.post-category -->
                        <h2 class="post-title h3 mt-1 mb-3"><a href="#" class="hover" rel="category">Peraturan Daerah Nomor 2 Tahun 2021</a></h2>
                    </div>
                    <div class="post-content">
                        <span><b>Tentang PENYELENGGARAAN PELINDUNGAN PEKERJA MIGRAN INDONESIA ASAL DAERAH PROVINSI JAWA BARAT</b></span>
                        <p>Pekerja Migran Indonesia (PMI) asal Jawa Barat memiliki peran yang sangat penting dalam pembangunan daerah maupun nasional sebagai potensi sumber daya manusia. Hal tersebut menyebabkan para pekerja migran beserta calon pekerja migran Indonesia asal Jawa Barat membutuhkan perlindungan dari perdagangan or...</p>
                    </div>
                    <!-- /.post-content -->
                    </div>
                    <!--/.card-body -->
                    <div class="card-footer">
                    <ul class="post-meta d-flex mb-0">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>Tanggal Penetapan : 10 Februari 2021</span></li>
                        <li class="post-comments"><i class="uil uil-map"></i>Tempat Penetapan : Bandung</li>
                        <li class="post-likes"><i class="uil uil-cloud-download"></i>Diunduh : 251</li>
                    </ul>
                    <!-- /.post-meta -->
                    </div>
                    <!-- /.card-footer -->
                </div>
                <!-- /.card -->
                </article>
                <article class="item post col-md-12">
                <div class="card">
                    <div class="card-body">
                    <div class="post-header">
                        <div class="post-content">Dokumen : Peraturan Perundang-Undangan</div>
                        
                        <!-- /.post-category -->
                        <h2 class="post-title h3 mt-1 mb-3"><a href="#" class="hover" rel="category">Peraturan Daerah Nomor 2 Tahun 2021</a></h2>
                    </div>
                    <div class="post-content">
                        <span><b>Tentang PENYELENGGARAAN PELINDUNGAN PEKERJA MIGRAN INDONESIA ASAL DAERAH PROVINSI JAWA BARAT</b></span>
                        <p>Pekerja Migran Indonesia (PMI) asal Jawa Barat memiliki peran yang sangat penting dalam pembangunan daerah maupun nasional sebagai potensi sumber daya manusia. Hal tersebut menyebabkan para pekerja migran beserta calon pekerja migran Indonesia asal Jawa Barat membutuhkan perlindungan dari perdagangan or...</p>
                    </div>
                    <!-- /.post-content -->
                    </div>
                    <!--/.card-body -->
                    <div class="card-footer">
                    <ul class="post-meta d-flex mb-0">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>Tanggal Penetapan : 10 Februari 2021</span></li>
                        <li class="post-comments"><i class="uil uil-map"></i>Tempat Penetapan : Bandung</li>
                        <li class="post-likes"><i class="uil uil-cloud-download"></i>Diunduh : 251</li>
                    </ul>
                    <!-- /.post-meta -->
                    </div>
                    <!-- /.card-footer -->
                </div>
                <!-- /.card -->
                </article>
                <article class="item post col-md-12">
                <div class="card">
                    <div class="card-body">
                    <div class="post-header">
                        <div class="post-content">Dokumen : Peraturan Perundang-Undangan</div>
                        
                        <!-- /.post-category -->
                        <h2 class="post-title h3 mt-1 mb-3"><a href="#" class="hover" rel="category">Peraturan Daerah Nomor 2 Tahun 2021</a></h2>
                    </div>
                    <div class="post-content">
                        <span><b>Tentang PENYELENGGARAAN PELINDUNGAN PEKERJA MIGRAN INDONESIA ASAL DAERAH PROVINSI JAWA BARAT</b></span>
                        <p>Pekerja Migran Indonesia (PMI) asal Jawa Barat memiliki peran yang sangat penting dalam pembangunan daerah maupun nasional sebagai potensi sumber daya manusia. Hal tersebut menyebabkan para pekerja migran beserta calon pekerja migran Indonesia asal Jawa Barat membutuhkan perlindungan dari perdagangan or...</p>
                    </div>
                    <!-- /.post-content -->
                    </div>
                    <!--/.card-body -->
                    <div class="card-footer">
                    <ul class="post-meta d-flex mb-0">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>Tanggal Penetapan : 10 Februari 2021</span></li>
                        <li class="post-comments"><i class="uil uil-map"></i>Tempat Penetapan : Bandung</li>
                        <li class="post-likes"><i class="uil uil-cloud-download"></i>Diunduh : 251</li>
                    </ul>
                    <!-- /.post-meta -->
                    </div>
                    <!-- /.card-footer -->
                </div>
                <!-- /.card -->
                </article>
                {{-- Pagination --}}
                <nav class="d-flex justify-content-md-center mt-5" aria-label="pagination">
                <ul class="pagination">
                    <li class="page-item"><a class="page-link" href="#">First</a></li>
                    <li class="page-item disabled">
                    <a class="page-link" href="#" aria-label="Previous">
                        <span aria-hidden="true"><i class="uil uil-arrow-left"></i></span>
                    </a>
                    </li>
                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">4</a></li>
                    <li class="page-item"><a class="page-link" href="#">5</a></li>
                    <li class="page-item"><a class="page-link" href="#">6</a></li>
                    <li class="page-item"><a class="page-link" href="#">7</a></li>
                    <li class="page-item"><a class="page-link" href="#">8</a></li>
                    <li class="page-item"><a class="page-link" href="#">9</a></li>
                    <li class="page-item"><a class="page-link" href="#">10</a></li>
                    <li class="page-item">
                    <a class="page-link" href="#" aria-label="Next">
                        <span aria-hidden="true"><i class="uil uil-arrow-right"></i></span>
                    </a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">Last</a></li>
                </ul>
                <!-- /.pagination -->
                </nav>
                <!-- /nav -->
                {{-- End Pagination --}}
            </div>
            {{-- End Result Doc --}}
        </div>
        {{-- End Konten --}}
      </div>
      <!-- /.container -->
    </section>
    {{-- End Section --}}

@endsection