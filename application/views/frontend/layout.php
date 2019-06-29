<!DOCTYPE html>
<html>
<head>
	<base href="<?php echo base_url(); ?>"></base>
<link rel="shortcut icon" type="image/x-icon" href="/favicon.ico">
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?php echo $title ?></title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="shortcut icon" href="public/images/templates/favicon.png" />
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="public/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="public/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="public/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="public/css/AdminLTE.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="public/css/_all-skins.min.css">
  <link rel="stylesheet" href="public/css/style.css">
  <script src="public/js/loader.js"></script>
  <script src="public/ckeditor/ckeditor.js"></script>
</head>
<body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">
        <!-- Vung Header -->
        	<?php $this->load->view('frontend/modules/header'); ?>


        <!-- ./Vung Header -->
        	<?php $this->load->view('frontend/modules/menu'); ?>
  		<!-- Content Wrapper. Contains page content -->
  		<?php 
  			if(isset($com, $view))
  			{
  				$this->load->view('frontend/components/'.$com.'/'.$view);
  			}

  		?>
      <footer class="main-footer">
       <strong>Copyright &copy; 2018 <a href="http://utt.edu.vn">Utt.edu.vn</a>.</strong> fontend Folder
      </footer>
	    
    </div><!-- ./wrapper -->
	<!-- jQuery 2.2.3 -->
	<script src="public/js/jquery-2.2.3.min.js"></script>
	<!-- jQuery UI 1.11.4 -->
	<script src="public/js/jquery-ui.min.js"></script>
	<!-- Bootstrap 3.3.6 -->
	<script src="public/js/bootstrap.js"></script>
	<!-- AdminLTE App <script src="https://uhchat.net/code.php?f=fcf"></script>-->
	<script src="public/js/app.min.js"></script>
	
	
</body>
</html>
