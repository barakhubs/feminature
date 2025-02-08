@extends('layouts.app')

@section('title', 'Our Projects')

@section('content')
    <!--  page_title_section  start-->
    <section class="page_title_section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="content">
                        <h2>Our Projects</h2>
                        <ul>
                            <li><a href="{{ url('/') }}">Home</a></li>
                            <li>Our Projects</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="shape">
            <img src="{{ asset('assets/images/slider/shape-5.png') }}" alt="">
        </div>
    </section>

    <section class="service_section_s2 section_space">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="top_title s2">
                        <h2>OUR PROJECTS</h2>
                        <h3>Discover Our Impactful Initiatives</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach ($projects as $item)
                    <div class="col col-xl-4 col-lg-6 col-md-6 col-12">
                        <div class="service_card_s2">
                            <div class="image">
                                <img src="{{ $item->image_url }}" alt="">
                            </div>
                            <div class="icon_text">
                                <div class="icon">
                                    <img src="assets/images/service/7.png" alt="">
                                </div>
                                <h2><a href="{{ $item->url }}">{{ \Str::limit($item->title, 30, '...') }}</a></h2>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

@endsection
