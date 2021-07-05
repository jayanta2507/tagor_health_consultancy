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
<section class="my-5">
    <div class="py-5">
        <h2 class="text-center"><b>Blood</b></h2>
    </div>
    <div class="container-fluid">
    <div class="row">
        <div class="col-lg-6 col-md-6 col-12">
                  <img src="http://localhost/tagor_health_consultancy/public/images/bd4.jpg" alt="Los Angeles" width="100%" height="500">   
    </div>
    <div class="col-lg-6 col-md-6 col-12">
    
    <h5 class="py-2">Blood is a body fluid in humans and other animals that delivers necessary substances such as nutrients and oxygen to the cells and transports metabolic waste products away from those same cells.

In vertebrates, it is composed of blood cells suspended in blood plasma. Plasma, which constitutes 55% of blood fluid, is mostly water (92% by volume),[2] and contains proteins, glucose, mineral ions, hormones, carbon dioxide (plasma being the main medium for excretory product transportation), and blood cells themselves. Albumin is the main protein in plasma, and it functions to regulate the colloidal osmotic pressure of blood. The blood cells are mainly red blood cells (also called RBCs or erythrocytes), white blood cells (also called WBCs or leukocytes) and platelets (also called thrombocytes). The most abundant cells in vertebrate blood are red blood cells. These contain hemoglobin, an iron-containing protein, which facilitates oxygen transport by reversibly binding to this respiratory gas and greatly increasing its solubility in blood. In contrast, carbon dioxide is mostly transported extracellularly as bicarbonate ion transported in plasma.

Vertebrate blood is bright red when its hemoglobin is oxygenated and dark red when it is deoxygenated. Some animals, such as crustaceans and mollusks, use hemocyanin to carry oxygen, instead of hemoglobin. Insects and some mollusks use a fluid called hemolymph instead of blood, the difference being that hemolymph is not contained in a closed circulatory system. In most insects, this "blood" does not contain oxygen-carrying molecules such as hemoglobin because their bodies are small enough for their tracheal system to suffice for supplying oxygen.</h5> 
    
    <p class="py-2"><h3>The importance of blood grouping:</h3></p>

    <h5>The accurate grouping of blood is very important when it comes to having a blood transfusion. If blood is given to a patient that has a blood type that is incompatible with the blood type of the blood that the patient receives, it can cause intravenous clumping in the patient’s blood which can be fatal. The patient’s body can start producing antibodies that attack the antigens on the blood cells in the blood that was given to the patient, causing reaction and rejection.</h5>

    <p><h3>The 4 Blood Groups:</h3></p>

    <h5>Along with red blood cells, white blood cells and platelets, blood also contains antigens, part of the body's immune system. Antigens are proteins or sugars which cover the surface of the red blood cells. Some of these antigens define which blood group you belong to.

    There are four ABO blood groups: A, B, AB and O which all refer to the presence of different antigens on the red blood cells. Blood group A means you have the A antigen, while blood group B means you have the B antigen. Blood group AB has both the A and B antigens present on the surface, but blood group O has neither antigen present.

    People that have the D antigen on their red blood cells are RhD positive, while those people that don’t have the D antigen are Rh D negative. The positive and negative suffix on blood types, such as A+ and B- refers to your Rh D type, also known as your Rhesus D type.</h5>

     </div>
</div>
</section>


<footer class="main-footer">
      <strong> @ Copyright & copy; 2021-2022   Tagore Health Consultancy </strong>
       All rights reserved.
      <div class="float-right d-none d-sm-inline-block"><b>Version 1.0.0 </b></div>
    </footer>
</div>