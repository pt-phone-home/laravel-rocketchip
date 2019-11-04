@extends('master')

@section('title')
    {{ $post->title }} | Rocket.Chip Web Solutions Blog
@endsection

@section('pageDescription')
<meta name="description" content="{{ $post->meta['meta_description'] }}">
@endsection

@section('content')
<div class="categories-navbar-container">
    <div class="categories-navbar">
        <a href="{{ route('blog.index') }}" class="categories-navbar-back">Back</a>
        @foreach ($tags as $tag)
            <a href="{{ route('blog.tag', ['tag' => strtolower($tag->name)]) }}" class="categories-navbar-link">{{ $tag->name }}</a>
        @endforeach
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
            @component('partials.social-sharing', ['post' => $post])

            @endcomponent
            </div>

        </div>
        <div class="blog-article-side-bar-container">
            @include('partials.blog-sidebar', ['tags' => $tags])
        </div>
    </div>

</div>

@endsection
