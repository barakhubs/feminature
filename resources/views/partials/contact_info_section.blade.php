@php
    $settings = \App\Models\Setting::first();
    $email = $settings->support_email;
    $phone = $settings->support_phone;
    $address = $settings->address;
@endphp

<section class="contact_info_section">
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
              <h2>Our Email</h2>
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
              <span>{{ $address }}</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


