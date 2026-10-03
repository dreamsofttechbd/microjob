<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
<meta name="csrf-token" content="{{ csrf_token() }}">
<title>Admin Dashboard</title>
<link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/admin/dashboard.css')}}">
</head>
<body>
<!-- Main content -->
<main class="content">
  <div class="content-inner">
   @yield('content')
  </div>
</main>
 <!-- <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script> -->
 <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/js/bootstrap.bundle.min.js"></script>
<script>
  const sidebar = document.getElementById('sidebar');
  const backdrop = document.getElementById('backdrop');
  const toggleBtn = document.getElementById('toggleBtn');
  function openSidebar(){ sidebar.classList.add('show'); backdrop.classList.add('show'); }
  function closeSidebar(){ sidebar.classList.remove('show'); backdrop.classList.remove('show'); }
  toggleBtn.addEventListener('click', () => {
    sidebar.classList.contains('show') ? closeSidebar() : openSidebar();
  });
  backdrop.addEventListener('click', closeSidebar);
</script>
</body>
</html>
