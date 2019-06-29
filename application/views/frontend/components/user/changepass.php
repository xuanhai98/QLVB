<?php echo form_open('user/changepassword'); ?>
<div class="content-wrapper">
	<form action="<?php echo base_url() ?>user/changepassword.html" enctype="multipart/form-data" method="POST" accept-charset="utf-8">
		<section class="content-header">
			<h1><i class="glyphicon glyphicon-cd"></i> Đổi mật khẩu</h1>
			<div class="breadcrumb">
				<button type = "submit" class="btn btn-primary btn-sm">
					<span class="glyphicon glyphicon-floppy-save"></span>
					Lưu[Thêm]
				</button>
				<a class="btn btn-primary btn-sm" href="trangchu" role="button">
					<span class="glyphicon glyphicon-remove do_nos"></span> Thoát
				</a>
			</div>
		</section>
	<div class="container">
		<div class="accordion accordion-lg divcenter nobottommargin clearfix" style="max-width: 550px;">
			<div id="register">
				<div class="acctitle acctitlec"><i class="acc-closed fa fa-user"></i><i class="acc-open fa fa-user-plus"></i>Đổi mật khẩu</div>
				<div class="acc_content clearfix" style="display: block;">
					<form accept-charset="UTF-8" action="" id="customer_register" method="post">
						<!---->
						<input name="FormType" type="hidden" value="customer_register">
						<input name="utf8" type="hidden" value="true">
						<div class="col_full">
							<label for="register-form-password">Tên đăng nhập <span class="require_symbol">*</span></label>
							<input type="text" id="username" name="username" placeholder="Tên đăng nhập"class="form-control">
							<div class="error" id="password_error"><?php echo form_error('password')?></div>
						</div>
						<div class="col_full">
							<label for="register-form-password">Mật khẩu cũ:<span class="require_symbol">*</span></label>
							<input type="password" id="register-form-password" name="old_password" placeholder="Mật khẩu" class="form-control">
							<div class="error" id="password_error"><?php echo form_error('password')?></div>
						</div>
						
						<div class="col_full">
							<label for="register-form-password">Mật khẩu mới:<span class="require_symbol">*</span></label>
							<input type="password" id="register-form-password" name="new_password" placeholder="Mật khẩu" class="form-control">
							<div class="error" id="password_error"><?php echo form_error('password')?></div>
						</div>

						<div class="col_full">
							<label for="register-form-repassword">Nhập lại mật khẩu:<span class="require_symbol">* </span></label>
							<input type="password" id="register-form-repassword" name="re_password" value="" class="form-control" placeholder="Nhập lại mật khẩu">
							<div class="error" id="re_password_error"><?php echo form_error('re_password')?></div>
						</div>							
					</form>
				</div>
			</div>
		</div>   
	</div>
</div>