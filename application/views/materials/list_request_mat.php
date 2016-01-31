<div id="page-content-wrapper">
  <a href="#menu-toggle" id="menu-toggle" class="btn btn-info">Menu</a>
    <div class="container-fluid padding_zero">
        <div class="row padding_zero">
            <div class="col-lg-12">
                  <div class="panel panel-default" style="box-shadow: 0px 0px 20px rgb(49, 49, 49)">
                  <div class="panel-heading" style="background: rgb(157, 90, 71)" >
                    <h1 class="panel-title" style="color:white">List of Materials Request</h1>
                  </div>
                  <div class="panel-body">
                  
                    
                      <div class="col-md-12">
                     
                        <hr style="border: 1px solid brown;" />
                        <div class="tabe table-responsive">
                          <?php echo $this->session->flashdata('message') ?>
                          <table class="table table-bordered table-hover table-striped">
                            <thead>
                              <tr class="navbar-inverse">
                                <td style="color:white;text-align:center">PR NO.</td>
                                <td style="color:white;text-align:center">Name</td>
                                <td style="color:white;text-align:center">Department</td>
                                <td style="color:white;text-align:center">Section</td>
                                <!-- <td style="color:white;text-align:center">Letter</td> -->
                                <td style="color:white;text-align:center;width:22%">Action</td>
                              </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($this->materialsmd->get_request_list() as $key => $value): ?>
                              <tr>
                                <td><?php echo $value['prno'] ?></td>
                                <td><?php echo strtoupper($value['firstname'] . " " . $value['lastname']) ?></td>
                                <td><?php echo strtoupper($value['department']) ?></td>
                                <td><?php echo $value['section'] ?></td>
                                <!-- <td><p style="text-align:justify"><?php echo $value['description'] ?></p></td> -->
                                <td>
                                  <a href="/update_mat_status/<?php echo $value['id'] ?>/1" class="btn btn-info addmaterial" data-toggle="modal" data-param="<?php echo $value['id'] ?>">Approve&nbsp;&nbsp;<span class="glyphicon glyphicon-thumbs-up"></span></a>
                                  <a href="/print_request/<?php echo $value['id'] ?>" class="btn btn-success addmaterial" target="_blank" data-toggle="modal">Print&nbsp;&nbsp;&nbsp;<span class="glyphicon glyphicon-print"></span></a>
                                </td>
                              </tr>
                            <?php endforeach ?>
                               
                            </tbody>
                         </table>
                        </div>
                        
                      </div>
                  </div>
                </div>
            </div>
        </div>
    </div>
</div>
