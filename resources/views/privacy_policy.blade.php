@extends('frontend.layouts.frontend')
@section('title', $title)
@section('content')
<div class="hero">
  @include('frontend.layouts.partials.navbar')
  <div class="contanier mt-5">
  <div class="row">
    <div class="col-12 col-xsm-12 col-sm-12 col-lg-12 col-xl-12 col-xxl-12 about-pages">
      <h2 class="text-center text-primary">Privacy Policy JobFixs</h2>
    </div>
  </div>
</div>
</div>

<div class="container">
  <div class="row">
    <div class="col-12 col-lg-12 pb-5">
      <div class="card border-0 mt-5">
        <div class="card-body">
      <h3 class="text-primary"><i class="bi bi-plus-square-fill text-primary"></i> Privacy Policy</h3>
          <p class="h5 text-muted mt-3">
            <span class="text-primary"> At Jobfixs</span>
             , we value your privacy and are committed to protecting your personal information. This Privacy Policy explains how we collect, use, store, and protect your information when you use our platform.
          </p>

      <p class="h5 text-muted mt-3">
        We may collect information such as your name, email address, contact details, account information, and activity on Jobfixs to provide and improve our services.
      </p>

      <p class="h5 text-muted mt-3">
        We use your information to manage your account, connect Job Posters and Job Workers, process transactions, improve platform security, and provide a better user experience.
      </p>


      <p class="h5 text-muted mt-3">
        We do not sell or misuse your personal information. We take reasonable security measures to protect your information from unauthorized access, loss, or misuse.By using Jobfixs, you agree to the practices described in this Privacy Policy.
         <br>
        <span class="text-dark fw-bold">Jobfixs — Your privacy, our responsibility.</span>
      </p>
        </div>
      </div>
    </div>
  </div>
</div>

<footer>
 @include('frontend.layouts.partials.footer')
</footer>
@endsection