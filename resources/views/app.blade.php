<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>@yield('title', 'Task Manager')</title>
  <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/demo.css') }}">
</head>
<body>
  @include('partials.sidebar')
  <div class="layout-page">
    @include('partials.navbar')
    <div class="content-wrapper container">
      @yield('content')
    </div>
  </div>
  <script src="{{ asset('assets/vendor/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('assets/js/main.js') }}"></script>
</body>
</html>