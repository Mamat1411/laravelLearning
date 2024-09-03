<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mamat Blog | {{ $title }}</title>
    {{-- Bootstrap CDN and Icons --}}
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  </head>
  <body>
        @include('partials.navbar')

        <div class="container mt-3">
            @yield('container')
        </div>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
  </body>
</html>
