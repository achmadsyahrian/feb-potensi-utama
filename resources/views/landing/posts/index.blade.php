@extends('landing.layouts.app')

{{-- Head --}}
@section('title', $title . ' - Universitas Potensi Utama')
@if ($title == 'Berita')
    @section('meta_description', 'Temukan berita terbaru dari Universitas Potensi Utama. Informasi pendidikan terkini, aktivitas kampus, dan prestasi mahasiswa kami.')
    @section('meta_keywords', 'berita upu, berita potensi utama, berita pendidikan, berita kampus upu')
    @section('canonical', 'https://potensi-utama.ac.id/berita')
@elseif($title == 'Pengumuman')
    @section('meta_description', 'Lihat pengumuman resmi dari Universitas Potensi Utama. Informasi terbaru seputar kegiatan akademik, pendaftaran, dan berita penting lainnya.')
    @section('meta_keywords', 'pengumuman upu, pengumuman potensi utama, pengumuman pendidikan, pengumuman kampus upu, upu info')
    @section('canonical', 'https://potensi-utama.ac.id/pengumuman')
@elseif($title == 'Pengabdian Masyarakat')
    @section('meta_description', 'Universitas Potensi Utama berperan aktif dalam pengabdian kepada masyarakat. Pelajari lebih lanjut tentang kegiatan sosial dan kontribusi kami.')
    @section('meta_keywords', 'abdimas upu, abdimas potensi utama, abdimas pendidikan, abdimas kampus upu, pengabdian masyarakat potensi utama')
    @section('canonical', 'https://potensi-utama.ac.id/pengabdian-masyarakat')
@endif


@section('content')
    <div class="catagory-featured-post bg-overlay clearfix" style="background-image: url({{asset('landing/assets/img/building-img/gedung-b.jpg')}})">
        <div class="container-fluid h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12 col-lg-9">
                    <!-- Post Content -->
                    <div class="post-content">
                        <p class="tag"><span>Berita & Informasi</span></p>
                        <a href="#" class="post-title">{{env('APP_NAME')}}</a>
                        <p>Selamat datang di halaman Berita dan Informasi {{env('APP_NAME')}} Universitas Potensi Utama. Di sini, Anda dapat menemukan berbagai update terkini, mulai dari kegiatan akademik, prestasi mahasiswa. Temukan informasi terbaru mengenai inovasi, kerjasama, dan program-program unggulan yang menjadi bagian dari komitmen kami untuk terus maju dalam dunia pendidikan.</p>
                        {{-- <span class="post-date">June 20, 2018</span> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="intro-news-area section-padding-100-0 mb-70">
        <div class="container">
            <div class="row justify-content-center">
                <!-- Intro News Tabs Area -->
                <div class="col-12 col-lg-8">
                    <div class="intro-news-tab">

                        <!-- Intro News Filter -->
                        <div class="intro-news-filter d-flex justify-content-between">
                            <h6>Semua</h6>
                            <nav>
                                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                    <a class="nav-item nav-link active" id="nav1" data-toggle="tab" href="#berita" role="tab" aria-controls="berita" aria-selected="true">Berita</a>
                                </div>
                            </nav>
                        </div>

                        <div class="tab-content" id="nav-tabContent">                            
                            <div class="tab-pane fade show active" id="berita" role="tabpanel" aria-labelledby="nav3">
                                <div class="row">
                                    @foreach($data as $index => $post)
                                        @if($index < 1)
                                            <div class="col-12">
                                                <div class="single-blog-post style-2 mb-5">
                                                    <!-- Blog Thumbnail -->
                                                    <div class="blog-thumbnail">
                                                        <a href="#">
                                                            @if ($post->thumbnail)
                                                                <img src="{{ asset($post->thumbnail) }}"
                                                                style="height:400px; object-fit:cover;" class="img-fluid"
                                                                alt="">
                                                            @else
                                                                <img src="{{ asset('landing/assets/img/logo-img/Logopotensiutama.png') }}" style="height:400px; object-fit:cover;" alt="">
                                                            @endif
                                                        </a>
                                                    </div>

                                                    <!-- Blog Content -->
                                                    <div class="blog-content">
                                                        <span class="post-date">{{ $post->created_at->format('M j, Y') }}</span>
                                                        <a href="#" class="post-title" title="{{$post->title}}">{{ \Illuminate\Support\Str::limit($post->title, 50, '...') }}</a>
                                                        <a href="#" class="post-author">By {{$post->user->name}}</a>
                                                    </div>
                                                </div>
                                            </div>
                                        @else
                                            <div class="col-12 col-sm-6">
                                                <div class="single-blog-post style-2 mb-5">
                                                    <!-- Blog Thumbnail -->
                                                    <div class="blog-thumbnail">
                                                        <a href="#">
                                                            @if ($post->thumbnail)
                                                                <img src="{{ asset($post->thumbnail) }}"
                                                                style="height:250px;; object-fit:cover;" class="img-fluid"
                                                                alt="">
                                                            @else
                                                                <img src="{{ asset('landing/assets/img/logo-img/Logopotensiutama.png') }}" style="height:250px; object-fit:cover;" alt="">
                                                            @endif
                                                        </a>
                                                    </div>
    
                                                    <!-- Blog Content -->
                                                    <div class="blog-content">
                                                        <span class="post-date">{{ $post->created_at->format('M j, Y') }}</span>
                                                        <a href="#" class="post-title" title="{{$post->title}}">{{ \Illuminate\Support\Str::limit($post->title, 50, '...') }}</a>
                                                    </div>
                                                </div>
                                            </div>
                                        @endif
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        
                        <!-- Pagination Bootstrap -->
                        <x-landing-pagination :data="$data"></x-landing-pagination>
                    </div>
                </div>

                <!-- Sidebar Widget -->
                <div class="col-12 col-sm-9 col-md-6 col-lg-4">
                    <div class="sidebar-area">

                        <!-- Add Widget -->
                        <div class="single-widget-area add-widget mb-30">
                            <a href="#">
                                <img src="{{asset('landing/assets/img/ads-img/banner-daftar-manajemen.jpg')}}" alt="">
                            </a>
                        </div>

                        <!-- Recent Post -->
                        <div class="single-widget-area news-widget mb-30">
                            <h4>Postingan Terbaru</h4>
                            @foreach ($dataRecent as $post)
                                <div class="single-blog-post d-flex style-4 mb-30">
                                    <!-- Blog Thumbnail -->
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

                                    <!-- Blog Content -->
                                    <div class="blog-content">
                                        <span class="post-date">{{ $post->created_at->format('M j, Y') }}</span>
                                        <a href="#" class="post-title" title="{{$post->title}}">{{ \Illuminate\Support\Str::limit($post->title, 50, '...') }}</a>
                                    </div>
                                </div>
                            @endforeach
                        </div>

                        {{-- Categori --}}
                        <div class="single-widget-area news-widget mb-30">
                            <h4 class="mb-3">Category</h4>
                            <div class="category-list">
                                @foreach ($categories as $item)
                                    <a href="{{ url('category', $item->slug) }}" class="category-item d-inline-block mb-2 px-3 py-2">
                                        {{ $item->name }}
                                    </a>
                                @endforeach
                            </div>
                        </div>

                        {{-- Tag --}}
                        <div class="single-widget-area news-widget mb-30">
                            <h4 class="mb-3">Tag</h4>
                            <div class="category-list">
                                @foreach ($tags as $item)
                                    <a href="{{ url('category', $item->slug) }}" class="category-item d-inline-block mb-2 px-3 py-2">
                                        {{ $item->name }}
                                    </a>
                                @endforeach
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
    
@endsection
