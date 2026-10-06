<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'JobFixs | Best Freelancer Online Jobs Marketplace')</title>
    <meta name="title" content="JobFixs | Best Freelancer Online Jobs Marketplace">
    <meta name="description" content="JobFixs is the best freelancer online jobs marketplace to post jobs, find freelance work, hire skilled workers, and grow your career.">
    <meta name="keywords" content="Freelance Jobs, Freelancing, Online Jobs, Remote Jobs, Work From Home, Micro Jobs, Freelance Marketplace, Online Job Marketplace, Part Time Jobs, Gig Jobs, Online Work, Earn Money Online, Hire Freelancers, Find Freelancers, Job Marketplace">
    <meta name="author" content="jobfixs">
    <meta name="publisher" content="jobfixs">
    <meta name="copyright" content="&copy; {{ date('Y') }} All Rights Reserved by jobfixs">
    <meta name="robots" content="index, follow">
    <meta name="googlebot" content="index, follow">
    <meta name="bingbot" content="index, follow">
    <link rel="canonical" href="{{ url()->current() }}">
    @if($setting?->favicon)
    <link rel="icon" type="image/x-icon" href="{{ asset('storage/' . $setting->favicon) }}">
    @endif
    @if($setting?->favicon)
    <link rel="apple-touch-icon" href="{{ asset('storage/' . $setting->favicon) }}">
    @endif
    <meta property="og:title" content="JobFixs | Best Freelancer Online Jobs Marketplace">
    <meta property="og:description" content="JobFixs is the best freelancer online jobs marketplace to post jobs, find freelance work, hire skilled workers, and grow your career.">
    <meta property="og:image" content="https://jobfixs.com/images/og-image.jpg">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:image:alt" content="JobFixs | Best Freelancer Online Jobs Marketplace">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="jobfixs">
    <meta property="og:locale" content="en_US">
    <!-- Twitter / X Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="JobFixs | Best Freelancer Online Jobs Marketplace">
    <meta name="twitter:description" content="JobFixs is the best freelancer online jobs marketplace to post jobs, find freelance work, hire skilled workers, and grow your career.">
    <meta name="twitter:image" content="{{ asset('images/og-image.jpg') }}">
    <meta name="twitter:image:alt" content="JobFixs | Best Freelancer Online Jobs Marketplace">
    <!-- Add these only if you have actual X/Twitter accounts -->
    <meta name="twitter:site" content="@jobfixs">
    <meta name="twitter:creator" content="@jobfixs">

       <!-- Theme / Mobile -->
    <meta name="theme-color" content="#ffffff">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="default">
    <meta name="apple-mobile-web-app-title" content="jobfixs">
    <meta name="mobile-web-app-capable" content="yes">
    <!-- Referrer -->
    <meta name="referrer" content="strict-origin-when-cross-origin">
    <!-- Format Detection -->
    <meta name="format-detection" content="telephone=no">
    <!-- Generator (Optional) -->
    <meta name="generator" content="Laravel">
    <!-- Language / Region -->
    <meta name="language" content="English">
    <meta http-equiv="content-language" content="en-US">
    <!-- Verification (Search Engines) -->
    <meta name="google-site-verification" content="verification-code">
    <meta name="msvalidate.01" content="verification-code">
    <meta name="yandex-verification" content="verification-code">
    <meta name="naver-site-verification" content="verification-code">
    <meta name="p:domain_verify" content="verification-code">
    <!-- Favicon / Icons -->
    <link rel="icon" type="image/x-icon" href="{{ asset('/images/favicon.ico') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('/images/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('/images/favicon-16x16.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('/images/apple-touch-icon.png') }}">
    <link rel="mask-icon" href="{{ asset('/images/safari-pinned-tab.svg') }}" color="#000000">
    <link rel="manifest" href="{{ asset('site.webmanifest') }}">
    <!-- Preconnect / Performance -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="dns-prefetch" href="https://fonts.googleapis.com">
    <link rel="preload" href="/font.woff2" as="font" type="font/woff2" crossorigin>
      <!-- Schema.org Structured Data -->
    @include('frontend.layouts.partials.schema')
    <!-- End Schema.org Structured Data -->
    <!-- Scripts -->
     <!-- font-awesome -->
     <link rel="stylesheet" type="text/css" href="{{ asset('assets/font-awesome/css/font-awesome.css')}}">
     <link rel="stylesheet" type="text/css" href="{{ asset('assets/font-awesome/css/font-awesome.min.css')}}">
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
     <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css') }}">
      <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}"> 
    <!-- css -->
    <!-- Custom Styles -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css')}}">
</head>
<body>
 
        <main class="py-0">
            @yield('content')
        </main>
 
    <!--<script src="{{ asset('home/js/bootstrap.bundle.min.js') }}"></script>-->
     <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
</body>
</html>
