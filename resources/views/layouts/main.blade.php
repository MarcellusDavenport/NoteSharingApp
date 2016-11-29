<!DOCTYPE html>
<html lang="en">
  <head>
    @include('partials._head')
    @yield('extra_css')
  </head>

  <body>

    @include('partials._nav')


    <div class="container">
    	@yield('container')
    </div>



    @include('partials._javascript')
    @yield('extra_javascript');


  </body>

</html>
