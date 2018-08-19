<!DOCTYPE html>
<head>
<title>The Project</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap-css -->
<link rel="stylesheet" href="<?php echo base_url()?>admin/css/bootstrap.min.css" >
<!-- //bootstrap-css -->
<!-- Custom CSS -->
<link href="<?php echo base_url()?>admin/css/style.css" rel='stylesheet' type='text/css' />
<link href="<?php echo base_url()?>admin/css/style-responsive.css" rel="stylesheet"/>
<!-- font CSS -->
<link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<!-- font-awesome icons -->
<link rel="stylesheet" href="<?php echo base_url()?>admin/css/font.css" type="text/css"/>
<link href="<?php echo base_url()?>admin/css/font-awesome.css" rel="stylesheet"> 
<link rel="stylesheet" href="<?php echo base_url()?>admin/css/morris.css" type="text/css"/>
<!-- calendar -->
<link rel="stylesheet" href="<?php echo base_url()?>admin/css/monthly.css">
<!-- //calendar -->
<!-- //font-awesome icons -->
<script src="<?php echo base_url()?>admin/js/jquery2.0.3.min.js"></script>
<script src="<?php echo base_url()?>admin/js/raphael-min.js"></script>
<script src="<?php echo base_url()?>admin/js/morris.js"></script>
</head>
<?php 
  //foreach ($admin as $a) {}
?>
<body>
<section id="container">
<!--header start-->
<header class="header fixed-top clearfix">
<!--logo start-->
<div class="brand">
    <a href="#" class="logo">
        T-PRO
    </a>
    <div class="sidebar-toggle-box">
        <div class="fa fa-bars"></div>
    </div>
</div>
<!--logo end-->

<div class="top-nav clearfix">
    <!--search & user info start-->
    <ul class="nav pull-right top-menu">
        <!-- user login dropdown start-->
        <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                <img alt="" src="<?php echo base_url()?>admin/images/user.png">
                <span class ="username">
                <?php
                  echo $admin['user_nama']; 
                ?>
                </span>
                <b class="caret"></b>
            </a>
            <ul class="dropdown-menu extended logout">
                <li><a href="#"><i class=" fa fa-suitcase"></i>Profile</a></li>
                <li><a href="<?php echo base_url('home/pr_logout')?>"><i class="fa fa-key"></i> Log Out</a></li>
            </ul>
        </li>
        <!-- user login dropdown end -->
       
    </ul>
    <!--search & user info end-->
</div>
</header>
<!--header end-->
<!--sidebar start-->
<aside>
    <div id="sidebar" class="nav-collapse">
        <!-- sidebar menu start-->
        <div class="leftside-navigation">
            <ul class="sidebar-menu" id="nav-accordion">
                <li>
                    <a class="active" href="#">
                        <i class="fa fa-dashboard"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                
            </ul>            
    </div>
        <!-- sidebar menu end-->
    </div>
</aside>
<!--sidebar end-->
<!--main content start-->
<section id="main-content">
  <section class="wrapper">
    </br></br></br></br></br>
    </br></br></br></br></br>
    </br></br></br></br></br>
    </br></br></br></br></br></br>
  </section>
 <!-- footer -->
      <div class="footer">
      <div class="wthree-copyright">
        <p>© <script>document.write(new Date().getFullYear());</script> The Project. All rights reserved</p>
      </div>
      </div>
  <!-- / footer -->
</section>
<!--main content end-->
</section>
<script src="<?php echo base_url()?>admin/js/bootstrap.js"></script>
<script src="<?php echo base_url()?>admin/js/jquery.dcjqaccordion.2.7.js"></script>
<script src="<?php echo base_url()?>admin/js/scripts.js"></script>
<script src="<?php echo base_url()?>admin/js/jquery.slimscroll.js"></script>
<script src="<?php echo base_url()?>admin/js/jquery.nicescroll.js"></script>
<!--[if lte IE 8]><script language="javascript" type="text/javascript" src="js/flot-chart/excanvas.min.js"></script><![endif]-->
<script src="<?php echo base_url()?>admin/js/jquery.scrollTo.js"></script>
<!-- morris JavaScript -->  
<script>
  $(document).ready(function() {
    //BOX BUTTON SHOW AND CLOSE
     jQuery('.small-graph-box').hover(function() {
      jQuery(this).find('.box-button').fadeIn('fast');
     }, function() {
      jQuery(this).find('.box-button').fadeOut('fast');
     });
     jQuery('.small-graph-box .box-close').click(function() {
      jQuery(this).closest('.small-graph-box').fadeOut(200);
      return false;
     });     
  });
  </script>
</body>
</html>
