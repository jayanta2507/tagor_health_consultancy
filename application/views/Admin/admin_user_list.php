
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Users</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="http://localhost/tagor_health_consultancy/index.php/user_home">Home</a></li>
              <li class="breadcrumb-item active">User Profile</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Users</h3>
          <span><?php echo $this->session->flashdata('msg'); ?></span>
          <div class="card-tools">
            
            
          </div>

          
        </div>
        <div class="card-body p-0">
          <table class="table table-striped projects">
              <thead>
                  <tr>
                      <th style="width: 7.69%">
                          Sl No.
                      </th>
                       <th style="width: 7.69%">
                          Image
                      </th>
                      <th style="width: 7.69%">
                          Name
                      </th>
                      <th style="width: 7.69%">
                          Email
                      </th>
                      <th style="width: 7.14%">
                          Date Of Birth
                      </th>
                      <th style="width: 7.14%">
                          Phone Number
                      </th>
                      <th style="width: 7.14%">
                          Address
                      </th>
                     
                      <th style="width: 7.14%">
                          Pincode
                      </th>

                      <th style="width: 7.14%">
                          City
                      </th>

                      <th style="width: 7.14%">
                          State
                      </th>

                      <th style="width: 7.14%">
                           Country
                      </th>

                      <th style="width: 7.14%">
                          Blood Group
                      </th>

                      <th style="width: 7.14%">
                          Gender
                      </th>

                      <th style="width: 7.14%">
                          Status
                      </th>
                  </tr>
              </thead>
              <tbody>


                <?php foreach ($users as $key => $value) { ?>

                  <tr>
                      <td>
                          <?php echo ($key+1); ?>
                      </td>
                       <td>

                        <img src="<?php echo base_url(); ?>assests/user_images/<?php echo $value['image'] ?>"  style="width: 60px; height: 60px; border-radius: 100%;">
                      </td>
                      <td>
                          <?php echo $value['name']; ?>
                            
                      </td>
                      <td>
                          <?php echo $value['email']; ?>
                      </td>
                      <td>
                          <?php echo $value['dob']; ?>
                      </td>
                      <td>
                          <?php echo $value['phone']; ?>
                      </td>

                      <td>
                          <?php echo $value['address']; ?>
                      </td>
                      
                      <td>
                          <?php echo $value['pincode']; ?>
                      </td>

                      <td>
                          <?php echo $value['city']; ?>
                      </td>

                      <td>
                          <?php echo $value['state']; ?>
                      </td>

                      <td>
                          <?php echo $value['country']; ?>
                      </td>

                      <td>
                          <?php echo $value['blood_group']; ?>
                      </td>

                      <td>
                          <?php echo $value['gender']; ?>
                      </td>
                      <td class="project-state">
                          

                            <?php if ($value['status']==1) { ?>

                              <span class="badge badge-success">
                                Active
                              </span>
                            <?php  }else{ ?>
                                <span class="badge badge-danger">
                                  Inactive
                                </span>
                             <?php }  ?>

                          
                      </td>
                      <td>
                        <a href="<?php echo base_url(); ?>index.php/profile_details/<?php echo $value['id']; ?>">
                        </a>
                      </td>
                   </tr>

                  
                <?php } ?>

              </tbody>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper

