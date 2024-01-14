<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;

class FavoriteController extends Controller
{
    public function makeFavorite($post)
    {
        $user = Auth::user();
        $like = $user->favorite_posts()->where('post_id',$post)->count();

        if ($like == 0)
        {
            $user->favorite_posts()->attach($post);
            return redirect()->back()->with('success', 'Post added as favorite');
        } else {
            $user->favorite_posts()->detach($post);
            return redirect()->back()->with('success', 'Post removed from favorite');
        }
    }

    // public function makeFavorite($post)
    // {
    //     $user = Auth::user();
    //     $isFavorite = $user->favorite_posts()->where('post_id',$post)->count();

    //     if($isFavorite == 0)
    //     {
    //         $user->favorite_posts()->attach($post);
    //         return response()->json([
    //             'message', 'You liked this story'
    //         ], 200);
    //     }else {
    //         $user->favorite_posts()->detach($post);
    //         return response()->json([
    //             'message', 'You unliked this story'
    //         ], 201);
    //     }
    // }
}
