<!DOCTYPE html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="description" content="desc">
        <meta name="author" content="RadonTheme">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Title -->
        <title><?php echo $__env->yieldContent('title'); ?></title>
        <?php
          require('includes/top_scripts.php');
        ?>
    </head>
<body>

  <!-- header area start here -->
  <?php $__env->startSection('header'); ?>
      <?php echo $__env->make('includes.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
  <?php echo $__env->yieldSection(); ?>
  <!-- header area end here -->

  <!-- section -->
  <?php echo $__env->yieldContent('slider'); ?>
  <!-- end section -->

  <?php $__env->startSection('quick_cart'); ?>
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
  <?php echo $__env->yieldSection(); ?>


    <!-- section -->
    <?php echo $__env->yieldContent('category'); ?>
    <!-- End section -->


    <!-- section -->
    <?php echo $__env->yieldContent('shop'); ?>
    <!-- End section -->


    <!-- section -->
    <?php echo $__env->yieldContent('banner'); ?>
    <!-- End section -->

    <!-- section -->
    <?php echo $__env->yieldContent('brands'); ?>
    <!-- End section -->

    <!-- section -->
    <?php echo $__env->yieldContent('sales'); ?>
    <!-- End section -->

    <!-- footer start here -->
    <?php $__env->startSection('footer'); ?>
      <?php echo $__env->make('includes.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php echo $__env->yieldSection(); ?>
   <!-- footer end here -->
   
    <?php
       require('includes/bottom_scripts.php');
    ?>   
    </body>
</html>