<?php

namespace App\Http\Controllers\Landing;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index(Request $request)
    {
        $title = "Berita";
        $route = "landing.news";
        
        // Ambil nilai dari query string
        $search = $request->input('search');
        $category = $request->input('category');
        $tag = $request->input('tag');

        // Query untuk mengambil data berdasarkan kategori, tag, dan pencarian judul
        $query = Post::with('user', 'category', 'tags')
            ->where('type', 'news')
            ->where('is_published', 1)
            ->orderBy('created_at', 'desc');

        // Tambahkan filter kategori terlebih dahulu
        if ($category) {
            $query->whereHas('category', function ($q) use ($category) {
                $q->where('slug', $category);
            });
        }

        // Kemudian tambahkan filter tag
        if ($tag) {
            $query->whereHas('tags', function ($q) use ($tag) {
                $q->where('slug', $tag);
            });
        }

        // Terakhir, tambahkan filter pencarian berdasarkan judul
        if ($search) {
            $query->where('title', 'like', '%' . $search . '%');
        }

        // Ambil data dengan paginasi
        $data = $query->paginate(9);
        $data->appends([
            'search' => $search,
            'category' => $category,
            'tag' => $tag,
        ]);

        // Ambil data terbaru
        $dataRecent = Post::with('user', 'category')
            ->where('type', 'news')
            ->where('is_published', 1)
            ->orderBy('created_at', 'desc')
            ->take(5)
            ->get();

        // Ambil semua tags
        $tags = Tag::all();
        $categories = Category::all();

        return view('landing.posts.index', compact('data', 'dataRecent', 'tags', 'title', 'route', 'categories'));
    }

    public function show($slug) {
        $title = "Berita";
        $route = "landing.news";

        $post = Post::with('category', 'user', 'files')->where('slug', $slug)->firstOrFail();

        $dataRecent = Post::with('user', 'category')
                        ->where('type', 'news')
                        ->where('is_published', 1)
                        ->orderBy('updated_at', 'desc')
                        ->take(5)
                        ->get();
                        
        $tags = Tag::all();

        return view('landing.posts.detail', compact('post', 'dataRecent', 'tags', 'title', 'route'));
    }
}
