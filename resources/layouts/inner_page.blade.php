<!DOCTYPE html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="description" content="desc">
        <meta name="author" content="RadonTheme">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Title -->
        <title>@yield('title')</title>
        @php
          require('includes/top_scripts.php');
        @endphp
    </head>
<body>

    <!-- header area start here -->
    @php
       $categories=[]; 
    @endphp

    @section('header')
      @include('includes.header', array('categories'=>$categories))
    @show
    <!-- header area end here -->

    <!-- section -->
    @yield('content')
    <!-- End section -->

     
    <!-- footer start here -->
    @section('footer')
      @include('includes.footer')
    @show
    <!-- footer end here -->

    @php
       require('includes/bottom_scripts.php');
    @endphp   

  </body>
</html>