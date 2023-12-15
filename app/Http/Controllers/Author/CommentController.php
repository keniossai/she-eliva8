<?php

namespace App\Http\Controllers\Author;

use App\Models\Comment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CommentController extends Controller
{
    public function index()
    {
        $comments = Comment::latest()->get();
        return view('author.comments.index', compact('comments'));
    }

    public function destroy($id)
    {
        Comment::findOrFail($id)->delete();
        return redirect()->back()->with('success', 'Comment deleted successfully');
    }
}
