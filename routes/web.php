<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


// Landing Page Routes
Route::get('/', 'BerandaController@Beranda');

// route beranda
Route::get('/beranda', 'BerandaController@Beranda');
Route::get('/beranda/peraturan', 'BerandaController@Peraturan');
Route::get('/beranda/peraturan/detail', 'BerandaController@DetailPeraturan');

// route profil
Route::get('/profil/selayang-pandang', 'ProfilController@SelayangPandang');
Route::get('/profil/visi-misi', 'ProfilController@VisiMisi');
Route::get('/profil/struktur-organisasi', 'ProfilController@StrukturOrganisasi');

// route kontak
Route::get('/kontak', 'KontakController@Kontak');

// route galeri
Route::get('/galeri', 'GaleriController@Galeri');

// route dokumen
Route::get('/dokumen/peraturan-daerah', 'DokumenController@PeraturanDaerah');
Route::get('/dokumen/peraturan-gubernur', 'DokumenController@PeraturanGubernur');
Route::get('/dokumen/peraturan-bersama-gubernur', 'DokumenController@PeraturanBersamaGubernur');
Route::get('/dokumen/peraturan-dprd', 'DokumenController@PeraturanDPRD');

// route login
Route::get('/login', 'LoginController@Login');

// CMS Routes
// route users
Route::get('cms/users', 'UsersController@Users');