<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;

class PostDetailsController extends Controller
{
    public function details($slug)
    {
        $categories = Category::all();
        $tags = Tag::all();
        $post = Post::where('slug',$slug)->first();
        $randomposts = Post::all()->random(4);
        return view('post', compact('categories', 'post', 'tags', 'randomposts'));
    }
}
