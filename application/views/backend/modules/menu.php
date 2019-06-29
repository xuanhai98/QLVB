<aside class="main-sidebar">
    <section class="sidebar">
        <div class="user-panel">
            <div class="pull-left image">
                <img src="public/images/admin/<?php echo $user['img'] ?>" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p><?php echo $user['fullname'] ?></p>
                <a href="#"><i class="fa fa-circle text-success"></i> Trực tuyến</a>
            </div>
        </div>
        <ul class="sidebar-menu">
            <li class="header">DANH MỤC QUẢN LÝ</li>
            <li class="treeview">
                <a href="<?php echo base_url() ?>admin">
                    <i class="glyphicon glyphicon-blackboard"></i> <span>Thống kê</span>
                </a>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="glyphicon glyphicon-text-background"></i><span>Công văn đến</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                   <li class="treeview">
						<a href="<?php echo base_url()?>admin/congvanden/insert">
							<i class="fa fa-pencil-square-o"></i>Thêm công văn đến
						</a>
					</li>
                    <li>
    					<a href="<?php echo base_url()?>admin/congvanden">
    						<i class="glyphicon glyphicon-list"></i> Danh sách công văn đến
    					</a>
    				</li>                    
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="glyphicon glyphicon-text-background"></i><span>Công văn đi</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
					<li class="treeview">
						<a href="<?php echo base_url()?>admin/congvandi/insert">
							<i class="fa fa-pencil-square-o"></i>Thêm công văn đi
						</a>
					</li>
                    <li >
                       <a href="<?php echo base_url()?>admin/congvandi/">
                            <i class="glyphicon glyphicon-list"></i> Danh sách công văn đi
                        </a>
                    </li>                    
                </ul>
            </li>
			<li class="treeview">
                <a href="<?php echo base_url()?>admin/thongtin">
                    <i class="fa fa-pencil-square-o"></i><span>Thông tin</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <!--Cây menu :v -->
				<ul class="treeview-menu">
					<li class="treeview">
						<a href="<?php echo base_url()?>admin/thongbao/insert">
							<i class="glyphicon glyphicon-tags"></i>Thêm Thông Báo
						</a>
					</li>
				<li>
                        <a href="<?php echo base_url()?>admin/thongbao/">
                            <i class="glyphicon glyphicon-list"></i> Danh sách thông báo
                        </a>
                    </li>
                   			
                </ul>
			</li>
		
			
			<li class="treeview">
                <a href="#">    						
                    <i class="glyphicon glyphicon-tasks"></i><span>Nhóm đơn vị</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                </span>
                </a>
				<ul class="treeview-menu">
                   
                    <li >
                        <a href="<?php echo base_url() ?>admin/donvi/insert">
                            <i class="glyphicon glyphicon-hand-right"></i> Thêm mới
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url() ?>admin/donvi">
                            <i class="glyphicon glyphicon-list"></i> Danh sách đơn vị
                        </a>
                    </li>
                </ul>
			</li>
        
            
    		<li class="treeview">
                <a href="<?php echo base_url() ?>admin/#">
                    <i class="fa fa-align-justify"></i><span>Giao diện</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class="active">
    					<a href="<?php echo base_url() ?>admin/#">
    						<i class="fa fa-cogs"></i> Sliders
    					</a>
    				</li>
                </ul>
            </li>
    		<li class="treeview">
                <a href="#">
                    <i class="glyphicon glyphicon-cog"></i><span>Hệ thống</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class="active">
    					<a href="admin">
    						<i class="fa fa-cogs"></i> Cấu hình
    					</a>
    				</li>
                    <li>
    					<a href="admin">
    						<i class="fa fa-users"></i> Thành viên
    					</a>
    				</li>
					<li class="active">
						<a href="<?php echo base_url() ?>admin/user/insert">
							<i class="glyphicon glyphicon-user"></i><span>Thêm thành viên</span>
						</a>
					</li>
                </ul>
            </li>
            <li><a href="admin/user/logout.html"><i class="fa fa-sign-out text-red"></i> <span>Thoát</span></a></li>
        </ul>
    	
    </section>
    <!-- /.sidebar -->
</aside>