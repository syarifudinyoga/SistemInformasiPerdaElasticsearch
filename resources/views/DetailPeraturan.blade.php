<!-- Menghubungkan dengan view template -->
@extends('layouts/template')

<!-- Judul Halaman -->
@section('judul_halaman', 'Detail Peraturan')

{{-- Content --}}
@section('content')

    {{-- Breadcrumb --}}
    <div class="container pt-10 pt-md-14 pb-0 text-center">
    <div class="row">
        <div class="col-lg-8 mx-auto">
        <nav class="d-inline-block" aria-label="breadcrumb">
            <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Beranda</a></li>
            <li class="breadcrumb-item"><a href="#">Peraturan</a></li>
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
            <div class="container">
            <div class="row">
                <div class="col">
                    <table>
                    <tr>
                    <tr>
                        <td  width="40%">Jenis Dokumen</td>
                        <td width="5%">:</td>
                        <td width="55%">Peraturan Daerah</td>
                    </tr>
                    <tr>
                        <td>Nomor</td>
                        <td>:</td>
                        <td>2 Tahun 2021</td>
                    </tr>
                    <tr>
                        <td>Judul</td>
                        <td>:</td>
                        <td>PENYELENGGARAAN PELINDUNGAN PEKERJA MIGRAN INDONESIA ASAL DAERAH PROVINSI JAWA BARAT</td>
                    </tr>
                    <tr>
                        <td>Instansi</td>
                        <td>:</td>
                        <td>Hukum dan HAM Setda Jawa Barat</td>
                    </tr>
                    <tr>
                        <td>Bentuk Peraturan</td>
                        <td>:</td>
                        <td>Peraturan Daerah</td>
                    </tr>
                    <tr>
                        <td>Singkatan</td>
                        <td>:</td>
                        <td>PERDA</td>
                    </tr>
                    <tr>
                        <td>Tempat Penetapan</td>
                        <td>:</td>
                        <td>Bandung</td>
                    </tr>
                    <tr>
                        <td>Tanggal Penetapan</td>
                        <td>:</td>
                        <td>10 Februari 2021</td>
                    </tr>
                    <tr>
                        <td>Tanggal Pengundangan</td>
                        <td>:</td>
                        <td>10 Februari 2021</td>
                    </tr>
                    <tr>
                        <td>Sumber</td>
                        <td>:</td>
                        <td></td>
                    </tr>
                    </table>
                </div>
                <div class="col">
                    <table>
                    <tr>
                    <tr>
                        <td  width="40%">Jenis Dokumen</td>
                        <td width="5%">:</td>
                        <td width="55%">Peraturan Daerah</td>
                    </tr>
                    <tr>
                        <td>Nomor</td>
                        <td>:</td>
                        <td>2 Tahun 2021</td>
                    </tr>
                    <tr>
                        <td>Judul</td>
                        <td>:</td>
                        <td>PENYELENGGARAAN PELINDUNGAN PEKERJA MIGRAN INDONESIA ASAL DAERAH PROVINSI JAWA BARAT</td>
                    </tr>
                    <tr>
                        <td>Instansi</td>
                        <td>:</td>
                        <td>Hukum dan HAM Setda Jawa Barat</td>
                    </tr>
                    <tr>
                        <td>Bentuk Peraturan</td>
                        <td>:</td>
                        <td>Peraturan Daerah</td>
                    </tr>
                    <tr>
                        <td>Singkatan</td>
                        <td>:</td>
                        <td>PERDA</td>
                    </tr>
                    <tr>
                        <td>Tempat Penetapan</td>
                        <td>:</td>
                        <td>Bandung</td>
                    </tr>
                    <tr>
                        <td>Tanggal Penetapan</td>
                        <td>:</td>
                        <td>10 Februari 2021</td>
                    </tr>
                    <tr>
                        <td>Tanggal Pengundangan</td>
                        <td>:</td>
                        <td>10 Februari 2021</td>
                    </tr>
                    <tr>
                        <td>Sumber</td>
                        <td>:</td>
                        <td></td>
                    </tr>
                    </table>
                </div>
            </div>
            </div>                    
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

    DIBAWAH SINI HARUSNYA MENAMPILKAN FILE PDF DALAM BROWSER

@endsection