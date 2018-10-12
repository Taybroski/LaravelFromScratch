<div class="blog-post">
    <h2 class="blog-post-title">{{ $post->title }}</h2>
    <p class="blog-post-meta">{{ $post->created_at->format('l jS F Y') }} - By <a href="#">Anonymous</a></p>
    <p>{{ $post->intro }}</p>
    <hr>
    <p>{{ $post->body }}</p>
    <h4>{{ $post->sub_heading }}</h4>
    <p>{{ $post->sub_body }}</p>
    <hr>
</div>




{{-- {{ str_limit($post->body, $limit = 250, $end = '...') }} --}}