
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Doctor Availability</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="http://localhost/tagor_health_consultancy/index.php/user_home">Home</a></li>
              <li class="breadcrumb-item active">Doctor Availability</li>
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
          <h3 class="card-title">Doctor Availability For <?php echo $doctors_data['name']; ?></h3>
          <span><?php echo $this->session->flashdata('msg'); ?></span>
          <div class="card-tools">
            <!-- <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button> -->
            <a href="<?php echo base_url(); ?>index.php/admin_doctor_list" class="btn btn-secondary">Back</a>
            <a href="<?php echo base_url(); ?>index.php/admin_doctor_availability/<?php echo $doctorId; ?>">
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
                      <th style="width: 7%">
                        Sl No
                      </th>
                      <th style="width: 20%">
                          Date
                      </th>
                       <th style="width: 20%">
                          From Time
                      </th>
                      <th style="width: 20%">
                          To Time
                      </th>
                      <th style="width:20%" class="text-center">
                          Status
                      </th>
                      <th style="width: 13%">
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
                          <?php echo date('d-m-Y', strtotime( $value['date'])); ?>
                            
                      </td>
                      <td>
                          <?php echo $value['from_time']; ?>
                      </td>
                      <td>
                          <?php echo $value['to_time']; ?>
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
                        <a class="btn btn-info btn-sm" href="<?php echo base_url(); ?>index.php/admin_doctor_availability_edit/<?php echo $doctorId; ?>/<?php echo $value['id']; ?>">
                              <i class="fas fa-pencil-alt">
                              </i>
                              Edit
                          </a>
                          <a class="btn btn-danger btn-sm" href="<?php echo base_url(); ?>index.php/admin_doctor_availability_delete/<?php echo $value['id']; ?>">
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
  

