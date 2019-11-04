<div class="blog-card-container">
    <a class="blog-card" href="{{ route('blog.show', ['slug' => $post->slug]) }}">
        <div class="blog-card-top">
            <img src="{{ $post->featured_image }}" alt="{{ $post->featured_image_caption }}">
        </div>
        <div class="blog-card-bottom">
            <div class="blog-card-category">
                @foreach ($post->tags as $tag)
                    <p>{{ $tag->name }}</p>
                @endforeach
            </div>
            <div class="blog-card-title">
                <p>{{ $post->title }}</p>
            </div>
        </div>
    </a>
</div>
