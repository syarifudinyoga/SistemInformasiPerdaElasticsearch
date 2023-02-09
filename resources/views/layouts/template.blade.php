<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="{{ url('img/jdihn-favicon.png') }}?v={{ date('YmdHis') }}">
  <title>JDIHN | {{ $title }}</title>
  <link rel="stylesheet" href="{{ asset('css/plugins.css') }}">
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  <link rel="preload" href="{{ asset('css/fonts/dm.css') }}" as="style" onload="this.rel='stylesheet'">
</head>

<body>
  <div class="content-wrapper">
    {{-- header --}}
    @include('partials.header')      
    {{-- end header --}}
    <!-- start main content -->
    <section class="content">
        @yield('content')
    </section>
    <!-- end main content -->
  </div>
  <!-- /.content-wrapper -->
  {{-- progress button --}}
  @include('partials.progress')
  {{-- end progress button --}}
  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous"></script>
  <script src="{{ asset('js/image.js') }}"></script>
  <script src="{{ asset('js/plugins.js') }}"></script>
  <script src="{{ asset('js/theme.js') }}"></script>
  <!-- SweetAlert -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/8.11.8/sweetalert2.all.min.js"></script>
  <!-- JQUERY -->
  <script src="{{ asset('jquery/login.js') }}"></script>
</body>

</html>