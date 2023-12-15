<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;

class AllPostController extends Controller
{
    public function posts()
    {
        $categories = Category::all();
        $tags = Tag::all();
        $posts = Post::latest()->approved()->published()->paginate(6);
        return view('allposts', compact('categories','tags', 'posts'));
    }
}
