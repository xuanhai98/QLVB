<?php echo form_open('admin/user/insert'); ?>
<div class="content-wrapper">
	<form action="<?php echo base_url() ?>admin/user/insert.html" enctype="multipart/form-data" method="POST" accept-charset="utf-8">
		<section class="content-header">
			<h1><i class="glyphicon glyphicon-cd"></i> Thêm thành viên mới</h1>
			<div class="breadcrumb">
				<button type = "submit" class="btn btn-primary btn-sm">
					<span class="glyphicon glyphicon-floppy-save"></span>
					Lưu[Thêm]
				</button>
				<a class="btn btn-primary btn-sm" href="admin" role="button">
					<span class="glyphicon glyphicon-remove do_nos"></span> Thoát
				</a>
			</div>
		</section>
	<div class="container">
		<div class="accordion accordion-lg divcenter nobottommargin clearfix" style="max-width: 550px;">
			<div id="register">
				<div class="acctitle acctitlec"><i class="acc-closed fa fa-user"></i><i class="acc-open fa fa-user-plus"></i>Thêm thành viên</div>
				<div class="acc_content clearfix" style="display: block;">
					<form accept-charset="UTF-8" action="" id="customer_register" method="post">
						<!---->
						<input name="FormType" type="hidden" value="customer_register">
						<input name="utf8" type="hidden" value="true"> 
						<div class="col_full">
							<label for="first_name">Tên đăng nhập:<span class="require_symbol">*</span></label>
							<input type="text" id="first_name" name="username" value="" class="form-control" placeholder="Tên đăng nhập">
							<div class="error" id="username_error"><?php echo form_error('username')?></div>
						</div> 
						<div class="col_full">
							<label for="register-form-password">Mật khẩu:<span class="require_symbol">*</span></label>
							<input type="password" id="register-form-password" name="password" placeholder="Mật khẩu" class="form-control">
							<div class="error" id="password_error"><?php echo form_error('password')?></div>
						</div>

						<div class="col_full">
							<label for="register-form-repassword">Nhập lại mật khẩu:<span class="require_symbol">* </span></label>
							<input type="password" id="register-form-repassword" name="re_password" value="" class="form-control" placeholder="Nhập lại mật khẩu">
							<div class="error" id="re_password_error"><?php echo form_error('re_password')?></div>
						</div>
						<div class="col_full">
							<label for="first_name">Họ tên:<span class="require_symbol">*</span></label>
							<input type="text" id="first_name" name="name" placeholder="Họ tên" class="form-control">
							<div class="error" id="name_error"><?php echo form_error('name')?></div>
						</div>              
						<div class="col_full">
							<label for="register-form-email">Email:</label>
							<input type="text" id="register-form-email" name="email" value="" class="form-control" placeholder="Nhập email">
							
						</div>
						<div class="col_full">
							<label for="first_name">Số điện thoại:</label>
							<input type="text" id="first_name" name="phone" placeholder="Số điện thoại" class="form-control">
							
						</div>
						<div class="form-group">
									<label>Nhóm thành viên<span class = "maudo">(*)</span></label>
									<select name="donvi" class="form-control" style="width:300px">
										<option value = "">[--Chọn đơn vị--]</option>
											<?php  
												$list=$this->Mdonvi->listall();
												echo $list;
												$option_parentid="";
												foreach ($list as $r) {
													$option_parentid.="<option value='".$r['id']."'>".$r['tendonvi']."</option>";
												}
												echo $option_parentid;
												echo $list;
											?> 
									</select>
									<div class="error" id="password_error"><?php echo form_error('catid')?></div>
						</div>
							
					</form>
				</div>
			</div>
		</div>   
	</div>
</div>