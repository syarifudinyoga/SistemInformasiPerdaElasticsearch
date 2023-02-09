<!-- Menghubungkan dengan view template cms -->
@extends('layouts/template')

{{-- Content --}}
@section('content')

  <div class="container pt-10 pt-md-14 pb-0">
    <div class="row justify-content-md-center">
      <div class="col col-lg-9">
        <div class="card">
          <div class="card-header">
            <h3>Login</h3>
          </div>
          <div class="card-body">
            <div class="text-center">
                <a href="/"><img srcset="{{ asset('img/jdih-logo.png') }} 2x" width="180" alt="" /></a>
                <h5 class="mt-3">Selamat datang! Silahkan login ke akunmu.</h5>
            </div>
            
            <h5 class="mb-3 mt-5">Username</h5>
            <div class="form-label-group mb-4">
              <input id="username" type="text" class="form-control" placeholder="Masukan Username">
              <label for="username">Masukan Username</label>
            </div>
            <h5 class="mb-3">Password</h5>
            <div class="form-label-group mb-4">
              <input id="password" type="password" class="form-control" placeholder="Masukan Password">
              <label for="password">Masukan Password</label>
            </div>
            <a href="#" class="btn btn-login btn-primary">Login</a>
            
          </div>
        </div>
        <br>
      </div>
    </div>
  </div>

@endsection