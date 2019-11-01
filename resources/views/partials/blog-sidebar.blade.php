<div class="blog-sidebar">
    <section class="sidebar-latest-articles">
        <h2>Latest Articles</h2>
        <div class="sidebar-latest-articles-container">
            @foreach ($latestArticles as $latestArticle)
                @component('partials.blog-card-small', ['post' => $latestArticle])

                @endcomponent
            @endforeach
        </div>
    </section>
</div>
