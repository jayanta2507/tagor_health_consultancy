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

  </style>

  <!-- <link rel="stylesheet" type="text/css" href="http://localhost/tagor_health_consultancy/public/css/style.css"> -->


<div class="main_div">
    <header>
      <section class="my-home">
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
                <?php } ?>

                <li class="nav-item">
                  <a class="nav-link" href="http://localhost/tagor_health_consultancy/index.php/user_facility">Facility</a>
                </li>

                <li class="nav-item">
                  <a class="nav-link" href="http://localhost/tagor_health_consultancy/index.php/user_contact">Contact</a>
                </li>
              </ul>
            </div>
          </div>
        </nav>
      </section>
    </header>


    <main>
      <section class="my-5">
        <div class="py-5">
            <h2 class="text-center"><b>About Us</b></h2>
        </div>
        <div class="container-fluid">
          <div class="row">
              <div class="col-lg-6 col-md-6 col-12">
                  <img src="http://localhost/tagor_health_consultancy/public/images/bg4.jpg" class="img-fluid" width="100%">    
              </div>
              <div class="col-lg-6 col-md-6 col-12">
                <h2 class="display-7">TAGORE HEALTHCARE CONSULTANCY</h2>
                <p class="py-2">The core team at Tagore Health Consultants have more than 10 years of experience in Healthcare Consultancy and Hospital Marketing. We offer complete range of services for hospitals. We as a team start working with the hospital from the time of conceptualization and have competence to take it to break even. We work as the part of team while doing equipment planning, service planning and even negotiating the best deals with the medical equipment vendors like GE, Philips, Siemens etc.

                Apart from the project and operations management for hospitals, our another core area of expertise includes branding, marketing communication and online marketing. This forms the part of complete hospital management from creating the brand, leveraging it, generating the revenue and managing the cost to make the venture profitable.</p> 
                
                <p class="py-2"> Our objective is to partner with physicians that want to build a surgery center and or an existing surgery center seeking to increase revenues and profitability.  We can assist in building you a profitable surgery center and or growing your existing center  organically (increasing cases/new service lines/revenue/profits and through acquisition of additional complementary assets.


                The founder is a 30 year veteran of the healthcare industry known for improving operations,      profitability, surgery center development, physician practices, hospital systems, P&L accountability, revenue cycle, physician relationships, surgical services, and supply chain management.</p>
              </div>
          </div>
        </div>
      </section>
    </main>


    <footer class="main-footer">
      <strong> @ Copyright & copy; 2021-2022   Tagor Health Consultancy </strong>
       All rights reserved.
      <div class="float-right d-none d-sm-inline-block"><b>Version 1.0.0 </b></div>
    </footer>
</div>
