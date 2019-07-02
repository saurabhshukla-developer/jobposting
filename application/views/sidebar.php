<body class="app sidebar-mini rtl">
    <!-- Navbar-->
    <header class="app-header">
        <a class="app-header__logo" href="https://sacredbits.com/jobs/">JobsPortal</a>
        <!-- Sidebar toggle button-->
        <a class="app-sidebar__toggle" href="#" data-toggle="sidebar" aria-label="Hide Sidebar"></a>
        <!-- Navbar Right Menu-->
        <ul class="app-nav">
        <!-- User Menu-->
            <li class="dropdown">
                <a class="app-nav__item" href="#" data-toggle="dropdown" aria-label="Open Profile Menu">
                    <i class="fa fa-user fa-lg"></i>
                </a>
                <ul class="dropdown-menu settings-menu dropdown-menu-right">
                    <li><a class="dropdown-item" href="page-user.html"><i class="fa fa-cog fa-lg"></i> Settings</a></li>
                    <li><a class="dropdown-item" href="page-user.html"><i class="fa fa-user fa-lg"></i> Profile</a></li>
                    <li><a class="dropdown-item" href="page-login.html"><i class="fa fa-sign-out fa-lg"></i> Logout</a></li>
                </ul>
            </li>
        </ul>
    </header>
    <!-- Sidebar menu-->
    <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
    <aside class="app-sidebar">
      <div class="app-sidebar__user">
        <div>
          <p class="app-sidebar__user-name"><?php echo $name; ?></p>
          <p class="app-sidebar__user-designation"><?php echo $subname; ?></p>
        </div>
      </div>
      <ul class="app-menu">
        <li>
            <a class="app-menu__item" href="<?php echo base_url('recruitments');?>">
                <i class="app-menu__icon fa fa-dashboard"></i>
                <span class="app-menu__label">Recruitments</span>
            </a>
        </li>
        <li>
            <a class="app-menu__item" href="<?php echo base_url('walkins');?>">
                <i class="app-menu__icon fa fa-file-text"></i>
                <span class="app-menu__label">Walk-Ins</span>
            </a>
        </li>
        <?php if($this->session->userdata('userid'))
            {
        ?>
            <li>
                <a class="app-menu__item" href="<?php echo base_url('addjob');?>">
                    <i class="app-menu__icon fa fa-edit"></i>
                    <span class="app-menu__label">Add Jobs</span>
                </a>
            </li>
        <?php
            }
        ?>
      </ul>
    </aside>