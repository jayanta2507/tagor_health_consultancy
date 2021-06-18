<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Vaccine Details</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Vaccine Details</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <form action="<?php echo base_url(); ?>index.php/admin_vaccine_submit" method="post">
        <div class="row">
          <div class="col-md-12">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Vaccine Details</h3>
                
                <span><?php echo $this->session->flashdata('msg'); ?></span>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                </div>
              </div>
              <div class="card-body">
                
                <div class="form-group">
                  <label for="inputName">Vaccine Name</label>
                  <input type="text" id="inputName" class="form-control" name="vaccine_name">
                  <span class="text-danger"><?php echo form_error('vaccine_name'); ?></span>
                </div>


                <div class="form-group">
                  <label for="inputName">Vaccine Types</label>
                  <input type="text" id="inputTypes" class="form-control" name="vaccine_types">
                  <span class="text-danger"><?php echo form_error('vaccine_types'); ?></span>
                </div>

                <div class="form-group">
                  <label for="inputName">Date of Dose</label>
                  <input type="date" id="inputDate" class="form-control" name="dose_date">
                  <span class="text-danger"><?php echo form_error('dose_date'); ?></span>
                </div>


                <div class="form-group">
                  <label for="inputName">Vaccination Center</label>
                  <input type="text" id="inputCenter" class="form-control" name="center">
                  <span class="text-danger"><?php echo form_error('center'); ?></span>
                </div>

                <div class="form-group">
                  <label for="inputName">Vaccination Price</label>
                  <input type="text" id="inputPrice" class="form-control" name="price">
                  <span class="text-danger"><?php echo form_error('price'); ?></span>
                </div>


                <div class="form-group">
                  <label for="inputName">Center Phone no</label>
                  <input type="text" id="inputPhone" class="form-control" name="phone_no">
                  <span class="text-danger"><?php echo form_error('phone_no'); ?></span>
                </div>


                <div class="form-group">
                  <label for="inputName">Center Email id</label>
                  <input type="text" id="inputEmail" class="form-control" name="email_id">
                   <span class="text-danger"><?php echo form_error('email_id'); ?></span>
                </div>


                 <div class="form-group">
                  <label for="inputName">Age</label>
                  <input type="text" id="inputGender" class="form-control" name="age">
                   <span class="text-danger"><?php echo form_error('age'); ?></span>
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
            <input type="submit" value="Create Doctor" class="btn btn-success float-right">
          </div>
        </div>
      </form>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->