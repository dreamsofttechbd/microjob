@extends('frontend.layouts.frontend')
@section('content')
<div class="hero">
  <!--<div class="decor-hatch d-none d-lg-block"></div>-->
   @include('frontend.layouts.partials.navbar')
  <div class="container position-relative" style="padding-top: 3rem;">
    <div class="row align-items-center">
      <div class="col-12 col-xsm-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 col-xxl-6">
        <div class="eyebrow mb-2">#Your Trusted Online Jobs Marketplace</div>
        <h1 class="mb-4"><span class="text-danger">Jobfixs</span> is a Large Jobs <spand class="text-danger">Marketplace</spand></h1>
        <p class="lead-text mb-4 p-0">Jobfixs is a large and trusted jobs marketplace where job seekers can discover the latest career opportunities, connect with employers, and find the right job for their skills. Employers can also post job vacancies, find qualified candidates, and build their teams with ease.</p>

        <div class="search-bar mb-4">
          <input type="text" placeholder="What are you looking for" class="flex-grow-1">
          <div class="divider d-none d-md-block"></div>
          <select class="d-none d-md-block">
            <option>Select an option</option>
            <option>Design</option>
            <option>Writing</option>
            <option>Video</option>
          </select>
          <button class="btn-search">Search</button>
        </div>
          <div class="avatar-group">
            <img class="avatar" src="https://randomuser.me/api/portraits/women/68.jpg" alt="">
            <img class="avatar" src="https://randomuser.me/api/portraits/men/32.jpg" alt="">
            <img class="avatar" src="https://randomuser.me/api/portraits/women/44.jpg" alt="">
            <img class="avatar" src="https://randomuser.me/api/portraits/men/76.jpg" alt="">
            <img class="avatar" src="https://randomuser.me/api/portraits/men/12.jpg" alt="">
            <!--<span class="text-white"> 597079+ Freelancers already joined </span>-->
            <div class="avatar-more">+300</div>
          </div>
  
      <!--end avatar-->
      </div>

      <div class="col-12 col-xsm-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 col-xxl-6 hero-figure mt-5">
          <!--carousel-->
        <div id="bannerCarousel" class="carousel carousel-fade" data-bs-ride="carousel" data-bs-interval="3000">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="{{ asset('images/5.png') }}"
                 class="d-block w-100"
                 alt="Facebook Ads">
        </div>

        <div class="carousel-item">
            <img src="{{ asset('images/4.png') }}"
                 class="d-block w-100"
                 alt="">
        </div>

        <div class="carousel-item">
            <img src="{{ asset('images/3.png') }}"
                 class="d-block w-100"
                 alt="">
        </div>
        
         <div class="carousel-item">
            <img src="{{ asset('images/1.png') }}"
                 class="d-block w-100"
                 alt="">
        </div>
    </div>
     </div>
      </div>
    </div>
  </div>
</div>
 <!--top after left right slide-->
