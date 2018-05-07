
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>Login</title>


    <link href="<?php echo base_url('assets/css/bootstrap.min.css');?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/css.css');?>" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.css');?>">
    <link href="<?php echo base_url('assets/font-awesome/css/font-awesome.css');?>" rel="stylesheet" />
    <link href="<?php echo base_url('assets/css/style.css');?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/style-responsive.css');?>" rel="stylesheet">

    </head>

  <body>

      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->

	  <div id="login-page">
	  	<div class="container">

		      <form class="form-login" action="<?php echo base_url('tambahlogin/save')?>?>" method="post">
		        <h2 class="form-login-heading">Create Account</h2>
		        <div class="login-wrap">
              <input type="text" class="form-control" name="nama" value="" placeholder="Nama" autofocus="">
              <br>
                <input type="hidden" class="form-control" name="level" value="user" placeholder=""  autofocus="">
                <br>
                <input type="text" class="form-control" name="jk" value="" placeholder="Jenis Kelamin" autofocus="">
                <br>
                <input type="text" class="form-control" name="alamat" value="" placeholder="Alamat" autofocus="">
                <br>
		            <input type="text" class="form-control" placeholder="User ID" name="username" autofocus>
		            <br>
		            <input name="password" type="password" class="form-control" placeholder="Password">
                <br>
		            <button class="btn btn-theme btn-block" href="" type="submit"><i class="fa fa-lock"></i> REGISTER</button>
		            <hr>


		          </div>
		          <!-- modal -->

		      </form>

	  	</div>
	  </div>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="<?php echo base_url('assets/js/jquery.js');?>"></script>
    <script src="<?php echo base_url('assets/js/bootstrap.min.js');?>"></script>

    <!--BACKSTRETCH-->
    <!-- You can use an image of whatever size. This script will stretch to fit in any screen size.-->
    <script type="text/javascript" src="<?php echo base_url('assets/js/jquery.backstretch.min.js');?>"></script>
    <script>
        $.backstretch("assets/img/login-bg.jpg", {speed: 500});
    </script>


  </body>
</html>
