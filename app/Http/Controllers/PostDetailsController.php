<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class PostDetailsController extends Controller
{
    public function details($slug)
    {
        $categories = Category::all();
        $tags = Tag::all();
        $post = Post::where('slug',$slug)->first();
        $blogKey = 'blog_'. $post->id;
        if(!Session::has($blogKey)){
            $post->increment('view_count');
            Session::put($blogKey, 1);
        }
        $randomposts = Post::all()->random(4);
        return view('post', compact('categories', 'post', 'tags', 'randomposts'));
    }

    public function postByCategory($slug)
    {
        return $category = Category::where('slug', $slug)->first();
    }
}
