  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="http://localhost/tagor_health_consultancy/public/css/style1.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Orelega+One&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@1,300&display=swap" rel="stylesheet">
   <link rel="stylesheet" type="text/css" href="http://localhost/tagor_health_consultancy/public/css/style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <style>  
  .carousel-inner img {
      width: 100%;
      height: 100%;
    }  

  </style>

  <link rel="stylesheet" type="text/css" href="http://localhost/tagor_health_consultancy/public/css/style.css">


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
            <h2 class="text-center"><b>Contact Us</b></h2>
        </div>
        <div class="container-fluid contact-class">
          <div class="row">
                  <form action="<?php echo base_url(); ?>index.php/submit_contactus" method="post">
                      <label>
                        <span>Name</span>
                        <input type="text" name="name" autocomplete="false">
                        <span class="text-danger"><?php echo form_error('name'); ?></span>
                      </label>
                      <label>
                        <span>Emailid</span>
                        <input type="text" name="email" autocomplete="false">
                        <span class="text-danger"><?php echo form_error('email'); ?></span>
                      </label>
                      <label>
                        <span>Phone Number</span>
                        <input type="text" name="phone" autocomplete="false">
                        <span class="text-danger"><?php echo form_error('phone'); ?></span>
                      </label>
                      <label>
                        <span>Subject</span>
                        <input type="text" name="subject" autocomplete="false">
                        <span class="text-danger"><?php echo form_error('subject'); ?></span>
                      </label>
                      <label>
                        <span>Message Box</span>
                        <input type="text" name="message" autocomplete="false">
                        <span class="text-danger"><?php echo form_error('message'); ?></span>
                      </label>
                      <label>
                        <button class="submit" type="submit">Confirm</button>
                      </label>
                  </form>
                </div>  
            </div>
        <div class="contact-details">
        </div>
      </section>
    </main>


    <footer class="main-footer">
      <strong> @ Copyright & copy; 2021-2022   Tagor Health Consultancy </strong>
       All rights reserved.
      <div class="float-right d-none d-sm-inline-block"><b>Version 1.0.0 </b></div>
    </footer>
</div>