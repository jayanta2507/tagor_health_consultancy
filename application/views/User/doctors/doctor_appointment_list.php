
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Doctors Appointment Details</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="http://localhost/tagor_health_consultancy/index.php/user_home">Home</a></li>
              <li class="breadcrumb-item active">Doctors Appointment Details</li>
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
          <h3 class="card-title">Doctors Appointment Details</h3>
          <span><?php echo $this->session->flashdata('msg'); ?></span>
          <div class="card-tools">
            
            
          </div>

          
        </div>
        <div class="card-body p-0">
          <table class="table table-striped projects">
              <thead>
                  <tr>
                      <th style="width: 10%">
                          Sl No.
                      </th>
                     
                      <th style="width: 10%">
                          Doctor Name
                      </th>
                      <th style="width: 10%">
                          Appointment Name
                      </th>
                      <th style="width: 10%">
                          Appointment Phone number
                      </th>
                      <th style="width: 10%">
                          Appointment Diagnosis
                      </th>
                      <th style="width: 10%">
                          Date
                      </th>
                      <th style="width: 10%">
                          From time 
                      </th>
                      <th style="width: 10%">
                          To time
                      </th>
                      <th style="width: 7%" class="text-center">
                          Status
                      </th>

                   <!--    <th style="width: 7%" class="text-center">
                          Action
                      </th> -->
                  </tr>
              </thead>
              <tbody>


                <?php foreach ($appointment as $key => $value) { ?>
 <tr>
                      <td>
                          <?php echo ($key+1); ?>
                      </td>
                     <td>
                          <?php echo $value['doctor_name']; ?>
                            
                      </td>
                     
                      <td>
                          <?php echo $value['appointment_name']; ?>
                            
                      </td>
                      
                      <td>
                          <?php echo $value['appointment_phone']; ?>
                      </td>
                    
                      <td>
                          <?php echo $value['appointment_diagnosis']; ?>
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
                          

                            <?php if ($value['appointment_status']==1) { ?>

                              <span class="badge badge-success">
                                Active
                              </span>
                            <?php  }else{ ?>
                                <span class="badge badge-danger">
                                  Inactive
                                </span>
                             <?php }  ?>

                          
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
 

