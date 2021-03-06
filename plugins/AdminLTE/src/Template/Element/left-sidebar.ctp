<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?= \Cake\Routing\Router::url('/uploads/profile_pics/'.$authUser['img']) ?>" onerror="javascript: this.src = '/uploads/profile_pics/profile_img_3.jpg'" class="img-circle" alt="User Image" />
            </div>
            <div class="pull-left info">
                <p><?= $authUser['first_name']." ".$authUser['last_name'] ?></p>

                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search..."/>
              <span class="input-group-btn">
                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
            </div>
        </form>
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
            <li class="">
                <a href="#" onclick="window.location = '/admin'">
                    <i class="fa fa-dashboard"></i> <span>Dashboard</span> <i class="fa fa-angle-left pull-right"></i>
                </a>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-dashboard"></i> <span>Mostly Used</span> <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?= \Cake\Routing\Router::url('/admin/articles/add'); ?>"><i class="fa fa-circle-o"></i>Add Article</a></li>
                    <li><a href="<?= \Cake\Routing\Router::url('/admin/stores/add'); ?>"><i class="fa fa-circle-o"></i>New Store</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-dashboard"></i> <span>Lookbooks</span> <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?= \Cake\Routing\Router::url('/admin/lookbooks'); ?>"><i class="fa fa-circle-o"></i>List Lookbooks</a></li>
                    <li><a href="<?= \Cake\Routing\Router::url('/admin/lookbooks/add'); ?>"><i class="fa fa-circle-o"></i>New Lookbook</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-dashboard"></i> <span>Markets</span> <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?= \Cake\Routing\Router::url('/admin/markets'); ?>"><i class="fa fa-circle-o"></i>List Markets</a></li>
                    <li><a href="<?= \Cake\Routing\Router::url('/admin/markets/add'); ?>"><i class="fa fa-circle-o"></i>New Market</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-files-o"></i>
                    <span>Users</span>
                    <span class="label label-primary pull-right">4</span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?= \Cake\Routing\Router::url('/admin/users'); ?>"><i class="fa fa-circle-o"></i>List All</a></li>
                    <li><a href="<?= \Cake\Routing\Router::url('/admin/users/add'); ?>""><i class="fa fa-circle-o"></i> Add New</a></li>
                </ul>
            </li>
<!--            <li>
                <a href="../widgets.html">
                    <i class="fa fa-th"></i> <span>Widgets</span> <small class="label pull-right bg-green">Hot</small>
                </a>
            </li>-->
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-pie-chart"></i>
                    <span>Stores</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?= \Cake\Routing\Router::url('/admin/stores'); ?>"><i class="fa fa-circle-o"></i>List All</a></li>
                    <li><a href="<?= \Cake\Routing\Router::url('/admin/stores/add'); ?>""><i class="fa fa-circle-o"></i> Add New</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-laptop"></i>
                    <span>Trends</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?= \Cake\Routing\Router::url('/admin/trends'); ?>"><i class="fa fa-circle-o"></i>List All</a></li>
                    <li><a href="<?= \Cake\Routing\Router::url('/admin/trends/add'); ?>""><i class="fa fa-circle-o"></i> Add New</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-edit"></i> <span>Lookbooks</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?= \Cake\Routing\Router::url('/admin/lookbooks'); ?>"><i class="fa fa-circle-o"></i>List All</a></li>
                    <li><a href="<?= \Cake\Routing\Router::url('/admin/lookbooks/add'); ?>""><i class="fa fa-circle-o"></i> Add New</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-table"></i> <span>Offerings</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?= \Cake\Routing\Router::url('/admin/offerings'); ?>"><i class="fa fa-circle-o"></i>List All</a></li>
                    <li><a href="<?= \Cake\Routing\Router::url('/admin/offerings/add'); ?>""><i class="fa fa-circle-o"></i> Add New</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-table"></i> <span>StoreOfferings</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?= \Cake\Routing\Router::url('/admin/StoreOfferings'); ?>"><i class="fa fa-circle-o"></i>List All</a></li>
                    <li><a href="<?= \Cake\Routing\Router::url('/admin/StoreOfferings/add'); ?>""><i class="fa fa-circle-o"></i> Add New</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-table"></i> <span>StoreReviews</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?= \Cake\Routing\Router::url('/admin/StoreReviews'); ?>"><i class="fa fa-circle-o"></i>List All</a></li>
                    <li><a href="<?= \Cake\Routing\Router::url('/admin/StoreReviews/add'); ?>""><i class="fa fa-circle-o"></i> Add New</a></li>
                </ul>
            </li>
<!--            <li>
                <a href="../calendar.html">
                    <i class="fa fa-calendar"></i> <span>Calendar</span>
                    <small class="label pull-right bg-red">3</small>
                </a>
            </li>-->
            <li>
                <a href="../mailbox/mailbox.html">
                    <i class="fa fa-envelope"></i> <span>Mailbox</span>
                    <small class="label pull-right bg-yellow">12</small>
                </a>
            </li>
            <li class="treeview active">
                <a href="#">
                    <i class="fa fa-folder"></i> <span>Examples</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="invoice.html"><i class="fa fa-circle-o"></i> Invoice</a></li>
                    <li><a href="login.html"><i class="fa fa-circle-o"></i> Login</a></li>
                    <li><a href="register.html"><i class="fa fa-circle-o"></i> Register</a></li>
                    <li><a href="lockscreen.html"><i class="fa fa-circle-o"></i> Lockscreen</a></li>
                    <li><a href="404.html"><i class="fa fa-circle-o"></i> 404 Error</a></li>
                    <li><a href="500.html"><i class="fa fa-circle-o"></i> 500 Error</a></li>
                    <li class="active"><a href="blank.html"><i class="fa fa-circle-o"></i> Blank Page</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-share"></i> <span>Multilevel</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
                    <li>
                        <a href="#"><i class="fa fa-circle-o"></i> Level One <i class="fa fa-angle-left pull-right"></i></a>
                        <ul class="treeview-menu">
                            <li><a href="#"><i class="fa fa-circle-o"></i> Level Two</a></li>
                            <li>
                                <a href="#"><i class="fa fa-circle-o"></i> Level Two <i class="fa fa-angle-left pull-right"></i></a>
                                <ul class="treeview-menu">
                                    <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
                                    <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
                </ul>
            </li>
            <li><a href="/documentation/index.html"><i class="fa fa-book"></i> <span>Documentation</span></a></li>
            <li class="header">LABELS</li>
            <li><a href="#"><i class="fa fa-circle-o text-red"></i> <span>Important</span></a></li>
            <li><a href="#"><i class="fa fa-circle-o text-yellow"></i> <span>Warning</span></a></li>
            <li><a href="#"><i class="fa fa-circle-o text-aqua"></i> <span>Information</span></a></li>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>