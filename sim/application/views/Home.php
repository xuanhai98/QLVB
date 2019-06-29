<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Trang chủ</title>
	<script type="text/javascript" src="<?php echo(base_url()) ?>vendor/bootstrap.js"></script>
	<link rel="stylesheet" href="<?php echo(base_url()) ?>vendor/bootstrap.css">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="alert alert-danger" role="alert">
					<strong><h1 align="center">Danh sách số điện thoại</h1></strong>
				</div>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<?php 			
			foreach ($ds as $value) {				
			 ?>
			<div class="col-md-4">
				<div class="card">					
					<div class="card-block">
						<h4 class="card-title">Số: <?php echo($value['so']) ?></h4>
						<p class="card-text">Giá: <?php echo($value['ten']) ?></p>
						<a href="#" class="btn btn-outline-primary">Sửa</a>
						<a href="<?php echo(base_url()) ?>index.php/Loginhome/delete/<?php echo($value['id']) ?>" class="btn btn-outline-danger">Xóa</a>
					</div>
				</div>				
			</div>	
			<?php } ?>
		</div>
	</div>
</body>
</html>