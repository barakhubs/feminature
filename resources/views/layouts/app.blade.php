<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="author" content="template">
  <link rel="icon" title="Favicon" sizes="16x16" type="image/png" href="{{ asset('assets/images/favicon.png') }}">
  <title>{{ config('app.name', 'Feminature Uganda') }} - @yield('title')</title>

  <!-- CSS here -->
  <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/fontawesome-all.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/themify-icons.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/jqueryui.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/nice-select.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/slick.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/animate.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/slick-theme.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/styles/style.css') }}">

</head>

<body>

  <div class="main_page_wrapper">


    <!-- ==== header start ==== -->
    @include('partials.header')

    @yield('content')

    <!-- ==== footer start ==== -->
    @include('partials.footer')


    <a id="button"></a>
    <div class="cookie-consent" id="cookie-consent">
        <div class="cookie-text">
          <div class="cookie-title">We value your privacy</div>
          <div class="cookie-description">
            We use cookies to enhance your browsing experience, serve personalized ads or content, and analyze our traffic. By clicking "Accept All", you consent to our use of cookies. You can manage your preferences by clicking "Cookie Settings".
          </div>
        </div>
        <div class="cookie-buttons">
          <button class="cookie-btn btn-accept" id="accept-all">Accept All</button>
          <button class="cookie-btn btn-decline" id="decline-all">Decline All</button>
          <button class="cookie-btn btn-settings" id="cookie-settings-btn">Cookie Settings</button>
        </div>

        <div class="cookie-settings" id="cookie-settings-panel">
          <div class="cookie-categories">
            <div class="cookie-category">
              <label>
                <input type="checkbox" id="necessary" checked disabled>
                <span class="toggle"></span>
                <div>
                  <div class="category-name">Necessary</div>
                  <div class="category-description">Essential cookies that enable basic functions and site navigation.</div>
                </div>
              </label>
            </div>

            <div class="cookie-category">
              <label>
                <input type="checkbox" id="preferences">
                <span class="toggle"></span>
                <div>
                  <div class="category-name">Preferences</div>
                  <div class="category-description">Cookies that remember your choices and personalize your experience.</div>
                </div>
              </label>
            </div>
          </div>

          <button class="save-preferences" id="save-preferences">Save Preferences</button>
        </div>
      </div>
    <!-- plugins js -->

    <script src="{{ asset('assets/js/jquery-min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/slick.min.js') }}"></script>
    <script src="{{ asset('assets/js/slick-animation.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('assets/js/counterup.min.js') }}"></script>
    <script src="{{ asset('assets/js/waypoints.js') }}"></script>
    <script src="{{ asset('assets/js/datepicker.js') }}"></script>
    <script src="{{ asset('assets/js/wow.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.nice-select.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.16.105/pdf.min.js"></script>
    <script src="{{ asset('assets/js/script.js') }}"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
          const cookieConsent = document.getElementById('cookie-consent');
          const acceptAllButton = document.getElementById('accept-all');
          const declineAllButton = document.getElementById('decline-all');
          const cookieSettingsButton = document.getElementById('cookie-settings-btn');
          const cookieSettingsPanel = document.getElementById('cookie-settings-panel');
          const savePreferencesButton = document.getElementById('save-preferences');

          // Check if user has already made a choice
          const consentChoice = getCookie('cookie_consent');
          if (!consentChoice) {
            // Show cookie consent after a short delay
            setTimeout(() => {
              cookieConsent.classList.add('active');
            }, 1000);
          }
          // Accept all cookies
          acceptAllButton.addEventListener('click', function() {
            setConsent('accept_all');
            hideCookieConsent();
          });

          // Decline all cookies
          declineAllButton.addEventListener('click', function() {
            setConsent('decline_all');
            hideCookieConsent();
          });

          // Toggle cookie settings panel
          cookieSettingsButton.addEventListener('click', function() {
            cookieSettingsPanel.classList.toggle('active');
          });

          // Save preferences
          savePreferencesButton.addEventListener('click', function() {
            const preferences = {
              necessary: true, // Always enabled
              preferences: document.getElementById('preferences').checked,
            };

            setConsent('custom', preferences);
            hideCookieConsent();
          });

          // Helper functions
          function setConsent(type, preferences = {}) {
            if (type === 'accept_all') {
              // Set cookie for all categories
              setCookie('cookie_consent', 'accept_all', 365);
              setCookie('cookie_preferences', JSON.stringify({
                necessary: true,
                preferences: true,
                analytics: true,
                marketing: true
              }), 365);
              console.log('All cookies accepted');
            } else if (type === 'decline_all') {
              // Set cookie for necessary cookies only
              setCookie('cookie_consent', 'decline_all', 365);
              setCookie('cookie_preferences', JSON.stringify({
                necessary: true,
                preferences: false,
                analytics: false,
                marketing: false
              }), 365);
              console.log('All non-essential cookies declined');
            } else if (type === 'custom') {
              // Set cookie with custom preferences
              setCookie('cookie_consent', 'custom', 365);
              setCookie('cookie_preferences', JSON.stringify(preferences), 365);
              console.log('Custom cookie preferences saved:', preferences);
            }

            // Here you would typically initialize or disable tracking based on consent
            applyConsentPreferences();
          }

          function hideCookieConsent() {
            cookieConsent.classList.remove('active');
            if (cookieSettingsPanel.classList.contains('active')) {
              cookieSettingsPanel.classList.remove('active');
            }
          }

          function applyConsentPreferences() {
          }

          function getCookiePreferences() {
            const preferences = getCookie('cookie_preferences');
            return preferences ? JSON.parse(preferences) : null;
          }

          function setCookie(name, value, days) {
            let expires = '';
            if (days) {
              const date = new Date();
              date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
              expires = '; expires=' + date.toUTCString();
            }
            document.cookie = name + '=' + (value || '') + expires + '; path=/; SameSite=Lax';
          }

          function getCookie(name) {
            const nameEQ = name + '=';
            const ca = document.cookie.split(';');
            for (let i = 0; i < ca.length; i++) {
              let c = ca[i];
              while (c.charAt(0) === ' ') c = c.substring(1, c.length);
              if (c.indexOf(nameEQ) === 0) return c.substring(nameEQ.length, c.length);
            }
            return null;
          }

          // Apply any existing preferences when page loads
          applyConsentPreferences();
        });
      </script>
  </div>

</body>

</html>
