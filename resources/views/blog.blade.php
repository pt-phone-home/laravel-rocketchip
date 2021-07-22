@extends('master')

@section('title')
    Rocket.Chip Web Solutions | Blog
@endsection
@section('pageDescription')
<meta name="description" content="News, opinion and advice from Rocket.Chip Web Solutions. Information on website development in Dublin, information on website design in Dublin, informaiton on e-commerce design in Dublin, information on SEO services in Dublin">
@endsection

@section('content')
<div class="blog-banner">
    <h1 class="blog-heading-text">Blog: News, Opinion &amp; Advice from the team at <br> Rocket.Chip Web Solutions</h1>
</div>
<div class="featured-article-container">
    @if($latestPost) {
    <a class="featured-article" href="{{ route('blog.show', ['slug' => $latestPost->slug]) }}">
        <div class="featured-article-picture">
                <img src="{{ $latestPost->featured_image }}" alt="{{ $latestPost->featured_image_caption }}">
        </div>
        <h2 class="featured-article-featured">Latest Article</h2>

        <div class="featured-article-title-container">
            <h2 class="featured-article-title">{{ $latestPost->title}}</h2>
        </div>
    </a>
    }
    @endif
</div>
<div class="main-section-container">
    <div class="main-section">
        <div class="articles-container">
            @foreach ($blogPosts as $blogPost)
                @component('partials.blog-card', ['post' => $blogPost])

                @endcomponent
            @endforeach
        </div>
        <div class="side-bar-container">

            @component('partials.blog-sidebar', ['recentArticles' => $recentArticles, 'tags' => $tags, 'popular' => $popular])

            @endcomponent
        </div>
    </div>
</div>

@endsection
