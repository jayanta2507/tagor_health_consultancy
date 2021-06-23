<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Blood</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Blood</li>
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
          <h3 class="card-title">Blood</h3>

         
            
          

          <span><?php echo $this->session->flashdata('msg'); ?></span>
        </div>
        <div class="card-body p-0">
          <table class="table table-striped projects">
              <thead>
                  <tr>
                      <th style="width: 7%">
                          Sl No.
                      </th>
                      <th style="width: 13%">
                          Blood Group
                      </th>
                      <th style="width: 13%">
                          Blood Price
                      </th>
                      <th style="width: 13%">
                          Hospital Name
                      </th>
                       <th style="width: 13%">
                          Hospital Registration ID
                      </th>
                       <th style="width: 13%">
                         Hospital Phone Number
                      </th>
                     
                      <th style="width: 13%" class="text-center">
                          Status
                      </th>
                      <th style="width: 25%">
                      </th>
                  </tr>
              </thead>
              <tbody>

                  <?php foreach ($blood as $key => $value) { ?>

                  <tr>
                      <td>
                          <?php echo ($key+1); ?>
                      </td>
                      <td>
                          <?php echo $value['blood_group']; ?>
                            
                      </td>
                       <td>
                          <?php echo $value['price']; ?>
                      </td>
                      <td>
                          <?php echo $value['hospital_name']; ?>
                      </td>
                      <td>
                          <?php echo $value['hospital_registration_number']; ?>
                      </td>
                      <td>
                          <?php echo $value['hospital_phn_no']; ?>
                      </td>

                     
                     
                       <td class="project-state">
                          

                            <?php if ($value['status']==1) { ?>

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
      <!-- /.card -

    </section>
      </div>
 