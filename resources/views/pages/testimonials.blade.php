@extends('layouts.app')

@section('title', 'Testimonials')

@section('content')
    <section class="page_title_section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="content">
                        <h2>Testimonials</h2>
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li>Testimonials</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="shape">
            <img src="assets/images/slider/shape-5.png" alt="">
        </div>
    </section>

    <section class="gallery_section s4 section_space">
        <div class="container">
            <div class="row">
                <div class="top_title">
                    <div class="row">
                        <div class="col-12">
                            <h2>OUR GALLERY</h2>
                            <h3>Capturing Moments of Impact & Change</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mb-5">
                @foreach ($testimonials as $item)
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="testimonial-card">
                            @if ($item->image != null)
                                <div class="testimonial-image">
                                    <img src="{{ $item->image }}" alt="{{ $item->name }}" class="rounded-circle">
                                </div>
                            @endif
                            <div class="testimonial-content">
                                <p class="testimonial-text">"{{ $item->testimonial }}"</p>
                                <h4 class="testimonial-name">{{ $item->name }}</h4>
                                <p class="testimonial-designation">{{ $item->designation }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    @include('partials.cta_section')
    <style>
        .testimonial-card {
            background: #ffffff;
            border-radius: 15px;
            padding: 30px;
            text-align: center;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
            height: 100%;
        }

        .testimonial-card:hover {
            transform: translateY(-5px);
            background-color: #105014;
        }

        .testimonial-image {
            margin-bottom: 20px;
        }

        .testimonial-image img {
            width: 100px;
            height: 100px;
            object-fit: cover;
            border: 5px solid #f8f9fa;
            box-shadow: 0 3px 10px rgba(0, 0, 0, 0.1);
        }

        .testimonial-content {
            padding: 10px;
        }

        .testimonial-text {
            font-size: 16px;
            color: #6c757d;
            line-height: 1.6;
            margin-bottom: 20px;
            font-style: italic;
        }

        .testimonial-name {
            font-size: 18px;
            color: #333;
            margin-bottom: 5px;
            font-weight: 600;
        }

        .testimonial-designation {
            font-size: 14px;
            color: #888;
            margin: 0;
        }

        .section_space {
            padding: 80px 0;
        }

        .top_title {
            margin-bottom: 50px;
        }



        .top_title h2 {
            color: #333;
            font-size: 16px;
            font-weight: 600;
            margin-bottom: 10px;
            text-transform: uppercase;
            letter-spacing: 2px;
        }

        .top_title h3 {
            font-size: 32px;
            font-weight: 700;
            color: #222;
            margin: 0;
        }

        .testimonial-card:hover .testimonial-text,
        .testimonial-card:hover .testimonial-name,
        .testimonial-card:hover .testimonial-designation {
            color: white;
        }
    </style>
@endsection
