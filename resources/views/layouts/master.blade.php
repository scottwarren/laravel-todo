<!DOCTYPE html>
<html>
  <head>
    <title>Laravel Todo - @yield('title')</title>
    <link rel="stylesheet" href="/css/app.css">
  </head>

  <body>
    @section('sidebar')
      This is the master sidebar.
    @show
    <div class="container">
      @yield('content')
    </div>

    <script src="/js/all.js"></script>
  </body>
</html>
