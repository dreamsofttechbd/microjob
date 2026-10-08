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
    <!-- title -->
    <div class="col-7 col-xsm-7 col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6 mt-4">
      <h6 class="text-dark fw-bold"><button class="btn btn-primary btn-sm"><i class="bi bi-list-check"></i> Post New Deal</button></h6>
    </div>
    <!-- butto -->
      <div class="col-5 col-xsm-5 col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6 text-end mt-4">
      <a class="btn btn-primary btn-sm" href="#" role="button"><i class="bi bi-list-ul"></i> All deals</a>
    </div>
    
  <!-- post deal -->
  <div class="col-12 col-xsm-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12 mt-3">
    <div class="card rounded-2">
      <div class="card-body">
        <!-- post deal -->
    <form class="row" method="post" action="{{route('user.store.babber.ads')}}" enctype="multipart/form-data">
      @csrf
    <div class="col-12">
    <label for="inputAddress" class="form-label">Title</label>
    <input type="text" class="form-control bg-white" name="title" placeholder="Title">
  </div>      
  <div class="col-md-4">
    <label for="inputPassword4" class="form-label">Select Duration</label>
   <select class="form-select form-control bg-white" aria-label="" name="days">
  @php 
   $packages = App\Models\BannerAdsPrice::orderBy('days','asc')->get();
  @endphp
  <option selected>Select Category</option>
  @foreach($packages as $package)
  <option value="{{$package->days}}">{{$package->days}}Days --> Price  ${{$package->price}}</option>
  @endforeach
  </select>
  </div>
  <div class="col-12">
    <label for="inputAddress2" class="form-label">Link</label>
   <input type="text" class="form-control bg-white" name="link" placeholder="www.facebook.com">
  </div>

   <div class="col-12">
    <label for="inputAddress2" class="form-label">image</label>
   <input type="file" class="form-control" name="thumbnail" >
  </div>

  <div class="col-12 mt-3">
    <button type="submit" class="btn btn-primary ms-1 btn-sm">Submit</button>
  </div>
</form>
<!-- end post deal -->
    </div>
    </div>
  </div>      
      </div>
          </div>
<footer class="mt-5 footer-section">
    @include('user.layouts.partials.footer')
</footer>
@endsection