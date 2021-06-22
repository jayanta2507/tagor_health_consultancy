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

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Vaccine Details</h3>

          <div class="card-tools">
            <!-- <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button> -->
            <a href="<?php echo base_url(); ?>index.php/admin_vaccine_add">
              <button type="button" class="btn btn-success" title="Add">
              <i class="fas fa-plus"></i>  Add
            </button>
            </a>
            
          </div>

          <span><?php echo $this->session->flashdata('msg'); ?></span>
        </div>
        <div class="card-body p-0">
          <table class="table table-striped projects">
              <thead>
                  <tr>
                      <th style="width: 6%">
                          Sl No.
                      </th>
                      <th style="width: 9%">
                           Vaccine Name
                      </th>
                      <th style="width: 9%">
                          Vaccine Types
                      </th>
                      <th style="width: 9%">
                          Date of Dose
                      </th>
                      <th style="width: 9%">
                          Vaccination Center
                      </th>
                      <th style="width: 9%">
                          Vaccination Price
                      </th>
                      <th style="width: 9%">
                          Center Phone no
                      </th>
                      <th style="width: 9%">
                          Center Email id
                      </th>
                      <th style="width: 9%">
                          Age
                      </th>
                      <th style="width:  9%" class="text-center">
                          Status
                      </th>
                      <th style="width: 13%">
                        Action
                      </th>
                  </tr>
              </thead>
              <tbody>

                <?php foreach ($vaccines as $key => $value) { ?>

                  <tr>
                      <td>
                          <?php echo ($key+1); ?>
                      </td>
                      <td>
                          <?php echo $value['vaccine_name']; ?>
                            
                      </td>
                      <td>
                          <?php echo $value['vaccine_types']; ?>
                      </td>
                      <td>
                          <?php echo $value['dose_date']; ?>
                      </td>
                      <td>
                          <?php echo $value['center']; ?>
                      </td>

                      <td>
                          <?php echo $value['price']; ?>
                      </td>

                      <td>
                          <?php echo $value['phone_no']; ?>
                      </td>

                      <td>
                          <?php echo $value['email_id']; ?>
                      </td>

                      <td>
                          <?php echo $value['age']; ?>
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
                      <td class="project-actions text-right">
                          <!-- <a class="btn btn-primary btn-sm" href="#">
                              <i class="fas fa-folder">
                              </i>
                              View
                          </a> -->
                          <a class="btn btn-info btn-sm" href="<?php echo base_url(); ?>index.php/admin_vaccine_edit/<?php echo $value['id']; ?>">
                              <i class="fas fa-pencil-alt">
                              </i>
                              Edit
                          </a>
                          <a class="btn btn-danger btn-sm" href="javascript:void(0)" onclick="deleteVaccine(<?php echo $value['id']; ?>)">
                              <i class="fas fa-trash">
                              </i>
                              Delete
                          </a>
                      </td>
                  </tr>

                  
                <?php } ?>

              </tbody>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->

      <script type="text/javascript">
        function deleteVaccine(vaccineId){

          if (confirm('Do you want to delete?')) {
            window.location.replace("<?php echo base_url(); ?>index.php/admin_vaccine_delete/"+vaccineId);
          }else{
             window.location.replace('<?php echo base_url(); ?>index.php/admin_vaccine_list');
          }
        }
      </script>

    </section>
    <!-- /.content -->
  </div>