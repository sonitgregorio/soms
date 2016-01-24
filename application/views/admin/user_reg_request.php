<div id="page-content-wrapper">
  <a href="#menu-toggle" id="menu-toggle" class="btn btn-info">Menu</a>
    <div class="container-fluid padding_zero">
        <div class="row padding_zero">
            <div class="col-lg-12">
                  <div class="panel panel-default" style="box-shadow: 0px 0px 20px rgb(49, 49, 49)">
                  <div class="panel-heading" style="background: rgb(157, 90, 71)" >
                    <h1 class="panel-title" style="color:white">Registration Request List</h1>
                  </div>
                  <div class="panel-body">
                                      
                      <div class="col-md-12">

                        <hr style="border: 1px solid brown;" />
                          <?php echo $this->session->flashdata('message') ?>
                        <table id="example"class="table table-bordered table-hover table-striped">
                          <thead>
                            <tr class="navbar-inverse">
                              <td style="color:white;text-align:center">Name</td>
                              <td width="300" style="color:white;text-align:center">Department</td>
                              <td width="150" style="color:white;text-align:center">Action</td>
                            </tr>
                          </thead>
                          <tbody>
                          <?php foreach ($this->usersmd->get_request() as $key => $value): ?>
                            <tr>
                              <td><?php echo strtoupper(strtolower($value['firstname'] . " " . $value['middlename'] . " " . $value['lastname'])) ?></td>
                              <td><?php echo strtoupper(strtolower($value['description'])) ?></td>
                              <td style="text-align:center">
                                  <a href="#" data-param="<?php echo $value['pid'] ?>" class="btn btn-info inform" data-toggle="modal" data-target="#infos">View Details</a>
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



<div class="modal fade" id="infos" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      
      <div class="modal-header" style="background: rgb(157, 90, 71)">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel" style="color:white">Account Information</h4>
      </div>
      <form class="form-horizontal" method="POST" action='/users/update_status'>

        <input type="hidden" value="" name="pids">
        <div class="modal-body">
          <div class="reg_inform">
           <?php $this->load->view('admin/info') ?>
          </div>
        </div>
    <br />
      
    </div>
  </div>
</div>