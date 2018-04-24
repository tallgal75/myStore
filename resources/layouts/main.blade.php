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
  @section('header')
      @include('includes.header')
  @show
  <!-- header area end here -->

  <!-- section -->
  @yield('slider')
  <!-- end section -->

  @section('quick_cart')
    <div class="quick_cat">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-3 p-0">
            <div class="q_cat">
              <div class="image">
                <img src="assets/images/4_ad.jpg" alt="">
              </div>
              <div class="content">
                <h3>Lavie Rockwool</h3>
                <p>Synthetic material tan colored handbag with great summer collections.</p>
                <div class="button">
                  <a href="#">Shop Today <i class="fa fa-caret-right" aria-hidden="true"></i></a>
                </div>  
              </div>  
            </div>
          </div>
          <div class="col-md-3 p-0">
            <div class="q_cat">
              <div class="image">
                <img src="assets/images/3_ad.jpg" alt="">
              </div>
              <div class="content">
                <h3>Diana Korr Lay</h3>
                <p>Synthetic material tan colored handbag with great summer collections.</p>
                <div class="button">
                  <a href="#">Shop Today <i class="fa fa-caret-right" aria-hidden="true"></i></a>
                </div>  
              </div>   
            </div>
          </div>
          <div class="col-md-3 p-0">
            <div class="q_cat">
              <div class="image">
                <img src="assets/images/2_ad.jpg" alt="">
              </div>
              <div class="content">
                <h3>Capresem Darla</h3>
                <p>Synthetic material tan colored handbag with great summer collections.</p>
                <div class="button">
                  <a href="#">Shop Today <i class="fa fa-caret-right" aria-hidden="true"></i></a>
                </div>  
              </div>   
            </div>
          </div>
          <div class="col-md-3 p-0">
            <div class="q_cat">
              <div class="image">
                <img src="assets/images/1_ad.jpg" alt="">
              </div>
              <div class="content">
                <h3>Stellan Ricci</h3>
                <p>Synthetic material tan colored handbag with great summer collections.</p>
                <div class="button">
                  <a href="#">Shop Today <i class="fa fa-caret-right" aria-hidden="true"></i></a>
                </div>  
              </div>   
            </div>
          </div>
        </div>  
      </div>  
    </div>  
  @show


    <!-- section -->
    @yield('category')
    <!-- End section -->


    <!-- section -->
    @yield('shop')
    <!-- End section -->


    <!-- section -->
    @yield('banner')
    <!-- End section -->

    <!-- section -->
    @yield('brands')
    <!-- End section -->

    <!-- section -->
    @yield('sales')
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