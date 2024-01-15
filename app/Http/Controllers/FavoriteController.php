<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;

class FavoriteController extends Controller
{
    public function makeFavorite(Post $post)
    {
        $like = $post->favorite_to_user()->whereUserId(auth()->id())->count();

        if ($like == 0)
        {
            auth()->user()->favorite_posts()->attach($post);
            $post->refresh();
            return response()->json([
                'message', 'Post liked from favorite',
                'post' => $post->load('favorite_to_user')
            ]);
        } else {
            auth()->user()->favorite_posts()->detach($post);
            $post->refresh();
            return response()->json([
                'message', 'Post removed from favorite',
                'post' => $post->load('favorite_to_user')
            ]);
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
