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
        $post = Post::with('category')->where('slug',$slug)->approved()->published()->first();
        $categories = Category::all();
        $tags = Tag::all();
        $blogKey = 'blog_'. $post->id;
        if(!Session::has($blogKey)){
            $post->increment('view_count');
            Session::put($blogKey, 1);
        }
        $randomposts = Post::approved()->published()->take(4)->inRandomOrder()->get();
        return view('post', compact('categories', 'post', 'tags', 'randomposts'));
    }

    public function postByCategory($slug)
    {
        $category = Category::where('slug', $slug)->first();
        $posts = $category->posts()->approved()->published()->get();
        return view('category', compact('category', 'posts'));
    }
    public function postByTag($slug)
    {
        $tag = Tag::where('slug', $slug)->first();
        $posts = $tag->posts()->approved()->published()->get();
        return view('tag', compact('tag', 'posts'));
    }
}
