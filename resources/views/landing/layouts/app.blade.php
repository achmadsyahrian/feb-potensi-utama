<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">

    <meta name="description" content="@yield('meta_description', 'Selamat datang di situs online Fakultas Ekonomi & Bisnis Universitas Potensi Utama')">
    <meta name="keywords" content="@yield('meta_keywords', 'universitas potensi utama, potensiutama, potensi utama, kampus, pendidikan, upu medan')">
    <link rel="canonical" href="@yield('canonical', 'https://feb.potensi-utama.ac.id/')">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>@yield('title', 'Fakultas Ekonomi & Bisnis | Universitas Potensi Utama')</title>

    <link rel="icon" href="img/core-img/favicon.ico">

    <link rel="stylesheet" href="{{asset('landing/assets/style.css')}}">

</head>

<body>
    <!-- Preloader -->
    {{-- <div class="preloader d-flex align-items-center justify-content-center">
        <div class="lds-ellipsis">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div> --}}

    <!-- ##### Header Area Start ##### -->
    @include('landing.partials.header')
    <!-- ##### Header Area End ##### -->

    @yield('content')

    <!-- ##### Footer Area Start ##### -->
    @include('landing.partials.footer')
    <!-- ##### Footer Area Start ##### -->

    <!-- ##### All Javascript Script ##### -->
    <!-- jQuery-2.2.4 js -->
    <script src="{{asset('landing/assets/js/jquery/jquery-2.2.4.min.js')}}"></script>
    <!-- Popper js -->
    <script src="{{asset('landing/assets/js/bootstrap/popper.min.js')}}"></script>
    <!-- Bootstrap js -->
    <script src="{{asset('landing/assets/js/bootstrap/bootstrap.min.js')}}"></script>
    <!-- All Plugins js -->
    <script src="{{asset('landing/assets/js/plugins/plugins.js')}}"></script>
    <!-- Active js -->
    <script src="{{asset('landing/assets/js/active.js')}}"></script>
</body>

</html>