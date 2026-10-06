
  <div class="container">
    <div class="row">
           <!-- Brand col -->
      <div class="col-12 col-md-4">
        <a class="footer-logo text-decoration-none" href="{{ asset('/')}}">
          <div class="">
            @if($setting?->site_logo)
                <img src="{{ asset('storage/' . $setting->site_logo) }}" alt="Jobfixs" title="Jobfixs" style="width:65px; height:50px; object-fit:contain;">
                 <span class="fw-bold h4 mb-0 text-primary">Jobfixs</span>
            @endif
           
          </div>
        </a>
        <p class="footer-copy">Your trusted platform for micro-jobs and digital gigs. Connecting employers with skilled workers worldwide.</p>
        <p class="footer-copy mt-2">© {{ date('Y') }} <a class="text-decoration-none"  href="{{ asset('/') }}">jobfixs</a> All Rights Reserved.</p>
      </div>

      <div class="col-lg-8">
        <div class="row">
          <div class="col-sm-4 footer-col">
            <div class="col-title">About Us</div>
            <ul class="footer-links">
              <li><a href="{{ asset('/about_us') }}">About Us</a></li>
              <li><a href="{{ asset('/privacy_policy') }}">Privacy Policy</a></li>
              <li><a href="{{ asset('/terms_conditions') }}">Terms &amp; Conditions</a></li>
            </ul>
          </div>

          <div class="col-sm-4 footer-col">
            <div class="col-title">Agreement</div>
            <ul class="footer-links">
              <li><a href="{{ asset('/microjob_marketplace') }}">Microjob Marketplace</a></li>
              <li><a href="{{ asset('/deal_marketplace') }}">Deal Marketplace</a></li> 
            </ul>
          </div>
          <div class="col-sm-4 footer-col">
            <div class="col-title">Social Media</div>
            <div class="social-row">
            <a href="https://www.facebook.com/jobfixss" class="social-icon facebook"><i class="bi bi-facebook"></i></a>
            <a href="https://www.instagram.com/jobfixss/" class="social-icon instagram"><i class="bi bi-instagram"></i></a>
            <a href="#" class="social-icon telegram"><i class="bi bi-telegram"></i></a>
            <a href="#" class="social-icon linkedin"><i class="bi bi-linkedin"></i></a>
            <a href="#" class="social-icon threads"><i class="bi bi-threads-fill"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="footer-divider">
      <div class="footer-credit">
       <span>© {{ date('Y') }} All Rights Reserved <a class="text-decoration-none text-primary"  href="{{ asset('/') }}">jobfixs</a> Develop By <a class="text-decoration-none text-primary"  href="{{ asset('/') }}">adfixs</a></span>
      </div>
    </div>
  </div>
  