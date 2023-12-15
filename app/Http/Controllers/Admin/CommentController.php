<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function index()
    {
        $comments = Comment::latest()->get();
        return view('admin.comments.index', compact('comments'));
    }

    public function destroy($id)
    {
        Comment::findOrFail($id)->delete();
        return redirect()->back()->with('success', 'Comment deleted successfully');
    }
}
