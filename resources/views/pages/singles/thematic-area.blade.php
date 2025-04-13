@extends('layouts.app')

@section('title', $thematicArea->title)

@section('content')
    <!--  page_title_section  start-->
    <section class="page_title_section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="content">
                        <h2>{{ $thematicArea->title }}</h2>
                        <ul>
                            <li><a href="{{ url('/') }}">Home</a></li>
                            <li>{{ $thematicArea->title }}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="shape">
            <img src="{{ asset('assets/images/slider/shape-5.png') }}" alt="">
        </div>
    </section>

    <section class="services_single_section section_space">
        <div class="container">
            <div class="wrap">
                <div class="services_single_item_wrap">
                    <div class="content">
                        <h1>{!! $thematicArea->title !!}</h1>
                        <div class="item_wrap">
                            {!! $thematicArea->description !!}
                        </div>
                    </div>
                    <div class="images">
                        <img src="{{ $thematicArea->image_url }}" alt="">
                    </div>
                </div>
            </div>
            <br><br>
            @if ($thematicArea->projects()->count() > 0)
            <div class="row">
                <div class="col-12">
                    <div class="top_title s2">
                        <h2>Thematic Projects</h2>
                        <h3>Projects under this {{ $thematicArea->title }}</h3>
                    </div>
                </div>
            </div>
            @endif
        </div>
    </section>

    @if ($thematicArea->projects()->count() > 0)
    <section class="service_section_s2">
        <div class="container">
            <div class="row">
                @foreach ($thematicArea->projects() as $item)
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
    @endif

    <section class="brand_section">
        <h2 class="d-none">display hidden</h2>
        <div class="container">
            <div class="brand_slider">
                @foreach ($partners as $item)
                    <div class="item">
                        <div class="image">
                            <img src="{{ $item->logo_url }}" alt="{{ $item->name }}">
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
