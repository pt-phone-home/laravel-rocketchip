<div class="social-sharing-container">
    <div class="social-sharing">
        <a href="https://www.facebook.com/sharer/sharer.php?u={{ url()->current() }}" target="_blank" class="social-sharing-link"><i class="fab fa-facebook-square social-sharing-link-icon"></i></a>
        <a href="https://twitter.com/intent/tweet?text=I found this article you might be interested in&amp;url={{ url()->current() }}" target="_blank" class="social-sharing-link"><i class="fab fa-twitter-square social-sharing-link-icon"></i></a>
        <a href="https://www.linkedin.com/shareArticle?mini=true&amp;url={{ url()->current() }}&amp;title={{ $post->title }}&amp;summary={{ $post->excerpt }}" target="_blank" class="social-sharing-link"><i class="fab fa-linkedin social-sharing-link-icon"></i></a>
        <a href="https://wa.me/?text={{ url()->current() }}" target="_blank" class="social-sharing-link"><i class="fab fa-whatsapp social-sharing-link-icon"></i></a>
    </div>
</div>
