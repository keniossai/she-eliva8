<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use App\Models\Post;
use App\Models\Role;
use App\Models\User;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class HomeController extends Controller
{
    public function index()
    {
        $categories = Category::take(3)->get();
        $tags = Tag::all();
        $posts = Cache::rememberForever('cached_posts', function () {
            return Post::with(['category', 'favorite_to_user', 'user'])
                ->latest()
                ->approved()
                ->published()
                ->take(6)
                ->get();
        });
        $bannerPosts = Post::with(['category', 'favorite_to_user', 'user'])->approved()->published()->take(1)->inRandomOrder()->get();
        $recommendedPosts = Post::with(['category', 'favorite_to_user', 'user'])->approved()->published()->take(3)->get();
        $featuredPosts = Post::with(['category', 'favorite_to_user', 'user'])->approved()->published()->take(4)->get();
        return view('welcome', compact('categories','tags', 'posts', 'bannerPosts', 'recommendedPosts', 'featuredPosts'));
    }

    public function about()
    {
        $authors = User::where('role','author')->get();
        return view('about', compact('authors'));
    }
}
