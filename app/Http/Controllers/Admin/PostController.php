<?php

namespace App\Http\Controllers\Admin;

use App\Models\Tag;
use App\Models\Post;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Subscriber;
use App\Notifications\AuthorPostApproved;
use App\Notifications\NewPostNotify;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Notification;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::latest()->get();
        return view('admin.post.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        $tags = Tag::all();
        return view('admin.post.create', compact('tags', 'categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'title' => 'required',
            'image' => 'required',
            'category' => 'required',
            'tags' => 'required',
            'body' => 'required'
        ]);

        if($request->hasFile('image')){
            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('storage/post'),$imageName);
        }

        $post = new Post();
        $post->user_id = Auth::id();
        $post->title = $request->title;
        $post->category_id = $request->category;
        $post->slug = Str::slug($request->title);
        $post->image = $imageName;
        $post->body = $request->body;
        if(isset($request->status))
        {
            $post->status = true;
        }else {
            $post->status = false;
        }
        $post->is_approved = true;

        $post->save();

        $post->categories()->attach($request->categories);
        $post->tags()->attach($request->tags);

        $subscribers = Subscriber::all();
        foreach($subscribers as $subscriber)
        {
            Notification::route('mail',$subscriber->email)
                ->notify(new NewPostNotify($post));
        }

        return redirect()->route('admin.post.index')->with('success', 'Post Added Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        return view('admin.post.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        $categories = Category::all();
        $tags = Tag::all();
        return view('admin.post.edit', compact('tags', 'categories', 'post'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        $this->validate($request,[
            'title' => 'required',
            'image' => 'image',
            'category' => 'required',
            'tags' => 'required',
            'body' => 'required'
        ]);



        // Upload Image
        if($request->hasFile('image')){

            $location = 'storage/post/'.$post->image;
            if(File::exists($location))
            {
                File::delete($location);
            }
            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('storage/post'),$imageName);
            $post->image = $imageName;
        }

        $post->user_id = Auth::id();
        $post->title = $request->title;
        $post->category_id = $request->category;
        $post->slug = Str::slug($request->title);
        $post->image = $imageName;
        $post->body = $request->body;
        if(isset($request->status))
        {
            $post->status = true;
        }else {
            $post->status = false;
        }
        $post->is_approved = true;

        $post->update();

        $post->categories()->sync($request->categories);
        $post->tags()->sync($request->tags);

        return redirect()->route('admin.post.index')->with('success', 'Post Updated Successfully');
    }

    public function pending()
    {
        $posts = Post::where('is_approved', false)->get();
        return view('admin.post.pending', compact('posts'));
    }

    public function approval($id)
    {
        $post = Post::find($id);
        if($post->is_approved == false)
        {
            $post->is_approved = true;
            $post->save();
            $post->user->notify(new AuthorPostApproved($post));

            $subscribers = Subscriber::all();
            foreach($subscribers as $subscriber)
            {
                Notification::route('mail',$subscriber->email)
                    ->notify(new NewPostNotify($post));
            }

            return redirect()->back()->with('success', 'Post Approved Successfully');
        } else {
            return redirect()->back()->with('info', 'This post is already approved');
        }
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        $image = public_path('storage/post/'.$post->image);
        if(file_exists($image))
        {
            unlink($image);
        }

        $post->categories()->detach();
        $post->tags()->detach();
        $post->delete();

        return redirect()->back()->with('success', 'Category deleted successfully');
    }
}
