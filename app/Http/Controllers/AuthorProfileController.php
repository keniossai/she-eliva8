<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;

class AuthorProfileController extends Controller
{
    public function index($username)
    {
        $categories = Category::get();
        $author = User::where("username", $username)->first();
        $posts = $author->posts()->approved()->published()->paginate(6);
        return view('profile',compact('author','posts', 'categories'));
    }
}
