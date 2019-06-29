
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
	  <div class="col-xs-12">
		<span style="color:blue;font-size: 32px" >
		<marquee scrolldelay="10", bgcolor="cyan">
		<?php
			$row=$this->Mthongbao->getnewest();
			echo $row['contents'];			
		?>
		</marquee>		
		</span>
		</div>
	  </div>
	  <div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3><?php ?></h3>
              <p>Công văn đến</p>
            </div>
            <div class="icon">
              <i class="ion-ios-list"></i>
            </div>
            <a href="<?php echo base_url() ?>congvanden" class="small-box-footer">Danh sách công văn đến</a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3><?php?></h3>

              <p>Công văn đi</p>
            </div>
            <div class="icon">
              <i class="ion-ios-list"></i>
            </div>
            <a href="<?php echo base_url() ?>congvandi" class="small-box-footer">Danh sách công văn đi</a>
          </div>
        </div>
        
        <!-- ./col -->
        <div class="col-lg-2 col-xs-3">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3><?php ?></h3>

              <p>Thông báo</p>
            </div>
            <div class="icon">
              <i class="ion-android-notifications"></i>
            </div>
            <a href="<?php //echo base_url() ?>thongbao" class="small-box-footer">Thông báo</a>
          </div>
        </div>
		<div class="col-lg-2 col-xs-3">
          <!-- small box -->
        <!-- ./col -->
			</div>
		</div>
	  
      <!-- /.row -->
    </section>
    <section class="content">
      <div class="row">
        <!-- /.col (LEFT) -->
        <div class="col-md-12">
          <!-- LINE CHART -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Công văn đi & Công văn đến</h3>
              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body">              
            </div>
            <div class="box-footer">
              <div class="row">
                <div class="col-sm-4 col-xs-6">
                  <div class="description-block border-right">
                    <h5 class="description-header" style="color: #e90000;"><?php  echo number_format($total1+$total2);?> VB</h5>
                    <span class="description-text">Tổng số công văn</span>
                  </div>
                  <!-- /.description-block -->
                </div>
                <!-- /.col -->
                <div class="col-sm-4 col-xs-6">
                  <div class="description-block border-right">
                    <h5 class="description-header" style="color: #e90000;"><?php echo number_format($total1);?></h5>
                    <span class="description-text">Công văn đến</span>
                  </div>
                  <!-- /.description-block -->
                </div>
                <!-- /.col -->
                <div class="col-sm-4 col-xs-6">
                  <div class="description-block border-right">
                    <h5 class="description-header" style="color: #e90000;"><?php echo number_format($total2);?></h5>
                    <span class="description-text">Công văn đi</span>
                  </div>
                  <!-- /.description-block -->
                </div>
              </div>
              <!-- /.row -->
            </div>
            <!-- /.box-body -->
          </div>
        </div> 
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
