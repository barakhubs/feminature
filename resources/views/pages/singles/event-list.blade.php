@extends('layouts.app')

@section('title', 'Upcoming Events')

@section('content')
    <!--  page_title_section  start-->
    <section class="page_title_section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="content">
                        <h2>Upcoming Events</h2>
                        <ul>
                            <li><a href="{{ url('/') }}">Home</a></li>
                            <li>Upcoming Events</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="shape">
            <img src="{{ asset('assets/images/slider/shape-5.png') }}" alt="">
        </div>
    </section>

    <section class="blog_section">
        <div class="container">
            <div class="row">
                <div class="top_title">
                    <div class="row">
                        <div class="col-12">
                            <h2>UPCOMING EVENTS</h2>
                            <h3>Engaging Communities, Serving Humanity!</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach ($events as $item)
                <div class="col col-lg-4 col-md-6 col-12">
                    <div class="blog-card">
                      <div class="image">
                        <img height="247px" width="350px" src="{{ $item->image_url }}" alt="{{ $item->title }}">
                        <span>{{ $item->location }}</span>
                      </div>
                      <div class="content">
                        <span>Date: {{ date('d M Y', strtoTime($item->start_date) ) }} - {{ date('d M Y', strtoTime($item->end_date) ) }}</span>
                        <h2><a href="{{ $item->url }}">{{ \Str::limit($item->title, 40, '...') }}</a></h2>
                        <p>{!! \Str::limit($item->description, 70, '...') !!}</p>
                      </div>
                    </div>
                  </div>
                @endforeach

            </div>
        </div>
    </section>

@endsection

