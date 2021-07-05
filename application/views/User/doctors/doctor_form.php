<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Doctor Appointment
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="http://localhost/tagor_health_consultancy/index.php/user_home">Home</a></li>
              <li class="breadcrumb-item active">Doctor Appointment</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <form action="<?php echo base_url(); ?>index.php/submit_doctor_form/<?php echo $doctorId; ?>" method="post" enctype="multipart/form-data">
        <div class="row">
          <div class="col-md-12">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Doctor Appointment</h3>
                
                <span><?php echo $this->session->flashdata('msg'); ?></span>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                </div>
              </div>
              <div class="card-body">
                 <div class="form-group">
                  <label for="inputName">Name</label>
                  <input type="text" id="inputName" class="form-control" name="name">
                  <span class="text-danger"><?php echo form_error('name'); ?></span>
                </div>


                <div class="form-group">
                  <label for="inputName">Phone No</label>
                  <input type="text" id="inputPhone" class="form-control" name="phone_no">
                  <span class="text-danger"><?php echo form_error('phone_no'); ?></span>
                </div>

                <div class="form-group">
                  <label for="inputName">Age</label>
                  <input type="age" id="inputAge" class="form-control" name="age">
                  <span class="text-danger"><?php echo form_error('age'); ?></span>
                </div>

                   <div class="form-group">
                  <label for="inputName">Diagnosis</label>
                  <input type="text" id="inputDiagnosis" class="form-control" name="diagnosis">
                  <span class="text-danger"><?php echo form_error('diagnosis'); ?></span>
                </div>

                 <div class="form-group">
                    <label for="inputName">Doctor Availability</label><br>
                    <select name="doctor_availability" id="doctor_availability" class="form-control">
                     <option value="">Select Doctor Availability</option>

                      <?php foreach ($doctor_availability as $key => $value) { ?>
                        <option value="<?php echo $value['id'] ?>">Date <?php echo date('d-m-Y', strtotime($value['date'])).' - '.$value['from_time'].' - '.$value['to_time'];?> </option>
                      <?php } ?>
                    
                  </select>

                    <span class="text-danger"><?php echo form_error('doctor_availability'); ?></span>
                </div>

 

          
               
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <a href="#" class="btn btn-secondary">Back</a>
            <input type="submit" value="submit" class="btn btn-success float-right">
          </div>
        </div>
      </form>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->