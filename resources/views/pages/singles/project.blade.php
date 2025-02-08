@extends('layouts.app')

@section('title', $project->title)

@section('content')
    <!--  page_title_section  start-->
    <section class="page_title_section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="content">
                        <h2>{{ $project->title }}</h2>
                        <ul>
                            <li><a href="{{ url('/') }}">Home</a></li>
                            <li>{{ $project->title }}</li>
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
                <div class="image">
                    <img src="{{ $project->image_url }}" alt="{{ $project->title }}" style="width: 1170px; height: 480px;">
                </div>
                <div class="content">
                    <h2>{{ $project->title }}</h2>
                    {!! $project->description !!}
                </div>


                <div class="services_single_item_wrap">
                    <div class="content">
                        <h3>Project Details:</h3>
                        <div class="item_wrap">
                            <div class="item">
                                <ul>
                                    <li><i class="ti-calendar"></i> Start date: <strong>{{ date('d M, Y', strtotime($project->start_date)) }}</strong></li>
                                    <li><i class="ti-calendar"></i> Start date: <strong>{{ date('d M, Y', strtotime($project->end_date)) }}</strong></li>
                                    <li><i class="ti-money"></i> Funder: <strong>{{ $project->partner->name }}</strong></li>
                                    <li><i class="ti-check-box"></i> Status: <strong>{{ $project->status == 1 ? 'Completed' : 'Ongoing' }}</strong></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="images">
                        <img src="assets/images/service.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <br><br>
@endsection
