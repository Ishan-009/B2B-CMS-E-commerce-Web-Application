<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
<?php $this->load->view('admin/include/head.php')?>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>AdminLTE 3 | Starter</title>

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
   
    

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
     
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" >
	
			   	Welcome, <i class="fa fa-user" aria-hidden="true"> <strong>Administrator</strong></i> 
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <div class="dropdown-divider"></div>
          <a href="<?php echo base_url();?>admin/login/logout" class="dropdown-item">
						<i class="fa fa-user" aria-hidden="true"></i>
						&nbsp;
						&nbsp;
            Logout
           
          </a>
          
      </li>
     
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="<?php echo public_url();?>admin/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?php echo public_url();?>admin/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Alexander Pierce</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="<?php echo base_url();?>admin/home/index" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview <?php echo (!empty($mainModule) && $mainModule == "category") ? 'menu-open' : ''?>">
            <a href="#" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>
              Product
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview ">
              <li class="nav-item">
                <a href="<?php echo base_url();?>admin/product/addProduct" class="nav-link <?php echo (!empty($mainModule) && $mainModule == "category" && !empty($subModule) && $subModule == "createCategory") ? 'active' : ''?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Product</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url().'admin/product/index';?>" class="nav-link <?php echo (!empty($mainModule) && $mainModule == "category" && !empty($subModule) && $subModule == "viewCategory") ? 'active' : ''?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Manage Product</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item has-treeview ">
            <a href="#" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>
                Product  Category
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">

							<li class="nav-item">
                <a href="<?php echo base_url().'admin/category/MCategory'?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Manage Main-Category</p>
                </a>
							</li>
							<li class="nav-item">
                <a href="<?php echo base_url().'admin/category/Msubcategory'?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Manage Sub-Category</p>
                </a>
							</li>
            </ul>
					</li>
					<li class="nav-item has-treeview ">
            <a href="#" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>
                Manage User Layout 
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
							<li class="nav-item">
                <a href="<?php echo base_url().'admin/UserL/index'?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Manage Banner Image </p>
                </a>
							</li>
							<li class="nav-item">
                <a href="<?php echo base_url().'admin/UserL/logo'?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Manage Logo Image</p>
                </a>
							</li>
							<li class="nav-item">
                <a href="<?php echo base_url().'admin/UserL/MUmenu'?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Manage Menu</p>
                </a>
							</li>
							<li class="nav-item">
                <a href="<?php echo base_url().'admin/UserL/Msubmenu'?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Manage Sub-Menu</p>
                </a>
							</li>
							<li class="nav-item">
                <a href="<?php echo base_url().'admin/UserL/m_info'?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Manage User Information </p>
                </a>
							</li>
            </ul>
					</li>

				
					<li class="nav-item">
            <a href="<?php echo base_url().'admin/inquiry/index'?>" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>
                User Inquiries
              </p>
						</a>
					</li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Admin Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo base_url().'admin/home/index'?>">Home</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12">
            <div class="card">
              <div class="card-body text-center" style="height:600px">

              <h3 style="padding-top: 250px;">Welcome To The Administrator Panel	</h5>

               
              </div>
            </div>

            
          </div>
          <!-- /.col-md-6 -->
        
          <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
      <h5>Title</h5>
      <p>Sidebar content</p>
    </div>
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<?php $this->load->view('admin/include/footer.php')?>
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
</body>
</html>