<div class="container mt-5">
  <div class="slider-wrap">
    <div class="slider-track" id="sliderTrack">
      <div class="slide-item">
        <div class="product-card shadow">
          <div class="product-thumb" style="background:linear-gradient(135deg,#f7a13b,#ee8a1f);">
            <img src="{{ asset('images/facebook_f.png') }}" alt="Facebook">
          </div>
          <div class="price-row">
            <span class="price text-primary">Facebook Ads & Engagement</span>
          </div>
          <div class="product-title text-secondary">likes, comments, shares, views, followers, messages, engagement</div>
          <div class="seller-row">
            <img src="https://cdn-icons-png.flaticon.com/512/733/733547.png" alt="">
            <span class="seller-name">Register & Join</span>
          </div>
        </div>
      </div>

      <div class="slide-item">
        <div class="product-card shadow">
          <div class="product-thumb" style="background:linear-gradient(135deg,#1e6f5c,#134e42);">
            <img src="{{ asset('images/instgram.png') }}" alt="Instagram">
          </div>
          <div class="price-row">
            <span class="price text-danger">Instagram Ads & Engagement</span>
          </div>
          <div class="product-title text-secondary">likes, comments, shares, views, followers, profile visits, messages</div>
          <div class="seller-row">
            <img src="https://cdn-icons-png.flaticon.com/512/2111/2111463.png" alt="">
            <span class="seller-name">Search Your Job</span>
          </div>
        </div>
      </div>

      <div class="slide-item">
        <div class="product-card shadow">
          <div class="product-thumb" style="background:linear-gradient(135deg,#f9c721,#f5a623);">
            <img src="{{ asset('images/youtube.png') }}" alt="YouTube">
          </div>
          <div class="price-row">
            <span class="price text-dark">YouTube Ads & Engagement</span>
          </div>
          <div class="product-title text-secondary">views, likes, comments, shares, subscribers, watch time</div>
          <div class="seller-row">
            <img src="https://randomuser.me/api/portraits/men/54.jpg" alt="">
            <span class="seller-name">Complete Tasks</span>
          </div>
        </div>
      </div>

      <div class="slide-item">
        <div class="product-card shadow">
          <div class="product-thumb" style="background:linear-gradient(135deg,#cbbfa4,#b9ac8c);">
            <img src="{{ asset('images/twitter.png') }}" alt="Twitter">
          </div>
          <div class="price-row">
            <span class="price text-primary">Twitter (X) Ads & Engagement</span>
          </div>
          <div class="product-title">likes, comments, reposts, views, followers, profile visits, messages</div>
          <div class="seller-row">
            <img src="https://randomuser.me/api/portraits/women/68.jpg" alt="">
            <span class="seller-name">Get Paid Fast</span>
          </div>
        </div>
      </div>

        <div class="slide-item">
        <div class="product-card shadow">
          <div class="product-thumb" style="background:linear-gradient(135deg,#cbbfa4,#b9ac8c);">
            <img src="{{ asset('images/twitter.png') }}" alt="Twitter">
          </div>
          <div class="price-row">
            <span class="price text-primary">Twitter (X) Ads & Engagement</span>
          </div>
          <div class="product-title">likes, comments, reposts, views, followers, profile visits, messages</div>
          <div class="seller-row">
            <img src="https://randomuser.me/api/portraits/women/68.jpg" alt="">
            <span class="seller-name">Get Paid Fast</span>
          </div>
        </div>
      </div>

    </div>
  </div>
</div>

<!--category-->
<div class="container py-3 mt-5" id="categories">
  <!-- Our Categories -->
  <div class="d-flex justify-content-between align-items-start mb-4 flex-wrap gap-2">
    <div>
      <h2 class="section-title mb-1">All jobs Categories</h2>
      <p class="section-sub mb-0">
    Connect with {{ $jobCount >= 1000 ? rtrim(rtrim(number_format($jobCount / 1000, 1), '0'), '.') . 'K' : $jobCount }}+ Career Opportunities
     </p>
    </div>
  </div>
  <div class="row g-3 mb-5">
   @foreach($categories as $category)
    <div class="col-6 col-md-4 col-lg-2">
    <a href="{{ route('jobs.category', $category->slug) }}" class="text-decoration-none">
      <div class="cat-card h-100">
        <div class="cat-icon">
          <img class="" src="{{ asset('category/' . $category->icon) }}" alt="{{ $category->name }}" title="{{ $category->name }}" style="width: 45px; height: 40px;">
        </div>
        <div class="cat-title"> {{ $category->name }}</div>
        <div class="cat-count"> {{ $category->jobs_count }} Jobs</div>
      </div>
    </a>
    </div>
   @endforeach
  </div>
</div>

