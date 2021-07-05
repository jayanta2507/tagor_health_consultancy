<!DOCTYPE html>
<html lang="en">
<head>

  <title>Tagor Health Consultancy</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="http://localhost/tagor_health_consultancy/public/css/style1.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Orelega+One&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@1,300&display=swap" rel="stylesheet">

  <style>

    .facilities1 {
      height: 750px;
      width: 500px;
      background-color: white;
      float: center;
      border: 1px solid;
      margin: 15px;
    }
 
  .facilities {
    height: 190px;
    width: 270px;
    background-color: white;
    float: center;
    border: 1px solid;
    margin: 15px;
    list-style-type: none;

  }  
  .h1{
    text-align: center;
    font-weight: normal;color:#20a5f1;
  }
  .nav {
    margin: auto;
    width: 40%;
    padding: 8px;
  }

  .service_class{
    width: 25%;
    float: right;
    border: 1px solid;
    height: 540px;
  }

  .facilities_class{
    display: flex;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    margin-right: 0px;
    margin-left: 37px;
  }

  .contact-details{
    width: 100%;
    height: 15%;
    background-color: white;
    position: absolute;
    display: flex;
    top: 83%;
  }

  .text-left{
  width:50%;
  margin-left: 10px;
  margin-top: 10px;
  }

  .text-right{
  width:50%;
  margin-right: 10px;
  margin-top: 10px;
 }

 #vist_id{
  color: #278de6;
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

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <style>  
  .carousel-inner img {
      width: 100%;
      height: 100%;
    }  

  #logo_pic{
    height: 65px;
    width: 65px;
    border-radius: 100%;
  }




  </style>
</head>
<body>

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"> <img id="logo_pic" src="<?php echo base_url(); ?>/public/images/logo_pic.jpeg" id="logo_pic"> Tagore Health Consultancy</a>
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

<div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  
  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="http://localhost/tagor_health_consultancy/public/images/bg1.jpg" alt="Los Angeles" width="100%" height="50%">
    </div>
    <div class="carousel-item">
      <img src="http://localhost/tagor_health_consultancy/public/images/bg2.jpg" alt="Chicago" width="100%" height="50%">
    </div>
    <div class="carousel-item">
      <img src="http://localhost/tagor_health_consultancy/public/images/bg3.jpg" alt="New York" width="100%" height="50%">
    </div>
  </div>
  
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>
<section class="my-5">
    <div class="py-5">
        <h2 class="text-center"><b>About Us</b></h2>
    </div>
      <div class="row">
          <div class="col-lg-6 col-md-6 col-12">
                  <img src="http://localhost/tagor_health_consultancy/public/images/bg4.jpg" class="img-fluid">    
          </div>
          <div class="col-lg-6 col-md-6 col-12">
          <h2 class="display-7">TAGORE HEALTHCARE CONSULTANCY</h2>
          <p class="py-2">The core team at Tagore Health Consultants have more than 10 years of experience in Healthcare Consultancy and Hospital Marketing. We offer complete range of services for hospitals. We as a team start working with the hospital from the time of conceptualization and have competence to take it to break even. We work as the part of team while doing equipment planning, service planning and even negotiating the best deals with the medical equipment vendors like GE, Philips, Siemens etc.

          Apart from the project and operations management for hospitals, our another core area of expertise includes branding, marketing communication and online marketing. This forms the part of complete hospital management from creating the brand, leveraging it, generating the revenue and managing the cost to make the venture profitable.</p> 
          <a href="http://localhost/tagor_health_consultancy/index.php/user_about" class="btn btn-success">check more </a>  
          </div>
      </div>
</section>


