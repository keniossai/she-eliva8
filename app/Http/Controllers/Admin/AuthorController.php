<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;

class AuthorController extends Controller
{
    public function index()
    {
        $authors = User::authors()
        ->withCount('posts')
        ->withCount('comments')
        ->withCount('favorite_posts')
        ->get();

        return view('admin.authors.index', compact('authors'));

    }

    public function destroy($id)
    {
        $author = User::findOrFail($id)->delete();
        Toastr::success('Author Successfully Deleted','Success');
        return redirect()->back();
    }
}
