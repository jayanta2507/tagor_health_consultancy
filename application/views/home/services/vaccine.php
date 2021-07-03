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
    
        <h2 class="text-center"><b>Vaccine</b></h2>
  
    <div class="container-fluid">
    <div class="row">
        <div class="col-lg-6 col-md-6 col-12">
             <img src="http://localhost/tagor_health_consultancy/public/images/vcc5.jpg" alt="Los Angeles" width="100%" height="500">    
    </div>
    <div class="col-lg-6 col-md-6 col-12">
    
    <h6>A vaccine is a biological preparation that provides active acquired immunity to a particular infectious disease. A vaccine typically contains an agent that resembles a disease-causing microorganism and is often made from weakened or killed forms of the microbe, its toxins, or one of its surface proteins. The agent stimulates the body's immune system to recognize the agent as a threat, destroy it, and to further recognize and destroy any of the microorganisms associated with that agent that it may encounter in the future. Vaccines can be prophylactic (to prevent or ameliorate the effects of a future infection by a natural or "wild" pathogen), or therapeutic (to fight a disease that has already occurred, such as cancer).

   The administration of vaccines is called vaccination. Vaccination is the most effective method of preventing infectious diseases; widespread immunity due to vaccination is largely responsible for the worldwide eradication of smallpox and the restriction of diseases such as polio, measles, and tetanus from much of the world. The effectiveness of vaccination has been widely studied and verified; for example, vaccines that have proven effective include the influenza vaccine,the HPV vaccine, and the chicken pox vaccine. The World Health Organization (WHO) reports that licensed vaccines are currently available for twenty-five different preventable infections.

   The terms vaccine and vaccination are derived from Variolae vaccinae (smallpox of the cow), the term devised by Edward Jenner (who both developed the concept of vaccines and created the first vaccine) to denote cowpox. He used the phrase in 1798 for the long title of his Inquiry into the Variolae vaccinae Known as the Cow Pox, in which he described the protective effect of cowpox against smallpox. In 1881, to honor Jenner, Louis Pasteur proposed that the terms should be extended to cover the new protective inoculations then being developed. The science of vaccine development and production is termed vaccinology.</h6> 
    
    <h6>The efficacy or performance of the vaccine is dependent on several factors:

    1.The disease itself (for some diseases vaccination performs better than for others).

    2.The strain of vaccine (some vaccines are specific to, or at least most effective against, particular strains of the disease)whether the vaccination schedule has been properly observed.

    3.diosyncratic response to vaccination.

    4.Some individuals are "non-responders" to certain vaccines, meaning that they do not generate antibodies even after being vaccinated correctly.

    5.Assorted factors such as ethnicity, age, or genetic predisposition.</h6>

     </div>

<footer class="main-footer">
    <strong> @ Copyright & copy; 2021-2022   Tagor Health Consultancy </strong>
     All rights reserved.
    <div class="float-right d-none d-sm-inline-block"><b>Version 1.0.0 </b></div>
</footer>
</div>
</section>
