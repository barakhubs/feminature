<section class="hero_slider">
    @foreach ($sliders as $item)
        <div class="hero_slider_item">
            <div class="image">
                <img src="{{ $item->image_url }}" alt="">
            </div>
            <div class="container">
                <div class="content">
                    <div class="title animated" data-animation-in="fadeInUp">
                        <h2>{{ $item->title }}</h2>
                    </div>
                    <div class="text animated" data-animation-in="fadeInUp">
                        <p>{{ $item->description }}</p>
                    </div>
                    <div class="hero_btn animated" data-animation-in="fadeInUp">
                        <a href="https://{{ $item->link }}" class="btn_primary">Contact Us <i class="ti-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="shape-1">
                <img src="assets/images/slider/shape-2.png" alt="">
            </div>
            <div class="shape-2">
                <img src="assets/images/slider/shape.png" alt="">
            </div>
        </div>
    @endforeach

</section>
