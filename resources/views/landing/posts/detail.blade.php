@extends('landing.layouts.app')
{{-- Head --}}
{{-- @section('title', $title . ' - Universitas Potensi Utama')
@section('meta_description',  Str::limit($post->title, 100))
@if ($title == 'Berita')
    @section('meta_keywords', 'berita upu, berita potensi utama, berita pendidikan, berita kampus upu')
    @section('canonical', 'https://potensi-utama.ac.id/berita/' . $post->slug)
@elseif($title == 'Pengumuman')
    @section('meta_keywords', 'pengumuman upu, pengumuman potensi utama, pengumuman pendidikan, pengumuman kampus upu, upu info')
    @section('canonical', 'https://potensi-utama.ac.id/pengumuman/' . $post->slug)
@elseif($title == 'Pengabdian Masyarakat')
    @section('meta_keywords', 'abdimas upu, abdimas potensi utama, abdimas pendidikan, abdimas kampus upu, pengabdian masyarakat potensi utama')
    @section('canonical', 'https://potensi-utama.ac.id/pengabdian-masyarakat/' . $post->slug)
@endif --}}

@section('content')

    @include('landing.partials.breaking-news')

    <div class="post-details-title-area bg-overlay clearfix" style="background-image: url({{asset('landing/assets/img/building-img/gedung-b.jpg')}})">
        <div class="container-fluid h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12 col-lg-8">
                    <!-- Post Content -->
                    <div class="post-content">
                        <p class="tag"><span>Berita</span></p>
                        <p class="post-title">Judul Berita Disini</p>
                        <div class="d-flex align-items-center">
                            <span class="post-date mr-30">June 20, 2018</span>
                            <span class="post-date">By Achmad Syahrian</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="post-news-area section-padding-100-0 mb-70">
        <div class="container">
            <div class="row justify-content-center">
                <!-- Post Details Content Area -->
                <div class="col-12 col-lg-8">
                    <div class="post-details-content mb-100">
                        <p>Nullam lacinia ex eleifend orci porttitor, suscipit interdum augue condimentum. Etiam pretium turpis eget nibh laoreet iaculis. Proin ac urna at lectus volutpat lobortis. Vestibulum venenatis iaculis diam vitae lobortis. Donec tincidunt viverra elit, sed consectetur est pr etium ac.</p>
                        <p>Mauris nec mauris tellus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed elit nisl, faucibus eu tempus vel, imperdiet at felis. Sed sed nibh et augue feugiat pharetra. Praesent ultrices nec tortor et gravida. Sed id rhoncus est. Interdum et malesuada fames ac ante ipsum primis in faucibus. Curabitur vitae luctus turpis. Maecenas diam ex, mattis vel dolor ut, fermentum consectetur ex.</p>
                        <img class="mb-30" src="{{asset('landing/assets/img/bg-img/31.jpg')}}" alt="">
                        <p>Nullam lacinia ex eleifend orci porttitor, suscipit interdum augue condimentum. Etiam pretium turpis eget nibh laoreet iaculis. Proin ac urna at lectus volutpat lobortis. Vestibulum venenatis iaculis diam vitae lobortis. Donec tincidunt viverra elit, sed consectetur est pr etium ac.</p>
                        <p>Mauris nec mauris tellus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed elit nisl, faucibus eu tempus vel, imperdiet at felis. Sed sed nibh et augue feugiat pharetra. Praesent ultrices nec tortor et gravida. Sed id rhoncus est. Interdum et malesuada fames ac ante ipsum primis in faucibus. Curabitur vitae luctus turpis. Maecenas diam ex, mattis vel dolor ut, fermentum consectetur ex. </p>
                        <h5 class="mb-30">A good news after all</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed elit nisl, faucibus eu tempus vel, imperdiet at felis. Sed sed nibh et augue feugiat pharetra. Praesent ultrices nec tortor et gravida. Sed id rhoncus est. Interdum et malesuada fames ac ante ipsum primis in faucibus. Curabitur vitae luctus turpis. Maecenas diam ex, mattis vel dolor ut, fermentum consectetur ex.</p>
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

                        <!-- Postingan Terbaru Widget -->
                        <div class="single-widget-area news-widget mb-30">
                            <h4>Postingan Terbaru</h4>

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

                            <!-- Single News Area -->
                            <div class="single-blog-post d-flex style-4 mb-30">
                                <!-- Blog Thumbnail -->
                                <div class="blog-thumbnail">
                                    <a href="#"><img src="{{asset('landing/assets/img/bg-img/20.jpg')}}" alt=""></a>
                                </div>

                                <!-- Blog Content -->
                                <div class="blog-content">
                                    <span class="post-date">June 20, 2018</span>
                                    <a href="#" class="post-title">Dow falls 287 points as trade war fears escalate</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
@endsection
