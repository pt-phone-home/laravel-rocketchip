<div class="blog-card-container">
    <div class="blog-card">
        <div class="blog-card-top">
            <img src="{{ $post->featured_image }}" alt="">
        </div>
        <div class="blog-card-bottom">
            <div class="blog-card-category">@foreach ($post->tags as $tag)
                <p>{{ $tag->name }}</p>
            @endforeach</div>
            <div class="blog-card-title"><a href="{{ route('blog.show', ['slug' => $post->slug])}}">{{ $post->title }}</a></div>

        </div>
    </div>
</div>
