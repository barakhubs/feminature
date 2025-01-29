@extends('layouts.app')

@section('title', $post->title)

@section('content')
<!--  page_title_section  start-->
<section class="page_title_section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="content">
                    <h2>{{ $post->title }}</h2>
                    <ul>
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <li>{{ $post->title }}</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="shape">
        <img src="{{ asset('assets/images/slider/shape-5.png') }}" alt="">
    </div>
</section>

<!-- ==== blog single start ==== -->
<section class="blog_single_page section_space">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-12">
                <div class="blog_single_wrap">
                    <div class="image">
                        <img src="{{ $post->image_url }}" alt="">
                    </div>
                    <h3>{{ $post->title }}</h3>
                    <ul>
                        <li>
                            <span>{{ $post->category->title }}</span>
                        </li>
                        <li>
                            Admin / {{ $post->created_at->format('d M, Y') }}
                        </li>
                    </ul>
                    <p>{!! $post->description !!}</p>
                </div>
                <hr>
                <div class="comment_area">
                    <div class="comment_wrap">
                        <div class="title">
                            <h2>Comments ({{ $post->approvedComments->count() }})</h2>
                        </div>
                        <ul class="comments">
                            @foreach ($post->approvedComments as $item)
                            <li class="comment_one">
                                <div class="content">
                                    <div class="text">
                                        <h3>{{ $item->name }}</h3>
                                        <p>{{ $item->comment }}</p>
                                        <span>{{ $item->created_at->format('d M, Y') }} at {{ $item->created_at->format('h:i A')}} </span>
                                    </div>
                                </div>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="comment_respond">
                        <div class="title">
                            <h2>Leave a Comment</h2>
                        </div>
                        <form method="post" action="{{ route('comment.store') }}">
                            <div class="row">
                                @if(session('success'))
                                    <div class="alert alert-success">
                                        {{ session('success') }}
                                    </div>
                                @endif

                                    @csrf
                                    <input type="hidden" name="blog_id" value="{{ $post->id }}">
                                    <div class="col-lg-6 col-12">
                                        <input class="from-contol" name="name" type="text" placeholder="Your Name" required value="{{ old('name') }}">
                                        @error('name')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-lg-6 col-12">
                                        <input class="from-contol" name="email" type="email" placeholder="Your E-mail" required value="{{ old('name') }}">
                                        @error('email')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-lg-12 col-12">
                                        <textarea name="comment" rows="5" class="textarea-contol" placeholder="Write Your Comment"> {{ old('comment') }}</textarea>
                                        @error('comment')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-12">
                                        <button type="submit" class="btn_primary">Submit Comment</button>
                                    </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-12">
                <div class="blog-rightside">
                    <div class=" widget_search">
                        <form method="get" action="{{ route('search') }}">
                            <div>
                                <input type="text" name="search" value="{{ request()->query('search') }}" class="from-contol" placeholder="Search..">
                                <button type="submit"><i class="ti-search"></i></button>
                            </div>
                        </form>
                    </div>
                    <div class="widget widget_catagory">
                        <div class="title">
                            <h2>Categories</h2>
                        </div>
                        <ul>
                            @foreach ($categories as $item)
                            <li><a href="{{ route('category.show', $item->slug)}}"><span><i class="ti-arrow-right"></i>{{ $item->title }}
                                </span><span>({{ $item->blog_count }})</span></a></li>
                            @endforeach
                        </ul>
                    </div>
                    {{-- <div class="widget widget_tag">
                        <div class="title">
                            <h2>Tag</h2>
                        </div>
                        <ul>
                            <li><a href="blog-single.html">Design</a></li>
                            <li><a href="blog-single.html">Service</a></li>
                            <li><a href="blog-single.html">Top</a></li>
                            <li><a href="blog-single.html">Help</a></li>
                            <li><a href="blog-single.html">New</a></li>
                            <li><a href="blog-single.html">Best</a></li>
                            <li><a href="blog-single.html">Brutie</a></li>
                            <li><a href="blog-single.html">Sonds</a></li>
                        </ul>
                    </div> --}}
                    <div class="widget widget_post">
                        <div class="title">
                            <h2>Recent Post</h2>
                        </div>
                        <ul>
                            @foreach ($posts as $item)
                            <li>
                                <div class="image">
                                    <img src="{{ $item->image_url }}" alt="">
                                </div>
                                <div class="content">
                                    <span><i class="ti-layout-tab-window"></i>{{ $item->created_at->format('d M, Y') }}</span>
                                    <h3> <a href="{{ $item->url }}">{{ \Str::limit($item->title, 20, '...') }}</a> </h3>
                                </div>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
