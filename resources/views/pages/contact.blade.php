@extends('layouts.app')

@section('title', 'Contact Us')

@section('content')
    @php
        $settings = \App\Models\Setting::first();
        $email = $settings->support_email;
        $phone = $settings->support_phone;
        $address = $settings->address;
    @endphp

    <section class="page_title_section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="content">
                        <h2>Contact Us</h2>
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li>Contact Us</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="shape">
            <img src="assets/images/slider/shape-5.png" alt="">
        </div>
    </section>

    <section class="contact_page section_space">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-12">
                    <div class="image">
                        <img src="assets/images/contact.jpg" alt="">
                    </div>
                </div>
                <div class="col-lg-6 col-12">
                    <div class="contact_from">
                        <div class="title">
                            <h2>Let’s Connect</h2>
                            <span>Reach Out & Make an Impact with Us</span>
                        </div>
                        @if (session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif
                        <form class="from_wrap" action="{{ route('contact.send') }}" method="post">
                            @csrf
                            <div>
                                <input type="text" class="form-control" required placeholder="Your Name*" name="name"
                                    value="{{ old('name') }}">
                                @error('name')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div>
                                <input type="number" class="form-control" required placeholder="Phone Number*"
                                    name="phone_number" value="{{ old('phone_number') }}">
                                @error('phone_number')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div>
                                <input type="email" class="form-control" required placeholder="Email Address*"
                                    name="email" value="{{ old('email') }}">
                                @error('email')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div>
                                <textarea class="form-control" rows="5" required placeholder="Message" name="message">{{ old('message') }}</textarea>
                                @error('message')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div>
                                <button type="submit" class="btn_primary">Submit form <i
                                        class="ti-arrow-right"></i></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="contact_info_section s2">
        <div class="container">
            <div class="row">
                <div class="col col-lg-4 col-md-6 col-12">
                    <div class="contact_info_card">
                        <div class="icon">
                            <img src="assets/images/contact/phone-call.png" alt="">
                        </div>
                        <div class="content">
                            <h2>Call This Now</h2>
                            <span>{{ $phone }}</span>
                        </div>
                    </div>
                </div>
                <div class="col col-lg-4 col-md-6 col-12">
                    <div class="contact_info_card">
                        <div class="icon">
                            <img src="assets/images/contact/message.png" alt="">
                        </div>
                        <div class="content">
                            <h2>Your Message</h2>
                            <span>{{ $email }}</span>
                        </div>
                    </div>
                </div>
                <div class="col col-lg-4 col-md-6 col-12">
                    <div class="contact_info_card">
                        <div class="icon">
                            <img src="assets/images/contact/placeholder.png" alt="">
                        </div>
                        <div class="content">
                            <h2>Your location</h2>
                            <span>{!! $address !!}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="map_right s2">
        <div class="map">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d704.3282828995463!2d30.912483575133198!3d3.0185935468977636!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x176e6213889d7069%3A0x65023951a610b7a6!2sKaya%20Hwy%2C%20Arua!5e0!3m2!1sen!2sug!4v1738172417316!5m2!1sen!2sug"
                style="border:0; width: 100%; height: 100%;" allowfullscreen loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
@endsection
