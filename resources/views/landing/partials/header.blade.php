<header class="header-area">
    <!-- Navbar Area -->
    <div class="newsbox-main-menu">
        <div class="classy-nav-container breakpoint-off">
            <div class="container-fluid">
                <!-- Menu -->
                <nav class="classy-navbar justify-content-between" id="newsboxNav">

                    <!-- Nav brand -->
                    <a href="{{route('landing.home')}}" class="nav-brand"><img src="{{asset('landing/assets/img/logo-img/logo-feb.png')}}" alt=""></a>

                    <!-- Navbar Toggler -->
                    <div class="classy-navbar-toggler">
                        <span class="navbarToggler"><span></span><span></span><span></span></span>
                    </div>

                    <!-- Menu -->
                    <div class="classy-menu">

                        <!-- Close Button -->
                        <div class="classycloseIcon">
                            <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                        </div>

                        <!-- Nav Start -->
                        <div class="classynav">
                            <ul>
                                <li><a href="{{route('landing.home')}}">Beranda</a></li>
                                <li><a href="#">Tentang Fakultas</a>
                                    <ul class="dropdown">
                                        <li><a href="{{route('landing.purpose')}}">Visi Misi</a></li>
                                        <li><a href="#">Penelitian</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Program Studi</a>
                                    <ul class="dropdown">
                                        <li><a href="{{route('landing.academic.economy')}}">Ekonomi Syariah</a></li>
                                        <li><a href="{{route('landing.academic.banking')}}">Perbankan Syariah</a></li>
                                        <li><a href="{{route('landing.academic.accounting')}}">Akuntansi</a></li>
                                        <li><a href="{{route('landing.academic.management')}}">Manajemen</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Informasi</a>
                                    <ul class="dropdown">
                                        <li><a href="{{route('landing.news.index')}}">Berita</a></li>
                                        <li><a href="{{route('landing.announcement.index')}}">Pengumuman</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Administrasi</a></li>
                            </ul>

                            <!-- Header Add Area -->
                            <div class="header-add-area">
                                <a href="#">
                                    <img src="{{asset('landing/assets/img/bg-img/add.png')}}" alt="">
                                </a>
                            </div>
                        </div>
                        <!-- Nav End -->

                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>
