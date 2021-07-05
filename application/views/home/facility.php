<html>
<head>

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"> <img id="logo_pic" src="<?php echo base_url(); ?>/public/images/logo_pic.jpeg"> Tagore Health Consultancy</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto mb-2 mb-lg-0">  
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="http://localhost/tagor_health_consultancy/index.php/user_home">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="http://localhost/tagor_health_consultancy/index.php/user_about">About Us</a>
        </li>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="http://localhost/tagor_health_consultancy/index.php/user_services">Services</a>
        </li>
 
        <?php 
          $user_id = $this->session->flashdata('user_id');
          $user_type = $this->session->flashdata('user_type');

          if (!empty($user_id)) { ?>


            <?php if ($user_type==0) { ?>
              <li class="nav-item">
                <a class="nav-link" href="http://localhost/tagor_health_consultancy/index.php/user_dashboard">Dashboard</a>
              </li>
            <?php } else { ?>
              <li class="nav-item">
                <a class="nav-link" href="http://localhost/tagor_health_consultancy/index.php/admin_dashboard">Dashboard</a>
              </li>
            <?php } ?>
        <?php } else { ?>

            <li class="nav-item">
              <a class="nav-link" href="http://localhost/tagor_health_consultancy/index.php/user_login">Login</a>
            </li>
        <?php } ?>

        <li class="nav-item">
          <a class="nav-link" href="http://localhost/tagor_health_consultancy/index.php/user_facility">Facility</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="http://localhost/tagor_health_consultancy/index.php/user_contact">Contact</a>
        </li>

      </ul>
      
</nav>

  <style>

      .facilities {
    height: 190px;
    width: 270px;
    background-color: white;
    float: center;
    border: 1px solid;
    margin: 10px;

}  
.h1{
text-align: center;
font-weight: normal;color:#20a5f1;
}
.nav {
  margin: auto;
  width: 40%;
  padding: 10px;
    }
    .facilities_class{
    display: flex;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    margin-right: 0px;
    margin-left: 37px;
  }

  </style>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="http://localhost/tagor_health_consultancy/public/css/style1.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Orelega+One&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@1,300&display=swap" rel="stylesheet">

  </head>

  <section class="my-5">
    <div class="h1">
    </div>
    <div class="container-fluid">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-12">
            <img src="http://localhost/tagor_health_consultancy/public/images/f5.jpg" class="img-fluid" width="100%">    
    </div>


    <div class="col-lg-12 col-md-12 col-12">
    <h1 class="text-center"><p><b>----------------Facilities----------------</p></b></h1>
  </div>

    
  <div class="facilities_class">

    <div class="facilities">
      <div class="nav">
        <nav class="mt-4">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false" text-align="center">
             </ul>
             <img class="card-img-top" src="http://localhost/tagor_health_consultancy/public/images/outdoor.png" width="256px" height="60px">
            <li class="nav-item menu-open">
              <a href="#" class="nav-link">
                <i class="nav-icon ion-home"></i>
                <h3>Outdoor Service</h3>
              </a>
            </li>
      </div>                
    </div>

    <div class="facilities">
      <img src="http://localhost/tagor_health_consultancy/public/images/indoor1.png" width="250px" height="120px">
      <li class="nav-item menu-open">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <h3>
            Indoor Service </h3>
            
          </a>
        </li>
      
    </div>

    <div class="facilities">
      <img src="http://localhost/tagor_health_consultancy/public/images/h1.png" width="256px" height="110px">
      <li class="nav-item menu-open">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <h3>
            Health Check up
            </h3>
          </a>
        </li>
    </div>

    <div class="facilities">
      <img src="http://localhost/tagor_health_consultancy/public/images/phar.png" width="230px" height="90px">
      <li class="nav-item menu-open">
        <a href="#" class="nav-link">
          <i class="nav-icon fas fa-tachometer-alt"></i>
          <h3>
         24 hours Pharmacy Service
          </h3>
        </a>
      </li>
    </div>

    <div class="facilities">
       <img src="http://localhost/tagor_health_consultancy/public/images/24hr.png" width="230px" height="70px">
        <li class="nav-item menu-open">
            <a href="#" class="nav-link">
             
              <h2>
             24 Hours Emergency Service </h2>
              </a>
          </li>
        
    </div>

    <div class="facilities">
      <img src="http://localhost/tagor_health_consultancy/public/images/op.png" width="256px" height="90px">
       <li class="nav-item menu-open">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <h3>
             Operation Theaters
            </h3>
          </a>
        </li>
    </div>

    <div class="facilities">
      <img src="http://localhost/tagor_health_consultancy/public/images/icu1.png" width="270px" height="90px">
      <li class="nav-item menu-open">
        <a href="#" class="nav-link">
          <i class="nav-icon fas fa-tachometer-alt"></i>
          <h3>
          ICU / ICCU / Cabins / Wards 
          </h3>
        </a>
      </li>
    </div>

    <div class="facilities">
        <img src="http://localhost/tagor_health_consultancy/public/images/dia.png" alt="Emergency" width="256px" height="80">
       <li class="nav-item menu-open">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <h3>
           24 hours Dialysis Unit
            </h3>
          </a>
        </li>
    </div>

    <div class="facilities">
        <img src="http://localhost/tagor_health_consultancy/public/images/amb2.png" width="256px" height="110px">
        <li class="nav-item menu-open">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <h3>
                 Ambulance
            </h3>
          </a>
        </li>
    </div>
        
    <div class="facilities">
        <img src="http://localhost/tagor_health_consultancy/public/images/cafe1.png" width="256px" height="110px">
        <li class="nav-item menu-open">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <h3>
           Cafeteria             
         </h3>
          </a>
        </li>
     </div>

    <div class="facilities">
      <img src="http://localhost/tagor_health_consultancy/public/images/vcc6.png" width="256px" height="110px">
      <li class="nav-item menu-open">
        <a href="#" class="nav-link">
          <i class="nav-icon fas fa-tachometer-alt"></i>
          <h3>
         Vaccine              
       </h3>
        </a>
      </li>
    </div>


    <div class="facilities">
      <img src="http://localhost/tagor_health_consultancy/public/images/o4.png" width="256px" height="110px">
       <li class="nav-item menu-open">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <h3>
           Oxygen              
         </h3>
          </a>
        </li>
     </div>
  </div>

 </section>

 <footer class="main-footer">
    <strong> @ Copyright & copy; 2021-2022   Tagore Health Consultancy </strong>
     All rights reserved.
    <div class="float-right d-none d-sm-inline-block"><b>Version 1.0.0 </b>
     </div>
  </footer>

</body>
</html>
