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
  <div class="py-5">
    <h2 class="text-center"><b>Doctors</b></h2>
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-12">
            <img src="http://localhost/tagor_health_consultancy/public/images/d2.jpg" class="img-fluid" width="200%">  
              <h4 class="display-8" style="background-color:DodgerBlue;">Doctors</h4>
                <p class="py-4">Doctors are responsible for increased life expectancy and improved well-being in society. People who survive diseases such as cancer usually owe their survival to doctors, whose skills and dedication are vital for their cure.</p> 
                  <p class="py-2"><h5>:Types Of Doctors:</h5></p>
                    <p>We are often confused about doctors. While we have a rough idea about our body, but who treats which part is still a wonder for many of us. Here is a basic list of doctors you should know about:</p>
     
                     <p>1. Cardiologist: A cardiologist is a doctor that deals with the cardiovascular system. This means he or she treats any abnormality in our blood vessels and heart. This can include heart disease or condition which requires diagnosis and treatment.</p>

                        <p>2. Audiologist: As the name suggests, an audiologist treats and evaluates anything and everything to do with audio or hearing abilities of a person. Since hearing is a very important sense, it requires an expert to treat the same.</p>
    
                           <p>3. Dentist: According to American Dental Association, a dentist is a doctor of oral health. Oral health includes teeth, tongue and gums. A dentist is known to diagnose and treat issues of these three areas.</p>

                              <p>4. ENT specialist: ENT stands for ear, nose and throat. A specialist who treats and diagnoses the issues and troubles of these three areas. Also known as an otolaryngologist, an ENT specialist is a physician to trained to treat the disorders of ENT.</p>

                                <p>5. Gynaecologist: A gynaecologist is trained to treat the female reproductive system which includes the vagina, uterus, ovaries and breasts.</p>

                                   <p>6. Orthopaedic surgeon: An orthopaedic surgeon is known to dealith issues relating to the musculoskeletal system. This means muscles and bones. Any fracture, pain or abnormality of these areas need to be consulted about with an orthopaedic surgeon.</p>

                                       <p>7. Paediatrician: Paediatricians are doctors who treat children. Since a child’s body functions in a different manner from ours, due to many factors like age and growing stages, their illness and health issues are different from an adult. A paediatrician helps in mental behaviour issues and physical health problems.</p>

                                          <p>8. Psychiatrists: Mental health is a vast field which requires our uttermost attention. Therefore, to treat what goes inside a humanbrain is difficult, due to the uncertainty of it. A psychiatrist helps treat and diagnose issues of mental health</p>

  
                                              <p>10. Radiologist: A radiologist for diagnosing diseases and internal & external injuries with the help of imaging techniques like x-rays, CT scan, MRI and ultrasound etc. They are the first step towards the diagnosis of any sort, which cannot be done without a machine.</p>

                                                 <p>11. Pulmonologist: Pulmonary means lungs, hence a doctor who treats lungs. Since the list of abnormalities and issues relating to lungs is long in modern times, a pulmonologist helps diagnose and treat common issues like lung cancer.</p>


                                                   <p>12. Endocrinologist: An endocrinologist is responsible for treating the endocrine system which includes the pituitary gland, pancreas, ovaries, thyroid, hypothalamus etc. they help in treating diabetes, hyperthyroidism etc.</p>

                                                      <p>13. Oncologist: Oncology involves the study of all types of cancers. This involves the radiation, medical and surgical. Oncologists can specialise in one type of cancer as well as the field is vast.</p>

                                                           <p>14. Neurologist: As the name suggests, a neurologist is responsible for treating and diagnosing issues of the nervous system. Our nervous system includes our brain, spinal cord, sensory organs, and all the nerves.</p>

                                                             <p>15. Cardiothoracic surgeon: Thorax means the chest. A cardiothoracic surgeon treats conditions of the heart, lungs, oesophagus and other organs in the chest.</p>
                </div>
            </div>                                                 
        </div>
    </div>
<footer class="main-footer">
    <strong> @ Copyright & copy; 2021-2022   Tagor Health Consultancy </strong>  All rights reserved.
    <div class="float-right d-none d-sm-inline-block"><b>Version 1.0.0 </b></div>
</footer>
</div>
</section>