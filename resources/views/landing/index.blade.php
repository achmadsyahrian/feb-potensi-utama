@extends('landing.layouts.app')
@section('title', 'Beranda - Fakultas Ekonomi & Bisnis | Universitas Potensi Utama')
@section('content')

    @include('landing.partials.breaking-news')

    <div class="hero-area">
        <!-- Hero Post Slides -->
        <div class="hero-post-slides owl-carousel">

            <!-- Single Slide -->
            <div class="single-slide">
                <div class="container-fluid">
                    <div class="row">
                        <!-- Single Blog Post Area -->
                        <div class="col-12 col-md-6">
                            <div class="single-blog-post style-1" data-animation="fadeInUpBig" data-delay="100ms"
                                data-duration="1000ms">
                                <!-- Blog Thumbnail -->
                                <div class="blog-thumbnail bg-overlay">
                                    <a href="#"><img src="{{ asset('landing/assets/img/bg-img/1.jpg') }}"
                                            alt=""></a>
                                </div>

                                <!-- Blog Content -->
                                <div class="blog-content">
                                    <span class="post-date">June 20, 2018</span>
                                    <a href="#" class="post-title">Traffic Problems in Time Square</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-md-6">
                            <!-- Single Blog Post Area -->
                            <div class="single-blog-post style-1 mb-30" data-animation="fadeInUpBig" data-delay="300ms"
                                data-duration="1000ms">
                                <!-- Blog Thumbnail -->
                                <div class="blog-thumbnail bg-overlay">
                                    <a href="#"><img src="{{ asset('landing/assets/img/bg-img/2.jpg') }}"
                                            alt=""></a>
                                </div>

                                <!-- Blog Content -->
                                <div class="blog-content">
                                    <span class="post-date">June 20, 2018</span>
                                    <a href="#" class="post-title">The best way to spend your holliday</a>
                                </div>
                            </div>
                            <!-- Single Blog Post Area -->
                            <div class="single-blog-post style-1" data-animation="fadeInUpBig" data-delay="500ms"
                                data-duration="1000ms">
                                <!-- Blog Thumbnail -->
                                <div class="blog-thumbnail bg-overlay">
                                    <a href="#"><img src="{{ asset('landing/assets/img/bg-img/3.jpg') }}"
                                            alt=""></a>
                                </div>

                                <!-- Blog Content -->
                                <div class="blog-content">
                                    <span class="post-date">June 20, 2018</span>
                                    <a href="#" class="post-title">Sport results for the weekend games</a>
                                </div>
                            </div>
                        </div>
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
                            <h6>All the news</h6>
                            <nav>
                                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                    <a class="nav-item nav-link active" id="nav1" data-toggle="tab" href="#nav-1"
                                        role="tab" aria-controls="nav-1" aria-selected="true">Latest</a>
                                    <a class="nav-item nav-link" id="nav2" data-toggle="tab" href="#nav-2"
                                        role="tab" aria-controls="nav-2" aria-selected="false">Popular</a>
                                    <a class="nav-item nav-link" id="nav3" data-toggle="tab" href="#nav-3"
                                        role="tab" aria-controls="nav-3" aria-selected="false">International</a>
                                    <a class="nav-item nav-link" id="nav4" data-toggle="tab" href="#nav-4"
                                        role="tab" aria-controls="nav-4" aria-selected="false">Local</a>
                                </div>
                            </nav>
                        </div>

                        <div class="tab-content" id="nav-tabContent">

                            <div class="tab-pane fade show active" id="nav-1" role="tabpanel" aria-labelledby="nav1">
                                <div class="row">
                                    <!-- Single News Area -->
                                    <div class="col-12 col-sm-6">
                                        <div class="single-blog-post style-2 mb-5">
                                            <!-- Blog Thumbnail -->
                                            <div class="blog-thumbnail">
                                                <a href="#"><img
                                                        src="{{ asset('landing/assets/img/bg-img/14.jpg') }}"
                                                        alt=""></a>
                                            </div>

                                            <!-- Blog Content -->
                                            <div class="blog-content">
                                                <span class="post-date">June 20, 2018</span>
                                                <a href="#" class="post-title">Elon Musk: Tesla worker admitted to
                                                    sabotage</a>
                                                <a href="#" class="post-author">By Michael Smith</a>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Single News Area -->
                                    <div class="col-12 col-sm-6">
                                        <div class="single-blog-post style-2 mb-5">
                                            <!-- Blog Thumbnail -->
                                            <div class="blog-thumbnail">
                                                <a href="#"><img
                                                        src="{{ asset('landing/assets/img/bg-img/15.jpg') }}"
                                                        alt=""></a>
                                            </div>

                                            <!-- Blog Content -->
                                            <div class="blog-content">
                                                <span class="post-date">June 20, 2018</span>
                                                <a href="#" class="post-title">Rachel Sm ith breaks down while
                                                    discussing border crisis</a>
                                                <a href="#" class="post-author">By Michael Smith</a>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Single News Area -->
                                    <div class="col-12 col-sm-6">
                                        <div class="single-blog-post d-flex style-4 mb-30">
                                            <!-- Blog Thumbnail -->
                                            <div class="blog-thumbnail">
                                                <a href="#"><img
                                                        src="{{ asset('landing/assets/img/bg-img/16.jpg') }}"
                                                        alt=""></a>
                                            </div>

                                            <!-- Blog Content -->
                                            <div class="blog-content">
                                                <span class="post-date">June 20, 2018</span>
                                                <a href="#" class="post-title">Nearly a quarter have no emergency
                                                    savings</a>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Single News Area -->
                                    <div class="col-12 col-sm-6">
                                        <div class="single-blog-post d-flex style-4 mb-30">
                                            <!-- Blog Thumbnail -->
                                            <div class="blog-thumbnail">
                                                <a href="#"><img
                                                        src="{{ asset('landing/assets/img/bg-img/17.jpg') }}"
                                                        alt=""></a>
                                            </div>

                                            <!-- Blog Content -->
                                            <div class="blog-content">
                                                <span class="post-date">June 20, 2018</span>
                                                <a href="#" class="post-title">Nearly a quarter have no emergency
                                                    savings</a>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Single News Area -->
                                    <div class="col-12 col-sm-6">
                                        <div class="single-blog-post d-flex style-4 mb-30">
                                            <!-- Blog Thumbnail -->
                                            <div class="blog-thumbnail">
                                                <a href="#"><img
                                                        src="{{ asset('landing/assets/img/bg-img/18.jpg') }}"
                                                        alt=""></a>
                                            </div>

                                            <!-- Blog Content -->
                                            <div class="blog-content">
                                                <span class="post-date">June 20, 2018</span>
                                                <a href="#" class="post-title">Top bitcoin exchange says over $30
                                                    million stolen</a>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Single News Area -->
                                    <div class="col-12 col-sm-6">
                                        <div class="single-blog-post d-flex style-4 mb-30">
                                            <!-- Blog Thumbnail -->
                                            <div class="blog-thumbnail">
                                                <a href="#"><img
                                                        src="{{ asset('landing/assets/img/bg-img/19.jpg') }}"
                                                        alt=""></a>
                                            </div>

                                            <!-- Blog Content -->
                                            <div class="blog-content">
                                                <span class="post-date">June 20, 2018</span>
                                                <a href="#" class="post-title">Top bitcoin exchange says over $30
                                                    million stolen</a>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Single News Area -->
                                    <div class="col-12 col-sm-6">
                                        <div class="single-blog-post d-flex style-4 mb-30">
                                            <!-- Blog Thumbnail -->
                                            <div class="blog-thumbnail">
                                                <a href="#"><img
                                                        src="{{ asset('landing/assets/img/bg-img/20.jpg') }}"
                                                        alt=""></a>
                                            </div>

                                            <!-- Blog Content -->
                                            <div class="blog-content">
                                                <span class="post-date">June 20, 2018</span>
                                                <a href="#" class="post-title">Dow falls 287 points as trade war
                                                    fears escalate</a>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Single News Area -->
                                    <div class="col-12 col-sm-6">
                                        <div class="single-blog-post d-flex style-4 mb-30">
                                            <!-- Blog Thumbnail -->
                                            <div class="blog-thumbnail">
                                                <a href="#"><img
                                                        src="{{ asset('landing/assets/img/bg-img/21.jpg') }}"
                                                        alt=""></a>
                                            </div>

                                            <!-- Blog Content -->
                                            <div class="blog-content">
                                                <span class="post-date">June 20, 2018</span>
                                                <a href="#" class="post-title">Dow falls 287 points as trade war
                                                    fears escalate</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="nav-2" role="tabpanel" aria-labelledby="nav2">
                                <div class="row">
                                    <!-- Single News Area -->
                                    <div class="col-12 col-sm-6">
                                        <div class="single-blog-post style-2 mb-5">
                                            <!-- Blog Thumbnail -->
                                            <div class="blog-thumbnail">
                                                <a href="#"><img
                                                        src="{{ asset('landing/assets/img/bg-img/4.jpg') }}"
                                                        alt=""></a>
                                            </div>

                                            <!-- Blog Content -->
                                            <div class="blog-content">
                                                <span class="post-date">June 20, 2018</span>
                                                <a href="#" class="post-title">Elon Musk: Tesla worker admitted to
                                                    sabotage</a>
                                                <a href="#" class="post-author">By Michael Smith</a>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Single News Area -->
                                    <div class="col-12 col-sm-6">
                                        <div class="single-blog-post style-2 mb-5">
                                            <!-- Blog Thumbnail -->
                                            <div class="blog-thumbnail">
                                                <a href="#"><img
                                                        src="{{ asset('landing/assets/img/bg-img/5.jpg') }}"
                                                        alt=""></a>
                                            </div>

                                            <!-- Blog Content -->
                                            <div class="blog-content">
                                                <span class="post-date">June 20, 2018</span>
                                                <a href="#" class="post-title">Rachel Sm ith breaks down while
                                                    discussing border crisis</a>
                                                <a href="#" class="post-author">By Michael Smith</a>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Single News Area -->
                                    <div class="col-12 col-sm-6">
                                        <div class="single-blog-post d-flex style-4 mb-30">
                                            <!-- Blog Thumbnail -->
                                            <div class="blog-thumbnail">
                                                <a href="#"><img
                                                        src="{{ asset('landing/assets/img/bg-img/16.jpg') }}"
                                                        alt=""></a>
                                            </div>

                                            <!-- Blog Content -->
                                            <div class="blog-content">
                                                <span class="post-date">June 20, 2018</span>
                                                <a href="#" class="post-title">Nearly a quarter have no emergency
                                                    savings</a>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Single News Area -->
                                    <div class="col-12 col-sm-6">
                                        <div class="single-blog-post d-flex style-4 mb-30">
                                            <!-- Blog Thumbnail -->
                                            <div class="blog-thumbnail">
                                                <a href="#"><img
                                                        src="{{ asset('landing/assets/img/bg-img/17.jpg') }}"
                                                        alt=""></a>
                                            </div>

                                            <!-- Blog Content -->
                                            <div class="blog-content">
                                                <span class="post-date">June 20, 2018</span>
                                                <a href="#" class="post-title">Nearly a quarter have no emergency
                                                    savings</a>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Single News Area -->
                                    <div class="col-12 col-sm-6">
                                        <div class="single-blog-post d-flex style-4 mb-30">
                                            <!-- Blog Thumbnail -->
                                            <div class="blog-thumbnail">
                                                <a href="#"><img
                                                        src="{{ asset('landing/assets/img/bg-img/18.jpg') }}"
                                                        alt=""></a>
                                            </div>

                                            <!-- Blog Content -->
                                            <div class="blog-content">
                                                <span class="post-date">June 20, 2018</span>
                                                <a href="#" class="post-title">Top bitcoin exchange says over $30
                                                    million stolen</a>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Single News Area -->
                                    <div class="col-12 col-sm-6">
                                        <div class="single-blog-post d-flex style-4 mb-30">
                                            <!-- Blog Thumbnail -->
                                            <div class="blog-thumbnail">
                                                <a href="#"><img
                                                        src="{{ asset('landing/assets/img/bg-img/19.jpg') }}"
                                                        alt=""></a>
                                            </div>

                                            <!-- Blog Content -->
                                            <div class="blog-content">
                                                <span class="post-date">June 20, 2018</span>
                                                <a href="#" class="post-title">Top bitcoin exchange says over $30
                                                    million stolen</a>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Single News Area -->
                                    <div class="col-12 col-sm-6">
                                        <div class="single-blog-post d-flex style-4 mb-30">
                                            <!-- Blog Thumbnail -->
                                            <div class="blog-thumbnail">
                                                <a href="#"><img
                                                        src="{{ asset('landing/assets/img/bg-img/20.jpg') }}"
                                                        alt=""></a>
                                            </div>

                                            <!-- Blog Content -->
                                            <div class="blog-content">
                                                <span class="post-date">June 20, 2018</span>
                                                <a href="#" class="post-title">Dow falls 287 points as trade war
                                                    fears escalate</a>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Single News Area -->
                                    <div class="col-12 col-sm-6">
                                        <div class="single-blog-post d-flex style-4 mb-30">
                                            <!-- Blog Thumbnail -->
                                            <div class="blog-thumbnail">
                                                <a href="#"><img
                                                        src="{{ asset('landing/assets/img/bg-img/21.jpg') }}"
                                                        alt=""></a>
                                            </div>

                                            <!-- Blog Content -->
                                            <div class="blog-content">
                                                <span class="post-date">June 20, 2018</span>
                                                <a href="#" class="post-title">Dow falls 287 points as trade war
                                                    fears escalate</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="nav-3" role="tabpanel" aria-labelledby="nav3">
                                <div class="row">
                                    <!-- Single News Area -->
                                    <div class="col-12 col-sm-6">
                                        <div class="single-blog-post style-2 mb-5">
                                            <!-- Blog Thumbnail -->
                                            <div class="blog-thumbnail">
                                                <a href="#"><img
                                                        src="{{ asset('landing/assets/img/bg-img/6.jpg') }}"
                                                        alt=""></a>
                                            </div>

                                            <!-- Blog Content -->
                                            <div class="blog-content">
                                                <span class="post-date">June 20, 2018</span>
                                                <a href="#" class="post-title">Elon Musk: Tesla worker admitted to
                                                    sabotage</a>
                                                <a href="#" class="post-author">By Michael Smith</a>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Single News Area -->
                                    <div class="col-12 col-sm-6">
                                        <div class="single-blog-post style-2 mb-5">
                                            <!-- Blog Thumbnail -->
                                            <div class="blog-thumbnail">
                                                <a href="#"><img
                                                        src="{{ asset('landing/assets/img/bg-img/7.jpg') }}"
                                                        alt=""></a>
                                            </div>

                                            <!-- Blog Content -->
                                            <div class="blog-content">
                                                <span class="post-date">June 20, 2018</span>
                                                <a href="#" class="post-title">Rachel Sm ith breaks down while
                                                    discussing border crisis</a>
                                                <a href="#" class="post-author">By Michael Smith</a>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Single News Area -->
                                    <div class="col-12 col-sm-6">
                                        <div class="single-blog-post d-flex style-4 mb-30">
                                            <!-- Blog Thumbnail -->
                                            <div class="blog-thumbnail">
                                                <a href="#"><img
                                                        src="{{ asset('landing/assets/img/bg-img/16.jpg') }}"
                                                        alt=""></a>
                                            </div>

                                            <!-- Blog Content -->
                                            <div class="blog-content">
                                                <span class="post-date">June 20, 2018</span>
                                                <a href="#" class="post-title">Nearly a quarter have no emergency
                                                    savings</a>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Single News Area -->
                                    <div class="col-12 col-sm-6">
                                        <div class="single-blog-post d-flex style-4 mb-30">
                                            <!-- Blog Thumbnail -->
                                            <div class="blog-thumbnail">
                                                <a href="#"><img
                                                        src="{{ asset('landing/assets/img/bg-img/17.jpg') }}"
                                                        alt=""></a>
                                            </div>

                                            <!-- Blog Content -->
                                            <div class="blog-content">
                                                <span class="post-date">June 20, 2018</span>
                                                <a href="#" class="post-title">Nearly a quarter have no emergency
                                                    savings</a>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Single News Area -->
                                    <div class="col-12 col-sm-6">
                                        <div class="single-blog-post d-flex style-4 mb-30">
                                            <!-- Blog Thumbnail -->
                                            <div class="blog-thumbnail">
                                                <a href="#"><img
                                                        src="{{ asset('landing/assets/img/bg-img/18.jpg') }}"
                                                        alt=""></a>
                                            </div>

                                            <!-- Blog Content -->
                                            <div class="blog-content">
                                                <span class="post-date">June 20, 2018</span>
                                                <a href="#" class="post-title">Top bitcoin exchange says over $30
                                                    million stolen</a>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Single News Area -->
                                    <div class="col-12 col-sm-6">
                                        <div class="single-blog-post d-flex style-4 mb-30">
                                            <!-- Blog Thumbnail -->
                                            <div class="blog-thumbnail">
                                                <a href="#"><img
                                                        src="{{ asset('landing/assets/img/bg-img/19.jpg') }}"
                                                        alt=""></a>
                                            </div>

                                            <!-- Blog Content -->
                                            <div class="blog-content">
                                                <span class="post-date">June 20, 2018</span>
                                                <a href="#" class="post-title">Top bitcoin exchange says over $30
                                                    million stolen</a>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Single News Area -->
                                    <div class="col-12 col-sm-6">
                                        <div class="single-blog-post d-flex style-4 mb-30">
                                            <!-- Blog Thumbnail -->
                                            <div class="blog-thumbnail">
                                                <a href="#"><img
                                                        src="{{ asset('landing/assets/img/bg-img/20.jpg') }}"
                                                        alt=""></a>
                                            </div>

                                            <!-- Blog Content -->
                                            <div class="blog-content">
                                                <span class="post-date">June 20, 2018</span>
                                                <a href="#" class="post-title">Dow falls 287 points as trade war
                                                    fears escalate</a>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Single News Area -->
                                    <div class="col-12 col-sm-6">
                                        <div class="single-blog-post d-flex style-4 mb-30">
                                            <!-- Blog Thumbnail -->
                                            <div class="blog-thumbnail">
                                                <a href="#"><img
                                                        src="{{ asset('landing/assets/img/bg-img/21.jpg') }}"
                                                        alt=""></a>
                                            </div>

                                            <!-- Blog Content -->
                                            <div class="blog-content">
                                                <span class="post-date">June 20, 2018</span>
                                                <a href="#" class="post-title">Dow falls 287 points as trade war
                                                    fears escalate</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="nav-4" role="tabpanel" aria-labelledby="nav4">
                                <div class="row">
                                    <!-- Single News Area -->
                                    <div class="col-12 col-sm-6">
                                        <div class="single-blog-post style-2 mb-5">
                                            <!-- Blog Thumbnail -->
                                            <div class="blog-thumbnail">
                                                <a href="#"><img
                                                        src="{{ asset('landing/assets/img/bg-img/8.jpg') }}"
                                                        alt=""></a>
                                            </div>

                                            <!-- Blog Content -->
                                            <div class="blog-content">
                                                <span class="post-date">June 20, 2018</span>
                                                <a href="#" class="post-title">Elon Musk: Tesla worker admitted to
                                                    sabotage</a>
                                                <a href="#" class="post-author">By Michael Smith</a>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Single News Area -->
                                    <div class="col-12 col-sm-6">
                                        <div class="single-blog-post style-2 mb-5">
                                            <!-- Blog Thumbnail -->
                                            <div class="blog-thumbnail">
                                                <a href="#"><img
                                                        src="{{ asset('landing/assets/img/bg-img/9.jpg') }}"
                                                        alt=""></a>
                                            </div>

                                            <!-- Blog Content -->
                                            <div class="blog-content">
                                                <span class="post-date">June 20, 2018</span>
                                                <a href="#" class="post-title">Rachel Sm ith breaks down while
                                                    discussing border crisis</a>
                                                <a href="#" class="post-author">By Michael Smith</a>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Single News Area -->
                                    <div class="col-12 col-sm-6">
                                        <div class="single-blog-post d-flex style-4 mb-30">
                                            <!-- Blog Thumbnail -->
                                            <div class="blog-thumbnail">
                                                <a href="#"><img
                                                        src="{{ asset('landing/assets/img/bg-img/16.jpg') }}"
                                                        alt=""></a>
                                            </div>

                                            <!-- Blog Content -->
                                            <div class="blog-content">
                                                <span class="post-date">June 20, 2018</span>
                                                <a href="#" class="post-title">Nearly a quarter have no emergency
                                                    savings</a>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Single News Area -->
                                    <div class="col-12 col-sm-6">
                                        <div class="single-blog-post d-flex style-4 mb-30">
                                            <!-- Blog Thumbnail -->
                                            <div class="blog-thumbnail">
                                                <a href="#"><img
                                                        src="{{ asset('landing/assets/img/bg-img/17.jpg') }}"
                                                        alt=""></a>
                                            </div>

                                            <!-- Blog Content -->
                                            <div class="blog-content">
                                                <span class="post-date">June 20, 2018</span>
                                                <a href="#" class="post-title">Nearly a quarter have no emergency
                                                    savings</a>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Single News Area -->
                                    <div class="col-12 col-sm-6">
                                        <div class="single-blog-post d-flex style-4 mb-30">
                                            <!-- Blog Thumbnail -->
                                            <div class="blog-thumbnail">
                                                <a href="#"><img
                                                        src="{{ asset('landing/assets/img/bg-img/18.jpg') }}"
                                                        alt=""></a>
                                            </div>

                                            <!-- Blog Content -->
                                            <div class="blog-content">
                                                <span class="post-date">June 20, 2018</span>
                                                <a href="#" class="post-title">Top bitcoin exchange says over $30
                                                    million stolen</a>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Single News Area -->
                                    <div class="col-12 col-sm-6">
                                        <div class="single-blog-post d-flex style-4 mb-30">
                                            <!-- Blog Thumbnail -->
                                            <div class="blog-thumbnail">
                                                <a href="#"><img
                                                        src="{{ asset('landing/assets/img/bg-img/19.jpg') }}"
                                                        alt=""></a>
                                            </div>

                                            <!-- Blog Content -->
                                            <div class="blog-content">
                                                <span class="post-date">June 20, 2018</span>
                                                <a href="#" class="post-title">Top bitcoin exchange says over $30
                                                    million stolen</a>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Single News Area -->
                                    <div class="col-12 col-sm-6">
                                        <div class="single-blog-post d-flex style-4 mb-30">
                                            <!-- Blog Thumbnail -->
                                            <div class="blog-thumbnail">
                                                <a href="#"><img
                                                        src="{{ asset('landing/assets/img/bg-img/20.jpg') }}"
                                                        alt=""></a>
                                            </div>

                                            <!-- Blog Content -->
                                            <div class="blog-content">
                                                <span class="post-date">June 20, 2018</span>
                                                <a href="#" class="post-title">Dow falls 287 points as trade war
                                                    fears escalate</a>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Single News Area -->
                                    <div class="col-12 col-sm-6">
                                        <div class="single-blog-post d-flex style-4 mb-30">
                                            <!-- Blog Thumbnail -->
                                            <div class="blog-thumbnail">
                                                <a href="#"><img
                                                        src="{{ asset('landing/assets/img/bg-img/21.jpg') }}"
                                                        alt=""></a>
                                            </div>

                                            <!-- Blog Content -->
                                            <div class="blog-content">
                                                <span class="post-date">June 20, 2018</span>
                                                <a href="#" class="post-title">Dow falls 287 points as trade war
                                                    fears escalate</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <!-- Sidebar Widget -->
                <div class="col-12 col-sm-9 col-md-6 col-lg-4">
                    <div class="sidebar-area">


                        <!-- Add Widget -->
                        <div class="single-widget-area add-widget mb-30">
                            <a href="#">
                                <img src="{{ asset('landing/assets/img/ads-img/banner-daftar-manajemen.jpg') }}"
                                    alt="">
                            </a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="video-area bg-img bg-overlay bg-fixed mb-70"
        style="background-image: url({{ asset('landing/assets/img/building-img/gedung-b.jpg') }});">
        <div class="container">
            <div class="row">
                <!-- Featured Video Area -->
                <div class="col-12">
                    <div class="featured-video-area d-flex align-items-center justify-content-center">
                        <div class="video-content text-center">
                            {{-- <a href="#" class="video-btn"><i class="fa fa-play" aria-hidden="true"></i></a> --}}
                            <a href="{{ asset('landing/assets/video/Peresmian Galeri Investasi UPU_360P.mp4') }}"
                                class="video-btn" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                <i class="fa fa-play" aria-hidden="true"></i>
                            </a>


                            <span class="published-date">19 Des, 2019</span>
                            <h3 class="video-title">Peresmian Galeri Investasi UPU</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <div class="top-news-area section-padding-100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="elements-title mb-30 text-center">
                        <h1>Pengumuman</h1>
                    </div>
                </div>
            </div>
            <div class="row">

                <!-- Single News Area -->
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-blog-post style-2 mb-5">
                        <!-- Blog Thumbnail -->
                        {{-- <div class="blog-thumbnail">
                            <a href="#"><img src="{{asset("landing/assets/img/bg-img/4.jpg")}}" alt=""></a>
                        </div> --}}

                        <!-- Blog Content -->
                        <div class="blog-content">
                            <span class="post-date">June 20, 2018</span>
                            <a href="#" class="post-title">Elon Musk: Tesla worker admitted to sabotage</a>
                            <a href="#" class="post-author">By Michael Smith</a>
                        </div>
                    </div>
                </div>

                <!-- Single News Area -->
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-blog-post style-2 mb-5">
                        <!-- Blog Thumbnail -->
                        {{-- <div class="blog-thumbnail">
                            <a href="#"><img src="{{asset("landing/assets/img/bg-img/5.jpg")}}" alt=""></a>
                        </div> --}}

                        <!-- Blog Content -->
                        <div class="blog-content">
                            <span class="post-date">June 20, 2018</span>
                            <a href="#" class="post-title">Rachel Sm ith breaks down while discussing border crisis
                            </a>
                            <a href="#" class="post-author">By Michael Smith</a>
                        </div>
                    </div>
                </div>

                <!-- Single News Area -->
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-blog-post style-2 mb-5">
                        <!-- Blog Thumbnail -->
                        {{-- <div class="blog-thumbnail">
                            <a href="#"><img src="{{asset("landing/assets/img/bg-img/6.jpg")}}" alt=""></a>
                        </div> --}}

                        <!-- Blog Content -->
                        <div class="blog-content">
                            <span class="post-date">June 20, 2018</span>
                            <a href="#" class="post-title">Dow falls 287 points as trade war fears escalate</a>
                            <a href="#" class="post-author">By Michael Smith</a>
                        </div>
                    </div>
                </div>

                <!-- Single News Area -->
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-blog-post style-2 mb-5">
                        <!-- Blog Thumbnail -->
                        {{-- <div class="blog-thumbnail">
                            <a href="#"><img src="{{asset("landing/assets/img/bg-img/7.jpg")}}" alt=""></a>
                        </div> --}}

                        <!-- Blog Content -->
                        <div class="blog-content">
                            <span class="post-date">June 20, 2018</span>
                            <a href="#" class="post-title">Elon Musk: Tesla worker admitted to sabotage</a>
                            <a href="#" class="post-author">By Michael Smith</a>
                        </div>
                    </div>
                </div>

                <!-- Single News Area -->
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-blog-post style-2 mb-5">
                        <!-- Blog Thumbnail -->
                        {{-- <div class="blog-thumbnail">
                            <a href="#"><img src="{{asset("landing/assets/img/bg-img/8.jpg")}}" alt=""></a>
                        </div> --}}

                        <!-- Blog Content -->
                        <div class="blog-content">
                            <span class="post-date">June 20, 2018</span>
                            <a href="#" class="post-title">Rachel Sm ith breaks down while discussing border crisis
                            </a>
                            <a href="#" class="post-author">By Michael Smith</a>
                        </div>
                    </div>
                </div>

                <!-- Single News Area -->
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-blog-post style-2 mb-5">
                        <!-- Blog Thumbnail -->
                        {{-- <div class="blog-thumbnail">
                            <a href="#"><img src="{{asset("landing/assets/img/bg-img/9.jpg")}}" alt=""></a>
                        </div> --}}

                        <!-- Blog Content -->
                        <div class="blog-content">
                            <span class="post-date">June 20, 2018</span>
                            <a href="#" class="post-title">Dow falls 287 points as trade war fears escalate</a>
                            <a href="#" class="post-author">By Michael Smith</a>
                        </div>
                    </div>
                </div>

                <div class="col-12">
                    <div class="load-more-button text-center">
                        <a href="#" class="btn newsbox-btn">Lihat Selengkapnya</a>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="big-add-area mb-100">
        <div class="container-fluid text-center">
            <a href="#"><img
                    src="{{ asset('landing/assets/img/ads-img/Web-Header-pendaftaran-v2-1536x640-1.jpg') }}"
                    style="width:1160px;" alt=""></a>
        </div>
    </div>

    <div class="col-12">
        <div class="elements-title mb-30 text-center">
            <h2>Keanggotaan dan Kerjasama</h2>
        </div>
    </div>
    <section class="video-area bg-img bg-fixed"
        style="background-image: url({{ asset('landing/assets/img/bg-img/texture-flower.jpg') }});">

        <!-- Video Slideshow -->
        <div class="video-slideshow py-5">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="video-slides owl-carousel">

                            <!-- Single News Area -->
                            <div class="single-blog-post style-3">
                                <div class="blog-thumbnail">
                                    <a href="#" ><img
                                            src="{{ asset('landing/assets/img/kerjasama-img/Logo-BNI.png') }}"
                                            style="width:200px; height: 100px; object-fit:contain;" alt=""></a>
                                </div>
                            </div>

                            <!-- Single News Area -->
                            <div class="single-blog-post style-3">
                                <div class="blog-thumbnail">
                                    <a href="#"><img
                                            src="{{ asset('landing/assets/img/kerjasama-img/Logo_bank_mega_syariah_new.png') }}"
                                            style="width:200px; height: 100px; object-fit:contain;" alt=""></a>
                                </div>
                            </div>

                            <!-- Single News Area -->
                            <div class="single-blog-post style-3">
                                <div class="blog-thumbnail">
                                    <a href="#"><img
                                            src="{{ asset('landing/assets/img/kerjasama-img/bank_muamalat.png') }}"
                                            style="width:200px; height: 100px; object-fit:contain;" alt=""></a>
                                </div>
                            </div>

                            <!-- Single News Area -->
                            <div class="single-blog-post style-3">
                                <div class="blog-thumbnail">
                                    <a href="#"><img
                                            src="{{ asset('landing/assets/img/kerjasama-img/afebsi.png') }}"
                                            style="width:200px; height: 100px; object-fit:contain;" alt=""></a>
                                </div>
                            </div>

                            <!-- Single News Area -->
                            <div class="single-blog-post style-3">
                                <div class="blog-thumbnail">
                                    <a href="#"><img
                                            src="{{ asset('landing/assets/img/kerjasama-img/Logo-Ikatan-Akuntan-Indonesia.png') }}"
                                            style="width:200px; height: 100px; object-fit:contain;" alt=""></a>
                                </div>
                            </div>

                            <!-- Single News Area -->
                            <div class="single-blog-post style-3">
                                <div class="blog-thumbnail">
                                    <a href="#"><img
                                            src="{{ asset('landing/assets/img/kerjasama-img/asbisindo.png') }}"
                                            style="width:200px; height: 100px; object-fit:contain;" alt=""></a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
