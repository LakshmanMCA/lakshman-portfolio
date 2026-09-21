<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="csrf-token" content="{{ csrf_token() }}">
<meta name="robots" content="index, follow">
    <title>@yield('title', 'Devfolio-Lakshman')</title>

    {{-- Bootstrap --}}
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
        rel="stylesheet"
    >
    <link rel="stylesheet"
      href="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/devicon.min.css">
    {{-- Font Awesome --}}
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
    >
<link href="https://fonts.googleapis.com/css2?family=Codystar:wght@300;400&display=swap" rel="stylesheet">
    <style>
        * {
            box-sizing: border-box;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            margin: 0;
            padding: 0;
            background: #07182e;
            color: #fff;
            font-family: Arial, sans-serif;
        }

        /*
        |--------------------------------------------------------------------------
        | Content starts below fixed navbar
        |--------------------------------------------------------------------------
        */

        .page-content {
            padding-top: 70px;
            min-height: 100vh;
        }
    </style>

    @stack('styles')
</head>

<body>

    {{-- Navbar --}}
    @include('web.navbar')

    {{-- Main Content --}}
    <main class="page-content">
        @yield('content')
    </main>

    {{-- Footer --}}
    @include('web.footer')

    {{-- Bootstrap JS --}}
    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js">
    </script>

    @stack('scripts')

</body>

</html>