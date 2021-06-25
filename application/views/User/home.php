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
</style>
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Tagore Health Consultancy</a>
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

            <li class="nav-item">
          <a class="nav-link" href="http://localhost/tagor_health_consultancy/index.php/user_facility">Facility</a>
            </li>

            <li class="nav-item">
          <a class="nav-link" href="http://localhost/tagor_health_consultancy/index.php/user_contact">Contact</a>
        </li>

        <?php } ?>

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
      <img src="http://localhost/tagor_health_consultancy/public/images/bg1.jpg" alt="Los Angeles" width="1100" height="500">
    </div>
    <div class="carousel-item">
      <img src="http://localhost/tagor_health_consultancy/public/images/bg2.jpg" alt="Chicago" width="1100" height="500">
    </div>
    <div class="carousel-item">
      <img src="http://localhost/tagor_health_consultancy/public/images/bg3.jpg" alt="New York" width="1100" height="500">
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
    <div class="container-fluid">
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

<section class="my-5">
    <div class="py-5">
        <h2 class="text-center"><b>Services</b></h2>
    </div>
  
   <div class="facilities1">
          <img class="card-img-top" src="http://localhost/tagor_health_consultancy/public/images/vcc3.jpg" alt="Vaccine image" width="100px">
        <li class="nav-item menu-open">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <h3>
            Vaccine </h3>
    <p class="card-text">A vaccine is a biological preparation that provides active acquired immunity to a particular infectious disease. A vaccine typically contains an agent that resembles a disease-causing microorganism and is often made from weakened or killed forms of the microbe, its toxins, or one of its surface proteins. The agent stimulates the body's immune system to recognize the agent as a threat, destroy it, and to further recognize and destroy any of the microorganisms associated with that agent that it may encounter in the future. Vaccines can be prophylactic (to prevent or ameliorate the effects of a future infection by a natural or "wild" pathogen), or therapeutic (to fight a disease that has already occurred, such as cancer).</p>
    <a href="http://localhost/tagor_health_consultancy/index.php/user_vaccine" class="btn btn-primary">See Profile</a>
  
          </div>
      </div>
  

    
   <div class="facilities1">
          <img class="card-img-top" src="http://localhost/tagor_health_consultancy/public/images/oxy.jpg" alt="Vaccine image" alt="Vaccine image" width="100px">
        <li class="nav-item menu-open">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <h3>
            Vaccine </h3>
    <p class="card-text">Oxygen is the chemical element with the symbol O and atomic number 8. It is a member of the chalcogen group in the periodic table, a highly reactive nonmetal, and an oxidizing agent that readily forms oxides with most elements as well as with other compounds. After hydrogen and helium, oxygen is the third-most abundant element in the universe by mass. At standard temperature and pressure, two atoms of the element bind to form dioxygen, a colorless and odorless diatomic gas with the formula O2. Diatomic oxygen gas currently constitutes 20.95% of the Earth's atmosphere, though this has changed considerably over long periods of time. Oxygen makes up almost half of the Earth's crust in the form of oxides.</p>
    <a href="http://localhost/tagor_health_consultancy/index.php/user_oxygen" class="btn btn-primary">See Profile</a>
          </div>
      </div>
    </div>
    


    <div class="col-lg-4 col-md-4 col-12">
                <div class="card" >
  <img class="card-img-top" src="http://localhost/tagor_health_consultancy/public/images/bd2.jpg" alt="Vaccine image">
  <div class="card-body">
    <h3 class="card-title">Blood</h3>
    <p class="card-text">Blood is a constantly circulating fluid providing the body with nutrition, oxygen, and waste removal. Blood is mostly liquid, with numerous cells and proteins suspended in it, making blood "thicker" than pure water. The average person has about 5 liters (more than a gallon) of blood.</p>
    <a href="http://localhost/tagor_health_consultancy/index.php/user_blood" class="btn btn-primary">See Profile</a>
          </div>
      </div>
    </div>

    <div class="col-lg-4 col-md-4 col-12">
                <div class="card" >
  <img class="card-img-top" src="http://localhost/tagor_health_consultancy/public/images/d.jpg" alt="Vaccine image">
  <div class="card-body">
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
    <style>

      .facilities {
    height: 190px;
    width: 270px;
    background-color: white;
    float: center;
    border: 1px solid;
    margin: 15px;

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

        <div class="row">
    <div class="facilities">
      <div class="nav">
      <nav class="mt-4">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false" text-align="center">
           </ul>
           <img class="card-img-top" src="http://localhost/tagor_health_consultancy/public/images/outdoor.png" width="256px" height="50px">
          <li class="nav-item menu-open">
            <a href="#" class="nav-link">
              <i class="nav-icon ion-home"></i>
              <h3>
              Outdoor Service
              </h3>
            </a>
          </li>
    </div>                
  
  
      </div>

      <div class="facilities">
        <img src="http://localhost/tagor_health_consultancy/public/images/indoor1.png" width="256px" height="110px">
        <li class="nav-item menu-open">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <h3>
              Indoor Service </h3>
              
            </a>
          </li>
        
      </div>

      <div class="facilities">
        <img src="http://localhost/tagor_health_consultancy/public/images/health.png" width="256px" height="110px">
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
      <img src="http://localhost/tagor_health_consultancy/public/images/phar.png" width="256px" height="80px">
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
       <img src="http://localhost/tagor_health_consultancy/public/images/24.png" width="256px" height="50px">
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
              Specialized Operation Theaters
              </h3>
            </a>
          </li>
       </div>

        <div class="facilities">
          <img src="http://localhost/tagor_health_consultancy/public/images/icu.png" width="270px" height="90px">
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
          <img src="http://localhost/tagor_health_consultancy/public/images/dialysis.png" alt="Emergency" width="256px" height="80">
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
          <img src="http://localhost/tagor_health_consultancy/public/images/amb.png" width="256px" height="110px">
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
          <img src="http://localhost/tagor_health_consultancy/public/images/cafe.png" width="256px" height="110px">
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
          <img src="http://localhost/tagor_health_consultancy/public/images/vacc.png" width="256px" height="110px">
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
        <img src="http://localhost/tagor_health_consultancy/public/images/o2.png" width="256px" height="110px">
         <li class="nav-item menu-open">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <h3>
             Oxygen              
           </h3>
            </a>
          </li>
       </div>



</section>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<style>  
.carousel-inner img {
    width: 100%;
    height: 100%;
  }  


</style>
</header>
</body>
</html>