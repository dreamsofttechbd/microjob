<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
   <title>JobFixs Online Jobs Marketplace</title>
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
