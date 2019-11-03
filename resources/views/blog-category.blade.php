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
    <div class="featured-article">
        <div class="featured-article-picture">
                <img src="/images/web design and development dublin rocket.chip webs solutions blog.jpg" alt="">
        </div>
        <h2 class="featured-article-featured">Featured Article</h2>

        <div class="featured-article-title-container">
            <h2 class="featured-article-title">{{ $latestPost->first()->title}}</h2>
        </div>
    </div>
</div>
<div class="main-section-container">
    <div class="main-section">
        <div class="articles-container">
            @foreach ($posts as $post)
                @foreach ($post->tags as $postTag)
                    @if (strtolower($postTag->name) == $tag)
                        @component('partials.blog-card', ['post' => $post])

                        @endcomponent
                    @endif
                @endforeach

            @endforeach
        </div>
        <div class="side-bar-container">
                @component('partials.blog-sidebar', ['recentArticles' => $recentArticles, 'tags' => $tags])

                @endcomponent
        </div>
    </div>
</div>

@endsection
