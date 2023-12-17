<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AuthorProfileController extends Controller
{
    public function index($username)
    {
        $author = User::where('username',$username)->first();
        $posts = $author->posts()->approved()->published()->paginate(8);
        return view('profile',compact('author','posts'));
    }
}
