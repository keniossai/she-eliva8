<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $categories = Category::take(3)->get();
        $tags = Tag::all();
        $posts = Post::with('category')->latest()->approved()->published()->take(6)->get();
        // ray($posts);
        $bannerposts = Post::approved()->published()->take(1)->inRandomOrder()->get();
        $recommendedPosts = Post::approved()->published()->take(3)->get();
        return view('welcome', compact('categories','tags', 'posts', 'bannerposts', 'recommendedPosts'));
    }
}
