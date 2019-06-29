
<?php echo form_open_multipart('admin/donvi/insert'); ?>
<div class="content-wrapper">
	<form action="<?php echo base_url() ?>admin/donvi/insert.html" enctype="multipart/form-data" method="POST" accept-charset="utf-8">
		<section class="content-header">
			<h1><i class="glyphicon glyphicon-hand-right"></i> Thêm đơn vị mới</h1>
			<div class="breadcrumb">
				<button type = "submit" class="btn btn-primary btn-sm">
					<span class="glyphicon glyphicon-floppy-save"></span>
					Lưu[Thêm]
				</button>
				<a class="btn btn-primary btn-sm" href="admin/donvi" role="button">
					<span class="glyphicon glyphicon-remove do_nos"></span> Thoát
				</a>
			</div>
		</section>
		<!-- Main content -->
		<section class="content">
			<div class="row">
				<div class="col-md-12">
					<div class="box" id="view">
						<div class="box-body">
							<div class="col-md-7">
								<?php //echo validation_errors(); ?>
								<div class="form-group">
									<label>Tên đơn vị <span class = "maudo">(*)</span></label>
									<input type="text" class="form-control" name="tendonvi" style="width:100%" placeholder="Tên đơn vị">
									<div class="error" id="password_error"><?php echo form_error('name')?></div>
								</div>								
								<div class="form-group">
									<label>Quyền truy cập</label>
									<select name="access" class="form-control" style="width:300px">
										<option value = "">[--Chọn quyền truy cập--]</option>
										<option value="1">Công khai</option>
										<option value="0">Hạn chế</option>
									</select>
								</div>							
								<div class="form-group">
									<label>Trạng thái</label>
									<select name="status" class="form-control" style="width:300px">
										<option value = "">[--Chọn trạng thái--]</option>
										<option value="1">Xuất bản</option>
										<option value="0">Chưa xuất bản</option>
									</select>
								</div>
							</div>
						</div>
					</div><!-- /.box -->
				</div>
			<!-- /.col -->
		  <!-- /.row -->
		</section>
	</form>
<!-- /.content -->
</div><!-- /.content-wrapper -->