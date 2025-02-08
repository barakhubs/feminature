@extends('layouts.app')

@section('title', 'Our Board')

@section('content')
    <!--  page_title_section  start-->
    <section class="page_title_section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="content">
                        <h2>Our Board</h2>
                        <ul>
                            <li><a href="{{ url('/') }}">Home</a></li>
                            <li>Our Board</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="shape">
            <img src="assets/images/slider/shape-5.png" alt="">
        </div>
    </section>

    <section class="team_section s2 section_space">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="top_title s2">
                        <h2>OUR BOARD MEMBERS</h2>
                        <h3>The Board Serving Humanity</h3>
                    </div>
                </div>
            </div>
            <div class="team_wrap">
                <div class="row">
                    @foreach ($boards as $item)
                    <div class="col col-lg-4 col-md-6 col-12">
                        <div class="team_card">
                            <div class="image">
                                <img src="{{ $item->image_url }}" alt="">
                            </div>
                            <div class="content">
                                <h2><a href="team-single.html">{{ $item->name }}</a></h2>
                                <span>{{ $item->designation }}</span>
                                <ul>
                                    <li><a href="{{ ($item->email == 'null') ? '#' : $item->email }}"><i class="ti-email"></i></a></li>
                                    <li><a href="{{ ($item->facebook == 'null') ? '#' : $item->facebook }}"><i class="ti-facebook"></i></a></li>
                                    <li><span></span></li>
                                    <li><a href="{{ ($item->twitter == 'null') ? '#' : $item->twitter }}"><i class="ti-twitter-alt"></i></a></li>
                                    <li><a href="{{ ($item->linkedin == 'null') ? '#' : $item->linkedin }}"><i class="ti-linkedin"></i></a></li>
                                </ul>
                            </div>
                            <div class="shape">
                                <svg version="1.0" viewBox="0 0 370.000000 351.000000" preserveAspectRatio="xMidYMid meet">

                                    <g transform="translate(0.000000,351.000000) scale(0.100000,-0.100000)" stroke="none">
                                        <path d="M891 3499 c-268 -33 -535 -176 -788 -422 l-103 -100 0 -1489 0 -1488
                                            1850 0 1850 0 0 1485 0 1486 -62 -52 c-147 -122 -389 -257 -561 -313 -228 -74
                                            -489 -76 -668 -5 -198 78 -313 167 -513 401 -142 166 -252 265 -386 350 -193
                                            121 -412 173 -619 147z" />
                                    </g>
                                </svg>

                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="bg_shape">
            <img src="assets/images/team/bg_shape.png" alt="">
        </div>
    </section>

@endsection
