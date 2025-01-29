@php
    $thematicAreas = \App\Models\ThematicArea::where('status', 1)->orderBy('created_at', 'desc')->take(6)->get();
    $post = \App\Models\Blog::where('status', 'published')->orderBy('created_at', 'desc')->first();
@endphp

<header class="header_section">
    <div class="header_top">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-7 col-12">
            <div class="contacr_info">
              <ul>
                <li>
                  <div class="number">
                    <span>NEWS:</span>Give Ready to help us
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
                  <a href="#">
                    <i class="ti-facebook"></i>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <i class="ti-twitter-alt"></i>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <i class="ti-skype"></i>
                  </a>
                </li>
                <li>
                  <a href="#">
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
      <a href="index.html" class="logo">
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
                    <li><a href="index.html">About Us</a></li>
                    <li><a href="index-2.html">Our Board</a></li>
                    <li><a href="{{ route('team.list') }}">Our Team</a></li>
                    <li><a href="index-3.html">Contact us</a></li>
                  </ul>
                </li>
                <li class="menu_chaild">
                  <a href="#">What We Do</a>
                  <ul class="submenu">
                    <li><a href="services.html">Services 1</a></li>
                    <li><a href="services-s2.html">Services 2</a></li>
                    <li><a href="services-s3.html">Services 3</a></li>
                    <li><a href="services-s4.html">Services 4</a></li>
                    <li><a href="services-single.html">Services single</a></li>
                  </ul>
                </li>
                <li><a href="{{ route('thematic-area.list') }}">Thematic Areas</a></li>
                <li class="menu_chaild">
                  <a href="#">Resource Center</a>
                  <ul class="submenu">
                    <li><a href="{{ route('blog.list') }}">Latest news</a></li>
                    <li><a href="causes-single.html">Upcoming Events</a></li>
                    <li><a href="project.html">Publications</a></li>
                    <li><a href="project-single.html">Gallery</a></li>
                    <li><a href="{{ route('jobs.list') }}">Join Us</a></li>
                    <li><a href="testimonial.html">Testimonial</a></li>
                  </ul>
                </li>
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
              <a href="causes-single.html" class="btn_primary">DONATE NOW<i class="ti-arrow-right"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
