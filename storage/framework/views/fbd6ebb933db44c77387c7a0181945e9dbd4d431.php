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
    <?php
       $categories=[]; 
    ?>

    <?php $__env->startSection('header'); ?>
      <?php echo $__env->make('includes.header', array('categories'=>$categories), array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php echo $__env->yieldSection(); ?>
    <!-- header area end here -->

    <!-- section -->
    <?php echo $__env->yieldContent('content'); ?>
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