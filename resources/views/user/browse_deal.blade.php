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
               <!--job table-->
               <div class="col-lg-12">
                <div class="card border-0 rounded-2">
                    <div class="card-body">
                        <div class="filter-scroll">
                <form>
                <div class="row flex-nowrap flex-sm-wrap">
                       <div class="col-5 col-sm-5 col-md-5 mt-3 text-start">
                            <span>400 Result</span>
                        </div>
                                
                    <div class="col-10 col-sm-3 col-md-3 mt-3">
                        <select class="filter-select w-100">
                            <option>All Categories</option>
                            <option value="">Categories</option>
                              <option>Ads Click</option>
                              <option>SEO</option>
                              <option>Visit</option>
                              <option>Search</option>
                              <option>Engage</option>
                        </select>
                    </div>

                    <div class="col-10 col-sm-2 col-md-2 mt-3">
                        <div class="position-relative">
                            <i class="bi bi-search position-absolute top-50 start-0 translate-middle-y ms-3"></i>
                            <input type="text" class="form-control ps-5" placeholder="Search Jobs Here">
                        </div>
                    </div>
                    <div class="col-10 col-sm-2 col-md-2 mt-3">
                        <select class="filter-select w-100 bg-white">
                             <option>Most Recent</option>
                              <option>Oldest First</option>
                              <option>Highest Pay</option>
                              <option>Lowest Pay</option>
                        </select>
                    </div>
                        </div>
                        </form>
                    </div>
                </div>
               </div>
               <!--table all jobs-->
               <div class="card border-0 rounded-2 mt-3">
                   <div class="card-body">
                       <div class="table-responsive">
                       <table class="table">
                      <thead>
                        <tr>
                          <th scope="col">#</th>
                          <th scope="col">Banner</th>
                          <th scope="col">Banner Title</th>
                          <th scope="col">Posted By</th>
                          <th scope="col">Status</th>
                          <th scope="col">Days</th> 
                          <th scope="col">Position</th>
                          <th scope="col">Price</th>
                          <th scope="col">Clicks</th>
                          <th scope="col">Approved</th>
                          <th scope="col">Expired</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ( $allbanner as $banner)
                  <tr>
                  <td>{{ $loop->index +1}} </td>
                  <td data-label="Thumb" style="width: 10%;">
                  <div class="thumb-wrap">
                    @if($banner->thumbnail)
                      <img src="{{ asset('storage/'.$banner->thumbnail) }}" class="rounded-3" alt="thumb" style="width: 100%; height: 50px;">
                    @else
                      <div class="thumb-placeholder">🖼</div>
                    @endif
                  </div>
                </td>
                          <td data-label="Title">
                  <div style="font-weight:600;font-size:12px;color:#0f172a">{{ Str::limit($banner->title,28) }}</div>
                  <div style="font-size:10px;color:#94a3b8;margin-top:2px;font-family:monospace">{{ $banner->code }}</div>
                  @if($banner->link)
                    <a href="{{ $banner->link }}" target="_blank" class="link-cell" title="{{ $banner->link }}" style="font-size:10px; margin-top:0px">
                      ↗ {{ Str::limit($banner->link,22) }}
                    </a>
                  @endif
                </td>
                          <td data-label="Posted By">
                  <div class="user-cell">
                    <div>
                      <div style="font-size:12px;font-weight:500">{{ $banner->user->name }}</div>
                      <div style="font-size:10px;color:#94a3b8">{{ $banner->user->email }}</div>
                    </div>
                  </div>
                </td>
                        <td>
                        @if ($banner->status === 'approved')
                            <span class="badge bg-success">Approved</span>
                        @elseif ($banner->status === 'pending')
                            <span class="badge bg-warning text-dark">Pending</span>
                        @elseif ($banner->status === 'rejected')
                            <span class="badge bg-danger">Rejected</span>
                       @else
                      <span class="badge rounded-pill d-inline-flex align-items-center gap-2 px-3 py-2"
                            style="background:#dcfce7; color:#166534; font-weight:600;">
                          <span class="rounded-circle d-inline-block"
                                style="width:6px; height:6px; background:#22c55e;"></span>
                          {{ ucfirst($banner->status ?? 'Unknown') }}
                      </span>
                  @endif
                    </td>
                        
                    <td data-label="Days" class="meta-cell">
                  {{ $banner->days }}day
                  @if($banner->approved_at)
                    <div style="font-size:10px;color:#94a3b8">from {{ \Carbon\Carbon::parse($banner->approved_at)->format('M d') }}</div>
                  @endif
                </td>
                          <td>{{ $banner->position }}</td>
                           <td>$ {{ number_format((float) $banner->price, 2) }}</td>
                          <td data-label="Clicks">
                  <div class="clicks-cell">{{ number_format($banner->clicks) }}</div>
                  <div style="font-size:10px;color:#94a3b8">{{ number_format($banner->impressions) }} imp.</div>
                </td>
                  <td>{{ $banner->approved_at?->format('d M Y') ?? 'Not approved' }}</td>
                 <td>{{ $banner->expired_at?->format('d M Y') ?? 'Not expired' }}</td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                    </div>
                   </div>
               </div>
               </div>
           </div>
       </div>
<footer class="mt-5 footer-section">
    @include('user.layouts.partials.footer')
</footer>
@endsection