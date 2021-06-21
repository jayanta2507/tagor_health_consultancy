<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Bed Edit</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Bed Edit</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <form action="<?php echo base_url(); ?>index.php/admin_bed_edit_submit/<?php echo $bed['bedid'] ?>" method="post">
        <div class="row">
          <div class="col-md-12">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Bed Edit</h3>
                
                <span><?php echo $this->session->flashdata('msg'); ?></span>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                </div>
              </div>
              <div class="card-body">
              
                <div class="form-group">
                  <label for="inputName">Types of Bed</label>
                  <input type="text" id="inputTypes_Bed" class="form-control" name="bed_types" value="<?php echo $bed['bed_types'] ?>" >
                  <span class="text-danger"><?php echo form_error('bed_types'); ?></span>
                </div>

                <div class="form-group">
                  <label for="inputName">Bed Rents</label>
                  <input type="text" id="inputRents" class="form-control" name="rent" value="<?php echo $bed['rent'] ?>"  >
                  <span class="text-danger"><?php echo form_error('rent'); ?></span>
                </div>


                <div class="form-group">
                  <label for="inputName">Hospital Name</label>
                  <input type="text" id="inputHos_Name" class="form-control" name="hospital_name" value="<?php echo $bed['hospital_name'] ?>" >
                  <span class="text-danger"><?php echo form_error('hospital_name'); ?></span>
                </div>

                <div class="form-group">
                  <label for="inputName">Hospital Registration ID</label>
                  <input type="text" id="inputRegistrationID" class="form-control" name="hospital_registration_id"  value="<?php echo $bed['hospital_registration_id'] ?>" >
                  <span class="text-danger"><?php echo form_error('hospital_registration_id'); ?></span>
                </div>

                <div class="form-group">
                  <label for="inputName">Hospital Phone Number</label>
                  <input type="text" id="inputPhone" class="form-control" name="hospital_phn_no" value="<?php echo $bed['hospital_phn_no'] ?>" >
                  <span class="text-danger"><?php echo form_error('hospital_phn_no'); ?></span>
                </div>

                <div class="form-group">
                  <label for="inputStatus">Status</label>
                  <select id="inputStatus" class="form-control custom-select" name="status">
                    <option selected disabled>Select one</option>
                    <option value="1" <?php echo ($bed['status']==1)?'selected':''; ?> >Active</option>
                    <option value="0" <?php echo ($bed['status']==0)?'selected':''; ?> >Inactive</option>
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
            <a href="<?php echo base_url(); ?>index.php/admin_bed_list" class="btn btn-secondary">Back</a>
            <input type="submit" value="Update Bed" class="btn btn-success float-right">
          </div>
        </div>
      </form>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->