<section class="my-5" style="width: 100%;">
    <div class="py-5">
        <h2 class="text-center"><b>Services</b></h2>
    </div>
  <div class="row">
    <div class="service_class">
      <img class="card-img-top" src="http://localhost/tagor_health_consultancy/public/images/vcc3.jpg" alt="Vaccine image" width="100px" height="250px">
      <div class="card-body">
        <i class="ion ion-wand"></i>
        <h3> Vaccine </h3>
        <p class="card-text">A vaccine is a biological preparation that provides active acquired immunity to a particular infectious disease. A vaccine typically contains an agent that resembles a disease-causing microorganism and is often made from weakened or killed forms of the microbe, its toxins,</p>
        <a href="http://localhost/tagor_health_consultancy/index.php/user_vaccine" class="btn btn-primary">See Profile</a>
      </div>
    </div>
  
  
    <div class="service_class">
          <img class="card-img-top" src="http://localhost/tagor_health_consultancy/public/images/oxy.jpg" alt="Vaccine image" alt="Vaccine image" width="100px" height="250px">
          <div class="card-body">
            <i class="ion ion-soup-can-outline"></i>
            <h3> Oxygen </h3>
            <p class="card-text">Oxygen is the chemical element with the symbol O and atomic number 8. It is a member of the chalcogen group in the periodic table, a highly reactive nonmetal, and an oxidizing agent that readily forms oxides with most elements as well as with other compounds.</p>
            <a href="http://localhost/tagor_health_consultancy/index.php/user_oxygen" class="btn btn-primary">See Profile</a>
          </div>
    </div>
      
    
    <div class="service_class">
        <img class="card-img-top" src="http://localhost/tagor_health_consultancy/public/images/bd2.jpg" alt="Vaccine image" width="100px" height="250px">
        <div class="card-body">
          <i class="nav-icon ion ion-waterdrop"></i>  
          <h3 class="card-title">Blood</h3>
          <p class="card-text">Blood is a constantly circulating fluid providing the body with nutrition, oxygen, and waste removal. Blood is mostly liquid, with numerous cells and proteins suspended in it, making blood "thicker" than pure water. The average person has about 5 liters (more than a gallon) of blood.</p>
          <a href="http://localhost/tagor_health_consultancy/index.php/user_blood" class="btn btn-primary">See Profile</a>
        </div>
    </div>
  

    <div class="service_class">
        <img class="card-img-top" src="http://localhost/tagor_health_consultancy/public/images/d.jpg" alt="Vaccine image" width="100px" height="250px">
        <div class="card-body">
          <i class="nav-icon ion-ios-pulse-strong"></i>
          <h3 class="card-title">Doctors</h3>
          <p class="card-text">Doctors are responsible for increased life expectancy and improved well-being in society. People who survive diseases such as cancer usually owe their survival to doctors, whose skills and dedication are vital for their cure.</p>
          <a href="http://localhost/tagor_health_consultancy/index.php/user_doctor" class="btn btn-primary">See Profile</a>
        </div>
    </div>
  </div>

</section>

 

<section class="my-5">


  <div class="py-5">
    <h2 class="text-center"><b>Facilities</b></h2>
  </div>

  <div class="facilities_class">

    <div class="facilities">
      <div class="nav">
        <nav class="mt-4">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false" text-align="center">
             </ul>
             <img class="card-img-top" src="http://localhost/tagor_health_consultancy/public/images/outdoor.png" width="300px" height="60px">
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

   

  <section class="my-4">
        <div class="py-7">
            <h2 class="text-center"><b>Contact Us</b></h2>
        </div>
          <div class="container-fluid contact-class">
          </div>
           <div class="contact-details">
          <div class="text-left">
              <h5><b>Address</b></h5>
              <h5 id="visit_id">Visit Our Website</h5>
              <p class="py-2">16/2,Shakespeare Sarani Rd,Elgin, Kolkata, West Bengal -700016</p>
          </div>

          <div class="text-right">
              <p class="py-0"><b>Email Address</b>: tagorehealthcare20@gmai.com</p>
              <p class="py-0"><b>Phone Number</b>: 9874356214/9330956281</p>
              <p class="py-0"><b>Tel</b>:033-2667-5577/033-2667-9696</p>
          </div>
      </section>

  
</body>
</html>

<footer class="main-footer">
      <strong> @ Copyright & copy; 2021-2022   Tagore Health Consultancy </strong>
       All rights reserved.
      <div class="float-right d-none d-sm-inline-block"><b>Version 1.0.0 </b></div>
    </footer>
</div>