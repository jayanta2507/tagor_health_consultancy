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
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Doctor Availability</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <form action="<?php echo base_url(); ?>index.php/admin_doctor_availability_submit" method="post" enctype="multipart/form-data">
        <div class="row">
          <div class="col-md-12">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Doctor Availability</h3>
                
                <span><?php echo $this->session->flashdata('msg'); ?></span>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                </div>
              </div>
              <div class="card-body">
                
                <input type="hidden" name="doctor_id" value="<?php echo $doctorId ?>">


                <div class="form-group">
                  <label for="inputName">Date</label>
                  <input type="date" id="inputName" class="form-control" name="date">
                  <span class="text-danger"><?php echo form_error('date'); ?></span>
                </div>


                <div class="form-group">
                  <label for="inputName">From Time</label>
                  <input type="time" id="inputSpecialist" class="form-control" name="from_time">
                  <span class="text-danger"><?php echo form_error('from_time'); ?></span>
                </div>

                <div class="form-group">
                  <label for="inputName">To Time</label>
                  <input type="time" id="inputEmail" class="form-control" name="to_time">
                  <span class="text-danger"><?php echo form_error('to_time'); ?></span>
                </div>


                <div class="form-group">
                  <label for="inputStatus">Status</label>
                  <select id="inputStatus" class="form-control custom-select" name="status">
                    <option selected disabled>Select one</option>
                    <option value="1">Active</option>
                    <option value="0">Inactive</option>
                  </select>
                  <span class="text-danger"><?php echo form_error('status'); ?></span>
                </div>
               
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <a href="<?php echo base_url(); ?>index.php/admin_doctor_list" class="btn btn-secondary">Back</a>
            <input type="submit" value="Create Doctor Availability" class="btn btn-success float-right">
          </div>
        </div>
      </form>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->