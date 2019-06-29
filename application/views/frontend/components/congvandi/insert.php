<?php echo form_open_multipart('congvandi/insert'); ?>
<div class="content-wrapper">
	<form action="<?php echo base_url() ?>congvandi/insert.html" enctype="multipart/form-data" method="POST" accept-charset="utf-8">
		<section class="content-header">
			<h1><i class="glyphicon glyphicon-cd"></i> Thêm công văn đi mới</h1>
			<div class="breadcrumb">
				<button type = "submit" class="btn btn-primary btn-sm">
					<span class="glyphicon glyphicon-floppy-save"></span>
					Lưu[Thêm]
				</button>
				<a class="btn btn-primary btn-sm" href="congvandi" role="button">
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
							<div class="col-md-9">
							<?php echo validation_errors(); ?>
								<div class="form-group">
									<label>Số công văn  <span class = "maudo">(*)</span></label>
									<input type="text" class="form-control" name="cv_no" style="width:100%" placeholder="Số công văn">
									<div class="error" id="password_error"><?php echo form_error('name')?></div>
								</div>								
								<div class="form-group">
									<label>Loại công văn<span class = "maudo">(*)</span></label>
									<select name="cv_loaivanban" class="form-control" style="width:300px">
										<option value = "">[--Chọn loại công văn--]</option>
											<?php  
												$list=$this->Mloaivanban->listall();
												$option_parentid="";
												foreach ($list as $r) {
													$option_parentid.="<option value='".$r['id']."'>".$r['name']."</option>";
												}
												echo $option_parentid;
											?>
									</select>
									<div class="error" id="password_error"><?php echo form_error('catid')?></div>
								</div>
								<div class="form-group">
									<form>
										<label>Ngày phát hành</label>
											<input id="datepicker" name="senddate"/>
									</form>									
								</div>
								<div class="form-group">
									<label>Nội dung tóm tắt</label>
									<textarea name="summary" id="detail" class="form-control" ></textarea>
      								<script>//CKEDITOR.replace('detail');</script>
								</div>
								<div class="form-group">
									<label>Quyền truy cập</label>
									<select name="access" class="form-control" style="width:300px">
										<option value="1">Công khai</option>
										<option value="0">Hạn chế</option>
									</select>
								</div>
								<div class="form-group">
									<label>Trạng thái</label>
									<select name="status" class="form-control" style="width:300px">
										<option value="1">Xuất bản</option>
										<option value="0">Chưa xuất bản</option>
									</select>
								</div>
							</div>
							<div class="col-md-3">
							<div class="form-group">
									<label>Ghi chú</label>
									<textarea name="notes" id="notes" class="form-control" ></textarea>      								
								</div>
								<div class="form-group">
									<label>Người ký</label>
									<input name="signer" class="form-control" type="text">								
								<div class="form-group">
									<label>File đính kèm</label>
									<input type="file" name="image" id="image" size="25" >									
								</div>
							</div>
						</div>
					</div><!-- /.box -->
				</div>
			<!-- /.col -->
		  </div>
		  <!-- /.row -->
		</section>
	</form>
<!-- /.content -->
</div><!-- /.content-wrapper -->
<link rel="stylesheet" href="<?php echo base_url()?>public/themes/smoothness/jquery-ui.css">
<script src="<?php echo base_url()?>public/themes/smoothness/jquery.min.js"></script>
<script src="<?php echo base_url()?>public/themes/smoothness/jquery-ui.min.js"></script>
<script>
  $(document).ready(function() {
    $("#datepicker").datepicker({ dateFormat: 'dd-mm-yy' });                   
	
  });
  </script>