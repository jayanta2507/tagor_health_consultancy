<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Beds</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="http://localhost/tagor_health_consultancy/index.php/user_home">Home</a></li>
              <li class="breadcrumb-item active">Bed</li>
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
          <h3 class="card-title">Bed</h3>

          <div class="card-tools">
            <!-- <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button> -->
            <a href="<?php echo base_url(); ?>index.php/admin_bed_add">
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
                      <th style="width: 7%">
                          Sl No.
                      </th>
                      <th style="width: 13%">
                          Types of Bed
                      </th>
                      <th style="width: 13%">
                          Bed Rents
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
                      <th style="width: 15%">
                        Action
                      </th>
                  </tr>
              </thead>
              <tbody>
              

                <?php foreach ($bed as $key => $value) { ?>

                  <tr>
                      <td>
                          <?php echo ($key+1); ?>
                      </td>
                      <td>
                          <?php echo $value['bed_types']; ?>
                            
                      </td>
                      <td>
                          <?php echo $value['rent']; ?>
                      </td>
                      <td>
                          <?php echo $value['hospital_name']; ?>
                      </td>
                      <td>
                          <?php echo $value['hospital_registration_id']; ?>
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
                      <td class="project-actions text-right">
                          <!-- <a class="btn btn-primary btn-sm" href="#">
                              <i class="fas fa-folder">
                              </i>
                              View
                          </a> -->

                            <a class="btn btn-info btn-sm" href="<?php echo base_url(); ?>index.php/admin_bed_edit/<?php echo $value['id']; ?>">
                              <i class="fas fa-pencil-alt">
                              </i>
                              Edit
                          </a>
                            <a class="btn btn-danger btn-sm" href="javascript:void(0)" onclick="deleteBed(<?php echo $value['id']; ?>)">
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
        function deleteBed(bedId){

          if (confirm('Do you want to delete?')) {
            window.location.replace("<?php echo base_url(); ?>index.php/admin_bed_delete/"+bedId);
          }else{
             window.location.replace('<?php echo base_url(); ?>index.php/admin_bed_list');
          }
        }
      </script>
    </section>
  </div>


