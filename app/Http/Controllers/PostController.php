<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Post;

class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except(['index', 'show']);
    }
   
    public function index()
    {
        $posts = Post::latest()->get();
        return view('posts.index')->with('posts', $posts);
    }

   
    public function create()
    {
        return view('posts.create');
    }

    
    public function store(Request $request)
    {
        $this->validate($request, [
            'title'=>'required',
            'body'=>'required'
        ]);

        auth()->user()->publish(
            new Post(request(['title', 'body']))
        );

        return redirect('/posts')->with('success', 'Post Created');
    }

    
    public function show($id)
    {
        $post = Post::find($id);
        return view('posts.show')->with('post', $post);
    }

   
    public function edit($id)
    {
        $post = Post::find($id);

        // Check For Correct User
        if(Auth::user()->id !== $post->user_id) {
            return redirect('/posts')->with('error','Unauthorised Page');
        }
        return view('posts.edit')->with('post', $post);
    }

    
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title'=>'required',
            'body'=>'required'
        ]);

        $post = Post::find($id);
        $post->title = $request->input('title');
        $post->body = $request->input('body');
        $post->save();

        return redirect('/posts')->with('success', 'Post Updated');
    }

    
    public function destroy($id)
    {
        $post = Post::find($id);

         // Check For Correct User
         if(Auth::user()->id !== $post->user_id) {
            return redirect('/posts')->with('error','Unauthorised Page');
        }
        $post->delete();
        return redirect('/posts')->with('success', 'Post Deleted');
    }
}
