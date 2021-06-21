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
          <a class="nav-link active" aria-current="page" href="home.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="http://localhost/tagor_health_consultancy/index.php/user_about">About Us</a>
        </li>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="services.php">Services</a>
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
          <a class="nav-link" href="facility.php">Facility</a>
        </li>
         <li class="nav-item">
          <a class="nav-link" href="contact.php">Contact</a>
        </li>

        
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
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
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-12">
                <div class="card" >
  <img class="card-img-top" src="img_avatar1.png" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">John Doe</h4>
    <p class="card-text">Some example text.</p>
    <a href="#" class="btn btn-primary">See Profile</a>
  </div>
</div>
            </div>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<style>  
.carousel-inner img {
    width: 100%;
    height: 100%;
  }  



</header>


</body>
</html>
