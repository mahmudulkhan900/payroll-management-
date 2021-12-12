<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Payroll Management System</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bower_components/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bower_components/Ionicons/css/ionicons.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/dist/css/AdminLTE.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/dist/css/skins/_all-skins.min.css">
  
  <script src="<?php echo base_url(); ?>assets/bower_components/jquery/dist/jquery.min.js"></script>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-purple sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <a href="#" class="logo">
      <span class="logo-mini"><b>PM</b>S</span>
      <span class="logo-lg"><b>Payroll</b> M S</span>
    </a>
    <nav class="navbar navbar-static-top">
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">>
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="<?php echo base_url(); ?>assets/dist/img/admin-user.png" class="user-image" alt="User Image">
              <span class="hidden-xs">Admin</span>
            </a>
            <ul class="dropdown-menu">
              <li class="user-header">
                <img src="<?php echo base_url(); ?>assets/dist/img/admin-user.png" class="img-circle" alt="User Image">
                <p>Admin</p>
              </li>
              <li class="user-footer">
                <div class="pull-right">
                  <a href="<?php echo base_url(); ?>logout" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <aside class="main-sidebar">
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo base_url(); ?>assets/dist/img/admin-user.png" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Administrator</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>

      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>

        <li class="active"><a href="<?php echo base_url(); ?>"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>

        
        <li class="treeview">
          <a href="#">
            <i class="fa fa-th-large"></i> <span>Department</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url(); ?>add-department"><i class="fa fa-circle-o"></i> Add Department</a></li>
            <li><a href="<?php echo base_url(); ?>manage-department"><i class="fa fa-circle-o"></i> Manage Department</a></li>
          </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-users"></i> <span>Staff</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url(); ?>add-staff"><i class="fa fa-circle-o"></i> Add Staff</a></li>
            <li><a href="<?php echo base_url(); ?>manage-staff"><i class="fa fa-circle-o"></i> Manage Staff</a></li>
          </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-usd"></i> <span>Salary</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url(); ?>add-salary"><i class="fa fa-circle-o"></i> Add Salary</a></li>
            <li><a href="<?php echo base_url(); ?>manage-salary"><i class="fa fa-circle-o"></i> Manage Salary</a></li>
          </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-share"></i> <span>Leave</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url(); ?>approve-leave"><i class="fa fa-circle-o"></i> Manage Staff's Leave</a></li>
            <li><a href="<?php echo base_url(); ?>leave-history"><i class="fa fa-circle-o"></i> Leave History</a></li>
          </ul>
        </li>


      </ul>
    </section>
  </aside>

  <?php
    if ($this->session->userdata('usertype')!=1)
    { 
      redirect('login');
    }
  ?>