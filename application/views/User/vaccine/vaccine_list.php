<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Vaccine</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="http://localhost/tagor_health_consultancy/index.php/user_home">Home</a></li>
              <li class="breadcrumb-item active">Vaccine</li>
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
          <h3 class="card-title">Vaccine</h3>

          



          <span><?php echo $this->session->flashdata('msg'); ?></span>
        </div>
        <div class="card-body p-0">
          <table class="table table-striped projects">
              <thead>
                  <tr>
                      <th style="width: 10%">
                          Sl No.
                      </th>
                      <th style="width: 10%">
                           Vaccine Name
                      </th>
                      <th style="width: 10%">
                          Vaccine Types
                      </th>
                      <th style="width: 10%">
                          Date of Dose
                      </th>
                      <th style="width: 10%">
                          Vaccination Center
                      </th>
                      <th style="width: 10%">
                          Vaccination Price
                      </th>
                      <th style="width: 10%">
                          Center Phone no
                      </th>
                      <th style="width: 10%">
                          Center Email id
                      </th>
                      <th style="width: 5%">
                          Age
                      </th>
                      <th style="width: 10%" class="text-center">
                          Status
                      </th>
                  </tr>
              </thead>
              <tbody>

                <?php foreach ($vaccine as $key => $value) { ?>

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
          
                  </tr>

                  
                <?php } ?>

              </tbody>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
   
    </section>
  </div>

    