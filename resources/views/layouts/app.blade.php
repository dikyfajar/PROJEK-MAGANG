<!doctype html>
<html lang="en">

  <head>
    
    <!-- memanggil head yg ada pada includes -->
    @include('includes.head')

  </head>

  <body>

    <!-- sidebar -->
    @include('includes.navbar')
    <!-- memanggil content -->
    @yield('content')
    <!-- memanggil script yg ada pada includes -->
    @include('includes.script')

  </body>

</html>