<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title> Admin</title>
    <!-- Layout styles -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/materialdesignicons.min.css') }}">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="{{ asset('storage/images/favicon.ico') }}" />
  </head>
  <body>
      @yield('content')
    <!-- Custom js for this page -->
    <script src="{{ asset('js/dashboard.js') }}"></script>
    <!-- End custom js for this page -->
  </body>
</html>