<!DOCTYPE html>
<html class="h-full" lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <title>
        @yield('title')
    </title>

    @hasSection('description')
        <meta name="description" content="@yield('description')"/>
    @else
        @if(isset($pengaturan))
            <meta name="description" content="{{ $pengaturan['description'] }}"/>
        @endif
    @endif
    @if(isset($pengaturan))
        <meta name="keywords" content="{{ $pengaturan['keywords'] }}"/>
        <meta name="author" content="{{ $pengaturan['tags'] }}"/>
    @endif

    @if(isset($pengaturan))
    <link rel="icon" href="{{ asset($pengaturan['logo']) }}" type="image/x-icon"/>
    @endif


    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@2.2.19/dist/tailwind.min.css"/>
    <!--Replace with your tailwind.css once created-->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700" rel="stylesheet"/>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <!-- Define your gradient here - use online tools to find a gradient matching your branding-->

    <!-- Include Alpine.js -->
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.11.2/dist/alpine.min.js" defer></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
          integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>


    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        .gradient {
            background: linear-gradient(90deg, rgba(0, 0, 0, 0.6), rgba(255, 255, 255, 0.3));
        }

        .gradient video {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            z-index: -1;
        }

        html {
            scroll-behavior: smooth;
        }

        .bg-banner-1 {
          background-image: url('{{ asset('images/banner-1.svg') }}');
          background-size: cover;
          background-repeat: no-repeat;
          background-position: bottom;
          min-height: 100px; /* Adjust height as needed */
          position: relative;
          z-index: 0;
          
        }
        .active {
          @apply text-white bg-blue-900;
        }
       
     
     
     
       
    </style>
  </head>
  <body class="leading-normal tracking-normal text-white" style="font-family: 'Source Sans Pro', sans-serif;">
     <!--Nav-->
     @include('partials.navbar')

     <!-- Video sebagai latar belakang -->
  
        
 
         <!-- Konten lain di atas video -->
         @yield('content')
     
 
     <!--Footer-->
     @include('partials.footer')
    
  </body>
</html>