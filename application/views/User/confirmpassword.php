<html>
  <head>
    <title>Tagor Health Consultancy</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="http://localhost/tagor_health_consultancy/public/css/style4.css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700,800&display=swap" rel="stylesheet">
  </head>
  <body>
    <div class="bg-img">
      <div class="cont">
        <form action="<?php echo base_url(); ?>index.php/submit_forgotpassword" method="post">
            <label>
              <span>Password</span>
              <input type="password" name="password" autocomplete="false">

              <span class="text-danger"><?php echo form_error('password'); ?></span>
            </label>
             <label>
              <span>Confirm Password</span>
              <input type="password" name="confirmpassword" autocomplete="false">

              <span class="text-danger"><?php echo form_error('confirmpassword'); ?></span>
            </label>
            <label>
              <button class="submit" type="submit">Confirm</button>
              <a href ="http://localhost/tagor_health_consultancy/index.php/user_confrimpassword">Confrim ?</a>
            </label>
        </form>
      </div>
    </div>
  </body>
</html>