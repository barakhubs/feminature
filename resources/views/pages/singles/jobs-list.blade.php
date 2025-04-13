@extends('layouts.app')

@section('title', 'Jobs & Opportunities')

@section('content')
    <!--  page_title_section  start-->
    <section class="page_title_section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="content">
                        <h2>Jobs & Opportunities'</h2>
                        <ul>
                            <li><a href="{{ url('/') }}">Home</a></li>
                            <li>Jobs & Opportunities'</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="shape">
            <img src="{{ asset('assets/images/slider/shape-5.png') }}" alt="">
        </div>
    </section>

    <section class="blog_section_s5 section_space">
        <div class="container">
            @if ($jobs->count() > 0)
                <div class="row">
                    <div class="top_title">
                        <div class="row">
                            <div class="col-12">
                                <h2>EXPLORE JOB OPPORTUNITIES</h2>
                                <h3>Your Gateway to Careers and Growth with Feminature</h3>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    @foreach ($jobs as $item)
                        <div class="col col-lg-4 col-md-6 col-12">
                            <div class="blog-card">
                                <div class="content">
                                    <span>Deadline: <span
                                            class="deadline-date">{{ date('d M Y', strtotime($item->deadline)) }}</span></span>
                                    <h2><a href="{{ $item->url }}">{{ \Str::limit($item->title, 40, '...') }}</a></h2>
                                    <span>{!! \Str::limit($item->short_description, 70, '...') !!}</span>
                                </div>
                                <div class="comment_reting">
                                    <div class="comment">
                                        <span>Job Type ({{ \Str::upper($item->job_type) }})</span>
                                    </div>
                                    <a href="{{ $item->url }}" class="btn_apply">Details</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @else
                <div class="col-12">
                    <h2 class="text-center">No Jobs Found</h2>
                </div>
            @endif
        </div>
        </div>
    </section>

    @if ($jobs->count() > 0)
        @if ($jobs->hasPages())
            <div class="row">
                <div class="col-12">
                    {{ $jobs->links() }}
                </div>
            </div>
        @endif
    @endif
    </div>
    </section>

@endsection
