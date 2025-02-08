@php
    $gallaries = \App\Models\Gallery::where('status', 'published')->limit(6)->orderBy('created_at', 'desc')->get();
    $settings = \App\Models\Setting::first();
    $social_network = json_decode($settings->social_network, true);
    $email = $settings->support_email;
    $phone = $settings->support_phone;
    $address = $settings->address;
@endphp

<section class="footer_section">
    <div class="footer_top">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="widget_column widget_about">
                        <h2>About Us</h2>
                        <p>To Promote the Achievement of Gender Equality by Promoting Leadership and Voice for Active
                            Citizenry, Influencing Policy and the Holistic Growth and Transformation of Women and Youth
                            to Live Lives Free from Poverty and Violence in a Safe and Sustainable Environment.</p>
                        <ul class="social_widget">
                            <li>
                                <a href="{{ $social_network['facebook'] !== null ? $social_network['facebook'] : '#' }}">
                                    <i class="ti-facebook"></i>
                                </a>
                            </li>
                            <li>
                                <a href="{{ $social_network['x_twitter'] !== null ? $social_network['x_twitter'] : '#' }}">
                                    <i class="ti-twitter-alt"></i>
                                </a>
                            </li>
                            <li>
                                <a href="{{ $social_network['linkedin'] !== null ? $social_network['linkedin'] : '#' }}">
                                    <i class="ti-linkedin"></i>
                                </a>
                            </li>
                            <li>
                                <a href="{{ $social_network['instagram'] !== null ? $social_network['instagram'] : '#' }}">
                                    <i class="ti-instagram"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="widget_column widget_link">
                        <h2>Quick Links</h2>
                        <ul>
                            <li><a href={{ route('about') }}>Who We Are</a></li>
                            <li><a href="{{ route('thematic-area.list') }}">Thematic Areas</a></li>
                            <li><a href="{{ route('contact') }}">Get in Touch</a></li>
                            <li><a href="{{ route('testimonials') }}">Our Impact</a></li>
                            <li><a href="{{ route('publications.list') }}">Publications</a></li>
                            <li><a href="{{ route('blog.list') }}">Latest News</a></li>
                            <li><a href="services-single.html">Upcoming Events</a></li>
                            <li><a href="{{ route('jobs.list') }}">Jobs & Opportunities</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="widget_column widget_insatagram">
                        <h2>Our Gallery</h2>
                        <ul>
                            @foreach ($gallaries as $item)
                                <li><img style="height: auto; width: 120px; object-fit: cover;" src="{{ $item->image_url }}" alt="{ $item->title }}"></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class=" col-lg-3 col-md-6 col-12">
                    <div class="widget_column widget_contact">
                        <h2>Our Contacts</h2>
                        <div>
                            <span>{{ $address !== null ? $address : 'Arua City' }}</span>
                        </div>
                        <div>
                            <span>Phone: {{ $phone !== null ? $phone : '+256 70000000' }}</span>
                        </div>
                        <div>
                            <span>Email: {{ $email !== null ? $email : 'info@example.com' }} </span>
                            <span>Website: feminature.org</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer_bottom">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <p>Copyright Feminature Uganda <?= date('Y') ?> all rights reserved. </p>
                </div>
            </div>
        </div>
    </div>
</section>