<!--Proof of Quality Works-->
<div class="container hero-wrap">
    <div class="card border-0" style="background-color:#f4f3ef;">
  <div class="row align-items-center g-5">
    <!-- Left content -->
    <div class="col-lg-6">
      <h5 class="headline mb-5 mt-3 ms-5"><span class="text-warning">Online</span> service at <span class="text-danger">Jobfixs</span></h5>

      <div class="feature-row ms-3">
        <div class="feature-icon">
            <i class="fa fa-bullhorn text-danger" aria-hidden="true"></i>
        </div>
        <div>
          <div class="feature-title">Proof of Quality Works</div>
          <div class="feature-text">Showcase your completed projects and quality work to build trust, attract clients, and highlight your skills.</div>
        </div>
      </div>

      <div class="feature-row ms-3">
        <div class="feature-icon"><i class="fa fa-plus-square text-danger" aria-hidden="true"></i></div>
        <div>
          <div class="feature-title">No Cost Until You Hire</div>
          <div class="feature-text">Post your job for free and pay only when you hire the right worker. No upfront costs, no hidden fees.</div>
        </div>
      </div>

      <div class="feature-row ms-3">
        <div class="feature-icon"><i class="fa fa-credit-card text-danger" aria-hidden="true"></i></div>
        <div>
          <div class="feature-title">Safe and Secure Payment Both</div>
          <div class="feature-text">Enjoy safe and secure payments for both job posters and workers, with reliable transactions you can trust.</div>
        </div>
      </div>
    </div>
    
      <!-- right images -->
    <div class="col-lg-6">
               <div class="stage">
          <!-- decorative scribble top right -->
          <svg class="scribble" style="top:-30px; right:-6px; width:90px; height:90px;" viewBox="0 0 90 90">
            <path d="M50 15 C 60 5, 75 8, 78 20 C 81 32, 68 38, 62 30 C 58 25, 62 20, 68 22"/>
            <path d="M55 45 L 82 62"/>
            <path d="M78 55 L 84 63 L 76 66"/>
          </svg>

          <div class="row g-3 g-md-4 align-items-start me-2">
            <!-- pink photo -->
            <div class="col-7 col-md-6" style="margin-top:0;">
              <div class="photo-pink">
                <img src="{{ asset('images/job_1.jpg') }}" alt="Verified professional portrait">
              </div>
            </div>

            <!-- gray photo, offset down and right -->
            <div class="col-7 col-md-6 offset-3 offset-md-0" style="margin-top:80px;">
              <div class="photo-gray">
                <img src="{{ asset('images/job_2.jpg') }}" alt="Verified professional holding a tablet">
              </div>
            </div>
          </div>
          <!-- stat card, absolutely positioned to overlap both photos, centered horizontally -->
          <div class="position-absolute" style="left:50%; bottom:22%; transform:translateX(-50%); z-index:5;">
            <div class="stat-card">
              <div class="stat-number">50M+</div>
              <div class="stat-label">Total Freelancers</div>
              <div class="avatar-row">
                <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="">
                <img src="https://randomuser.me/api/portraits/women/44.jpg" alt="">
                <img src="https://randomuser.me/api/portraits/men/65.jpg" alt="">
                <img src="https://randomuser.me/api/portraits/women/68.jpg" alt="">
                <img src="https://randomuser.me/api/portraits/men/78.jpg" alt="">
                <div class="avatar-plus">+</div>
              </div>
            </div>
          </div>
        </div>
    </div>
   </div>
  </div>
</div>

