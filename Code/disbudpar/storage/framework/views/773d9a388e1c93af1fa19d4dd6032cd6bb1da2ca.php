<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  <title><?php echo $__env->yieldContent('title'); ?></title>

  <!-- Favicons -->
  <link rel="icon" type="image/png" sizes="16x16" href="<?php echo e(asset('admin/img/logolightaceh.png')); ?>">

  <!-- Bootstrap core CSS -->
  <link href="<?php echo e(asset('admin/lib/bootstrap/css/bootstrap.min.css')); ?>" rel="stylesheet">
  <!--external css-->
  <link href="<?php echo e(asset('admin/lib/font-awesome/css/font-awesome.css')); ?>" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="<?php echo e(asset('admin/css/zabuto_calendar.css')); ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo e(asset('admin/lib/gritter/css/jquery.gritter.css')); ?>" />
  <!-- Custom styles for this template -->
  <link href="<?php echo e(asset('admin/css/style.css')); ?>" rel="stylesheet">
  <link href="<?php echo e(asset('admin/css/style-responsive.css')); ?>" rel="stylesheet">
  <script src="<?php echo e(asset('admin/lib/chart-master/Chart.js')); ?>"></script>
</head>

<body>
  <section id="container">
    <!--header start-->
    <header class="header black-bg">
      <div class="sidebar-toggle-box">
        <div class="fa fa-bars tooltips" data-placement="right"></div>
      </div>
      <!--logo start-->
      <a href="#" class="logo"><b>Pariwisata <span>Aceh</span></b></a>
      <!--logo end-->
      
      <div class="top-menu">
        <ul class="nav pull-right top-menu">
          <li><a class="logout" href="<?php echo e(route('logout')); ?>" 
                onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                <?php echo e(__('Logout')); ?></a>

                <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                  <?php echo csrf_field(); ?>
                </form>
          </li>
        </ul>
      </div>
    </header>
    <!--header end-->
    <!-- **********************************************************************************************************************************************************
        MAIN SIDEBAR MENU
        *********************************************************************************************************************************************************** -->
    <!--sidebar start-->
    <aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">
          <p class="centered"><a href="#"><img src="<?php echo e(asset('admin/img/CahayaAcehPutih.png')); ?>" class="img-box" width="80"></a></p>
          <h5 class="centered">Dinas Kebudayaan Dan Pariwisata Aceh</h5>
          <li class="sub-menu">
            <a href="<?php echo e(route('home')); ?>"><i class="fa fa-dashboard"></i>Dashboard</a>
          </li>
          <li class="sub-menu">
              <a href="<?php echo e(route('datadestinasi')); ?>"><i class="fa fa-map-marker"></i>Destinasi Wisata</a>
          </li>
          <li class="sub-menu">
              <a href="<?php echo e(route('datahotel')); ?>"><i class="fa fa-home"></i>Hotel</a>
          </li>
          <li class="sub-menu">
              <a href="<?php echo e(route('datakuliner')); ?>"><i class="fa fa-cutlery"></i>Kuliner</a>
          </li>
          <li class="sub-menu">
              <a href="<?php echo e(route('datasouvenir')); ?>"><i class="fa fa-shopping-bag"></i>Souvenir</a>
          </li>
          <li class="sub-menu">
              <a href="<?php echo e(route('datapemandu')); ?>"><i class="fa fa-user"></i>Pemandu Wisata</a>
          </li>
          <li class="sub-menu">
              <a href="<?php echo e(route('datatravel')); ?>"><i class="fa fa-car"></i>Jasa Travel</a>
          </li>
        </ul>
        <!-- sidebar menu end-->
      </div>
    </aside>
    <!--sidebar end-->

    <!--main content start-->
    <?php echo $__env->yieldContent('content'); ?>
    <!--main content end-->
    <!--footer start-->
    <footer class="site-footer">
      <div class="text-center">
        <p>
          &copy; Copyrights <strong>Dashio</strong>. All Rights Reserved
        </p>
        <div class="credits">
          <!--
            You are NOT allowed to delete the credit link to TemplateMag with free version.
            You can delete the credit link only if you bought the pro version.
            Buy the pro version with working PHP/AJAX contact form: https://templatemag.com/dashio-bootstrap-admin-template/
            Licensing information: https://templatemag.com/license/
          -->
          Created with Dashio template by <a href="https://templatemag.com/">TemplateMag</a>
        </div>
        <a href="index.html#" class="go-top">
          <i class="fa fa-angle-up"></i>
          </a>
      </div>
    </footer>
    <!--footer end-->
  </section>
  <!-- js placed at the end of the document so the pages load faster -->
  <script src="<?php echo e(asset('admin/jquery-3.4.1.min.js')); ?>"></script>

  <script src="<?php echo e(asset('admin/lib/bootstrap/js/bootstrap.min.js')); ?>"></script>
  <script class="include" type="text/javascript" src="<?php echo e(asset('admin/lib/jquery.dcjqaccordion.2.7.js')); ?>"></script>
  <script src="<?php echo e(asset('admin/lib/jquery.scrollTo.min.js')); ?>"></script>
  <script src="<?php echo e(asset('admin/lib/jquery.nicescroll.js')); ?>" type="text/javascript"></script>
  <script src="<?php echo e(asset('admin/lib/jquery.sparkline.js')); ?>"></script>
  <!--common script for all pages-->
  <script src="<?php echo e(asset('admin/lib/common-scripts.js')); ?>"></script>
  <!--script for this page-->
  <script src="<?php echo e(asset('admin/lib/sparkline-chart.js')); ?>"></script>
  <script src="<?php echo e(asset('admin/lib/zabuto_calendar.js')); ?>"></script>
</body>

</html>
<?php /**PATH C:\xampp\htdocs\disbudpar\resources\views/layouts/layout_admin.blade.php ENDPATH**/ ?>