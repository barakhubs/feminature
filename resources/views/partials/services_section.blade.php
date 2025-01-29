<section class="service_section section_space">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="top_title s2">
                    <h2>OUR THEMATIC AREAS</h2>
                    <h3>What Our Thematic Areas Focus On</h3>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach ($thematicAreas as $item)
                <div class="col col-xl-4 col-lg-6 col-md-6 col-12 wow fadeInUp" data-wow-duration="1200ms">
                    <div class="service_card">
                        <div class="image">
                            <div class="round">
                                <img src="{{ $item->image_url }}" alt="">
                            </div>
                        </div>
                        <div class="content">
                            <h2><a href="{{ $item->url }}">{{ \Str::limit($item->title, 30, '...') }}</a></h2>
                            <div class="icon_text">
                                <span>{!! \Str::limit($item->description, 65, '...') !!}</span>
                            </div>
                        </div>
                        <div class="line_shape">
                            <div class="shape-1"></div>
                            <div class="shape-2"></div>
                            <div class="shape-3"></div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="service_btn" style="text-align: center">
            <a href="{{ route('thematic-area.list') }}" class="btn_primary">View ALL Areas<i class="ti-arrow-right"></i></a>
        </div>
    </div>
    <div class="shape-01"><img src="assets/images/service/shape-1.png" alt=""></div>
    <div class="shape-02"><img src="assets/images/service/shape-3.png" alt=""></div>
    <div class="shape-03"><img src="assets/images/service/shape-2.png" alt=""></div>
</section>