<!--empolye-->
<div class="container py-5">

    <div class="card border-0">

        <h2 class="section-title mb-1">How it work</h2>

        <p class="section-sub mb-0">
            Post your job, connect with skilled professionals, just a few simple steps
        </p>

        <div class="row g-0 offer-grid mb-3 py-5">

            <!-- 1 -->
            <div class="col-md-4 offer-cell shadow">
                <div class="offer-icon">
                    <svg viewBox="0 0 48 48" fill="none">
                        <rect x="6" y="9" width="36" height="30" rx="3"
                              stroke="currentColor" stroke-width="1.6"/>
                        <line x1="6" y1="17" x2="42" y2="17"
                              stroke="currentColor" stroke-width="1.6"/>
                        <circle cx="11" cy="13" r="1.3" fill="currentColor"/>
                        <circle cx="15.5" cy="13" r="1.3" fill="currentColor"/>
                        <circle cx="20" cy="13" r="1.3" fill="currentColor"/>
                        <path d="M19 24 L14 28.5 L19 33"
                              stroke="currentColor" stroke-width="1.6"
                              stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M29 24 L34 28.5 L29 33"
                              stroke="currentColor" stroke-width="1.6"
                              stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </div>

                <h3>Post Project</h3>
                <p>
                    Post a Project to tell us about your project. We'll quickly
                    match you with awesome freelancers.
                </p>
            </div>

            <!-- 2 -->
            <div class="col-md-4 offer-cell">
                <div class="offer-icon">
                    <svg viewBox="0 0 48 48" fill="none">
                        <line x1="6" y1="42" x2="42" y2="42"
                              stroke="currentColor" stroke-width="1.6"
                              stroke-linecap="round"/>
                        <rect x="10" y="28" width="6" height="14"
                              stroke="currentColor" stroke-width="1.6"/>
                        <rect x="21" y="20" width="6" height="22"
                              stroke="currentColor" stroke-width="1.6"/>
                        <rect x="32" y="12" width="6" height="30"
                              stroke="currentColor" stroke-width="1.6"/>
                        <circle cx="35" cy="7" r="4.2"
                                stroke="currentColor" stroke-width="1.6"/>
                        <path d="M35 5v4M33.3 6.2h3.4"
                              stroke="currentColor" stroke-width="1.3"
                              stroke-linecap="round"/>
                    </svg>
                </div>

                <h3>Find & Hire</h3>
                <p>
                    Browse proposals, profiles of freelancers & their reviews.
                    Compare, Interview & finalise the candidate.
                </p>
            </div>

            <!-- 3 -->
            <div class="col-md-4 offer-cell">
                <div class="offer-icon">
                    <svg viewBox="0 0 48 48" fill="none">
                        <path d="M14 30c-4 0-6.5-3-6.5-6.6C7.5 20 9 16 12 16h24c3 0 4.5 4 4.5 7.4 0 3.6-2.5 6.6-6.5 6.6-2 0-3-1-4.5-2.4-1.2-1.2-2.2-1.6-5.5-1.6s-4.3.4-5.5 1.6C17 29 16 30 14 30Z"
                              stroke="currentColor" stroke-width="1.6"
                              stroke-linejoin="round"/>
                        <path d="M16 8c0-1.4 1.4-2.3 2.5-1.5l3 2.2c.8.6.8 1.8 0 2.4l-3 2.2c-1.1.8-2.5-.1-2.5-1.5V8Z"
                              stroke="currentColor" stroke-width="1.6"
                              stroke-linejoin="round"/>
                        <line x1="15" y1="19" x2="15" y2="25"
                              stroke="currentColor" stroke-width="1.6"
                              stroke-linecap="round"/>
                        <line x1="12" y1="22" x2="18" y2="22"
                              stroke="currentColor" stroke-width="1.6"
                              stroke-linecap="round"/>
                        <circle cx="29" cy="20" r="1.3" fill="currentColor"/>
                        <circle cx="33" cy="24" r="1.3" fill="currentColor"/>
                    </svg>
                </div>

                <h3>Award & Pay</h3>
                <p>
                    Award Project to the finalised freelancer and enjoy 100%
                    money back guarantee using Safe Deposit.
                </p>
            </div>

            <!-- 4 -->
            <div class="col-md-4 offer-cell">
                <div class="offer-icon">
                    <svg viewBox="0 0 48 48" fill="none">
                        <path d="M12 16h24l-1.6 22.4a3 3 0 0 1-3 2.6H16.6a3 3 0 0 1-3-2.6L12 16Z"
                              stroke="currentColor" stroke-width="1.6"
                              stroke-linejoin="round"/>
                        <path d="M17 16v-3a7 7 0 0 1 14 0v3"
                              stroke="currentColor" stroke-width="1.6"/>
                        <path d="M17 16v-3a7 7 0 0 1 7-7"
                              stroke="currentColor" stroke-width="1.6"/>
                    </svg>
                </div>

                <h3>Work & Approve</h3>
                <p>
                    Use FreeAgent to chat, share files & collaborate with your
                    freelancer. Release the payment once satisfied.
                </p>
            </div>

            <!-- 5 -->
            <div class="col-md-4 offer-cell">
                <div class="offer-icon">
                    <svg viewBox="0 0 48 48" fill="none">
                        <rect x="6" y="9" width="30" height="21" rx="2"
                              stroke="currentColor" stroke-width="1.6"/>
                        <line x1="15" y1="36" x2="27" y2="36"
                              stroke="currentColor" stroke-width="1.6"
                              stroke-linecap="round"/>
                        <line x1="21" y1="30" x2="21" y2="36"
                              stroke="currentColor" stroke-width="1.6"/>
                        <path d="M27 24 38 13a2.2 2.2 0 0 1 3.1 3.1L30 27l-4 1 1-4Z"
                              stroke="currentColor" stroke-width="1.6"
                              stroke-linejoin="round"/>
                    </svg>
                </div>

                <h3>Report Job</h3>
                <p>
                    Send work for revision when needed. Workers must resubmit
                    within 24 hours or the job will be automatically marked unsatisfied.
                </p>
            </div>

            <!-- 6 -->
            <div class="col-md-4 offer-cell shadow">
                <div class="offer-icon">
                    <svg viewBox="0 0 48 48" fill="none">
                        <path d="M8 21v6a2 2 0 0 0 2 2h3l2 8h4l-1.4-8H20l18-8V13L20 21H8Z"
                              stroke="currentColor" stroke-width="1.6"
                              stroke-linejoin="round"/>
                        <path d="M38 13v16"
                              stroke="currentColor" stroke-width="1.6"
                              stroke-linecap="round"/>
                        <circle cx="34" cy="33" r="3.2"
                                stroke="currentColor" stroke-width="1.5"/>
                        <path d="M34 28.8v1.4M34 35.8v1.4M29.8 33h1.4M36.8 33h1.4"
                              stroke="currentColor" stroke-width="1.4"
                              stroke-linecap="round"/>
                        <path d="M11 9l1.6 1.6M17 7l.5 2.2M6 15l2.2.5"
                              stroke="currentColor" stroke-width="1.4"
                              stroke-linecap="round"/>
                    </svg>
                </div>

                <h3>Rate Job</h3>
                <p>
                    Control and review each employee's performance. Rate work
                    as satisfactory or unsatisfactory based on quality delivered.
                </p>
            </div>

        </div>

    </div>

