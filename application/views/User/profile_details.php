<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Details</title>
    <link rel="stylesheet" type="text/css" href="http://localhost/tagor_health_consultancy/public/css/style5.css">
</head>
<body>
<style>
 body{
       
    background-image: url('http://localhost/tagor_health_consultancy/public/images/  6.jpg');
    margin-top:40px;
    background-position:center;
   background-size:cover;
   font-family:sans-serif;
    }
</style>
    <div class="regform">
        <h1>
        Profile Details
 </h1>
</div>
<div class="main">
    
        <form method="POST">
            <div id="name">
                <h2 class="name">
 Name</h2>
 <input class="name" type="text" name="name">
            <h2 class="name">
         </div>
<h2 class="name">
Date Of Birth:</h2>
<input class="email" type="date" name="dob">
            <h2 class="name">
Email Id</h2>
<input class="email" type="email" name="email">
            <h2 class="name">
Phone Number</h2>
<input class="phone" type="number" name="phone">
            <h2 class="name">
Address</h2>
<input class="address" type="text" name="address">
            <h2 class="name">
Pincode</h2>
<input class="pincode" type="number" name="pincode">
<h2 class="name">
City</h2>
<input class="city" type="text" name="city">
<h2 class="name">
Country</h2>
<input class="country" type="text" name="country">
<h2 class="name">
State</h2>
<input class="state" type="text" name="state">
<h2 class="name">
Blood Group</h2>
<input class="blood group" type="text" name="blood group">
<h2 class="name">
Gender</h2>

<input type="radio" id="male" name="gender" value="male">
  <label for="male">Male</label>
  <input type="radio" id="female" name="gender" value="female">
  <label for="female">Female</label>
  <input type="radio" id="other" name="gender" value="other">
  <label for="other">Other</label>

            <button type="submit">Submit</button>
            
    
    
        </form>
</div>
</body>
</html>