

 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Profile</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">User Profile</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-3">
            <span><?php echo $this->session->flashdata('msg'); ?></span>
            <!-- Profile Image -->
            <div class="card card-primary card-outline">
              <div class="card-body box-profile">
                <div class="text-center">

                  <form class="form-horizontal" id="submit" action="javascript:void(0)">

                    <span id="image_id">
                      <img class="profile-user-img img-fluid img-circle" src="<?php echo base_url(); ?>assests/user_images/<?php echo $prfile_data['image'] ?>"  alt="User profile picture">
                    </span>
                    

                    <input type='file' name="image_file" />

                    <span id='val'></span>
                    <span id='button'>Choose Image</span>
                    <br>
                    <button class="btn btn-success" id="btn_upload" type="submit">Upload</button>

                  </form>
                  
                </div>

                <h3 class="profile-username text-center"><?php echo $prfile_data['name'] ?></h3>

                <!-- <p class="text-muted text-center">Software Engineer</p> -->

                <ul class="list-group list-group-unbordered mb-3">
                   
                  <li class="list-group-item">
                    <b>Email</b> <a class="float-right"><?php echo $prfile_data['email'] ?></a>
                  </li>
                  <li class="list-group-item">
                    <b>Blood Gr</b> <a class="float-right"><?php echo $prfile_data['blood_group'] ?></a>
                  </li>
                </ul>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

           
          </div>
          <!-- /.col -->
          <div class="col-md-9">
            <div class="card">
              <div class="card-header p-2">
                <ul class="nav nav-pills">
                  <li class="nav-item"><a class="nav-link">Edit Profile</a></li>
                </ul>
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-contenthh">
                  
                  <div class="tab-pane" id="settings">
                    <form class="form-horizontal" action="<?php echo base_url(); ?>index.php/update_profile" method="post">
                      <div class="form-group row">
                        <label for="inputName" class="col-sm-2 col-form-label">Name</label>
                        <div class="col-sm-10">
                          <input type="text" name="user_name" class="form-control" id="inputName" placeholder="Name" value="<?php echo $prfile_data['name'] ?>">

                          <span class="text-danger"><?php echo form_error('user_name'); ?></span>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="dob" class="col-sm-2 col-form-label">Date Of Birth</label>
                        <div class="col-sm-10">
                          <input type="date" class="form-control" name="dob" id="dob" placeholder="Date Of Birth" value="<?php echo $prfile_data['dob'] ?>">
                        </div>
                      </div>
                       
                      <div class="form-group row">
                        <label for="Phone Number" class="col-sm-2 col-form-label">Phone Number</label>
                         <div class="col-sm-10">
                          <input type="number" class="form-control" id="phoneno" name="phone" placeholder="Phone Number" value="<?php echo $prfile_data['phone'] ?>">

                          <span class="text-danger"><?php echo form_error('phone'); ?></span>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="Address" class="col-sm-2 col-form-label">Address</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="Address" name=address placeholder="Address" value="<?php echo $prfile_data['address'] ?>">
                           <span class="text-danger"><?php echo form_error('address'); ?></span>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="Pincode" class="col-sm-2 col-form-label">Pincode</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="Pincode" name=pincode placeholder="Pincode" value="<?php echo $prfile_data['pincode'] ?>">
                           <span class="text-danger"><?php echo form_error('pincode'); ?></span>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="City" class="col-sm-2 col-form-label">City</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="City" name=city placeholder="City" value="<?php echo $prfile_data['city'] ?>">
                           <span class="text-danger"><?php echo form_error('city'); ?></span>
                        </div>
                      </div>

                      <div class="form-group row">
                        <label for="City" class="col-sm-2 col-form-label">State</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="state" name="state" placeholder="State" value="<?php echo $prfile_data['state'] ?>">
                           <span class="text-danger"><?php echo form_error('state'); ?></span>
                        </div>
                      </div>

                      <div class="form-group row">
                        <label for="Country" class="col-sm-2 col-form-label">Country</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" name="country" id="Country" placeholder="Country" value="<?php echo $prfile_data['country'] ?>">
                           <span class="text-danger"><?php echo form_error('country'); ?></span>
                        </div>
                      </div>
                       <!-- <div class="form-group row">
                        <label for="Country" class="col-sm-2 col-form-label">Country</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="Country" placeholder="Country">
                        </div>
                      </div> -->
                      <div class="form-group row">
                        <label for="Blood Group" class="col-sm-2 col-form-label">Blood Group</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="Blood Group" name=bloodgr placeholder="Blood Group" value="<?php echo $prfile_data['blood_group'] ?>">
                           <span class="text-danger"><?php echo form_error('bloodgr'); ?></span>
                        </div>
                      </div>   
                       <div class="form-group row">
                        <label for="Gender" class="col-sm-2 col-form-label">Gender</label>
                        <div class="col-sm-10">

                          <input type="radio" id="male" name="gender" value="male"  <?php echo ($prfile_data['gender']=='male')?'checked':'' ?>>
                          <label for="male">Male</label>

                          <input type="radio" id="female" name="gender" value="female"  <?php echo ($prfile_data['gender']=='female')?'checked':'' ?>>
                          <label for="female">Female</label>

                          <input type="radio" id="other" name="gender" value="other"  <?php echo ($prfile_data['gender']=='other')?'checked':'' ?>>
                          <label for="other">Other</label>

                        </div>
                      </div>                    
                      <div class="form-group row">
                        <div class="offset-sm-2 col-sm-10">
                          <button type="submit" class="btn btn-danger">Update</button>
                        </div>
                      </div>
                    </form>
                  </div>
                  <!-- /.tab-pane -->
                </div>
                <!-- /.tab-content -->
              </div><!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <style type="text/css">
    input[type='file'] {
      opacity:0    
    }
  </style>

  <script type="text/javascript">

    $( document ).ready(function() {
        $('#button').click(function(){
           $("input[type='file']").trigger('click');
        })

        $("input[type='file']").change(function(){
           $('#val').text(this.value.replace(/C:\\fakepath\\/i, ''))
        })   
    });


   
  </script>