</div>

<!--empolye-->
<div class="container py-5">
  <div class="hero-section">
    <div class="row align-items-stretch g-4">
      <div class="col-lg-6 d-flex flex-column justify-content-center">
        <span class="h5">#Explore New Life</span>
                 <h2 class="fw-bold">Post a job Today, hire Tomorrow</h2>
                 <p class="text-muted">Find the right talent, post your job, and start building your dream team. Connect with skilled professionals who are ready to bring your ideas to life.
                 Connect with talent that gets you, and hire them to take your business to the next level.</p>
        <div class="mb-5">
            <a class="btn btn-post" href="{{ route('login') }}" role="button">Job Post Now &rarr;</a>
        </div>

        <div class="d-flex gap-3 flex-wrap">
          <div class="stat-card">
            <div class="stat-number mt-2">950M+</div>
            <div class="stat-label mt-2">Total Freelancers</div>
          </div>
          <div class="stat-card">
            <div class="stat-number mt-2">32M+</div>
            <div class="stat-label mt-2">Total Freelancers</div>
          </div>
          <div class="stat-card">
            <div class="stat-number mt-2">120M+</div>
            <div class="stat-label mt-2">Total Freelancers</div>
          </div>
        </div>
      </div>

      <div class="col-lg-6">
        <div class="hero-img-wrap">
          <img src="{{ asset('images/job_3.png') }}" alt="Team collaborating around a laptop">
        </div>
      </div>

    </div>
  </div>
</div>
    
    <div class="container py-5">
        <div class="row">
              <div class="col-lg-12 text-white pb-5 mt-4">
            <h2 class="section-title mb-1 mt-3 text-dark">For <span class="text-danger">Workers</span></h2>
         <p class="section-sub mb-0 text-dark">Finish jobs, earn money, and build your reputation.</p>
                  <div class="row g-4 mt-0">
    <div class="col-12 col-sm-6 col-lg-3">
      <div class="step-card text-center">
        <div class="icon-circle">
          <svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <line x1="9" y1="6" x2="20" y2="6"></line>
            <line x1="9" y1="12" x2="20" y2="12"></line>
            <line x1="9" y1="18" x2="20" y2="18"></line>
            <polyline points="4 6 5 7 7 4.5"></polyline>
            <polyline points="4 12 5 13 7 10.5"></polyline>
            <polyline points="4 18 5 19 7 16.5"></polyline>
          </svg>
        </div>
        <h5 class="step-title">Submit Job</h5>
        <p class="step-desc mb-0 text-muted">
          Browse and complete any job from the <span class="blue-text">Finds Job list</span>. Read each task carefully before submitting your work.
        </p>
      </div>
    </div>

    <div class="col-12 col-sm-6 col-lg-3">
      <div class="step-card text-center">
        <div class="icon-circle">
          <svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <path d="M21 12a9 9 0 1 1-3-6.7"></path>
            <polyline points="21 3 21 9 15 9"></polyline>
          </svg>
        </div>
        <h5 class="step-title">Revision Job</h5>
        <p class="step-desc mb-0 text-muted">
          If your work is sent for revision by the employer, complete and resubmit it within 24 hours to avoid penalties.
        </p>
      </div>
    </div>

    <div class="col-12 col-sm-6 col-lg-3">
      <div class="step-card text-center">
        <div class="icon-circle">
          <svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <polyline points="3 17 9 11 13 15 21 6"></polyline>
            <polyline points="14 6 21 6 21 13"></polyline>
          </svg>
        </div>
        <h5 class="step-title">Report Job</h5>
        <p class="step-desc mb-0 text-muted">
          If an employer pays incorrectly after job completion, you can report against the work within 24 hours of receiving your rating.
        </p>
      </div>
    </div>

    <div class="col-12 col-sm-6 col-lg-3">
      <div class="step-card text-center">
        <div class="icon-circle">
          <svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <circle cx="12" cy="12" r="9"></circle>
            <polyline points="8 12.5 11 15.5 16 9"></polyline>
          </svg>
        </div>
        <h5 class="step-title">Complete Job</h5>
        <p class="step-desc mb-0 text-muted">
          Complete jobs with <span class="blue-text">jobfixs</span> and earn consistently. Build your profile, grow your income, and remove unemployment.
        </p>
      </div>
    </div>
  </div>
    </div>
        </div>
            </div>
            
    
    <!--worker-->
