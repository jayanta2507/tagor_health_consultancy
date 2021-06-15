<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Blood Add</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Blood Add</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <form action="<?php echo base_url(); ?>index.php/admin_blood_submit" method="post">
        <div class="row">
          <div class="col-md-12">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Blood Add</h3>
                
                <span><?php echo $this->session->flashdata('msg'); ?></span>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                </div>
              </div>
              <div class="card-body">
                
                <div class="form-group">
                  <label for="inputName">Blood Id</label>
                  <input type="text" id="inputId" class="form-control" name="blood_no">
                  <span class="text-danger"><?php echo form_error('blood_no'); ?></span>
                </div>


                <div class="form-group">
                  <label for="inputName">Types of Blood</label>
                  <input type="text" id="inputTypes_Blood" class="form-control" name="blood_gr">
                  <span class="text-danger"><?php echo form_error('blood_gr'); ?></span>
                </div>

                <div class="form-group">
                  <label for="inputName">Blood Rents</label>
                  <input type="text" id="inputRents" class="form-control" name="Rent">
                  <span class="text-danger"><?php echo form_error('Rent'); ?></span>
                </div>


                <div class="form-group">
                  <label for="inputName">Hospital Name</label>
                  <input type="text" id="inputHos_Name" class="form-control" name="hospital_name">
                  <span class="text-danger"><?php echo form_error('hospital_name'); ?></span>
                </div>

                <div class="form-group">
                  <label for="inputName">Hospital Registration ID</label>
                  <input type="text" id="inputRegistrationID" class="form-control" name="hospital_registration_id">
                  <span class="text-danger"><?php echo form_error('hospital_registration_id'); ?></span>
                </div>

                <div class="form-group">
                  <label for="inputName">Hospital Phone Number</label>
                  <input type="text" id="inputPhone" class="form-control" name="hospital_phn_no">
                  <span class="text-danger"><?php echo form_error('hospital_phn_no'); ?></span>
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
            <a href="<?php echo base_url(); ?>index.php/admin_blood_list" class="btn btn-secondary">Back</a>
            <input type="submit" value="Create Bed" class="btn btn-success float-right">
          </div>
        </div>
      </form>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->