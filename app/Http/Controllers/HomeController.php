<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use App\Models\Category;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        $tags = Tag::all();
        return view('welcome', compact('categories','tags'));
    }
}