<div class="container py-5">
  <div class="hero-section">
    <div class="row align-items-stretch g-4">
      <div class="col-lg-6 d-flex flex-column justify-content-center">
        <span class="h5">#Feelancer marketplace</span>
                 <h2 class="fw-bold">Find the talent needed to get your business growing.</h2>
                 <p class="text-muted">Find the right talent, post your job, and start building your dream team. Connect with skilled professionals who are ready to bring your ideas to life.
                 Connect with talent that gets you, and hire them to take your business to the next level.</p>
        <div class="mb-5">
           <a class="btn btn-post btn-warning" href="{{ route('login') }}" role="button">Get started &rarr;</a>
        </div>

        <div class="d-flex gap-3 flex-wrap">
          <div class="stat-card">
            <div class="stat-number mt-2">950M+</div>
            <div class="stat-label mt-2">Total Freelancers</div>
          </div>
          <div class="stat-card">
            <div class="stat-number mt-2">32M+</div>
            <div class="stat-label mt-2">Total Freelancers</div>
          </div>
          <div class="stat-card">
            <div class="stat-number mt-2">120M+</div>
            <div class="stat-label mt-2">Total Freelancers</div>
          </div>
        </div>
      </div>

      <div class="col-lg-6">
        <div class="hero-img-wrap">
          <img src="{{ asset('images/worker.jpg') }}" alt="Team collaborating around a laptop"> 
        </div>
      </div>

    </div>
  </div>
