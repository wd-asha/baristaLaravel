@extends('layouts.blog')
@section('title', 'Barista | Blog')
@section('content')
    <div class="ba-container">
        <div class="blog">
            <div class="blog-posts">
                @foreach($posts as $post)
                    @if($post->status === 1)
                        <div class="blog-post">
                            <div class="blog-post-image">
                                <a href="" class="blog-post-link">
                                    <img src="/{{ $post->image }}" alt="">
                                </a>
                            </div>
                            <a href="" class="blog-post-title ba-h3">{{ $post->title }}</a>
                            <div class="blog-post-subtitle">by {{ $post->author }} / {{ $post->tag }} / {{ $post->created_at }}</div>
                            <p class="ba-p">{{ $post->desc }}...</p>
                        </div>
                    @endif
                @endforeach

                <div class="pages">
                    <span class="page page-active">1</span>
                    <span class="page">2</span>
                    <span class="page">3</span>
                    <span class="page">4</span>
                    <span class="page">5</span>
                </div>
            </div>

            <div class="blog-sidebar">

                <div class="blog-author">
                    <div class="blog-author-title ba-h4">AUTHOR</div>
                    <div class="blog-author-image">
                        <img src="images/blog-author.png" alt="">
                    </div>
                    <p class="ba-p">Alienum phaedrum torquatos nec eu, vis detraxit periculis ex, nihil expetendis in mei. Mei an pericula euripidis, hinc partem ei est.</p>
                </div>

                <div class="resent-posts">
                    <div class="resent-posts-title ba-h4">Recent Posts</div>
                    <div class="resent-post">
                        <div class="resent-post-image">
                            <img src="images/resent-post-img1.jpg" alt="">
                        </div>
                        <div class="resent-post-text">
                            <a href="" class="resent-post-title ba-h5">Make it Simple</a>
                            <div class="resent-post-subtitle">23.02.2016</div>
                        </div>
                    </div>
                    <div class="resent-post">
                        <div class="resent-post-image">
                            <img src="images/resent-post-img2.jpg" alt="">
                        </div>
                        <div class="resent-post-text">
                            <a href="" class="resent-post-title ba-h5">Coffee Shop</a>
                            <div class="resent-post-subtitle">23.01.2017</div>
                        </div>
                    </div>
                    <div class="resent-post">
                        <div class="resent-post-image">
                            <img src="images/resent-post-img3.jpg" alt="">
                        </div>
                        <div class="resent-post-text">
                            <a href="" class="resent-post-title ba-h5">Coffee Bar</a>
                            <div class="resent-post-subtitle">23.02.2017</div>
                        </div>
                    </div>
                </div>

                <div class="search-box">
                    <div class="search-title ba-h4">SEARCH</div>
                    <div class="search-form">
                        <label for="elastic"></label>
                        <input type="email" class="search-input" id="elastic" placeholder="Search Post">
                        <button type="submit" class="search-submit">
                            <img src="images/glass.png" alt="">
                        </button>
                    </div>
                </div>

                <div class="blog-categories">
                    <div class="blog-categories-title ba-h4">CATEGORIES</div>
                    <a href="" class="blog-category">Competition (3)</a>
                    <a href="" class="blog-category">Delicious (15)</a>
                    <a href="" class="blog-category">Enjoyment (15)</a>
                    <a href="" class="blog-category">Life (3)</a>
                    <a href="" class="blog-category">Lifestyle (17)</a>
                </div>

            </div>
        </div>

    </div>
@endsection
