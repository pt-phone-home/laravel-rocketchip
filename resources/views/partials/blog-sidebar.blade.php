<div class="blog-sidebar">
    <section class="sidebar-latest-articles">
        <h2>Latest Articles</h2>
        <div class="sidebar-latest-articles-container">
            @foreach ($recentArticles as $recentArticle)
                @component('partials.blog-card-small', ['post' => $recentArticle])

                @endcomponent
            @endforeach
        </div>
        <h2>Categories</h2>
        <div class="sidebar-categories-container">
            @foreach ($tags as $tag)
                <a href="{{ route('blog.tag', ['tag' => strtolower($tag->name)]) }}"><p>{{ $tag->name }}</p></a>
            @endforeach
        </div>
    </section>
</div>
