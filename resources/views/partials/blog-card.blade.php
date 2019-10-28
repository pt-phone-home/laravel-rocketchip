<div class="blog-card-container">
    <div class="blog-card">
        <div class="blog-card-top">
            <img src="{{ $post->featured_image }}" alt="">
        </div>
        <div class="blog-card-bottom">
            <div class="blog-card-category">{{ $post->categories }}</div>
            <div class="blog-card-title">{{ $post->title }}</div>
        </div>
    </div>
</div>
