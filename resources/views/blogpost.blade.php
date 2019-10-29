@extends('master')

@section('title')

@endsection

@section('pageDescription')

@endsection

@section('content')
<div class="categories-navbar-container">
    <div class="categories-navbar">
        <a href="{{ url()->previous() }}">Back</a>
        <p>Tag1</p>
        <p>Tag1</p>
        <p>Tag1</p>
        <p>Tag1</p>
        <p>Tag1</p>
    </div>
</div>
<div class="blog-article-hero">
    <div class="blog-article-hero-image">
        <img src="{{ $post->featured_image }}" alt="">
    </div>
    <div class="blog-article-title-container">
        <h1 class="blog-article-title">{{ $post->title }}</h1>
    </div>
    <div class="blog-article-date-container">
        <h3 class="blog-article-date">{{ ($post->updated_at)->diffForHumans() }}</h3>
    </div>
</div>
<div class="blog-article-main-section-container">
    <div class="blog-article-main-section">
        <div class="blog-article-output-container">
            <div class="blog-article-output">
            {!! $post->body !!}
            </div>
        </div>
    </div>
    <div class="blog-article-side-bar-container">

    </div>
</div>

@endsection
