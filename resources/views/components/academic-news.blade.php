<div class="post-details-content mb-100">
    <h1 class="mb-30">Berita Prodi</h1>
    <div class="row">
        @foreach ($latestPosts as $post)
            <div class="col-12 col-sm-6 col-lg-4">
                <div class="single-blog-post style-2 mb-5">
                    <!-- Blog Thumbnail -->
                    <div class="blog-thumbnail">
                        <a href="#">
                            @if ($post->thumbnail)
                                <img src="{{ asset($post->thumbnail) }}" style="height:240px; object-fit:cover;"
                                    class="img-fluid" alt="">
                            @else
                                <img src="{{ asset('landing/assets/img/logo-img/Logopotensiutama.png') }}"
                                    style="height:240px; object-fit:cover;" alt="">
                            @endif
                        </a>
                    </div>

                    <!-- Blog Content -->
                    <div class="blog-content">
                        <span class="post-date">{{ $post->created_at->format('M j, Y') }}</span>
                        <a href="#" class="post-title"
                            title="{{ $post->title }}">{{ \Illuminate\Support\Str::limit($post->title, 50, '...') }}</a>
                        <a href="#" class="post-author">By {{ $post->user->name }}</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <div class="col-12">
        <div class="load-more-button text-center">
            <a href="#" class="btn newsbox-btn">Lihat Selengkapnya</a>
        </div>
    </div>
</div>
