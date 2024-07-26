<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $post=Post::all();
        $category=Category::all();
        return view('post.index',[
            'post'=>$post,
            'category'=>$category,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $category=Category::all();
        return view('post.create',[
            'category'=>$category,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $post=new Post();
        $post->title=$request->title;
        $post->cat_id=$request->cat_id;
        $post->content=$request->content;
        $post->img=$request->img;
        $post->save();
        return redirect()->back()->with('success','New post successfully added');
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        $category=Category::all();
        return view('post.edit',[
            'post'=>$post,
            'category'=>$category,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        $post->title=$request->title;
        $post->cat_id=$request->cat_id;
        $post->content=$request->content;
        $post->img=$request->img;
        $post->save();
        return redirect()->back()->with('success','New post successfully edited');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->back()->with('success','New post successfully delete');
    }
}
