@extends('landing.layouts.app')
{{-- Head --}}
@section('title', 'Penelitian - Fakultas Ekonomi dan Bisnis')
@section('meta_description', 'Visi Program Studi Ekonomi Syariah merupakan pernyataan yang berorientasi ke masa depan tentang apa yang diharapkan oleh Program Studi Ekonomi Syariah yang dapat dipaparkan secara jelas.')
@section('meta_keywords', 'penelitian feb upu, penelitian feb potensi utama, penelitian feb, penelitian feb potensi utama')
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
                        <p class="tag"><span>Penelitian</span></p>
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
                        <h1 class="mb-30">Penelitian</h1>
                        <div class="content">
                            {!! $data->content ?? 'Tidak ada data <i class="far fa-sad-cry"></i>' !!}
                        </div>
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
                                        <a href="{{route('landing.news.show', $post->slug)}}">
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
                                        <a href="{{route('landing.news.show', $post->slug)}}" class="post-title" title="{{$post->title}}">{{ \Illuminate\Support\Str::limit($post->title, 50, '...') }}</a>
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
