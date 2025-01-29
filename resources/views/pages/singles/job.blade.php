@extends('layouts.app')

@section('title', $job->title)

@section('content')
    <!--  page_title_section  start-->
    <section class="page_title_section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="content">
                        <h2>{{ $job->title }}</h2>
                        <ul>
                            <li><a href="{{ url('/') }}">Home</a></li>
                            <li>{{ $job->title }}</li>
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
                        <h3>{{ $job->title }}</h3>
                        <hr>
                        <p>{!! $job->description !!}</p>

                        <button class="btn btn-lg btn-success" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseApplicationDetails">
                            Apply Now
                        </button>

                        <!-- Collapsible div -->
                        <div class="collapse mt-2" id="collapseApplicationDetails">
                            <div class="card card-body">
                                <p>Send your application to <a style="color: #015207" href="mailto:info@feminature.org">info@feminature.org</a>
                                @if ($job->document_path !== null)
                                    or download the attached document for more information
                                @endif
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-12">
                    <div class="blog-rightside">
                        <div class="widget widget_catagory">
                            <div class="title">
                                <h4>Details</h4>
                            </div>
                            <ul>
                                <li><strong>Location:</strong> {{ $job->location }}</li>
                                @if ($job->salary !== null)
                                    <li><strong>Salary:</strong> {{ $job->formatted_salary }}</li>
                                @endif
                                <li><strong>Job Type:</strong> {{ $job->job_type }}</li>
                                <li><strong>Deadline:</strong> {{ $job->deadline }}</li>
                            </ul>
                            <br><Br>
                            @if ($job->document_path !== null)
                                <a href="{{ $job->document_path_url }}" target="_blank"
                                    download="{{ $job->document_path }}" class="btn_apply"
                                    style="background-color: #015207; color: white; border: none;">Download Document</a>
                            @endif

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
