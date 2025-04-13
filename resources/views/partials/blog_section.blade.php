<section class="blog_section">
    <div class="container">
        <div class="row">
            <div class="top_title">
                <div class="row">
                    <div class="col-12">
                        <h2>OUR LARGEST BLOG</h2>
                        <h3>We Latest news & Blog</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach ($posts as $item)
                <div class="col col-lg-4 col-md-6 col-12">
                    <div class="blog-card">
                        <div class="image">
                            <img src="{{ $item->image_url }}" alt="{{ $item->title }}">
                            <span>{{ $item->category->title }}</span>
                        </div>
                        <div class="content">
                            <span>By: Admin, {{ \Carbon\Carbon::parse($item->published_date)->format('M d, Y') }}</span>
                            <h2><a href="{{ $item->url }}">{{ \Str::limit($item->title, 40, '...') }}</a></h2>
                            <p>
                                {!! \Str::limit($item->description, 70, '...') !!}
                            </p>
                        </div>
                        <div class="comment_reting">
                            <div class="comment">
                                <span>Comments ({{ $item->comments->count() }})</span>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="blog_btn">
            <a href="{{ route('blog.list') }}" class="btn_primary">View All Blog <i class="ti-arrow-right"></i></a>
        </div>
    </div>
</section>
