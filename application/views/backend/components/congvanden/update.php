<?php echo form_open_multipart('admin/congvanden/update/'.$row['id']); ?>
<?php  
	$list=$this->Mloaivanban->category_list();
	$option_parentid="";
	foreach ($list as $r) {
		if($r['id']==$row['cv_loaivanban'])
		{
			$option_parentid.="<option selected value='".$r['id']."'>".$r['name']."</option>";
		}
		else
		{
			$option_parentid.="<option value='".$r['id']."'>".$r['name']."</option>";
		}
	}
?>
<div class="content-wrapper">
	<form action="<?php echo base_url() ?>admin/congvanden/update.html" enctype="multipart/form-data" method="POST" accept-charset="utf-8">
		<section class="content-header">
			<h1><i class="glyphicon glyphicon-cd"></i> Cập nhật công văn đến</h1>
			<div class="breadcrumb">
				<button type = "submit" class="btn btn-primary btn-sm">
					<span class="glyphicon glyphicon-floppy-save"></span>
					Lưu[Cập nhật]
				</button>
				<a class="btn btn-primary btn-sm" href="admin/congvanden" role="button">
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
									<input type="text" class="form-control" name="cv_no" style="width:100%" placeholder="Số công văn" value="<?php echo $row['cv_no'] ?>">
									<div class="error" id="password_error"><?php echo form_error('name')?></div>
								</div>
								<div class="form-group">
									<label>Số công văn đến  <span class = "maudo">(*)</span></label>
									<input type="text" class="form-control" name="cv_incomeno" style="width:100%" placeholder="Số công văn"value="<?php echo $row['cv_incomeno'] ?>">
									<div class="error" id="password_error"><?php echo form_error('name')?></div>
								</div>
								<div class="form-group">
									<label>Loại công văn<span class = "maudo">(*)</span></label>
									<select name="cv_loaivanban" class="form-control" style="width:300px">
										<option value = "">[--Chọn loại công văn--]</option>
											<?php  												
												echo $option_parentid;
											?>
									</select>
									<div class="error" id="password_error"><?php echo form_error('catid')?></div>
								</div>
								<div class="form-group">
									<form>
										<label>Ngày phát hành</label>
											<input id="datepicker" name="senddate" value="<?php echo $row['cv_senddate']?>"/>
										<span class="form-group">
										<label>Ngày nhận</label>
											<input id="datepicker1" name="receivedate"/ value="<?php echo $row['cv_receivedate']?>"/>
										</span>
								
									</form>									
								</div>
								<div class="form-group">
									<label>Nội dung tóm tắt</label>
									<textarea name="summary" id="detail" class="form-control" ><?php echo $row['cv_summary'] ?></textarea>
      								<script>//CKEDITOR.replace('detail');</script>
								</div>								
								<div class="form-group">
									<label>Quyền truy cập</label>
									<select name="access" class="form-control" style="width:300px">
										<option value="1">Công khai</option>
										<option value="0">Hạn chế</option>
									</select>
									<p>
									<?php 		$donvi = $this->Mdonvi->listall();												
												$checkbox="";												
												foreach ($donvi as $r){	
														$checkbox .='<input type="checkbox" name="cv_groupview[]" value="'.$r['id'].'">'.$r['tendonvi']."	";
													
												}
												echo $checkbox." ";	
																							
									?>
									</p>
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
									<textarea name="notes" id="notes" class="form-control" ><?php echo $row['cv_notes'] ?></textarea>      								
								</div>
								<div class="form-group">
									<label>Người ký</label>
									<input name="signer" class="form-control" type="text" value="<?php echo $row['cv_signer']?>">
								</div>	
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
                    
	$("#datepicker1").datepicker({ dateFormat: 'dd-mm-yy' });
  });
  </script>