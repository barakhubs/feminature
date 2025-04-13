@php
    $thematicAreas = \App\Models\ThematicArea::where('status', 1)->orderBy('created_at', 'desc')->take(6)->get();
    $post = \App\Models\Blog::where('status', 'published')->orderBy('published_date', 'desc')->first();
    $settings = \App\Models\Setting::first();
    $social_network = json_decode($settings->social_network, true);
@endphp

<header class="header_section">
    <div class="header_top">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-7 col-12">
            <div class="contacr_info">
              <ul>
                <li>
                  <div class="number" style="display: flex;">
                    <span>NEWS:&nbsp;</span><marquee behavior="" direction=""><a style="color: #015207" href="{{ route('blog.show', $post->url) }}">{{ Str::limit($post->title, 50, '...') }}</a></marquee>
                  </div>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-lg-5 col-12">
            <div class="contacr_right">
              <ul>
                <li><span>Visit our social pages:</span></li>
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
                  <a href="{{ $social_network['instagram'] !== null ? $social_network['instagram'] : '#' }}">
                    <i class="ti-instagram"></i>
                  </a>
                </li>
                <li>
                  <a href="{{ $social_network['linkedin'] !== null ? $social_network['linkedin'] : '#' }}">
                    <i class="ti-linkedin"></i>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="header_wrap">
      <a href="{{ url('/') }}" class="logo">
        <img src="{{ asset('assets/images/logo.png') }}" alt="">
      </a>
      {{-- <div class="header_about_btn" onclick="openNav()">
        <img src="{{ asset('assets/images/about_btn.png') }}" alt="">
      </div> --}}
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-8 col-12">
            <div class="mobile_menu_btn">
              <div class="icon">
                <i class="ti-align-justify" id="bar_close"></i>
              </div>
            </div>
            <div class="menu_wrap" id="menu_wrap">
              <ul class="main_menu">
                <li><a href="{{ url('/') }}">home</a></li>
                <li class="menu_chaild">
                  <a href="#">Who We Are</a>
                  <ul class="submenu">
                    <li><a href="{{ route('about') }}">About Us</a></li>
                    <li><a href="{{ route('board.list') }}">Our Board</a></li>
                    <li><a href="{{ route('team.list') }}">Our Team</a></li>
                    <li><a href="{{ route('project.list') }}">Running Projects</a></li>
                  </ul>
                </li>
                <li class="menu_chaild">
                  <a href="#">What We Do</a>
                  <ul class="submenu">
                    @foreach ($thematicAreas as $item)
                        <li><a href="{{ $item->url }}">{{ $item->title }}</a></li>
                    @endforeach

                  </ul>
                </li>
                <li class="menu_chaild">
                  <a href="#">Resource Center</a>
                  <ul class="submenu">
                    <li><a href="{{ route('blog.list') }}">Latest news</a></li>
                    <li><a href="{{ route('events.list') }}">Upcoming Events</a></li>
                    <li><a href="{{ route ('publications.list') }}">Publications</a></li>
                    <li><a href="{{ route('gallery') }}">Gallery</a></li>
                    <li><a href="{{ route('jobs.list') }}">Join Us</a></li>
                    <li><a href="{{ route('testimonials') }}">Testimonial</a></li>
                  </ul>
                </li>
                <li><a href="{{ route('contact') }}">Contact us</a></li>
              </ul>
            </div>
          </div>
          <div class="col-lg-4 col-12">
            <div class="header_right">
              <div class="search_icon">
                <i class="ti-search bx-search"></i>
                <form class="input-box">
                  <div>
                    <input class="search_fild" type="text" placeholder="Search...">
                    <button type="button"><i class="ti-search"></i></button>
                  </div>
                </form>
              </div>
              <a href="#" class="btn_primary">DONATE NOW<i class="ti-arrow-right"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
