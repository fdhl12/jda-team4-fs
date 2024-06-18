<!DOCTYPE html>
<html lang="en">
  @include('components.header')
  <body class="leading-normal tracking-normal text-white gradient" style="font-family: 'Source Sans Pro', sans-serif;">
    <!--Nav-->
    @include('components.navbar')

    
    @yield('content')

    <!--Footer-->
    @include('components.footer')
    
  </body>
</html>