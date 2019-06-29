<aside class="main-sidebar">
    <section class="sidebar">
        <div class="user-panel">
            <div class="pull-left image">
               <img src="public/images/admin/<?php echo $user['img'] ?>" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p><?php echo $user['fullname'] ?></p>
                <i class="fa fa-circle text-success"></i> Trực tuyến
            </div>
        </div>
        <ul class="sidebar-menu">           
            <li class="treeview">
                <a href="<?php echo base_url() ?>">
                    <i class="glyphicon glyphicon-blackboard"></i> <span>Trang chủ</span>
                </a>
            </li>
            <li class="treeview">
                <a href="<?php echo base_url()?>congvanden">
                    <i class="glyphicon glyphicon-text-background"></i><span>Công văn đến</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>				 
            </li>
            <li class="treeview">
                <a href="<?php echo base_url()?>congvandi">
                    <i class="glyphicon glyphicon-text-background"></i><span>Công văn đi</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>				
            </li>
			
        
                <ul class="treeview-menu">
                    <li>
                        <a href="#">
                            <i class="glyphicon glyphicon-list-alt"></i> Danh sách văn bản
                        </a>
                    </li>                    
                </ul>
            </li>
            
    		<li class="treeview">
                <a href="#">
                    <i class="glyphicon glyphicon-cloud-download"></i><span>Thông tin</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                  
					<li class="active">
    					<a href="<?php echo base_url() ?>thongbao">
    						<i class="glyphicon glyphicon-tags"></i>Thông báo
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
    					<a href="<?php echo base_url() ?>user/changepassword">
    						<i class="fa fa-users"></i> Thành viên - Đổi mật khẩu
    					</a>
    				</li>
                </ul>
            </li>
            <li><a href="user/logout.html"><i class="fa fa-sign-out text-red"></i> <span>Thoát</span></a></li>
	
       <li><a  href="admin/user/login" ><i class="list-group-item-action"></i> <span>Đăng nhập Admin</span></a></li>
			
    
        </ul>
    	
    </section>
    <!-- /.sidebar -->
</aside>
<style type="text/css">
.btn2{
    background-color: #f00000;
    background-image: linear-gradient(to bottom, #2A95C5, #21759B);
    box-shadow: 0 1px 0 rgba(120, 200, 230, 0.5) inset;
    border-color: #21759B #21759B #1E6A8D #21759B;
    border-style: solid;
    border-width: 1px;
    border-radius: 3px 3px 3px 3px;
    display: inline-block;
    padding: 4px 15px 7px 15px;
    margin: 2px 4px;
    color: #FFFFFF;
    text-shadow: 0 1px 0 rgba(0, 0, 0, 0.1);
    text-decoration: none;
    cursor: pointer;
    white-space: nowrap;
}
</style>