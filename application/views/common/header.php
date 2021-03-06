 <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Tagore Health Consultancy | Dashboard</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assests/theme/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assests/theme/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assests/theme/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assests/theme/plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assests/theme/dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assests/theme/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assests/theme/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assests/theme/plugins/summernote/summernote-bs4.min.css">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="<?php echo base_url(); ?>assests/theme/dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
  </div>

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url().'index.php/user_logout'; ?>" role="button">
          Logout
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?php echo base_url(); ?>index.php/user_home" class="brand-link">
     <!--  <img src="<?php echo base_url(); ?>assests/theme/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8"> -->
      <span class="brand-text font-weight-light"><img id="logo_pic" src="<?php echo base_url(); ?>/public/images/logo_pic.jpeg" style="height: 25px;
    width: 25px;
    border-radius: 100%;"> Tagor Health Consultancy</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <!-- <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"></a>
        </div>
      </div> -->

      <!-- SidebarSearch Form -->
     <!--  <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div> -->

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <?php if($user_type==0){ ?>
          <li class="nav-item menu-open">
            <a href="<?php echo base_url(); ?>index.php/user_dashboard" class="nav-link <?php echo ($active_text=='dashboard')?'active':'' ?>">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard  
              </p>
            </a>
          </li>
          <?php } ?>

         <?php if($user_type==1){ ?>
          <li class="nav-item menu-open">
            <a href="<?php echo base_url(); ?>index.php/admin_dashboard" class="nav-link <?php echo ($active_text=='dashboard')?'active':'' ?>">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard  
              </p>
            </a>
          </li>
          <?php } ?>


          <?php if($user_type==0){ ?>
            <li class="nav-item menu-open">
               <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
              <a href="<?php echo base_url(); ?>index.php/user_profile_details" class="nav-link <?php echo ($active_text=='profile')?'active':'' ?>">
                <i class="nav-icon ion-android-contact"></i>
                <p>
                  Profile Detials
                </p>
              </a>
            </li>
          <?php } ?>

          
          <?php if($user_type==1){ ?>
            <li class="nav-item menu-open">
               <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
              <a href="<?php echo base_url(); ?>index.php/admin_user_list" class="nav-link <?php echo ($active_text=='users')?'active':'' ?>">
                <i class="nav-icon ion-android-contact"></i>
                <p>
                  User list
                </p>
              </a>
            </li>
          <?php } ?>

          <?php if($user_type==0){ ?>

            <li class="nav-item menu-open">
               <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
              <a href="<?php echo base_url(); ?>index.php/doctor_list" class="nav-link <?php echo ($active_text=='doctor')?'active':'' ?>">
                <i class="nav-icon ion-ios-pulse-strong"></i>
                <p>
                  Doctor
                </p>
              </a>
            </li>            

          <?php } ?>


          <?php if($user_type==1){ ?>

            <li class="nav-item menu-open">
               <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
              <a href="<?php echo base_url(); ?>index.php/admin_doctor_list" class="nav-link <?php echo ($active_text=='doctor')?'active':'' ?>">
                <i class="nav-icon ion-ios-pulse-strong"></i>
                <p>
                  Doctor List
                </p>
              </a>
            </li>            

          <?php } ?>

          <?php if($user_type==0){ ?>

          <li class="nav-item menu-open">
             <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <a href="<?php echo base_url(); ?>index.php/doctor_appointment_list" class="nav-link <?php echo ($active_text=='appointment')?'active':'' ?>"> 
              <i class="nav-icon ion ion-clipboard"></i>
              <p>
                Appointment Details
              </p>
            </a>
          </li>
          <?php } ?>


          
          <?php if($user_type==1){ ?>

          <li class="nav-item menu-open">
             <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <a href="<?php echo base_url(); ?>index.php/admin_doctor_appointment_list" class="nav-link <?php echo ($active_text=='appointment')?'active':'' ?>">
              <i class="nav-icon ion ion-clipboard"></i>             
              <p>
                Appointment List
              </p>
            </a>
          </li>

          <?php } ?>
          
         <?php if($user_type==0){ ?>

          <li class="nav-item menu-open">
             <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <a href="<?php echo base_url(); ?>index.php/blood_list" class="nav-link <?php echo ($active_text=='blood')?'active':'' ?>"> 
              <i class="nav-icon ion ion-waterdrop"></i>
              <p>
                Blood
              </p>
            </a>
          </li>
          <?php } ?>


          
          <?php if($user_type==1){ ?>

          <li class="nav-item menu-open">
             <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <a href="<?php echo base_url(); ?>index.php/admin_blood_list" class="nav-link <?php echo ($active_text=='Blood')?'active':'' ?>">
              <i class="nav-icon ion ion-waterdrop"></i>             
              <p>
                Blood List
              </p>
            </a>
          </li>

          <?php } ?>

        <?php if($user_type==0){ ?>

          <li class="nav-item menu-open">
             <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <a href="<?php echo base_url(); ?>index.php/bed_list" class="nav-link <?php echo ($active_text=='bed')?'active':'' ?>">
              <i class="nav-icon fas fa-bed"></i>
              <p>
                Bed
              </p>
            </a>
          </li>

          <?php } ?>


          <?php if($user_type==1){ ?>

          <li class="nav-item menu-open">
             <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <a href="<?php echo base_url(); ?>index.php/admin_bed_list" class="nav-link <?php echo ($active_text=='Bed')?'active':'' ?>">
              <i class="nav-icon fas fa-bed"></i>
              <p>
                Bed List
              </p>
            </a>
          </li>

          <?php } ?>

          <?php if($user_type==0){ ?>

          <li class="nav-item menu-open">
             <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <a href="<?php echo base_url(); ?>index.php/oxygen_list" class="nav-link <?php echo ($active_text=='oxygen')?'active':'' ?>">
              <i class="nav-icon ion-soup-can-outline"></i>
              <p>
                Oxygen
              </p>
            </a>
          </li>

          <?php } ?>


          <?php if($user_type==1){ ?>

          <li class="nav-item menu-open">
             <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
              <a href="<?php echo base_url(); ?>index.php/admin_oxygen_list" class="nav-link <?php echo ($active_text=='Oxygen')?'active':'' ?>">
              <i class="nav-icon ion-soup-can-outline"></i>
              <p>
                Oxygen List
              </p>
            </a>
          </li>

          <?php } ?>

        <?php if($user_type==0){ ?>


          <li class="nav-item menu-open">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <a href="<?php echo base_url(); ?>index.php/vaccine_list" class="nav-link <?php echo ($active_text=='vaccine')?'active':'' ?>">
              <i class="nav-icon ion-wand"></i>
              <p>
                Vaccine
              </p>
            </a>
          </li>


        <?php } ?>


        <?php if($user_type==1){ ?>

          <li class="nav-item menu-open">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <a href="<?php echo base_url(); ?>index.php/admin_vaccine_list" class="nav-link <?php echo ($active_text=='Vaccine')?'active':'' ?>">
              <i class="nav-icon ion-wand"></i>
              <p>
                Vaccine List
              </p>
            </a>
          </li>

        <?php } ?>
       
        <?php if($user_type==1){ ?>

          <li class="nav-item menu-open">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <a href="<?php echo base_url(); ?>index.php/admin_contact_list" class="nav-link <?php echo ($active_text=='contact')?'active':'' ?>">
              <i class="nav-icon ion-android-contacts"></i>
              <p>
                Contact List
              </p>
            </a>
          </li>

        <?php } ?>

                    
         
          

          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>