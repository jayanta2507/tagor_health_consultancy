
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Doctors</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="http://localhost/tagor_health_consultancy/index.php/user_home">Home</a></li>
              <li class="breadcrumb-item active">Doctors</li>
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
          <h3 class="card-title">Doctors</h3>
          <span><?php echo $this->session->flashdata('msg'); ?></span>
          <div class="card-tools">
            <!-- <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button> -->
            <a href="<?php echo base_url(); ?>index.php/admin_doctor_add">
              <button type="button" class="btn btn-success" title="Add">
              <i class="ion-person-add"></i>  Add
            </button>
            </a>
            
          </div>

          
        </div>
        <div class="card-body p-0">
          <table class="table table-striped projects">
              <thead>
                  <tr>
                      <th style="width: 1%">
                          Sl No.
                      </th>
                       <th style="width: 10%">
                          Image
                      </th>
                      <th style="width: 10%">
                          Doctor Name
                      </th>
                      <th style="width: 10%">
                          Specialist
                      </th>
                      <th style="width: 10%">
                          Email
                      </th>
                      <th style="width: 10%">
                          Phone
                      </th>
                      <th style="width: 10%">
                          Registration ID
                      </th>
                     
                      <th style="width: 10%" class="text-center">
                          Status
                      </th>
                      <th style="width: 29%;">
                        Action
                      </th>
                  </tr>
              </thead>
              <tbody>


                <?php foreach ($doctors as $key => $value) { ?>

                  <tr>
                      <td>
                          <?php echo ($key+1); ?>
                      </td>
                       <td>
                          <ul class="list-inline">
                              <li class="list-inline-item">
                                  <img  src="<?php echo base_url(); ?>assests/doctor_image/<?php echo $value['image']; ?>" style="width: 60px; height: 60px; border-radius: 100%;">
                              </li>
                          </ul>
                      </td>
                      <td>
                          <?php echo $value['name']; ?>
                            
                      </td>
                      <td>
                          <?php echo $value['specialist']; ?>
                      </td>
                      <td>
                          <?php echo $value['email']; ?>
                      </td>
                      <td>
                          <?php echo $value['phone']; ?>
                      </td>

                      <td>
                          <?php echo $value['registration_id']; ?>
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
                      <td class="project-actions text-right">
                          <a class="btn btn-primary btn-sm" href="<?php echo base_url(); ?>index.php/admin_doctor_availability_list/<?php echo $value['id']; ?>">
                              <i class="fas fa-folder">
                              </i>
                              Availability 
                          </a>
                          <a class="btn btn-info btn-sm" href="<?php echo base_url(); ?>index.php/admin_doctor_edit/<?php echo $value['id']; ?>">
                              <i class="fas fa-pencil-alt">
                              </i>
                              Edit
                          </a>
                          <a class="btn btn-danger btn-sm" href="<?php echo base_url(); ?>index.php/admin_doctor_delete/<?php echo $value['id']; ?>">
                              <i class="fas fa-trash">
                              </i>
                              Delete
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

      <script type="text/javascript">
        function deleteDoctor(doctorId){
 
          if (confirm('Do you want to delete?')) {
            window.location.href('<?php echo base_url(); ?>index.php/admin_doctor_delete/'+doctorId);
          }else{
             window.location.href('<?php echo base_url(); ?>index.php/admin_doctor_edit/'+doctorId);
          }
        }
      </script>

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper

