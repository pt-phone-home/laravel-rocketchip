<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Wink\WinkPost;
use Carbon\Carbon;
use Wink\WinkTag;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogPosts = WinkPost::with('tags')
            ->live()
            ->orderBy('publish_date', 'DESC')
            ->skip(1)
            ->take(12)
            ->get();

        $latestPost = WinkPost::with('tags')->live()->first();

        $recentArticles = WinkPost::with('tags')->live()->take(3)->get();
        $tags = WinkTag::all();

        $popular = WinkPost::with('tags')
            ->live()
            ->orderBy('views', 'DESC')
            ->take(4)
            ->get();

        return view('blog')->with('recentArticles', $recentArticles)
            ->with('blogPosts', $blogPosts)
            ->with('latestPost', $latestPost)
            ->with('tags', $tags)
            ->with('popular', $popular);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $post = WinkPost::with('tags')->live()->whereSlug($slug)->firstOrFail();
        $post->increment('views');
        $tags = WinkTag::all();
        $recentArticles = WinkPost::with('tags')->live()->take(3)->get();
        $popular = WinkPost::with('tags')
            ->live()
            ->orderBy('views', 'DESC')
            ->take(4)
            ->get();

        return view('blogpost')->with('post', $post)->with('tags', $tags)->with('recentArticles', $recentArticles)
            ->with('popular', $popular);
    }


    public function tag($tag)
    {
        // $posts = WinkTag::with('posts')->where('name', $tag);
        $posts = WinkPost::with('tags')->live()->get();
        $latestPost = WinkPost::with('tags')->live()->first();
        $tags = WinkTag::all();
        $recentArticles = WinkPost::with('tags')->live()->take(3)->get();
        $popular = WinkPost::with('tags')
            ->live()
            ->orderBy('views', 'DESC')
            ->take(4)
            ->get();

        return view('blog-category')->with('posts', $posts)
            ->with('latestPost', $latestPost)
            ->with('tags', $tags)
            ->with('recentArticles', $recentArticles)
            ->with('tag', $tag)
            ->with('popular', $popular);
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}