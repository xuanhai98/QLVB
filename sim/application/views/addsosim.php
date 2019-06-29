<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Thêm mới số sim</title>
	<script type="text/javascript" src="<?php echo(base_url()) ?>vendor/bootstrap.js"></script>
	<link rel="stylesheet" href="<?php echo(base_url()) ?>vendor/bootstrap.css">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="alert alert-success" role="alert" align="center">
				<strong><h1>Thêm mới số điện thoại VIP</h1></strong>
			</div>	
			</div>			
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-md-6 push-md-3">
				<form method="POST" action="<?php echo(base_url())?>index.php/Loginhome/add">
			  <div class="form-group row">
			    <label for="inputEmail3" class="col-sm-2 col-form-label">Số: </label>
			    <div class="col-sm-10">
			      <input type="text" name="so" class="form-control" id="inputEmail3" placeholder="Nhập số điện thoại">
			    </div>
			  </div>
			  <div class="form-group row">
			    <label for="inputPassword3" class="col-sm-2 col-form-label">Giá: </label>
			    <div class="col-sm-10">
			      <input type="text" name="ten" class="form-control" id="inputPassword3" placeholder="Nhập giá tiền">
			    </div>
			  </div>
			  
			  <div class="form-group row">
			    <div class="col-sm-10">
			      <button type="submit" class="btn btn-primary">Thêm mới</button>
			    </div>
			  </div>
			</form>
			</div>
		</div>
	</div>
</body>
</html>