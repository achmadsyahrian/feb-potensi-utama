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
    <div class="catagory-featured-post bg-overlay clearfix" style="background-image: url({{asset('landing/assets/img/bg-img/23.jpg')}})">
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
                            <h6>Semua postingan</h6>
                            <nav>
                                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                    <a class="nav-item nav-link active" id="nav1" data-toggle="tab" href="#nav-1" role="tab" aria-controls="nav-1" aria-selected="true">Berita</a>
                                    <a class="nav-item nav-link" id="nav2" data-toggle="tab" href="#nav-2" role="tab" aria-controls="nav-2" aria-selected="false">Pengumuman</a>
                                    <a class="nav-item nav-link" id="nav3" data-toggle="tab" href="#nav-3" role="tab" aria-controls="nav-3" aria-selected="false">Pengabdian Masyarakat</a>
                                </div>
                            </nav>
                        </div>

                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-1" role="tabpanel" aria-labelledby="nav1">
                                <div class="row">
                                    <!-- Single News Area -->
                                    <div class="col-12">
                                        <div class="single-blog-post style-2 mb-5">
                                            <!-- Blog Thumbnail -->
                                            <div class="blog-thumbnail">
                                                <a href="#"><img src="{{asset('landing/assets/img/bg-img/24.jpg')}}" alt=""></a>
                                            </div>

                                            <!-- Blog Content -->
                                            <div class="blog-content">
                                                <span class="post-date">June 20, 2018</span>
                                                <a href="/berita/detail" class="post-title">Elon Musks: Tesla worker admitted to sabotage</a>
                                                <a href="#" class="post-author mb-30">By Michael Smith</a>
                                                <p>Nullam lacinia ex eleifend orci porttitor, suscipit interdum augue condimentum. Etiam pretium turpis eget nibh laoreet iaculis. Proin ac urna at lectus volutpat lobortis. Vestibulum venenatis iaculis diam vitae lobortis. Donec tincidunt viverra elit, sed consectetur est pr etium ac. Mauris nec mauris tellus. </p>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Single News Area -->
                                    <div class="col-12 col-sm-6">
                                        <div class="single-blog-post style-2 mb-5">
                                            <!-- Blog Thumbnail -->
                                            <div class="blog-thumbnail">
                                                <a href="#"><img src="{{asset('landing/assets/img/bg-img/14.jpg')}}" alt=""></a>
                                            </div>

                                            <!-- Blog Content -->
                                            <div class="blog-content">
                                                <span class="post-date">June 20, 2018</span>
                                                <a href="#" class="post-title">Elon Musk: Tesla worker admitted to sabotage</a>
                                                <a href="#" class="post-author">By Michael Smith</a>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Single News Area -->
                                    <div class="col-12 col-sm-6">
                                        <div class="single-blog-post style-2 mb-5">
                                            <!-- Blog Thumbnail -->
                                            <div class="blog-thumbnail">
                                                <a href="#"><img src="{{asset('landing/assets/img/bg-img/15.jpg')}}" alt=""></a>
                                            </div>

                                            <!-- Blog Content -->
                                            <div class="blog-content">
                                                <span class="post-date">June 20, 2018</span>
                                                <a href="#" class="post-title">Rachel Sm ith breaks down while discussing border crisis</a>
                                                <a href="#" class="post-author">By Michael Smith</a>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Single News Area -->
                                    <div class="col-12 col-sm-6">
                                        <div class="single-blog-post style-2 mb-5">
                                            <!-- Blog Thumbnail -->
                                            <div class="blog-thumbnail">
                                                <a href="#"><img src="{{asset('landing/assets/img/bg-img/4.jpg')}}" alt=""></a>
                                            </div>

                                            <!-- Blog Content -->
                                            <div class="blog-content">
                                                <span class="post-date">June 20, 2018</span>
                                                <a href="#" class="post-title">Elon Musk: Tesla worker admitted to sabotage</a>
                                                <a href="#" class="post-author">By Michael Smith</a>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Single News Area -->
                                    <div class="col-12 col-sm-6">
                                        <div class="single-blog-post style-2 mb-5">
                                            <!-- Blog Thumbnail -->
                                            <div class="blog-thumbnail">
                                                <a href="#"><img src="{{asset('landing/assets/img/bg-img/5.jpg')}}" alt=""></a>
                                            </div>

                                            <!-- Blog Content -->
                                            <div class="blog-content">
                                                <span class="post-date">June 20, 2018</span>
                                                <a href="#" class="post-title">Rachel Sm ith breaks down while discussing border crisis</a>
                                                <a href="#" class="post-author">By Michael Smith</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Pagination Bootstrap -->
                        <nav aria-label="Page navigation example">
                            <ul class="pagination justify-content-center">
                                <li class="page-item">
                                    <a class="page-link" href="#" aria-label="Previous">
                                        <span aria-hidden="true">&laquo;</span>
                                    </a>
                                </li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#" aria-label="Next">
                                        <span aria-hidden="true">&raquo;</span>
                                    </a>
                                </li>
                            </ul>
                        </nav>

                        <!-- Custom CSS -->
                        <style>
                            .pagination .page-link {
                                color: black; /* Warna default */
                            }

                            .pagination .page-link:hover {
                                background-color: #439607; /* Hijau saat dihover */
                                color: white; /* Teks berubah menjadi putih */
                            }
                        </style>

                        
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

                        <!-- Latest News Widget -->
                        <div class="single-widget-area news-widget mb-30">
                            <h4>Postingan Terbaru</h4>

                            <!-- Single News Area -->
                            <div class="single-blog-post d-flex style-4 mb-30">
                                <!-- Blog Thumbnail -->
                                <div class="blog-thumbnail">
                                    <a href="#"><img src="{{('landing/assets/img/bg-img/16.jpg')}}" alt=""></a>
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
                                    <a href="#"><img src="{{('landing/assets/img/bg-img/17.jpg')}}" alt=""></a>
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
                                    <a href="#"><img src="{{('landing/assets/img/bg-img/18.jpg')}}" alt=""></a>
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
                                    <a href="#"><img src="{{('landing/assets/img/bg-img/19.jpg')}}" alt=""></a>
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
                                    <a href="#"><img src="{{('landing/assets/img/bg-img/20.jpg')}}" alt=""></a>
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
