<!DOCTYPE html>
   <meta http-equiv="content-type" content="text/html;charset=utf-8" />
   <head>
      <meta name="description" content="Vali is a responsive and free admin theme built with Bootstrap 4, SASS and PUG.js. It's fully customizable and modular.">
      <meta name="csrf-token" content="{{ csrf_token() }}">
      <meta property="og:type" content="website">
  <!-- bellow two line for site logo and site name . logo show in before title and name show in title -->
      <!-- <link rel="icon" type="image/x-icon" href="{{ asset('/img/logo/')}}" > -->
      <!-- <title> @yield('title')</title>     -->
      <title> @yield('title') | Blog with Vue</title> 

      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      @include('admin.inc.header')
      @yield('custom_css')
   </head>
   <body class="app sidebar-mini rtl">
   <div class="wrapper">
      <!-- Navbar-->
      <header class="app-header">
         @include('admin.inc.top-header')
      </header>
      <!-- Sidebar menu-->
      @include('admin.inc.sidebar')
      <!-- End Sidebar menu -->
      <main class="app-content">
         @yield('content')
         
      </main>


      @include('admin.inc.footer-script') 
      @yield('custom_script')
      </div>
   </body>
</html>
