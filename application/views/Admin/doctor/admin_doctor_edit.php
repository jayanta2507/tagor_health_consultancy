<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Doctor Edit</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Doctor Edit</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <form action="<?php echo base_url(); ?>index.php/admin_doctor_edit_submit/<?php echo $doctor['id'] ?>" method="post" enctype="multipart/form-data">
        <div class="row">
          <div class="col-md-12">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Doctor Edit</h3>
                
                <span><?php echo $this->session->flashdata('msg'); ?></span>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                </div>
              </div>
              <div class="card-body">
                
                <div class="form-group">
                  <label for="inputName">Doctor Name</label>
                  <input type="text" id="inputName" class="form-control" name="doctor_name" value="<?php echo $doctor['name'] ?>" >
                  <span class="text-danger"><?php echo form_error('doctor_name'); ?></span>
                </div>


                <div class="form-group">
                  <label for="inputName">Specialist</label>
                  <input type="text" id="inputSpecialist" class="form-control" name="specialist" value="<?php echo $doctor['specialist'] ?>" >
                  <span class="text-danger"><?php echo form_error('specialist'); ?></span>
                </div>

                <div class="form-group">
                  <label for="inputName">Email</label>
                  <input type="text" id="inputEmail" class="form-control" name="email" value="<?php echo $doctor['email'] ?>">
                  <span class="text-danger"><?php echo form_error('email'); ?></span>
                </div>


                <div class="form-group">
                  <label for="inputName">Phone</label>
                  <input type="text" id="inputPhone" class="form-control" name="phone" value="<?php echo $doctor['phone'] ?>">
                  <span class="text-danger"><?php echo form_error('phone'); ?></span>
                </div>

                <div class="form-group">
                  <label for="inputName">Registration ID  </label>
                  <input type="text" id="inputRegistrationID" class="form-control" name="registration_id" value="<?php echo $doctor['registration_id'] ?>">
                  <span class="text-danger"><?php echo form_error('registration_id'); ?></span>
                </div>


                <div class="form-group">
                  <label for="inputName">Image</label>
                  <input type="file" id="inputImage" class="form-control" name="image">
                   <span class="text-danger"><?php echo form_error('image'); ?></span>
                </div>

                <div class="form-group">
                  <label for="inputStatus">Status</label>
                  <select id="inputStatus" class="form-control custom-select" name="status">
                    <option selected disabled>Select One</option>
                    <option value="1" <?php echo ($doctor['status']==1)?'selected':''; ?> >Active</option>
                    <option value="0" <?php echo ($doctor['status']==0)?'selected':''; ?> >Inactive</option>
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
            <input type="submit" value="Update" class="btn btn-success float-right">
          </div>
        </div>
      </form>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->