</div>
<!--REFERRAL PROGRAM-->
  <div class="container py-5" id="share-&-earn">
    <div class="referral-card">
    <div class="row g-0 align-items-stretch">
      <div class="col-lg-5">
        <div class="illustration-box">
          <img src="{{ asset('images/job_5.png') }}" alt="Friends referring each other to OneTaskMarket">
        </div>
      </div>

      <div class="col-lg-7">
        <div class="content-pane">
        <h1 class="headline">Share &amp; <span class="accent">Earn</span></h1>

        <p class="lede">
          Invite your friends to the jobfixs platform and earn special
          bonuses. Every deposit and job comes with referral rewards.
        </p>

        <div class="sub-question">What do you get for each invitation?</div>

        <div class="d-flex flex-column gap-3 mb-4">
          <div class="benefit-card">
            <div class="benefit-icon"><i class="fa fa-percent"></i></div>
            <div>
              <div class="benefit-title">Work Bonus on Referral</div>
              <p class="benefit-text">
                When your friend joins and completes work, you receive
                <span class="pct">3%</span> of their work bonus automatically.
              </p>
            </div>
          </div>

          <div class="benefit-card">
            <div class="benefit-icon"><i class="fa fa-credit-card" aria-hidden="true"></i></div>
            <div>
              <div class="benefit-title">Deposit Bonus</div>
              <p class="benefit-text">
                You instantly earn a <span class="pct">5%</span> bonus on every
                deposit made by a friend who accepted your invitation.
              </p>
            </div>
          </div>
        </div>

        <a href="{{ route('login')}}" class="btn-get-started">
          <i class="bi bi-arrow-right"></i> GET STARTED &rarr;
        </a>
        </div>
      </div>

    </div>
    </div>
  </div>
  
  <!--Simple rules and guidelines for Job Posters and Workers-->
  <div class="container py-5">
    <div class="referral-card">
    <div class="row g-0 align-items-stretch">
      <div class="col-lg-6">
        <div class="content-pane">
        <h3 class="headline mb-0">Jobs <span class="accent">Poster</span></h3>
        <p class="lede">
          Simple rules and guidelines for Job Posters.
        </p>
        <div class="d-flex flex-column gap-3 mb-0">
             <div class="role-mini-card mb-0">
          <ol>
            <li>অ্যাকাউন্ট তৈরি করুন রেজিস্ট্রেশন করে লগইন করুন। </li>
            <li>জব পোস্টারদের জন্য অ্যাকাউন্ট স্বয়ংক্রিয়ভাবে ফ্রি ভেরিফফাইড হবে। </li>
            <li>ডিপোজিট করুন প্রয়োজনীয় অর্থ জমা করুন।</li>
            <li>বিনামূল্যে জব পোস্ট করুন</li>
            <li>জব পোস্ট করুন কাজের তথ্য ও বাজেট যোগ করুন।</li>
            <li>আবেদন যাচাই করুন দক্ষতা ও অভিজ্ঞতা দেখে প্রার্থী বাছাই করুন।</li>
            <li>কর্মী নিয়োগ করুন যোগ্য কর্মী নির্বাচন করে কাজ দিন।</li>
          </ol>
        </div>
        </div>
        </div>
      </div>
      <!--Workers-->
      <div class="col-lg-6">
           <div class="content-pane">
        <h3 class="headline mb-0">Jobs <span class="accent">Worker</span></h3>
        <p class="lede">
          Simple rules and guidelines for Job Workers
        </p>
            <div class="d-flex flex-column gap-3 mb-0">
            <div class="role-mini-card mb-0">
          <ol>
            <li>অ্যাকাউন্ট তৈরি করুন রেজিস্ট্রেশন করে লগইন করুন। </li>
            <li>অ্যাকাউন্ট ভেরিফাই করুন,বিকাশ অথবা নগদের মাধ্যমে মাত্র ৫০ টাকা ফি প্রদান করে আপনার অ্যাকাউন্ট ভেরিফাই করে Verified Accountount করুন।</li>
            <li>কাজ খুঁজুন আপনার দক্ষতা অনুযায়ী উপযুক্ত কাজ খুঁজে আবেদন করুন।</li>
            <li>নির্ধারিত সময়ের মধ্যে দায়িত্বশীলতার সঙ্গে কাজটি সম্পন্ন করুন।</li>
            <li>পেমেন্ট গ্রহণ করুন কাজ সফলভাবে সম্পন্ন করার পর আপনার প্রাপ্য পারিশ্রমিক গ্রহণ করুন।</li>
          </ol>
            </div>
           </div>
         </div>
      </div>
    </div>
    </div>
  </div>
  
  <!--Questions-->
  <div class="container py-5" id="faq">
    <div class="faq-card shadow">
    <h2 class="headline-Questions">Frequently Asked <span class="accent">Questions</span></h2>
    <div class="row g-4">
      <div class="col-lg-6">
        <div class="faq-item">
          <button class="faq-question" data-bs-toggle="collapse" data-bs-target="#faq1" aria-expanded="false">
            <span class="faq-icon">+</span>
            What are the benefits for employers?
          </button>
          <div class="collapse" id="faq1">
            <div class="faq-answer">
              Employers post a job once and reach verified workers immediately,
              pay only when the work is approved, and use referral and dispute
              tools built into the platform at no extra cost.
            </div>
          </div>
        </div>

        <div class="faq-item">
          <button class="faq-question" data-bs-toggle="collapse" data-bs-target="#faq3" aria-expanded="false">
            <span class="faq-icon">+</span>
            How long is the employer's job pending?
          </button>
          <div class="collapse" id="faq3">
            <div class="faq-answer">
              Most jobs are reviewed and approved within 24 to 48 hours.
              You'll get a notification the moment your listing goes live.
            </div>
          </div>
        </div>

        <div class="faq-item">
          <button class="faq-question" data-bs-toggle="collapse" data-bs-target="#faq5" aria-expanded="false">
            <span class="faq-icon">+</span>
            Quick resolution of complaints?
          </button>
          <div class="collapse" id="faq5">
            <div class="faq-answer">
              Every complaint is assigned to a support agent within one hour,
              and most cases are resolved within a single business day.
            </div>
          </div>
        </div>

      </div>

      <div class="col-lg-6">
        <div class="faq-item">
          <button class="faq-question" data-bs-toggle="collapse" data-bs-target="#faq2" aria-expanded="false">
            <span class="faq-icon">+</span>
            Why would a worker spend time and effort here?
          </button>
          <div class="collapse" id="faq2">
            <div class="faq-answer">
              Workers get paid promptly for approved jobs, build a verified
              track record that earns them better offers, and can grow income
              further through referral bonuses.
            </div>
          </div>
        </div>

        <div class="faq-item">
          <button class="faq-question" data-bs-toggle="collapse" data-bs-target="#faq4" aria-expanded="false">
            <span class="faq-icon">+</span>
            Job approval fees?
          </button>
          <div class="collapse" id="faq4">
            <div class="faq-answer">
              There's no fee to submit a job for approval. A small service
              fee only applies once a job is completed and paid out.
            </div>
          </div>
        </div>

      </div>
    </div>
    </div>
  </div>
 
 <!--footer-->
