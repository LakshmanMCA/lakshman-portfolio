<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>@yield('title', 'Devfolio-Lakshman')</title>

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

  <style>
    body {
      margin: 0;
      font-family: Arial, sans-serif;
      background: #07182e;
      color: #fff;
    }

    header {
      position: sticky;
      top: 0;
      z-index: 1000;
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 20px 50px;
      background: #07182e;
    }

    header h1 {
      color: #4aa9ff;
    }

    nav a {
      margin: 0 15px;
      text-decoration: none;
      color: #fff;
      font-weight: 500;
    }

    .btn {
      background: #ff2e97;
      padding: 10px 20px;
      border-radius: 5px;
      text-decoration: none;
      color: #fff;
    }
  </style>

  @stack('styles')
</head>

<body>

  {{-- Navbar --}}
  @include('web.navbar')

  {{-- Page Content --}}
  @yield('content')

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

  @stack('scripts')
  @include('web.footer')
</body>
</html>
