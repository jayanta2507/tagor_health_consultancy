<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Oxygen Add</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Oxygen Add</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <form action="<?php echo base_url(); ?>index.php/admin_oxygen_submit" method="post">
        <div class="row">
          <div class="col-md-12">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Oxygen Add</h3>
                
                <span><?php echo $this->session->flashdata('msg'); ?></span>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                </div>
              </div>
              <div class="card-body">
                
                <div class="form-group">
                  <label for="inputName">Types of Oxygen</label>
                  <input type="text" id="inputTypes_Oxygen" class="form-control" name="oxygen_type">
                  <span class="text-danger"><?php echo form_error('oxygen_type'); ?></span>
                </div>

                <div class="form-group">
                  <label for="inputName">Oxygen Refilling</label>
                  <input type="text" id="inputRefilling" class="form-control" name="oxygen_refilling">
                  <span class="text-danger"><?php echo form_error('oxygen_refilling'); ?></span>
                </div>

                <div class="form-group">
                  <label for="inputName">Oxygen Rents</label>
                  <input type="text" id="inputRents" class="form-control" name="rent">
                  <span class="text-danger"><?php echo form_error('rent'); ?></span>
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
            <a href="<?php echo base_url(); ?>index.php/admin_oxygen_list" class="btn btn-secondary">Back</a>
            <input type="submit" value="Create Oxygen" class="btn btn-success float-right">
          </div>
        </div>
      </form>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->