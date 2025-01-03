<?php

namespace App\Http\Controllers\Landing;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class AcademicController extends Controller
{
    public function economy() {
        $latestPosts = Post::where('type', 'news')
            ->where('is_published', 1)
            ->where(function ($query) {
                $query->where('category_id', 1)
                    ->orWhereHas('tags', function ($query) {
                        $query->where('tags.id', 1);
                    });
            })
            ->orderBy('date', 'desc')
            ->take(3)
            ->get();

        return view('landing.academic.economy', compact('latestPosts'));
    }
    

    public function banking() {
        $latestPosts = Post::where('type', 'news')
            ->where('is_published', 1)
            ->where(function ($query) {
                $query->where('category_id', 2)
                    ->orWhereHas('tags', function ($query) {
                        $query->where('tags.id', 2);
                    });
            })
            ->orderBy('date', 'desc')
            ->take(3)
            ->get();

        return view('landing.academic.banking', compact('latestPosts'));
    }

    public function accounting() {
        $latestPosts = Post::where('type', 'news')
            ->where('is_published', 1)
            ->where(function ($query) {
                $query->where('category_id', 3)
                    ->orWhereHas('tags', function ($query) {
                        $query->where('tags.id', 3);
                    });
            })
            ->orderBy('date', 'desc')
            ->take(3)
            ->get();

        return view('landing.academic.accounting', compact('latestPosts'));
    }

    public function management() {
        $latestPosts = Post::where('type', 'news')
            ->where('is_published', 1)
            ->where(function ($query) {
                $query->where('category_id', 4)
                    ->orWhereHas('tags', function ($query) {
                        $query->where('tags.id', 4);
                    });
            })
            ->orderBy('date', 'desc')
            ->take(3)
            ->get();

        return view('landing.academic.management', compact('latestPosts'));
    }
}
