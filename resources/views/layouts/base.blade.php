<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name='csrf-token' content="{{ csrf_token() }}">

    <!-- Bootstrap CSS -->
    <link href="{{ asset('/dist/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- JQuery -->
    <script src="{{ asset('/dist/js/jquery-3.6.0.min.js') }}"></script>
    
    <title>Laravel | CRUD AJAX</title>
  </head>
  <body>
    @yield('content')

     <!-- Bootstrap JS -->
    <script src="{{ asset('/dist/js/bootstrap.bundle.min.js') }}"></script>
  </body>
</html>