<footer>
 @include('frontend.layouts.partials.footer')
</footer>
 
<script>
document.addEventListener('DOMContentLoaded', function () {
  const track = document.getElementById('sliderTrack');
  if (!track) return;

  const GAP = 20;

  // ---- size cards so only whole cards are ever visible ----
  function sizeCards() {
    const desired = window.innerWidth < 576 ? 220 : 270;
    const wrapWidth = document.querySelector('.slider-wrap').clientWidth;
    const visibleCount = Math.max(1, Math.round(wrapWidth / (desired + GAP)));
    const cardWidth = (wrapWidth - GAP * (visibleCount - 1)) / visibleCount;

    document.querySelectorAll('.slide-item').forEach(item => {
      item.style.width = cardWidth + 'px';
    });
  }
  sizeCards();

  // ---- duplicate cards for seamless infinite loop ----
  const originalItems = Array.from(track.children);
  originalItems.forEach(item => {
    track.appendChild(item.cloneNode(true));
  });

  function itemWidth() {
    const item = track.querySelector('.slide-item');
    return item ? item.offsetWidth + GAP : 300;
  }

  let loopWidth = 0;
  function calcLoopWidth() {
    loopWidth = 0;
    originalItems.forEach(() => { loopWidth += itemWidth(); });
  }
  calcLoopWidth();

  window.addEventListener('resize', () => {
    sizeCards();
    calcLoopWidth();
  });

  // ---- step-by-step auto slide, one direction, seamless loop ----
  let autoTimer = null;
  let paused = false;
  let animating = false;

  function animateStep() {
    if (paused || animating) return;
    animating = true;

    const start = track.scrollLeft;
    const distance = itemWidth();
    const duration = 500;
    const startTime = performance.now();

    function frame(now) {
      const elapsed = now - startTime;
      const progress = Math.min(elapsed / duration, 1);
      const eased = 1 - Math.pow(1 - progress, 3);
      track.scrollLeft = start + distance * eased;

      if (progress < 1) {
        requestAnimationFrame(frame);
      } else {
        if (track.scrollLeft >= loopWidth) {
          track.scrollLeft -= loopWidth;
        }
        animating = false;
      }
    }
    requestAnimationFrame(frame);
  }

  function startAuto() {
    stopAuto();
    autoTimer = setInterval(animateStep, 2200);
  }
  function stopAuto() {
    if (autoTimer) clearInterval(autoTimer);
  }

  track.addEventListener('mouseenter', () => { paused = true; });
  track.addEventListener('mouseleave', () => { paused = false; });
  track.addEventListener('touchstart', () => { paused = true; }, { passive: true });
  track.addEventListener('touchend', () => { setTimeout(() => { paused = false; }, 1000); }, { passive: true });

  startAuto();
});
</script>

@endsection