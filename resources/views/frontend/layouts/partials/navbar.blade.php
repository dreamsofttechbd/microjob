


<style>

    @media (max-width: 767.98px) {
        #mainNavbar {
            display: none !important;
        }
    }

    @media (min-width: 768px) {
        .navbar .container {
            flex-wrap: nowrap !important;
        }

        #mainNavbar {
            display: flex !important;
            flex: 1 1 auto;
            min-width: 0;
        }

        #mainNavbar .navbar-nav {
            display: flex;
            flex-direction: row;
            gap: 0px;
            margin: 0 auto !important;
            white-space: nowrap;
        }

        .navbar .d-flex {
            flex-shrink: 0;
        }

        .navbar .btn-sm {
            white-space: nowrap;
        }
    }

 
    @media (max-width: 575.98px) {
        .navbar .container {
            flex-wrap: nowrap !important;
        }

        .navbar-brand {
            margin-right: auto !important;
        }

        .navbar-brand img {
            width: 60px !important;
            height: 55px !important;
        }

        .navbar-brand span {
            font-size: 16px !important;
        }

        .navbar .d-flex {
            flex-shrink: 0;
        }

        .navbar .btn-sm {
            font-size: 14px !important;
            padding: 4px 7px !important;
            white-space: nowrap;
        }
    }
    
    @media (min-width: 992px) {
    .navbar .btn-sm {
        font-size: 15px !important;
        padding: 8px 16px !important;
    }
}

@media (min-width: 1200px) {
    .navbar .btn-sm {
        font-size: 15px !important;
        padding: 9px 20px !important;
    }
}
</style>

<nav class="navbar fixed-top bg-danger-subtle">
    <div class="container">
   @php 
  $setting = App\Models\WebsiteSetting::first();
  @endphp
        <!-- Logo -->
        <a class="navbar-brand d-flex align-items-center flex-shrink-0 me-1"
           href="{{ asset('/') }}">

            @if($setting?->site_logo)
                <img src="{{ asset('storage/' . $setting->site_logo) }}" alt="Jobfixs" title="Jobfixs" style="width:65px; height:50px; object-fit:contain;">
                  <span class="fw-bold h4 mb-0">Job</span>
                <span class="text-primary fw-bold h4 mb-0">fixs</span>
            @endif
        </a>

        <!-- Menu -->
        <div class="collapse navbar-collapse" id="mainNavbar">

            <ul class="navbar-nav mx-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#categories">Categories</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#faq">Faq</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#share-&-earn">Share & Earn</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#">Blog</a>
                </li>
            </ul>

        </div>

        <!-- Register / Sign in -->
        <div class="d-flex flex-nowrap gap-1 flex-shrink-0">
            <a class="btn btn-primary px-2 btn-sm" href="{{ route('register') }}">
               <i class="bi bi-send-plus"></i>&nbsp; Register
            </a>

            <a class="btn btn-danger btn-sm px-2" href="{{ route('login') }}">
                <i class="bi bi-box-arrow-in-right"></i>&nbsp; Sign in
            </a>
        </div>

    </div>
</nav>









   