<?php

namespace App\Http\Controllers;

use App\Post;
use App\Comment;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts        = Post::all();
        $comments     = Comment::where('post_id', '=', $id)->all();
        return view('admin/blog/index', compact('posts','comments'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('/admin/posts/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //return view('/admin/blog/create', compact('posts',));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $posts        = Products::where('id', '=', $id)->first();
        $comments     = Comment::where('post_id', '=', $id)->all();
        return view('/admin/posts/show', compact('posts','comments')));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        $posts        = Products::where('id', '=', $id)->first();
        $comments     = Comment::where('post_id', '=', $id)->all();
        return view('/admin/posts/edit', compact('posts','comments')));
    }

    public function editCiomment($id, $post_id)
    {
        $posts        = Products::where('id', '=', $post_id)->first();
        $comments     = Comment::where('id', '=', $id)->all();
        return view('/admin/posts/edit', compact('posts','comments')));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        //
    }
}
