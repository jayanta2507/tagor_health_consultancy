<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Blood Edit</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Blood Edit</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <form action="<?php echo base_url(); ?>index.php/admin_blood_edit_submit/<?php echo $blood['id'] ?>" method="post">
        <div class="row">
          <div class="col-md-12">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Blood Edit</h3>
                
                <span><?php echo $this->session->flashdata('msg'); ?></span>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                </div>
              </div>
              <div class="card-body">
                
               
                <div class="form-group">
                  <label for="inputName">Blood Group</label>
                  <input type="text" id="inputBlood" class="form-control" name="blood_group" value="<?php echo $blood['blood_group'] ?>">
                  <span class="text-danger"><?php echo form_error('blood_group'); ?></span>
                </div>

                <div class="form-group">
                  <label for="inputName">Blood Price</label>
                  <input type="text" id="inputPrice" class="form-control" name="price" value="<?php echo $blood['price'] ?>">
                  <span class="text-danger"><?php echo form_error('price'); ?></span>
                </div>


                <div class="form-group">
                  <label for="inputName">Hospital Name</label>
                  <input type="text" id="inputHos_Name" class="form-control" name="hospital_name" value="<?php echo $blood['hospital_name'] ?>">
                  <span class="text-danger"><?php echo form_error('hospital_name'); ?></span>
                </div>

                 <div class="form-group">
                  <label for="inputName">Hospital Registration ID</label>
                  <input type="text" id="inputRegistration_ID" class="form-control" name="hospital_registration_number"  value="<?php echo $blood['hospital_registration_number'] ?>" >
                  <span class="text-danger"><?php echo form_error('hospital_registration_number'); ?></span>
                </div>
                <div class="form-group">
                  <label for="inputName">Hospital Phone Number</label>
                  <input type="text" id="inputPhone" class="form-control" name="hospital_phn_no" value="<?php echo $blood['hospital_phn_no'] ?>">
                  <span class="text-danger"><?php echo form_error('hospital_phn_no'); ?></span>
                </div>

                 <div class="form-group">
                  <label for="inputStatus">Status</label>
                  <select id="inputStatus" class="form-control custom-select" name="status">
                    <option selected disabled>Select One</option>
                    <option value="1" <?php echo ($blood['status']==1)?'selected':''; ?> >Active</option>
                    <option value="0" <?php echo ($blood['status']==0)?'selected':''; ?> >Inactive</option>
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
            <input type="submit" value="Update" class="btn btn-success float-right">
          </div>
        </div>
      </form>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->