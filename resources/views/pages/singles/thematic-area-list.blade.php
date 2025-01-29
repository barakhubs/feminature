@extends('layouts.app')

@section('title', 'Thematic Areas')

@section('content')
<!--  page_title_section  start-->
<section class="page_title_section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="content">
                    <h2>Thematic Areas</h2>
                    <ul>
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <li>Thematic Areas</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="shape">
        <img src="{{ asset('assets/images/slider/shape-5.png') }}" alt="">
    </div>
</section>

<section class="service_section section_space">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="top_title s2">
                    <h2>OUR THEMATIC AREAS</h2>
                    <h3>What Our Thematic Areas Focus On</h3>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach ($thematicAreas as $item)
            <div class="col col-xl-4 col-lg-6 col-md-6 col-12 wow fadeInUp" data-wow-duration="1200ms">
                <div class="service_card">
                  <div class="image">
                    <div class="round">
                      <img src="{{ $item->image_url }}" alt="">
                    </div>
                  </div>
                  <div class="content">
                    <h2><a href="{{ $item->url }}">{{ \Str::limit($item->title, 30, '...')}}</a></h2>
                    <div class="icon_text">
                      <span>{!! \Str::limit($item->description, 65, '...') !!}</span>
                    </div>
                  </div>
                  <div class="line_shape">
                    <div class="shape-1"></div>
                    <div class="shape-2"></div>
                    <div class="shape-3"></div>
                  </div>
                </div>
              </div>
            @endforeach
        </div>
    </div>
</section>

@endsection
