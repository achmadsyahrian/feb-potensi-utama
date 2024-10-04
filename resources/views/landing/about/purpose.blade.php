@extends('landing.layouts.app')
{{-- Head --}}
@section('title', 'Visi Misi - Universitas Potensi Utama')
@section('meta_description', 'Mulai dari kursus komputer sederhana hingga menjadi universitas terkemuka di Medan, ikuti perjalanan inspiratif Universitas Potensi Utama. Temukan bagaimana kami tumbuh dan berkembang, serta komitmen kami dalam mencetak generasi muda yang berkualitas.')
@section('meta_keywords', 'visi upu, misi potensi utama, visi misi upu, visi misi potensi utama')
@section('canonical', 'https://potensi-utama.ac.id/visi-misi')

@section('content')

    <!-- ##### Breaking News Area Start ##### -->
    <section class="breaking-news-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <!-- Breaking News Widget -->
                    <div class="breaking-news-ticker d-flex flex-wrap align-items-center">
                        <div class="title">
                            <h6>Informasi</h6>
                        </div>
                        <div id="breakingNewsTicker" class="ticker">
                           <ul>
                              <li><a href="#">Pendaftaran Mahasiswa Baru masih dibuka hingga akhir bulan ini.</a></li>
                              <li><a href="#">Seminar Nasional tentang Teknologi Informasi akan dilaksanakan minggu depan.</a></li>
                              <li><a href="#">Pengumuman: Pembayaran SPP semester genap telah dibuka.</a></li>
                           </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Breaking News Area End ##### -->

    <!-- ##### Post Details Title Area Start ##### -->
    <div class="post-details-title-area bg-overlay clearfix" style="background-image: url({{asset('landing/assets/img/building-img/gedung-b.jpg')}})">
        <div class="container-fluid h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12 col-lg-8">
                    <!-- Post Content -->
                    <div class="post-content">
                        <p class="tag"><span>Visi Misi</span></p>
                        <p class="post-title">Universitas Potensi Utama</p>
                        {{-- <div class="d-flex align-items-center">
                            <span class="post-date mr-30">June 20, 2018</span>
                            <span class="post-date">By Michael Smith</span>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Post Details Title Area End ##### -->

    <!-- ##### Post Details Area Start ##### -->
    <section class="post-news-area section-padding-100-0 mb-70">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-8">
                    <div class="post-details-content mb-100">
                        <h1 class="mb-30">Visi & Misi</h1>
                        <h4 class="mb-30">Visi</h4>
                        <p>Menjadi Fakultas Ekonomi dan Bisnis yang unggul dalam menciptakan lulusan yang kompeten dan berjiwa wirausaha di ditingkat nasional dan berperan aktif di tingkat internasional pada tahun 2035.</p>
                        <h4 class="mb-30">Misi</h4>
                        <table class="text-secondary" style="border-collapse: collapse; width: 100%;">
                            <tr >
                                <td style="width: 3%; vertical-align: top;">1.</td>
                                <td>Melaksanakan pendidikan di bidang ilmu Ekonomi dan Bisnis yang berkualitas tinggi dan berorientasi internasional.</td>
                            </tr>
                            <tr>
                                <td style="vertical-align: top;">2.</td>
                                <td>Melaksanakan penelitian di bidang ilmu Ekonomi dan Bisnis yang mendapatkan rekognisi di tingkat Nasional dan internasional.</td>
                            </tr>
                            <tr>
                                <td style="vertical-align: top;">3.</td>
                                <td>Melaksanakan kegiatan PkM (Pengabdian kepada Masyarakat) dibidang ilmu Ekonomi dan bisnis yang berguna bagi kepentingan masyarakat.</td>
                            </tr>
                            <tr>
                                <td style="vertical-align: top;">4.</td>
                                <td>Melaksanakan kerjasama dengan Institusi pada tingkat Nasional maupun Internasional yang mendukung pelaksanaan tridharma Perguruan Tinggi di bidang Ilmu Ekonomi dan Bisnis.</td>
                            </tr>
                            <tr>
                                <td style="vertical-align: top;">5.</td>
                                <td>Melaksanakan layanan akademik dan tata kelola yang baik (good governance).</td>
                            </tr>
                        </table>
                    </div>
                </div>

                <!-- Sidebar Widget -->
                <div class="col-12 col-sm-9 col-md-6 col-lg-4">
                    <div class="sidebar-area">

                        <!-- Latest News Widget -->
                        <div class="single-widget-area news-widget mb-30">
                            <h4>Berita Terbaru</h4>

                            <!-- Single News Area -->
                            <div class="single-blog-post d-flex style-4 mb-30">
                                <!-- Blog Thumbnail -->
                                <div class="blog-thumbnail">
                                    <a href="#"><img src="{{asset('landing/assets/img/bg-img/16.jpg')}}" alt=""></a>
                                </div>

                                <!-- Blog Content -->
                                <div class="blog-content">
                                    <span class="post-date">June 20, 2018</span>
                                    <a href="#" class="post-title">Nearly a quarter have no emergency savings</a>
                                </div>
                            </div>

                            <!-- Single News Area -->
                            <div class="single-blog-post d-flex style-4 mb-30">
                                <!-- Blog Thumbnail -->
                                <div class="blog-thumbnail">
                                    <a href="#"><img src="{{asset('landing/assets/img/bg-img/17.jpg')}}" alt=""></a>
                                </div>

                                <!-- Blog Content -->
                                <div class="blog-content">
                                    <span class="post-date">June 20, 2018</span>
                                    <a href="#" class="post-title">Nearly a quarter have no emergency savings</a>
                                </div>
                            </div>

                            <!-- Single News Area -->
                            <div class="single-blog-post d-flex style-4 mb-30">
                                <!-- Blog Thumbnail -->
                                <div class="blog-thumbnail">
                                    <a href="#"><img src="{{asset('landing/assets/img/bg-img/18.jpg')}}" alt=""></a>
                                </div>

                                <!-- Blog Content -->
                                <div class="blog-content">
                                    <span class="post-date">June 20, 2018</span>
                                    <a href="#" class="post-title">Top bitcoin exchange says over $30 million stolen</a>
                                </div>
                            </div>

                            <!-- Single News Area -->
                            <div class="single-blog-post d-flex style-4 mb-30">
                                <!-- Blog Thumbnail -->
                                <div class="blog-thumbnail">
                                    <a href="#"><img src="{{asset('landing/assets/img/bg-img/19.jpg')}}" alt=""></a>
                                </div>

                                <!-- Blog Content -->
                                <div class="blog-content">
                                    <span class="post-date">June 20, 2018</span>
                                    <a href="#" class="post-title">Top bitcoin exchange says over $30 million stolen</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Post Details Area End ##### -->
    
@endsection
