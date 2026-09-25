@extends('user.layouts.app')
@section('content')
    <header class="topbar">
        @include('user.layouts.partials.navbar') 
    </header>
  <aside class="sidebar" id="sidebar">
      @include('user.layouts.partials.sidebar')
  </aside>
    <!--middd-->
    <div class="content">
             <div class="row g-4">
               @include('user.layouts.partials.braking_news')
               semfklds xdfmodmf
               <!--job table-->
               <div class="col-lg-12">
                <div class="card border-0 rounded-2">
                    <div class="card-body">
                        <div class="filter-scroll">
                <form>
                <div class="row flex-nowrap flex-sm-wrap">
                    <div class="col-10 col-sm-4 col-md-4 mt-3">
                        <select class="filter-select w-100">
                            <option>All Categories</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                        </select>
                    </div>

                    <div class="col-10 col-sm-3 col-md-3 mt-3">
                        <div class="position-relative">
                            <i class="bi bi-search position-absolute top-50 start-0 translate-middle-y ms-3"></i>
                            <input type="text" class="form-control ps-5" placeholder="Search Jobs Here">
                        </div>
                    </div>
                    <div class="col-10 col-sm-2 col-md-2 mt-3">
                        <select class="filter-select w-100 bg-white">
                            <option>Default (Priority)</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                        </select>
                    </div>
                    <div class="col-3 col-sm-3 col-md-3 mt-3 text-end">
                        <button type="button" class="btn btn-primary text-nowrap fs-6">
                            Available Jobs
                            <span class="badge text-bg-danger">400</span>
                        </button>
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
                          <th scope="col">Zone</th>
                          <th scope="col">Title</th>
                          <th scope="col">Earning</th>
                          <th scope="col">Workers</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <th scope="row">1</th>
                          <td>Mark</td>
                          <td>Otto</td>
                          <td>@mdo</td>
                          <td>@mdo</td>
                        </tr>
                      </tbody>
                    </table>
                    </div>
                   </div>
               </div>
               </div>
           </div>
       </div>
    <!--end midde-->
<footer class="mt-5 footer-section">
    @include('user.layouts.partials.footer')
</footer>
@endsection