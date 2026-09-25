@extends('user.layouts.app')
@section('content')
  <header class="topbar">
        @include('user.layouts.partials.navbar') 
    </header>
  <aside class="sidebar" id="sidebar">
      @include('user.layouts.partials.sidebar')
  </aside>
  
        <div class="content">
             <div class="row g-4">
               @include('user.layouts.partials.braking_news')
               </div>
             </div>

<div class="container mt-4 mb-5">
  <div class="row">
    <div class="col-12">
       
      @if($banner)
      <a target="_blank" href="{{ route('user.banner.click', $banner->id) }}">
          <img src="{{ asset('storage/app/public/'.$banner->thumbnail) }}">
      </a>
      @endif

      {{-- ── Filter Bar ── --}}
      <div class="filter-bar mb-3">
        <div class="d-flex align-items-center justify-content-between flex-wrap gap-2 mb-2">
          <span class="result-count fw-bold">
            <i class="fa fa-bars text-primary"></i>
            Available Jobs
            <span class="badge bg-danger ms-1" id="jobCount">{{ count($jobs) }}</span>
          </span>
        </div>
        <div class="filter-controls">
          @php
            $categories = App\Models\Category::where('is_active', true)->get();
          @endphp
          <select class="filter-select" id="catSelect" onchange="applyFilters()">
            <option value="">All Categories</option>
            @foreach($categories as $category)
              {{-- value lowercase করা হচ্ছে যাতে data-category এর সাথে match করে --}}
              <option value="{{ strtolower($category->name) }}">{{ $category->name }}</option>
            @endforeach
          </select>
          <div class="search-wrapper">
            <i class="fa fa-search search-icon"></i>
            <input type="text" class="filter-input" id="searchInput" placeholder="Search title..." oninput="applyFilters()">
          </div>
          <select class="filter-sort" id="sortSelect" onchange="applyFilters()">
            <option value="default">Default (Priority)</option>
            <option value="highest">Highest Pay</option>
            <option value="lowest">Lowest Pay</option>
            <option value="newest">Most Recent</option>
          </select>
        </div>
      </div>

      {{-- ════════════════════════════════
           MOBILE VIEW
      ════════════════════════════════ --}}
      <div class="mobile-view" id="mobileList">

        {{-- 🚀 Boosted Section --}}
        @if($boostedJobs->count())
          <div class="section-label boosted-label">
            <span><i class="bi bi-rocket-takeoff-fill me-1"></i>Boosted</span>
            <span class="sl-line"></span>
          </div>
          @foreach($boostedJobs as $job)
          <a class="job-card card-boosted"
             href="{{ route('user.job-details', $job->code) }}"
             data-title="{{ strtolower($job->title) }}"
             data-earn="{{ $job->worker_earn }}"
             data-category="{{ strtolower($job->category->name ?? '') }}"
             data-type="boosted"
             data-index="{{ $loop->index }}">
            <div class="job-card-top">
              <span class="job-title" title="{{ $job->title }}">{{ $job->title }}</span>
              <span class="job-earn" style="color:var(--boost);">${{ $job->worker_earn }}</span>
            </div>
            <div class="job-card-bottom">
              <span class="job-zone">
                <i class="fa fa-globe"></i>
                {{ $job->continent->name ?? 'Global' }}
              </span>
              <span class="d-flex align-items-center gap-2 flex-wrap">
                <span class="worker-badge">
                  <strong class="text-danger">{{ $job->worker_done }}</strong>
                  <span class="text-muted">/</span>
                  <strong class="text-success">{{ $job->worker_need }}</strong>
                  <span class="text-muted ms-1">slots</span>
                </span>
                <span class="pill-boost" style="font-size:9px;">
                  <i class="bi bi-rocket-takeoff-fill"></i>
                  {{ $job->boostRemainingMinutes() }}m left
                </span>
              </span>
            </div>
          </a>
          @endforeach
          @endif

        {{-- Top Section --}}
        @if($topJobs->count())
          <div class="section-label top-label">
            <span><i class="bi bi-star-fill me-1"></i>Top Jobs</span>
            <span class="sl-line"></span>
          </div>
          @foreach($topJobs as $job)
          <a class="job-card card-top"
             href="{{ route('user.job-details', $job->code) }}"
             data-title="{{ strtolower($job->title) }}"
             data-earn="{{ $job->worker_earn }}"
             data-category="{{ strtolower($job->category->name ?? '') }}"
             data-type="top"
             data-index="{{ $loop->index }}">
            <div class="job-card-top">
              <span class="job-title" title="{{ $job->title }}">{{ $job->title }}</span>
              <span class="job-earn" style="color:var(--top-color);">${{ $job->worker_earn }}</span>
            </div>
            <div class="job-card-bottom">
              <span class="job-zone">
                <i class="fa fa-globe"></i>
                {{ $job->continent->name ?? 'Global' }}
              </span>
              <span class="d-flex align-items-center gap-2">
                <span class="worker-badge">
                  <strong class="text-danger">{{ $job->worker_done }}</strong>
                  <span class="text-muted">/</span>
                  <strong class="text-success">{{ $job->worker_need }}</strong>
                  <span class="text-muted ms-1">slots</span>
                </span>
                <span class="pill-top" style="font-size:9px;">
                  <i class="bi bi-star-fill"></i> Top
                </span>
              </span>
            </div>
          </a>
          @endforeach
        @endif

        {{-- Normal Section --}}
        @if($normalJobs->count())
          <div class="section-label normal-label">
            <span><i class="bi bi-list-ul me-1"></i>All Jobs</span>
            <span class="sl-line"></span>
          </div>
          @foreach($normalJobs as $job)
          <a class="job-card"
             href="{{ route('user.job-details', $job->code) }}"
             data-title="{{ strtolower($job->title) }}"
             data-earn="{{ $job->worker_earn }}"
             data-category="{{ strtolower($job->category->name ?? '') }}"
             data-type="normal"
             data-index="{{ $loop->index }}">
            <div class="job-card-top">
              <span class="job-title" title="{{ $job->title }}">{{ $job->title }}</span>
              <span class="job-earn" style="color:var(--text-dark);">${{ $job->worker_earn }}</span>
            </div>
            <div class="job-card-bottom">
              <span class="job-zone">
                <i class="fa fa-globe text-dark"></i>
                {{ $job->continent->name ?? 'Global' }}
              </span>
              <span class="worker-badge">
                <strong class="text-danger">{{ $job->worker_done }}</strong>
                <span class="text-muted">/</span>
                <strong class="text-success">{{ $job->worker_need }}</strong>
                <span class="text-muted ms-1">slots</span>
              </span>
            </div>
          </a>
          @endforeach
        @endif

        {{-- Empty --}}
        @if($jobs->isEmpty())
          <div class="empty-state">
            <div><i class="fa fa-inbox"></i></div>
            কোনো job পাওয়া যায়নি।
          </div>
        @endif

        <div class="empty-state" id="mobileEmpty" style="display:none;">
          <div><i class="fa fa-search-minus"></i></div>
          No jobs match your filters.
        </div>
      </div>

      {{-- ════════════════════════════════
           DESKTOP TABLE VIEW
      ════════════════════════════════ --}}
      <div class="desktop-view jobs-table-wrap">
        <table class="jobs-table">
          <thead>
            <tr>
              <th style="width:36px;"></th>
              <th>Zone</th>
              <th>Title</th>
              <th>Earning</th>
              <th>Workers</th>
            </tr>
          </thead>
          <tbody id="desktopBody">

            {{-- 🚀 Boosted rows --}}
            @if($boostedJobs->count())
            <tr class="section-divider-row">
              <td colspan="5">
                <span style="color:var(--boost);">
                  <i class="bi bi-rocket-takeoff-fill me-1"></i>
                  Boosted Jobs
                </span>
              </td>
            </tr>
            @foreach($boostedJobs as $job)
            <tr class="row-boosted"
                onclick="window.location.href='{{ route('user.job-details', $job->code) }}'"
                data-title="{{ strtolower($job->title) }}"
                data-earn="{{ $job->worker_earn }}"
                data-category="{{ strtolower($job->category->name ?? '') }}"
                data-type="boosted"
                data-index="{{ $loop->index }}">
              <td>
                <span class="pill-boost" style="font-size:9px; padding:2px 6px;">
                  <i class="bi bi-rocket-takeoff-fill"></i>
                </span>
              </td>
              <td>
                <i class="fa fa-globe text-success"
                   data-bs-toggle="tooltip"
                   title="{{ $job->continent->name ?? 'Global' }}"></i>
              </td>
              <td>
                <span class="td-title" title="{{ $job->title }}">{{ $job->title }}</span>
                <div style="margin-top:2px;">
                  <span class="boost-timer">
                    <i class="bi bi-clock me-1"></i>{{ $job->boostRemainingMinutes() }}m left
                  </span>
                </div>
              </td>
              <td class="fw-bold" style="color:var(--boost);">${{ $job->worker_earn }}</td>
              <td>
                <span class="worker-badge">
                  <strong class="text-danger">{{ $job->worker_done }}</strong>/<strong class="text-success">{{ $job->worker_need }}</strong>
                </span>
              </td>
            </tr>
            @endforeach
            @endif

            {{-- ⭐ Top rows --}}
            @if($topJobs->count())
            <tr class="section-divider-row">
              <td colspan="5">
                <span style="color:var(--top-color);">
                  <i class="bi bi-star-fill me-1"></i>
                  Top Jobs
                </span>
              </td>
            </tr>
            @foreach($topJobs as $job)
            <tr class="row-top"
                onclick="window.location.href='{{ route('user.job-details', $job->code) }}'"
                data-title="{{ strtolower($job->title) }}"
                data-earn="{{ $job->worker_earn }}"
                data-category="{{ strtolower($job->category->name ?? '') }}"
                data-type="top"
                data-index="{{ $loop->index }}">
              <td>
                <span class="pill-top" style="font-size:9px; padding:2px 6px;">
                  <i class="bi bi-star-fill"></i>
                </span>
              </td>
              <td>
                <i class="fa fa-globe text-success"
                   data-bs-toggle="tooltip"
                   title="{{ $job->continent->name ?? 'Global' }}"></i>
              </td>
              <td>
                <span class="td-title" title="{{ $job->title }}">{{ $job->title }}</span>
              </td>
              <td class="fw-bold" style="color:var(--top-color);">${{ $job->worker_earn }}</td>
              <td>
                <span class="worker-badge">
                  <strong class="text-danger">{{ $job->worker_done }}</strong>/<strong class="text-success">{{ $job->worker_need }}</strong>
                </span>
              </td>
            </tr>
            @endforeach
            @endif

            {{-- 📋 Normal rows --}}
            @if($normalJobs->count())
            <tr class="section-divider-row">
              <td colspan="5">
                <span style="color:var(--text-muted);">
                  <i class="bi bi-list-ul me-1"></i>
                  All Jobs
                </span>
              </td>
            </tr>
            @foreach($normalJobs as $job)
            <tr onclick="window.location.href='{{ route('user.job-details', $job->code) }}'"
                data-title="{{ strtolower($job->title) }}"
                data-earn="{{ $job->worker_earn }}"
                data-category="{{ strtolower($job->category->name ?? '') }}"
                data-type="normal"
                data-index="{{ $loop->index }}">
              <td></td>
              <td>
                <i class="fa fa-globe text-success"
                   data-bs-toggle="tooltip"
                   title="{{ $job->continent->name ?? 'Global' }}"></i>
              </td>
              <td>
                <span class="td-title" title="{{ $job->title }}">{{ $job->title }}</span>
              </td>
              <td class="fw-bold" style="color:var(--text-dark);">${{ $job->worker_earn }}</td>
              <td>
                <span class="worker-badge">
                  <strong class="text-danger">{{ $job->worker_done }}</strong>/<strong class="text-success">{{ $job->worker_need }}</strong>
                </span>
              </td>
            </tr>
            @endforeach
            @endif

            {{-- Empty --}}
            @if($jobs->isEmpty())
            <tr>
              <td colspan="5" class="empty-state">
                <div><i class="fa fa-inbox"></i></div>
                কোনো job পাওয়া যায়নি।
              </td>
            </tr>
            @endif

          </tbody>
        </table>
        <div class="empty-state" id="desktopEmpty" style="display:none;">
          <div><i class="fa fa-search-minus"></i></div>
          No jobs match your filters.
        </div>
      </div>

    </div>
  </div>
