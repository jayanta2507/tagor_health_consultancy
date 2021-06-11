<!DOCTYPE html>
<html>
<head>
	<title>Tagor Health Consultancy</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="http://localhost/tagor_health_consultancy/public/css/style.css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700,800&display=swap" rel="stylesheet">

  <script type="text/javascript">
    document.querySelector('.img-btn').addEventListener('click', function()
    {
      document.querySelector('.cont').classList.toggle('s-signup')
    });
  </script>
</head>
<body>
  <div class="cont">
    <div class="form sign-in">
       <span style="color: red"><?php echo $this->session->flashdata('msg'); ?></span>

      <h2>Sign In</h2>
        <form action="<?php echo base_url(); ?>index.php/submit_login" method="post">
          <label>
            <span>EMAIL ID</span>
            <input type="email" name="email" >
            <span class="text-danger"><?php echo form_error('email'); ?></span>
          </label>
          <label>
            <span>PASSWORD</span>
            <input type="password" name="login_password" >
            <span class="text-danger"><?php echo form_error('login_password'); ?></span>
          </label>

          <button class="submit" type="submit"> Sign In </button>
          <a href ="http://localhost/tagor_health_consultancy/index.php/user_forgotpassword">Forgot Password ?</a>
        </form>
      

      <div class="social-media">
        <ul>
          <li><img src="http://localhost/tagor_health_consultancy/public/images/facebook.png"></li>
          <li><img src="http://localhost/tagor_health_consultancy/public/images/twitter.png"></li>
          <li><img src="http://localhost/tagor_health_consultancy/public/images/linkedin.png"></li>
          <li><img src="http://localhost/tagor_health_consultancy/public/images/instagram.png"></li>
        </ul>
      </div>
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
            <span>Name</span>
            <input type="text" name="name">
            <span class="text-danger"><?php echo form_error('name'); ?></span>
          </label>
          <label>
            <span>Email</span>
            <input type="email" name="email">
            <span class="text-danger"><?php echo form_error('email'); ?></span>
          </label>
          <label>
            <span>Password</span>
            <input type="password" name="password">
            <span class="text-danger"><?php echo form_error('password'); ?></span>
          </label>
          <label>
            <span>Confirm Password</span>
            <input type="password" name="confirm_password">
            <span class="text-danger"><?php echo form_error('confirm_password'); ?></span>
          </label>
          <button type="submit" class="submit">Sign Up</button>
        </form>


      </div>
    </div>
  </div>
<script type="text/javascript" src="http://localhost/tagor_health_consultancy/public/js/script.js"></script>
</body>
</html> 

