<div class="blog-sidebar">
    <section class="sidebar-latest-articles">
        <div class="latest-articles-grid-container">
            <h2>Latest Articles</h2>
            <div class="sidebar-latest-articles-container">
            @foreach ($recentArticles as $recentArticle)
            @component('partials.blog-card-small', ['post' => $recentArticle])

            @endcomponent
            @endforeach
            </div>
        </div>
        <div class="most-popular-grid-container">
            <h2>Most Popular</h2>
            <div class="sidebar-popular-container">
            @foreach ($popular as $pop)
            @component('partials.blog-card-small', ['post' => $pop])

            @endcomponent
            @endforeach
            </div>
        </div>
        <div class="categories-grid-container">
            <h2>Categories</h2>
            <div class="sidebar-categories-container">
            <a href="{{ route('blog.index') }}">All</a>
            @foreach ($tags as $tag)
            <a href="{{ route('blog.tag', ['tag' => strtolower($tag->name)]) }}"><p>{{ $tag->name }}</p></a>
            @endforeach
            </div>
        </div>
    </section>
</div>
