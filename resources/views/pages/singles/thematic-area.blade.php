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
    </div>
</section>

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