</div>

<footer class="mt-5 footer-section">
  @include('user.layouts.partials.footer')
</footer>

<script>
  function applyFilters() {
    const search = document.getElementById('searchInput').value.toLowerCase().trim();
    const sort   = document.getElementById('sortSelect').value;
    const cat    = document.getElementById('catSelect').value.trim(); // already lowercase from option value

    const desktopRows = Array.from(document.querySelectorAll('#desktopBody tr:not(.section-divider-row)'));
    const mobileCards = Array.from(document.querySelectorAll('#mobileList .job-card'));

    // একটা element match করে কিনা চেক করে (title + category উভয়ই)
    function matches(el) {
      const title    = (el.dataset.title    || '').toLowerCase();
      const category = (el.dataset.category || '').toLowerCase();
      const titleOk  = search === '' || title.includes(search);
      const catOk    = cat    === '' || category === cat;
      return titleOk && catOk;
    }

    // Desktop rows filter
    let visibleDesktop = desktopRows.filter(r => {
      const show = matches(r);
      r.style.display = show ? '' : 'none';
      return show;
    });

    // Mobile cards filter
    let visibleMobile = mobileCards.filter(c => {
      const show = matches(c);
      c.style.display = show ? '' : 'none';
      return show;
    });

    // Sort (default = priority order যেভাবে server থেকে এসেছে)
    if (sort !== 'default') {
      function sortItems(items, parent) {
        items.sort((a, b) => {
          if (sort === 'highest') return parseFloat(b.dataset.earn)  - parseFloat(a.dataset.earn);
          if (sort === 'lowest')  return parseFloat(a.dataset.earn)  - parseFloat(b.dataset.earn);
          if (sort === 'newest')  return parseInt(b.dataset.index)   - parseInt(a.dataset.index);
          return 0;
        });
        items.forEach(el => parent.appendChild(el));
      }
      sortItems(visibleDesktop, document.getElementById('desktopBody'));
      sortItems(visibleMobile,  document.getElementById('mobileList'));
    }

    // Desktop: section divider গুলো hide করো যদি ওই section এ কোনো visible row না থাকে
    const dividers = document.querySelectorAll('#desktopBody .section-divider-row');
    dividers.forEach(divider => {
      let next = divider.nextElementSibling;
      let hasVisible = false;
      while (next && !next.classList.contains('section-divider-row')) {
        if (next.style.display !== 'none') hasVisible = true;
        next = next.nextElementSibling;
      }
      divider.style.display = hasVisible ? '' : 'none';
    });

    // Mobile: section label গুলো hide করো যদি ওই section এ কোনো visible card না থাকে
    document.querySelectorAll('#mobileList .section-label').forEach(label => {
      let next = label.nextElementSibling;
      let hasVisible = false;
      while (next && !next.classList.contains('section-label')) {
        if (next.classList.contains('job-card') && next.style.display !== 'none') hasVisible = true;
        next = next.nextElementSibling;
      }
      label.style.display = hasVisible ? '' : 'none';
    });

    // Empty state toggle
    document.getElementById('desktopEmpty').style.display = visibleDesktop.length ? 'none' : 'block';
    document.getElementById('mobileEmpty').style.display  = visibleMobile.length  ? 'none' : 'block';

    // Job count badge আপডেট (viewport অনুযায়ী)
    const total = window.innerWidth < 768 ? visibleMobile.length : visibleDesktop.length;
    document.getElementById('jobCount').textContent = total;
  }

  // Tooltips init
  document.addEventListener('DOMContentLoaded', function () {
    [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
      .forEach(el => new bootstrap.Tooltip(el));
  });
</script>

@endsection