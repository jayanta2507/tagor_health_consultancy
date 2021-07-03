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
</nav>

<section class="my-5">
  <h2 class="text-center"> <b>Services</b></h2>
      <div class="col-lg-12 col-md-12 col-12">
          <div class="card" >
            <img class="card-img-top" src="http://localhost/tagor_health_consultancy/public/images/s1.jpg" alt="Vaccine image" width="100%" height="500">
              <div class="card-body">
              <h2 class="display-7" style="background-color:Orange;">Services</h2> 
                <p class="py-4">Consultants will help you reach your business goals and will provide advice on multiple areas such as search engine optimization (SEO), information architecture, brand awareness improvements, brand management, content planning, will identify loopholes in your brand management, and will propose data-driven marketing</p>
                 <p><h3 style="background-color:Gray;"> List Of  Services that are Offered here, are as follows:</h3></p>
              </div>
            </div>
          </div>
      </div>
  </div>
     

      <div class="col-lg-12 col-md-12 col-12">
          <div class="card" >
            <img class="card-img-top" src="http://localhost/tagor_health_consultancy/public/images/vcc3.jpg" alt="Vaccine image" width="100%" height="500">
              <div class="card-body">
                <h2 style="background-color:MediumSeaGreen;">Vaccine</h2>
                  <p class="card-text">A vaccine is a biological preparation that provides active acquired immunity to a particular infectious disease. A vaccine typically contains an agent that resembles a disease-causing microorganism and is often made from weakened or killed forms of the microbe, its toxins, or one of its surface proteins. The agent stimulates the body's immune system to recognize the agent as a threat, destroy it, and to further recognize and destroy any of the microorganisms associated with that agent that it may encounter in the future. Vaccines can be prophylactic (to prevent or ameliorate the effects of a future infection by a natural or "wild" pathogen), or therapeutic (to fight a disease that has already occurred, such as cancer).</p>
                    <form>
                      <input type="button" value="See More" onclick="window.location.href='http://localhost/tagor_health_consultancy/index.php/user_vaccine'" />
                    </form>
              </div>
          </div>
      </div>
  </div>
</div>

<div class="col-lg-12 col-md-12 col-12">
  <div class="card" >
     <img class="card-img-top" src="http://localhost/tagor_health_consultancy/public/images/oxy.jpg" alt="oxygen image" width="100%" height="500">
      <div class="card-body">
       <h2 style="background-color:SlateBlue;">Oxygen</h2>
        <p class="card-text">Oxygen is the chemical element with the symbol O and atomic number 8. It  is a member of the chalcogen group in the periodic table, a highly reactive nonmetal, and an oxidizing agent that readily forms oxides with most elements as well as with other compounds. After hydrogen and helium, oxygen is the third-most abundant element in the universe by mass. At standard temperature and pressure, two atoms of the element bind to form dioxygen, a colorless and odorless diatomic gas with the formula O2. Diatomic oxygen gas currently constitutes 20.95% of the Earth's atmosphere, though this has changed considerably over long periods of time. Oxygen makes up almost half of the Earth's crust in the form of oxides.</p>
         <form>
          <input type="button" value="See More" onclick="window.location.href='http://localhost/tagor_health_consultancy/index.php/user_oxygen'"/>
         </form>
      </div>
    </div>
  </div>


<div class="col-lg-12 col-md-12 col-12">
  <div class="card" >
    <img class="card-img-top" src="http://localhost/tagor_health_consultancy/public/images/bd2.jpg" alt="blood image"width="100%" height="500">
    <div class="card-body">
      <h2 style="background-color:Tomato;">Blood</h2>
        <p class="card-text">Blood is a constantly circulating fluid providing the body with nutrition, oxygen, and waste removal. Blood is mostly liquid, with numerous cells and proteins suspended in it, making blood "thicker" than pure water. The average person has about 5 liters (more than a gallon) of blood.</p>
          <form>
           <input type="button" value="See More" onclick="window.location.href='http://localhost/tagor_health_consultancy/index.php/user_blood'" />
          </form>
    </div>
  </div> 
</div>

<div class="col-lg-12 col-md-12 col-12">
  <div class="card" >
    <img class="card-img-top" src="http://localhost/tagor_health_consultancy/public/images/d.jpg"      alt="doctor image" width="100%" height="500">
      <div class="card-body">
        <h2  style="background-color:DodgerBlue;">Doctors</h2>
          <p class="card-text">Doctors are responsible for increased life expectancy and improved well-being in society. People who survive diseases such as cancer usually owe their survival to doctors, whose skills and dedication are vital for their cure.A physician, medical practitioner, medical doctor, or simply doctor, is a professional who practices medicine, which is concerned with promoting, maintaining or restoring health through the study, diagnosis, prognosis and treatment of disease, injury, and other physical and mental impairments.</p>
            <form>
             <input type="button" value="See More" onclick="window.location.href='http://localhost/tagor_health_consultancy/index.php/user_doctor'" />
            </form>
      </div>
  </div>
</div>
</section>

<footer class="main-footer">
      <strong> @ Copyright & copy; 2021-2022   Tagor Health Consultancy </strong>
       All rights reserved.
      <div class="float-right d-none d-sm-inline-block"><b>Version 1.0.0 </b></div>
    </footer>
</div>