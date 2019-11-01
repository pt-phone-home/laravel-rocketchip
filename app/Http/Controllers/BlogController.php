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

        $latestArticles = collect([
            [
                'img' => '/images/search engine optimisation services dublin rocket chip web solutions.jpg',
                'category' => 'news',
                'title' => 'Post 1'
            ],
            [
                'img' => '/images/search engine optimisation services dublin rocket chip web solutions.jpg',
                'category' => 'opinion',
                'title' => 'Post 2'
            ],
            [
                'img' => '/images/search engine optimisation services dublin rocket chip web solutions.jpg',
                'category' => 'advice',
                'title' => 'Post 3',
            ]
        ]);

        $blogPosts = WinkPost::with('tags')
            ->live()
            ->orderBy('publish_date', 'DESC')
            ->skip(1)
            ->take(12)
            ->get();

        $featuredPost = WinkTag::with('posts')->where('name', 'featured')->first();

        return view('blog')->with('latestArticles', $latestArticles)
            ->with('blogPosts', $blogPosts)
            ->with('featuredPost', $featuredPost);
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
        $tags = WinkTag::all();

        return view('blogpost')->with('post', $post)->with('tags', $tags);
    }


    public function tag($tag)
    {
        $posts = WinkTag::with('posts')->where('name', $tag);

        return view('blog-category')->with('blogPosts', $posts);
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