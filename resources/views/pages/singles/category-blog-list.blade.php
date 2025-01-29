@extends('layouts.app')

@section('title', $category->title)

@section('content')
<!--  page_title_section  start-->
<section class="page_title_section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="content">
                    <h2>{{ $category->title }}</h2>
                    <ul>
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <li>{{ $category->title }}</li>
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

      </div>
    </div>
  </section>

@endsection
