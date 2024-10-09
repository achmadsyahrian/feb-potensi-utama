@extends('landing.layouts.app')

{{-- Head --}}
@section('title', $title . ' - ' . env('APP_NAME') .' | Universitas Potensi Utama')
@section('meta_description', 'Temukan berita terbaru dari Universitas Potensi Utama. Informasi pendidikan terkini, aktivitas kampus, dan prestasi mahasiswa kami.')
@section('meta_keywords', 'berita upu, berita potensi utama, berita pendidikan, berita kampus upu')
@section('canonical', 'https://potensi-utama.ac.id/berita')


@section('content')
    <div class="catagory-featured-post bg-overlay clearfix" style="background-image: url({{asset('landing/assets/img/building-img/gedung-b.jpg')}})">
        <div class="container-fluid h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12 col-lg-9">
                    <!-- Post Content -->
                    <div class="post-content">
                        <p class="tag"><span>Pengumuman</span></p>
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
                            <div class="d-flex align-items-center">
                                <a class="text-warning ml-2" href="{{ route('landing.announcement.index') }}" title="Bersihkan Pencarian">
                                    <i class="fas fa-redo"></i>
                                </a>
                                
                                <h6 class="mb-0">
                                    @if(request()->routeIs('landing.announcement.category'))
                                        By Category : {{ $categorySlug }} 
                                    @elseif(request()->routeIs('landing.announcement.tag'))
                                        By Tag : {{ $tagSlug }}
                                    @elseif(request('s'))
                                        Cari : {{ request('s')}}
                                    @else
                                        Semua
                                    @endif
                                </h6>
                            </div>
                            <nav>
                                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                    <a class="nav-item nav-link active" id="nav1" data-toggle="tab" href="#pengumuman" role="tab" aria-controls="pengumuman" aria-selected="true">{{$totalData}} Total</a>
                                </div>
                            </nav>
                        </div>                        

                        <div class="tab-content" id="nav-tabContent">                            
                            <div class="tab-pane fade show active" id="pengumuman" role="tabpanel" aria-labelledby="nav3">
                                <div class="row">
                                    @foreach($data as $index => $post)
                                        @if($index < 1)
                                            <div class="col-12">
                                                <div class="single-blog-post style-2 mb-5">
                                                    <!-- Blog Thumbnail -->
                                                    <div class="blog-thumbnail position-relative">
                                                        <a href="#">
                                                            @if ($post->thumbnail)
                                                                <img src="{{ asset($post->thumbnail) }}"
                                                                     style="height:400px; object-fit:cover;" class="img-fluid" alt="">
                                                            @else
                                                                <img src="{{ asset('landing/assets/img/logo-img/Logopotensiutama.png') }}"
                                                                     style="height:400px; object-fit:cover;" alt="">
                                                            @endif
                                                        </a>
                                                        <!-- Kategori -->
                                                        <span class="category-label">{{ $post->category->name }}</span>
                                                    </div>
                                                
                                                    <!-- Blog Content -->
                                                    <div class="blog-content">
                                                        <span class="post-date">{{ $post->created_at->format('M j, Y') }}</span>
                                                        <a href="#" class="post-title" title="{{ $post->title }}">{{ \Illuminate\Support\Str::limit($post->title, 50, '...') }}</a>
                                                        <a href="#" class="post-author ">By {{ $post->user->name }}</a>
                                                        <x-filtered-content :content="$post->content" class="mt-4" />
                                                    </div>
                                                </div>
                                            </div>
                                        @else
                                            <div class="col-12 col-sm-6">
                                                <div class="single-blog-post style-2 mb-5">
                                                    <!-- Blog Thumbnail -->
                                                    <div class="blog-thumbnail position-relative">
                                                        <a href="#">
                                                            @if ($post->thumbnail)
                                                                <img src="{{ asset($post->thumbnail) }}"
                                                                style="height:250px;; object-fit:cover;" class="img-fluid"
                                                                alt="">
                                                            @else
                                                                <img src="{{ asset('landing/assets/img/logo-img/Logopotensiutama.png') }}" style="height:250px; object-fit:cover;" alt="">
                                                            @endif
                                                        </a>
                                                        <span class="category-label">{{ $post->category->name }}</span>
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
                        @if (!$data->isEmpty())
                            <x-landing-pagination :data="$data"></x-landing-pagination>
                        @else
                            <p class="text-center">Tidak ada pengumuman <i class="far fa-sad-cry"></i></p>
                        @endif
                    </div>
                </div>

                <!-- Sidebar Widget -->
                <div class="col-12 col-sm-9 col-md-6 col-lg-4">
                    <div class="sidebar-area">

                        {{-- Search --}}
                        <div class="single-widget-area newsletter-widget mb-30">
                            <h4>Pencarian <i class="fas fa-search"></i></h4>
                            <form action="#" method="get">
                                <input type="text" name="s" id="nlemail" placeholder="Masukkan judul" value="{{request('s')}}">
                                <button type="submit" class="btn newsbox-btn w-100">Cari</button>
                            </form>
                        </div>
                        
                        <!-- Add Widget -->
                        <div class="single-widget-area add-widget mb-30">
                            <a href="#">
                                <img src="{{asset('landing/assets/img/ads-img/banner-daftar-manajemen.jpg')}}" alt="">
                            </a>
                        </div>

                        <!-- Recent Post -->
                        <div class="single-widget-area news-widget mb-30">
                            <h4>Pengumuman Terbaru</h4>
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
                                    <a href="{{ route('landing.announcement.category', $item->slug) }}" class="category-item d-inline-block mb-2 px-3 py-2 text-decoration-none">
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
                                    <a href="{{ route('landing.announcement.tag', $item->slug) }}" class="category-item d-inline-block mb-2 px-3 py-2">
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
