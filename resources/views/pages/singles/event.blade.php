@extends('layouts.app')

@section('title', $event->title)

@section('content')
    <!--  page_title_section  start-->
    <section class="page_title_section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="content">
                        <h2>{{ $event->title }}</h2>
                        <ul>
                            <li><a href="{{ url('/') }}">Home</a></li>
                            <li>{{ $event->title }}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ==== blog single start ==== -->
    <section class="blog_single_page section_space">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-12">
                    <div class="blog_single_wrap">
                        <h3>{{ $event->title }}</h3>
                        <hr>
                        <p>{!! $event->description !!}</p>
                    </div>
                </div>
                <div class="col-lg-4 col-12">
                    <div class="blog-rightside">
                        <div class="widget widget_catagory">
                            <div class="title">
                                <h4>Details</h4>
                            </div>
                            <ul>
                                <li><strong>Location:</strong> {{ $event->location }}</li>
                                <li><strong>Start Date:</strong> {{ date('d M Y h:ia', strtoTime($event->start_date) ) }}</li>
                                <li><strong>End Date:</strong> {{ date('d M Y h:ia', strtoTime($event->end_date) ) }}</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
