
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Contact List</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="http://localhost/tagor_health_consultancy/index.php/user_home">Home</a></li>
              <li class="breadcrumb-item active">Contact List</li>
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
          <h3 class="card-title">Contact List</h3>
          <span><?php echo $this->session->flashdata('msg'); ?></span>
          <div class="card-tools">
            
            
          </div>

          
        </div>
        <div class="card-body p-0">
          <table class="table table-striped projects">
              <thead>
                  <tr>
                      <th style="width: 10%">
                          Sl No.
                      </th>
                      <th style="width: 18%">
                          Name
                      </th>
                      <th style="width: 18%">
                          Email id 
                      </th>
                      <th style="width: 18%">
                          Phone Number
                      </th>
                      <th style="width: 18%">
                          Subject
                      </th>
                      <th style="width: 18%">
                          Message
                      </th>
                      
                  </tr>
              </thead>
              <tbody>


                <?php foreach ($contact as $key => $value) { ?>

                  <tr>
                      <td>
                          <?php echo ($key+1); ?>
                      </td>
                     <td>
                          <?php echo $value['name']; ?>
                            
                      </td>
                     
                      <td>
                          <?php echo $value['email']; ?>
                            
                      </td>
                       <td>
                          <?php echo $value['phone']; ?>
                            
                      </td>
                      <td>
                          <?php echo $value['subject']; ?>
                      </td>
                    
                      <td>
                          <?php echo $value['message']; ?>
                      </td>
                      
                      
                      
                   </tr>

                  
                <?php } ?>

              </tbody>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
 

