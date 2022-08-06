<!DOCTYPE html>
<html lang="en">
    <head>
    <title> {{ config('app.name', 'Autotramites') }}</title>
    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

    @livewireStyles

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>

    <!-- Required meta tags -->
    @include('admin.css')
    @include('admin.navigation-menu')

  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      @include('admin.sidebar')
      <!-- partial -->
        <!-- partial -->
        @include('admin.body')
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
  <div>

  </div>
  </body>


</html>
