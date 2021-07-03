
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
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="http://localhost/tagor_health_consultancy/public/css/style.css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700,800&display=swap" rel="stylesheet">

  <script type="text/javascript">
    $(document).ready(function(){
      document.querySelector('.img-btn').addEventListener('click', function()
      {
        document.querySelector('.cont').classList.toggle('s-signup')
      });
    })
    
  </script>
 <script type="text/javascript" src="http://localhost/tagor_health_consultancy/public/js/script.js"></script>





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
      <section>
      <div meta charset="UTF-8" class="login_reg">
        <div class="cont">
          <div class="form sign-in">
             <span style="color: red"><?php echo $this->session->flashdata('msg'); ?></span>

            <h2>Sign In</h2>
              <form action="<?php echo base_url(); ?>index.php/submit_login" method="post">
                <label>
                  <!-- <span>EMAIL ID</span> -->
                  <input type="email" name="email" placeholder="EMAIL ID" autocomplete="off">
                  <span class="text-danger"><?php echo form_error('email'); ?></span>
                </label>
                <label>
                  <!-- <span>PASSWORD</span> -->
                  <input type="password" name="login_password" placeholder="PASSWORD">
                  <span class="text-danger"><?php echo form_error('login_password'); ?></span>
                </label>

                <button class="submit" type="submit"> Sign In </button>
                <a href ="http://localhost/tagor_health_consultancy/index.php/user_forgotpassword">Forgot Password ?</a>
              </form>
          </div>

          <div class="sub-cont">
           
              <div class="img">
                <div class="img-text m-up">
                  <h2>New here?</h2>
                  <p>Sign up and discover great amount of new opportunities!</p>
                </div>
                <div class="img-text m-in">
                  <h2>One of us?</h2>
                  <p>If you already has an account, just sign in. We've missed you!</p>
                </div>
                <div class="img-btn">
                  <span class="m-up">Sign Up</span>
                  <span class="m-in">Sign In</span>
                </div>
              </div>      

            <div class="form sign-up">
              <?php echo $this->session->flashdata('msg'); ?>
              
              <h2>Sign Up</h2>
              <form action="<?php echo base_url(); ?>index.php/submit_registration" method="post">
                <label>
                  <!-- <span>Name</span> -->
                  <input type="text" name="name" placeholder="Name">
                  <span class="text-danger"><?php echo form_error('name'); ?></span>
                </label>
                <label>
                  <!-- <span>Email</span> -->
                  <input type="email" name="email" placeholder="Email">
                  <span class="text-danger"><?php echo form_error('email'); ?></span>
                </label>
                <label>
                  <!-- <span>Password</span> -->
                  <input type="password" name="password" placeholder="Password">
                  <span class="text-danger"><?php echo form_error('password'); ?></span>
                </label>
                <label>
                  <!-- <span>Confirm Password</span> -->
                  <input type="password" name="confirm_password" placeholder="Confirm Password">
                  <span class="text-danger"><?php echo form_error('confirm_password'); ?></span>
                </label>
                <button type="submit" class="submit">Sign Up</button>
              </form>


            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
  
  <footer class="main-footer">
    <section>
      <strong> @ Copyright & copy; 2021-2022   Tagor Health Consultancy </strong>
       All rights reserved.
      <div class="float-right d-none d-sm-inline-block"><b>Version 1.0.0 </b></div>
    </section>
  </footer>
  
</div>
