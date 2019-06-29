<header class="main-header">
    <a href="<?php echo base_url()?>admin" class="logo">
        <span class="logo-mini"><b>QLVB</b></span>
        <span class="logo-lg">Quản trị hệ thống</span>
    </a>
    <nav class="navbar navbar-static-top">
        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
        </a>
        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
                <li>
                    <a href="<?php echo base_url(); ?>">
                        <span class="glyphicon glyphicon-home"></span>
                        <span>Website</span>
                    </a>
                </li>
                <li class="dropdown user user-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <img src="public/images/admin/hai.jpg" class="user-image" alt="User Image">
                        <span class="hidden-xs"><?php echo $user['fullname'] ?></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li class="user-header">
                            <img src="public/images/admin/<?php echo $user['img'] ?>" class="img-circle" alt="User Image">
                            <p><?php echo $user['fullname'] ?><small><?php echo $user['phone'] ?></small></p>
                        </li>
                        <li class="user-footer">
                            <div class="pull-left">
                                <a href="https://www.facebook.com/profile.php?id=100009078422414" class="btn btn-default btn-flat">Chi tiết</a>
                            </div>
                            <div class="pull-right">
                                <a href="admin/user/logout.html" class="btn btn-default btn-flat">Thoát</a>
                            </div>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
</header>