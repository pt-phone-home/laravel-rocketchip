<div class="blog-card-small-container">
    <a class="blog-card-small" href="{{ route('blog.show', ['slug' => $post->slug]) }}">
        <div class="blog-card-small-image-container">
            <img src="{{ $post->featured_image }}" alt="" class="blog-card-small-image">
        </div>
        <div class="blog-card-small-main-container">
            <div class="blog-card-small-main">
                <p>{{ $post->title }}</p>
                @foreach ($post->tags as $tag)
                <span>{{ $tag->name }}</span>
                @endforeach
            </div>
        </div>
        <div class="blog-card-small-views-container">
            <div class="blog-card-small-views">
                {{ $post->views }}
            </div>
        </div>
    </a>
</div>
