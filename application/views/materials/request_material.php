<div id="page-content-wrapper">
  <a href="#menu-toggle" id="menu-toggle" class="btn btn-info">Menu</a>
    <div class="container-fluid padding_zero">
        <div class="row padding_zero">
            <div class="col-lg-12">
                  <div class="panel panel-default" style="box-shadow: 0px 0px 20px rgb(49, 49, 49)">
                  <div class="panel-heading" style="background: rgb(157, 90, 71)" >
                    <h1 class="panel-title" style="color:white">Request Materials</h1>
                  </div>
                  <div class="panel-body">
                  
                      
                      <div class="col-md-12">
                      <?php echo $this->session->flashdata('message') ?>
                      <form class="form-horizontal" action="/materials/insert_desc" method="POST">
                        <div class="form-group">
                            
                          <div class="col-lg-6">
                            <div class="input-group">
                              <input type="text" class="form-control" placeholder="Description For Request" name="desc" required>
                              <span class="input-group-btn">
                                <button class="btn btn-primary" type="submit">Save</button>
                              </span>
                            </div>
                          </div>
                        </div>
                      </form>



                        <hr style="border: 1px solid brown;" />
                        <table class="table table-bordered table-hover table-striped">
                          <thead>
                            <tr class="navbar-inverse">
                              <td style="color:white;text-align:center">Description</td>
                              <td width="300" style="color:white;text-align:center">Action</td>
                            </tr>
                          </thead>
                          <tbody>
                          <?php foreach ($this->materialsmd->get_request() as $key => $value): ?>
                            <tr>
                              <td><?php echo $value['description'] ?></td>
                              <td>
                                <a href="#" class="btn btn-info addmaterial" data-toggle="modal" data-param="<?php echo $value['id'] ?>">Add Materials <span class="glyphicon glyphicon-pencil"></span></a>
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



<div class="modal fade" id="add_materials" data-keyboard="false" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      
      <div class="modal-header" style="background: rgb(157, 90, 71)">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel" style="color:white">Add Materials</h4>
      </div>
        <div class="modal-body">
          <div class="errors">
            
          </div>
          <form class="form-horizontal" id="submit_material" method="POST" onsubmit="return false">
            <input type="hidden" name="mid">
            <div class="form-group">
              <label class="col-sm-3 control-label">Description</label>
              <div class="col-sm-9">
                <input type="text" class="form-control" name="description" />
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-3 control-label">Units</label>
              <div class="col-sm-9">
                <select class="form-control" name="units">
                    <?php foreach ($this->api->get_unit() as $key => $value): ?>
                      <option><?php echo $value['description'] ?></option>
                    <?php endforeach ?>
                </select>
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-3 control-label">Quantity</label>
              <div class="col-sm-9">
                <input type="text"  step="any" class="form-control" name="quantity" />
              </div>
            </div>
            <div class="pull-right">
              <a href="#" class="btn btn-success cancels">Cancel</a>
              <button type="submit" class="btn btn-primary">Add</button>
            </div>
          </form>
          <br /><br />
              <table class="table table-bordered table-hover table-striped">
                <thead>
                  <tr class="navbar-inverse">
                    <td style="color:white;text-align:center">Description</td>
                    <td style="color:white;text-align:center">Units</td>
                    <td width="30" style="color:white;text-align:center">Quantity</td>
                    <td width="30" style="color:white;text-align:center">Action</td>
                  </tr>
                </thead>
                <tbody class="list_mat">
                    
                </tbody>
              </table> 
            </div>
        <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
