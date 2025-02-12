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
                        <h2>About us</h2>
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li>Who We Are</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="shape">
            <img src="assets/images/slider/shape-5.png" alt="">
        </div>
    </section>

    <section class="about_section_s2 section_space">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 order-lg-2 col-12 ">
                    <div class="right_image">
                        <div class="image-1">
                            <img src="assets/images/about/about-4.png" alt="">
                        </div>
                        <div class="image-2">
                            <img src="assets/images/about/about-5.png" alt="">
                        </div>
                        <div class="image-3">
                            <img src="assets/images/about/about-6.png" alt="">
                            <a class="popup-youtube" href="#">
                                <div class="video_icon"></div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 order-lg-1 col-12 ">
                    <div class="about_left-content">
                        <div class="top_title s2">
                            <h2>OUR ABOUT US</h2>
                            <h3>We Are Serving Humanity</h3>
                            <p>Feminature Uganda is an Indigenous Eco-feminist, Women-led Non-Governmental Organisation
                                (NGO) headquartered in Arua, Uganda. Our mission is to improve the living conditions of
                                women and youth by supporting programs that enhance their social and economic well-being,
                                ultimately working towards the elimination of poverty in the communities we serve.</p>
                        </div>
                        <div class="feature_wrap_about feature_wrap">
                            <div class="feature">
                                <ul>
                                    <li class="item">
                                        <div class="icon">
                                            <img src="assets/images/about/1.png" alt="">
                                        </div>
                                        <div class="text">
                                            <h2> Direct Engagement</h2>
                                            <span>Working closely with grassroots communities to implement impactful initiatives.</span>
                                        </div>
                                    </li>
                                    <li class="item">
                                        <div class="icon">
                                            <img src="assets/images/about/2.png" alt="">
                                        </div>
                                        <div class="text">
                                            <h2>Advocacy & Policy Influence</h2>
                                            <span>Engaging local policymakers and decision-makers to drive systemic change.</span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ==== features  start ==== -->
    <section class="features_section_s2">
        <div class="row">
            <div class="col-12">
                <div class="top_title">
                    <h2>OUR CORE VALUES</h2>
                    <h3>What Drives Our Mission</h3>
                </div>
            </div>
        </div>
        <div class="features_wrap feature_slider">
            <div class="feature_item">
                <div class="content">
                    <span>01</span>
                    <h3>Integrity</h3>
                    <p>We are accountable to the people and partners we work with, upholding principles of transparency. We
                        pride ourselves in doing the right thing always.
                    </p>
                    <a href="#"><i class="ti-arrow-right"></i></a>
                </div>
            </div>
            <div class="feature_item">
                <div class="content">
                    <span>02</span>
                    <h3>Equality</h3>
                    <p>We believe in the equal treatment and respect of everyone; beneficiaries, donors and staff.
                    </p>
                    <a href="#"><i class="ti-arrow-right"></i></a>
                </div>
            </div>
            <div class="feature_item">
                <div class="content">
                    <span>03</span>
                    <h3>Partnership</h3>
                    <p>We seek and commit to understand how we can best support each other and make choices that align the
                        goals of our partners and Feminature's.</p>
                    <a href="#"><i class="ti-arrow-right"></i></a>
                </div>
            </div>
        </div>

        <div class="features_wrap feature_slider mt-4">
            <div class="feature_item">
                <div class="content">
                    <span>04</span>
                    <h3>Innovation</h3>
                    <p>We continuously aspire to enhance performance through improvements in efficiency, productivity,
                        quality, strategic positioning and outcomes of our interventions</p>
                    <a href="#"><i class="ti-arrow-right"></i></a>
                </div>
            </div>
            <div class="feature_item">
                <div class="content">
                    <span>05</span>
                    <h3>Diversity</h3>
                    <p>We acknowledge and embrace our individual differences and divergent voices and opinions as our
                        unifiers
                    </p>
                    <a href="#"><i class="ti-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </section>
    <!-- ==== service start ==== -->
    <section class="service_section_s4 section_space">
        <div class="container">
            <div class="row">
                <div class="col col-xl-4 col-lg-6 col-md-6 col-12">
                    <div class="service_card_s3">
                        <div class="item">
                            <div class="icon">
                                <img src="assets/images/service/2.png" alt="">
                                <div class="line_shape">
                                    <div class="shape-1"></div>
                                    <div class="shape-2"></div>
                                    <div class="shape-3"></div>
                                </div>
                            </div>
                            <div class="content">
                                <h2>Vision</h2>
                                <p>An empowered, civically active, poverty free, resilient and sustainable society of women
                                    and youth.</p>
                            </div>
                        </div>
                        <a href="#"><i class="ti-arrow-top-right"></i></a>
                    </div>
                </div>
                <div class="col col-xl-4 col-lg-6 col-md-6 col-12">
                    <div class="service_card_s3">
                        <div class="item">
                            <div class="icon">
                                <img src="assets/images/service/1.png" alt="">
                                <div class="line_shape">
                                    <div class="shape-1"></div>
                                    <div class="shape-2"></div>
                                    <div class="shape-3"></div>
                                </div>
                            </div>
                            <div class="content">
                                <h2>Mission</h2>
                                <p>To promote the achievement of gender equality by promoting leadership and voice for
                                    active citizenry, influencing policy and the holistic growth and transformation of women
                                    and youth to live lives free from poverty and violence in a safe and sustainable
                                    environment.</p>
                            </div>
                        </div>
                        <a href="#"><i class="ti-arrow-top-right"></i></a>
                    </div>
                </div>
                <div class="col col-xl-4 col-lg-6 col-md-6 col-12">
                    <div class="service_card_s3">
                        <div class="item">
                            <div class="icon">
                                <img src="assets/images/service/3.png" alt="">
                                <div class="line_shape">
                                    <div class="shape-1"></div>
                                    <div class="shape-2"></div>
                                    <div class="shape-3"></div>
                                </div>
                            </div>
                            <div class="content">
                                <h2>Goal</h2>
                                <p>To spearhead the socio-economic and political transformation of women, youth and children
                                    and ensure the respect for and promotion of their rights and responsibilities in a safe
                                    and sustainable environment.</p>
                            </div>

                        </div>
                        <a href="#"><i class="ti-arrow-top-right"></i></a>
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

    @include('partials.cta_section')
@endsection
