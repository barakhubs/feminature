@extends('layouts.app')

@section('title', 'Latest News')

@section('content')
    <!--  page_title_section  start-->
    <section class="page_title_section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="content">
                        <h2>Latest News</h2>
                        <ul>
                            <li><a href="{{ url('/') }}">Home</a></li>
                            <li>Latest News</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="shape">
            <img src="assets/images/slider/shape-5.png" alt="">
        </div>
    </section>

    <section class="blog_section_s5 section_space">
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
                @if ($posts->count() > 0)
                    @foreach ($posts as $item)
                        <div class="col col-lg-4 col-md-6 col-12">
                            <div class="blog-card">
                                <div class="image">
                                    <img src="{{ $item->image_url }}" alt="{{ $item->title }}">
                                    <span>{{ $item->category->title }}</span>
                                </div>
                                <div class="content">
                                    <span>By: Admin, {{ $item->created_at->format('M d, Y') }}</span>
                                    <h2><a href="{{ $item->url }}">{{ \Str::limit($item->title, 40, '...') }}</a></h2>
                                    <p>{!! \Str::limit($item->description, 70, '...') !!}</p>
                                </div>
                                <div class="comment_reting">
                                    <div class="comment">
                                        <span>Comments ({{ $item->approvedComments()->count() }})</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @else
                    <div
                        style="display: flex; flex-direction: column; align-items: center; justify-content: center;">
                        <div class="col col-lg-3 col-md-4 col-12 text-center">
                            <p style="color: #333; font-size: 20px;">No results found</p>
                            <div style="display: flex; gap: 2rem">
                                <a href="{{ route('blog.list') }}" class="btn btn-warning">Back to Blog</a>
                                <a href="{{ url('/') }}" class="btn btn-success">Home</a>
                            </div>
                        </div>
                    </div>

                @endif

            </div>
        </div>
    </section>

@endsection
