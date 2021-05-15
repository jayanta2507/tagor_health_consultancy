<div class="content-wrapper">
  <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Profile Details</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Profile Details</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <section class="content">
      <div class="container-fluid">

        <div class="main">
    
            <form method="POST">
              <div id="name">
                <h2 class="name">Name</h2>
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

      </div>
    </section>

</div>

<style>
  *{
  margin:0;
  padding:0;
  }


   .regform{
          width:800px;
    background-color:rgb(0,0,0,0.6);
    margin:auto;
    color:#FFFFFF;
    padding:0px 0px 0px 0px;
    text-align:center;
    border-radius:5px 5px 0px 0px ;
    }  
  .main{
      background-color:rgb(0,0,0,0.5);
   width:800px;
   margin:auto;}
  
  form{
      padding:10px;
   
  } 
  
  #name{
       width:100%;
    height:100px;
    
    }  
  .name{
            margin-left:25px;
   margin-top:30px;
   width: 125px;
            color: black;
            font-size: 8px;
            font-weight: 70;}
.name{
                   position: relative;
       left:180px;
       top:-37px;
       line-height: 40px;
       width:480px;
       border-radius: 6px;
       padding: 0 22px;
       font-size: 16px;
       
       }
.
.dob  {
           position:relative;
     left:200px;
     top:-37px;
     line-height: 40px;
     width:480px;
        border-radius: 6px;
     padding: 0 22px;
     font-size: 16px;
     color: #555;  }
 .email{
        position:relative;
  left:200px;
     top:-37px;
     line-height: 40px;
     width:480px;
        border-radius: 6px;
     padding: 0 22px;
     font-size: 16px;
     color: #555;  
    }     
 
   .address{
         position:relative;
  left:200px;
     top:-37px;
     line-height: 40px;
     width:480px;
        border-radius: 6px;
     padding: 0 22px;
     font-size: 16px;
     color: #555;  
  }
  .pincode{
    position:relative;
left:200px;
top:-37px;
line-height: 40px;
width:480px;
   border-radius: 6px;
padding: 0 22px;
font-size: 16px;
color: #555;  
}
.city{
    position:relative;
left:200px;
top:-37px;
line-height: 40px;
width:480px;
   border-radius: 6px;
padding: 0 22px;
font-size: 16px;
color: #555;  
}
.country{
    position:relative;
left:200px;
top:-37px;
line-height: 40px;
width:480px;
   border-radius: 6px;
padding: 0 22px;
font-size: 16px;
color: #555;  
}
.state{
    position:relative;
left:200px;
top:-37px;
line-height: 40px;
width:480px;
   border-radius: 6px;
padding: 0 22px;
font-size: 16px;
color: #555;  
}
.blood  {
    position:relative;
left:200px;
top:-37px;
line-height: 40px;
width:480px;
   border-radius: 6px;
padding: 0 22px;
font-size: 16px;
color: #555;  
}
.gender{
    position:relative;
left:200px;
top:-37px;
line-height: 40px;
width:480px;
   border-radius: 6px;
padding: 0 22px;
font-size: 16px;
color: #555;  
}

.phone  {
    position:relative;
left:200px;
top:-37px;
line-height: 40px;
width:480px;
   border-radius: 6px;
padding: 0 22px;
font-size: 16px;
color: #555;  
}
   
     .radio{
         display:inline-block;
   padding-right:70px;
   font-size:25px;
   margin-left:25px;
   margin-top:15px;
   color:white;
   }
  .radio input{
              width:20px;
     height:20px;
     border-radius:50%;
     cursor:pointer;
     outline:none;
    } 
    button{
        background-color:#3BAF9F;
     display:block;
     margin:20px 0px 0px 20px;
     text-align:center;
     border-radius:12px;
     border:2px solid #366473;
     padding:14px 110px;
     outline:none;
     color:white;
     cursor:pointer;
     transition:0.25px;
    } 
   button:hover{
                background-color:#5390F5;
      }  
 .main{
       
    background-image: url('http://localhost/tagor_health_consultancy/public/images/6.jpg');
    margin-top:100px;
    background-position:center;
   background-size:cover;
   font-family:sans-serif;
    }

  h2{
    color: black;
  }
</style> 


</h2>












