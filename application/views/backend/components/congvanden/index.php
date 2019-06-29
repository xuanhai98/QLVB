
<div class="content-wrapper">
	<section class="content-header">
		<h1><i class="glyphicon glyphicon-cd"></i> Danh sách công văn đến</h1>
		<div class="breadcrumb">
			<a class="btn btn-primary btn-sm" href="<?php echo base_url()?>admin/congvanden/insert" role="button">
				<span class="glyphicon glyphicon-plus"></span> Thêm mới
			</a>
		
			<a class="btn btn-primary btn-sm" href="admin/" role="button">
					<span class="glyphicon glyphicon-remove do_nos"></span> Thoát
				</a>
		</div>
	</section>
	<!-- Main content -->
	<section class="content">
		<div class="row">
			<div class="col-md-12">
				<div class="box" id="view">
					<div class="box-header with-border">
						<!-- Search Limit -->
						<!-- <section class="content-search">
							<div class="form-inline">
								<form action="search" method= "get">
								<div class="input-group">
										<span class="input-group-addon" id="basic-addon1">Tìm kiếm</span>
										<input type="text" name="search" onkeypress="FEnter(event);" id="search" class="form-control">
										<span class="input-group-addon"><button type="submit" class=""><i class="glyphicon glyphicon-search"></i></button></span>
									
								</div>
								
								<div class="input-group">
									<span class="input-group-addon" id="basic-addon1">Hiển thị</span>
									<select name="limit" id="limit" onchange="FChange();" class="form-control">
										<option value="10">10</option>
										<option value="20">20</option>
										<option value="30">30</option>
										<option value="40">40</option>
										<option value="50">50</option>
										<option value="100">100</option>
										<option value="all">Tất cả</option>
									</select>
								</div>
								</form>
							</div>
						</section> -->
						<section class="content-search">
							<div class="form-inline">
								<div class="input-group">
									<span class="input-group-addon" id="basic-addon1">Tìm kiếm</span>
									<input type="text" name="search" onkeypress="FEnter(event);" id="search" class="form-control">
									<span class="input-group-addon"><i onclick="FChange();" class="glyphicon glyphicon-search"></i></span>
								</div>
								<div class="input-group">
									<span class="input-group-addon" id="basic-addon1">Hiển thị</span>
									<select name="limit" id="limit" onchange="FChange();" class="form-control">
										<option value="10">10</option>
										<option value="20">20</option>
										<option value="30">30</option>
										<option value="40">40</option>
										<option value="50">50</option>
										<option value="100">100</option>
										<option value="all">Tất cả</option>
									</select>
								</div>
							</div>
						</section>
						<!--./Search Limit -->
						<div class="box-tools pull-right">
							<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
						</div>
					</div>
					<!-- /.box-header -->
					<div class="box-body">
						<?php  if($this->session->flashdata('success')):?>
	                        <div class="row">
	                            <div class="alert alert-success">
	                                <?php echo $this->session->flashdata('success'); ?>
	                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
	                            </div>
	                        </div>
	                    <?php  endif;?>
	                    <?php  if($this->session->flashdata('error')):?>
	                        <div class="row">
	                            <div class="alert alert-error">
	                                <?php echo $this->session->flashdata('error'); ?>
	                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
	                            </div>
	                        </div>
	                    <?php  endif;?>
						<div class="row" style='padding:0px; margin:0px;'>
							<!--ND-->
							<div class="table-responsive">
								<table class="table table-hover table-bordered">
									<thead>
										<tr>
											<th class='text	-center' style='width:10px;'><input name='checkAll' id='checkAll' type='checkbox'/></th>
											<th class="text-center" style="width:20px">ID</th>
											<th class="text-center" style="width:40px">Số CV</th>
											<th class="text-center" style="width:40px">inCV</th>
											<th class="text-center" style="width:90px">Ngày nhận</th>
											<th class="text-center" style="width:90px">Ngày p/h</th>											
											<th class="text-center" style="width:200px">Nội dung tóm tắt</th>
											<th class="text-center" style="width:90px">Người ký</th>
											<th class="text-center" style="width:90px">File</th>
											<th class="text-center" style="width:200px">Ghi chú</th>
											<th class="text-center" style="width:30px">Sts</th>
											<th class="text-center" style="width:30px">Sửa</th>
											<th class="text-center" style="width:30px">Xóa</th>
										</tr>
									</thead>
									<tbody>
									<?php foreach ($list as $val):?>
										<tr>
											<td class="text-center" style="width:20px"><input name="checkboxid[]" type="checkbox" value="$id"></td>
											<td class="text-center"><?php echo $val['id'] ?></td>
											<td style="width:40px" class="text-center">
												<?php echo $val['cv_no'] ?>
											</td>
											<td style="width:40px" class="text-center">
												<?php echo $val['cv_incomeno'] ?>
											</td>
											<td style="width:90px" class="text-center">
												<?php echo $val['cv_receivedate'] ?>
											</td>	
											<td style="width:90px" class="text-center">
												<?php echo $val['cv_senddate'] ?>
											</td>																					
											<td style="width:200px">
												<?php echo $val['cv_summary'] ?>
											</td>
											<td style="width:90px" class="text-center">
												<?php echo $val['cv_signer'] ?>
											</td>
											<td style="width:80px" class="text-center">
												<a href="<?php echo base_url().'public/congvan/congvanden/'.$val['cv_fullcontents'] ?>" >
												<?php $cv_loaivanban= $val['cv_loaivanban']?>
												<?php $loaivanban=$this->Mloaivanban->category_detail($cv_loaivanban);
													echo $loaivanban['name'];
												?>	
												</a>
											</td>
											<td style="width:200px" class="text-center">
												<?php 
												echo $val['cv_notes'] ?>
											</td>
											<td class="text-center">
												<a href="<?php echo base_url() ?>admin/congvanden/status/<?php echo $val['id'] ?>">
													<?php if($val['cv_status']==1):?>
														<span class="glyphicon glyphicon-ok-circle mauxanh18"></span>
													<?php else: ?>
														<span class="glyphicon glyphicon-remove-circle maudo"></span>
													<?php endif; ?>
												</a>
											</td>
											<td class="text-center">
												<a class="btn btn-success btn-xs" href="<?php echo base_url() ?>admin/congvanden/update/<?php echo $val['id']?>" role = "button">
													<span class="glyphicon glyphicon-edit"></span>Sửa
												</a>
											</td>
											<td class="text-center">
												<a class="btn btn-danger btn-xs" href="<?php echo base_url() ?>admin/congvanden/delete/<?php echo $val['id'] ?>" role = "button">
													<span class="glyphicon glyphicon-trash"></span>Xóa
												</a>
											</td>
										</tr>
									<?php endforeach; ?>
									</tbody>
								</table>
							</div>
							<div class="row">
								<div class="col-md-12 text-center">
									<ul class="pagination">
										<?php echo $strphantrang ?>
									</ul>
								</div>
							</div>
							<!-- /.ND -->
						</div>
					</div><!-- ./box-body -->
				</div><!-- /.box -->
		</div>
		<!-- /.col -->
	  </div>
	  <!-- /.row -->
	</section>
<!-- /.content -->
</div><!-- /.content-wrapper -->