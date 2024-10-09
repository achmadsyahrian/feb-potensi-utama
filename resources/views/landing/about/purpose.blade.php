@extends('landing.layouts.app')
{{-- Head --}}
@section('title', 'Visi Misi - Fakultas Ekonomi dan Bisnis')
@section('meta_description', 'Visi Program Studi Ekonomi Syariah merupakan pernyataan yang berorientasi ke masa depan tentang apa yang diharapkan oleh Program Studi Ekonomi Syariah yang dapat dipaparkan secara jelas.')
@section('meta_keywords', 'visi feb upu, misi feb potensi utama, visi misi feb, visi misi feb potensi utama')
@section('canonical', 'https://feb.potensi-utama.ac.id/visi-misi')

@section('content')

    @include('landing.partials.breaking-news')

    <!-- ##### Post Details Title Area Start ##### -->
    <div class="post-details-title-area bg-overlay clearfix" style="background-image: url({{asset('landing/assets/img/building-img/gedung-b.jpg')}})">
        <div class="container-fluid h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12 col-lg-8">
                    <!-- Post Content -->
                    <div class="post-content">
                        <p class="tag"><span>Visi Misi</span></p>
                        <p class="post-title">{{env('APP_NAME')}}</p>
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
                            @foreach ($latestPosts as $post)
                                <div class="single-blog-post d-flex style-4 mb-30">
                                    <div class="blog-thumbnail">
                                        <a href="#">
                                            @if ($post->thumbnail)
                                                <img src="{{ asset($post->thumbnail) }}"
                                                style="height:90px; object-fit:cover;" class="img-fluid"
                                                alt="">
                                            @else
                                                <img src="{{ asset('landing/assets/img/logo-img/Logopotensiutama.png') }}" style="height:90px; object-fit:cover;" alt="">
                                            @endif
                                        </a>
                                    </div>
                                    <div class="blog-content">
                                        <span class="post-date">{{ $post->created_at->format('M j, Y') }}</span>
                                        <a href="#" class="post-title" title="{{$post->title}}">{{ \Illuminate\Support\Str::limit($post->title, 50, '...') }}</a>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Post Details Area End ##### -->
    
@endsection
