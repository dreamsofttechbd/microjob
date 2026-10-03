@extends('frontend.layouts.frontend')
@section('content')
  <style>
  
    .progress-cell { min-width: 170px; }
    .progress-track { height: 10px; background: #e6edf7; border-radius: 999px; overflow: hidden; }
    .progress-fill {
      height: 100%; width: 0; border-radius: 999px;
      background: linear-gradient(90deg, #1e3a8a, #3b6fd8);
      transition: width .5s ease;
    }
    .progress-note { color: #6b7aa1; font-size: .8rem; text-align: right; margin-top: .3rem; }
    .company-logo {
      width: 40px; height: 40px; border-radius: .5rem;
      display: inline-flex; align-items: center; justify-content: center;
      font-weight: 700; color: #fff;
    }
  </style>
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
<!-- category wish jobs -->
<div class="container">
  <div class="row">
    <div class="card border-0 mb-5 mt-3">
      <div class="card-body">
        <!-- top title -->
      <div class="d-flex flex-wrap justify-content-between align-items-center mb-4 gap-2"><div>
        <div class="d-flex align-items-center">
    <img src="{{ asset('category/' . $category->icon) }}" alt="{{ $category->name }}" title="{{ $category->name }}" style="width: 25px; height: 20px; object-fit: contain;" class="me-1">
    <h5 class="h5 mb-0 fw-semibold">{{ $category->name }}</h5>
   </div>
      <p class="text-body-secondary mb-0">{{ $jobCount }} jobs available right now</p>
      </div>
      <div class="input-group" style="max-width: 300px;">
        <span class="input-group-text"><i class="bi bi-search"></i></span>
        <input type="search" id="search" class="form-control" placeholder="Search jobs...">
      </div>
    </div>
    <hr>
      <!-- top title end-->
      <div class="table-responsive">
      <table class="table table-hover align-middle mb-0  table-striped table-borderless py-3">
          <thead class="">
            <tr>
              <th>Job Title</th>
              <th>Location</th>
              <th>Job Type</th>
              <th>Budget</th>
              <th>Earning</th>
              <th>Deadline</th>
              <th>Worker</th>
              <th class="text-end">Total</th>
              <th class="text-end">Action</th>
            </tr>
          </thead>
          <tbody>
          @foreach($jobs as $job)
            <tr>
              <td>
                <div class="d-flex align-items-center gap-3">
                  <span class="company-logo bg-white">
                    <img src="{{ asset('category/' . $category->icon) }}" alt="{{ $category->name }}" title="{{ $category->name }}" style="width: 35px; height: 30px; object-fit: contain;" class="">
                  </span>
                  <div><div class="fw-semibold">{{ $job->title }}</div>
                  <small class="text-body-secondary">
                    {{ $category->name }}
                    @if(!empty($job->subcategory_id))
                        @php
                            $subCategory = $subCategories
                                ->where('id', $job->subcategory_id)
                                ->first();
                        @endphp

                        @if($subCategory)
                            / {{ $subCategory->name }}
                        @endif
                    @endif
                  </small>
                </div>
                </div>
              </td>
               @foreach($countries as $country)
              <td><i class="bi bi-geo-alt text-primary"></i> {{ $country->name }}</td>
              @endforeach
              <td><span class="badge text-bg-primary">{{ $subCategory->name }}</span></td>
              <td>{{ $job->budget }}</td> 
              <td>{{ $job->worker_earn }}</td> 
              <td>{{ $job->created_at->format('d M Y') }}</td>
              <td>{{ $job->worker_need }}</td> 
             @php
             $remainingWorkers = max(0, $job->worker_need - $job->worker_done);
             @endphp
            <td class="progress-cell"
                data-applied="{{ $job->worker_done }}"
                data-total="{{ $job->worker_need }}">
                <div class="progress-track">
                    <div class="progress-fill"></div>
                </div>
                <div class="progress-note">
                    {{ $remainingWorkers }} Workers Left
                </div>
            </td>
              <td class="text-end"><button class="btn btn-primary btn-sm px-3 apply-btn">Apply</button></td>
            </tr>
            @endforeach
          </tbody>
        </table>
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
    // Progress bars
    function renderProgress(td) {
      const a = +td.dataset.applied, t = +td.dataset.total;
      td.querySelector('.progress-fill').style.width = (a / t * 100) + '%';
      td.querySelector('.progress-note').textContent = a + ' of ' + t + ' applied';
    }
    document.querySelectorAll('.progress-cell').forEach(renderProgress);


    // Simple search filter
    document.getElementById('search').addEventListener('input', e => {
      const q = e.target.value.toLowerCase();
      document.querySelectorAll('#jobTable tbody tr').forEach(tr => {
        tr.style.display = tr.textContent.toLowerCase().includes(q) ? '' : 'none';
      });
    });
  </script>
@endsection