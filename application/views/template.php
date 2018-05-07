<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>OL-SHOPPER</title>
  <link rel="stylesheet" href="<?php echo base_url('assets/');?>datatables.net-bs/css/dataTables.bootstrap.min.css">
    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url('assets/css/bootstrap.css');?>" rel="stylesheet">
    <!--external css-->
    <link href="<?php echo base_url('assets/font-awesome/css/font-awesome.css');?>" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/zabuto_calendar.css');?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/sendiri.css');?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/js/gritter/css/jquery.gritter.css');?>" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/lineicons/style.css');?>">

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url('assets/css/style.css');?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/style-responsive.css');?>" rel="stylesheet">

    <script src="<?php echo base_url('assets/js/chart-master/Chart.js');?>"></script>
    <script src="<?php echo base_url('assets/jss/jquery.min.js');?>"></script>

  </head>

  <body>

  <section id="container" >
      <!-- **********************************************************************************************************************************************************
      TOP BAR CONTENT & NOTIFICATIONS
      *********************************************************************************************************************************************************** -->
      <!--header start-->
      <header class="header black-bg">
              <div class="sidebar-toggle-box">
                  <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
              </div>
            <!--logo start-->
            <a href="#" class="logo"><b>OL-SHOPPER</b></a>
            <!--logo end-->
            <div class="nav notify-row" id="top_menu">
                <!--  notification start -->
                <ul class="nav top-menu">
                    <!-- settings start -->
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="index.html#">
                            <i class="fa fa-tasks"></i>
                            <span class="badge bg-theme"></span>
                        </a>
                        <ul class="dropdown-menu extended tasks-bar">
                            <div class="notify-arrow notify-arrow-green"></div>
                            <li>
                                <p class="green">You have 0 pending tasks</p>
                            </li>
                            <li class="external">
                                <a href="#">See All Tasks</a>
                            </li>
                        </ul>
                    </li>
                    <!-- settings end -->
                    <!-- inbox dropdown start-->
                    <li id="header_inbox_bar" class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="index.html#">
                            <i class="fa fa-envelope-o"></i>
                            <span class="badge bg-theme"></span>
                        </a>
                        <ul class="dropdown-menu extended inbox">
                            <div class="notify-arrow notify-arrow-green"></div>
                            <li>
                                <p class="green">You have 0 new messages</p>
                            </li>
                            <li>
                                <a href="index.html#">See all messages</a>
                            </li>
                        </ul>
                    </li>
                    <!-- inbox dropdown end -->
                </ul>
                <!--  notification end -->
            </div>
            <div class="top-menu">
            	<ul class="nav pull-right top-menu">
            	</ul>
            </div>
        </header>
      <!--header end-->

      <!-- **********************************************************************************************************************************************************
      MAIN SIDEBAR MENU
      *********************************************************************************************************************************************************** -->
      <!--sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">

              	  <p class="centered"><a href="#"><img src="<?php echo base_url('assets/img/ui-sam.jpg');?>" class="img-circle" width="60"></a></p>
              	  <h5 class="centered">Admin</h5>

                  <li class="mt">
                    <?php echo anchor('Home','<i class="fa fa-dashboard"></i>
                    <span>Home</span>'); ?>
                  </li>

                  <li class="sub-menu">
                    <?php echo anchor('databarang','<i class="fa fa-desktop"></i>
                    <span>Data Barang</span>'); ?>
                </li>

                  <li class="sub-menu">
                      <?php echo anchor('datauser','<i class="fa fa-cogs"></i>
                      <span>Data User</span>'); ?>
                  </li>
                  <li class="sub-menu">
                      <?php echo anchor('datatransaksi','<i class="fa fa-book"></i>
                      <span>Data Transaksi</span>'); ?>
                  </li>
                  <li class="sub-menu">
                      <?php echo anchor('login/keluar','<i class="fa fa-sign-in"></i>
                      <span>Logout</span>'); ?>
                  </li>
              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
    <!--main content start-->
      <section id="main-content">
          <section class="wrapper">

              <div class="row">

                <?php
                $data['data'] = isset($data) ? $data : array();
                $this->load->view($content, $data); ?>
              </div><!--Row-->
          </section>
      </section>

      <!--main content end-->
      <!--footer start-->
      <footer class="site-footer">
          <div class="text-center">
              @copyright 2018
              <a href="#" class="go-top">
                  <i class="fa fa-angle-up"></i>
              </a>
          </div>
      </footer>
      <!--footer end-->
  </section>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="<?php echo base_url('assets/');?>datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url('assets/');?>datatables.net-bs/js/dataTables.bootstrap.min.js"></script>

    <script src="<?php echo base_url('assets/jss/confirm.js');?>"></script>
    <script src="<?php echo base_url('assets/jss/confirm2.js');?>"></script>
    <script src="<?php echo base_url('assets/jss/confirm3.js');?>"></script>
    <script src="<?php echo base_url('assets/js/jquery-1.8.3.min.js');?>"></script>
    <script src="<?php echo base_url('assets/js/bootstrap.min.js');?>"></script>
    <script class="include" type="text/javascript" src="<?php echo base_url('assets/js/jquery.dcjqaccordion.2.7.js');?>"></script>
    <script src="<?php echo base_url('assets/js/jquery.scrollTo.min.js');?>"></script>
    <script src="<?php echo base_url('assets/js/jquery.nicescroll.js');?>" type="text/javascript"></script>
    <script src="<?php echo base_url('assets/js/jquery.sparkline.js');?>"></script>


    <!--common script for all pages-->
    <script src="<?php echo base_url('assets/js/common-scripts.js');?>"></script>




  </body>
</html>
