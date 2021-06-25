<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Contact us</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Contact us</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <form action="<?php echo base_url(); ?>index.php/submit_contact_form" method="post">
        <div class="row">
          <div class="col-md-12">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Contact form</h3>
                
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
                  <label for="inputName">Email</label>
                  <input type="text" id="inputEmail" class="form-control" name="email_id">
                  <span class="text-danger"><?php echo form_error('email_id'); ?></span>
                </div>

                <div class="form-group">
                  <label for="inputName">Phone No.</label>
                  <input type="text" id="inputPhone_no" class="form-control" name="phone_no">
                  <span class="text-danger"><?php echo form_error('phone_no'); ?></span>
                </div>


                <div class="form-group">
                  <label for="inputName">Subject</label>
                  <input type="text" id="inputSubject" class="form-control" name="subject">
                  <span class="text-danger"><?php echo form_error('subject'); ?></span>
                </div>

                <div class="form-group">
                  <label for="inputName">Message Box</label>
                  <input type="text" id="inputMessagebox" class="form-control" name="message_box">
                  <span class="text-danger"><?php echo form_error('message_box'); ?></span>
                </div>



             </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            
            <input type="submit" value="submit" class="btn btn-success float-right">
          </div>
        </div>
      </form>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->