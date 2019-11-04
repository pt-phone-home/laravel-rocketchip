<div class="blog-card-small-container">
    <a class="blog-card-small" href="{{ route('blog.show', ['slug' => $post->slug]) }}">
        <div class="blog-card-small-image-container">
            <img src="{{ $post->featured_image }}" alt="" class="blog-card-small-image">
        </div>
        <div class="blog-card-small-main-container">
            <div class="blog-card-small-main">
                <h3>{{ $post->title }}</h3>
                <div class="blog-card-small-main-tags-container">
                    @foreach ($post->tags as $tag)
                    <h5>{{ $tag->name }}</h5>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="blog-card-small-views-container">
            <div class="blog-card-small-views">
               <p>{{ $post->views }}</p>
            </div>
        </div>
    </a>
</div>
