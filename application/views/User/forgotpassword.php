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
  <form action="<?php echo base_url(); ?>index.php/user_forgotpassword" method="post">
 <label>
            <span>EMAIL ID</span>
            <input type="email" name="emailid" autocomplete="false">
          </label>
          <label>
            <span>PASSWORD</span>
            <input type="password" name="pswd" autocomplete="false">
          </label>

          <button class="submit" type="button">Confirm</button>
</div>
</div>
</boady>
</html>