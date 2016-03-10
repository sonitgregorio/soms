<div id="page-content-wrapper">
  <a href="#menu-toggle" id="menu-toggle" class="btn btn-info">Menu</a>
    <div class="container-fluid padding_zero">
        <div class="row padding_zero">
            <div class="col-lg-12">
                  <div class="panel panel-default" style="box-shadow: 0px 0px 20px rgb(49, 49, 49)">
                  <div class="panel-heading" style="background: rgb(157, 90, 71)" >
                    <h1 class="panel-title" style="color:white">Purchase Request</h1>
                  </div>
                  <div class="panel-body">
                  
                    
                      <div class="col-md-12">
                     
                        <hr style="border: 1px solid brown;" />
                        <div class="tabe table-responsive">
                          <?php echo $this->session->flashdata('message') ?>
                          <table class="table table-bordered table-hover table-striped">
                            <thead>
                              <tr class="navbar-inverse">
                                <td style="color:white;text-align:center">RFQ NO.</td>
                                <td style="color:white;text-align:center">Name</td>
                                <td style="color:white;text-align:center">Department</td>
                                <td style="color:white;text-align:center">Section</td>
                                <!-- <td style="color:white;text-align:center">Letter</td> -->
                                <td style="color:white;text-align:center;width:23%">Action</td>
                              </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($this->rfq_model->get_rfq_list() as $key => $value): ?>
                              <tr>
                                <td><?php echo $value['rfq_no'] ?></td>
                                <td><?php echo strtoupper($value['firstname'] . " " . $value['lastname']) ?></td>
                                <td><?php echo strtoupper($value['department']) ?></td>
                                <td><?php echo $value['section'] ?></td>
                                <!-- <td><p style="text-align:justify"><?php echo $value['description'] ?></p></td> -->
                                <td>
                                  <?php $x = $this->rfq_model->checking_if_exist($value['id']);
                                    if ($x > 0) { ?>
                                     <a href="/set_prices/<?= $value['id'] ?>" class="btn btn-primary">Set Price&nbsp;&nbsp;<span class="glyphicon glyphicon-cart"></span></a>
                                   <?php }else{ ?>
                                     <a href="#" class="btn btn-info addpo" data-toggle="modal" data-param="<?php echo $value['id'] ?>">PO&nbsp;&nbsp;<span class="glyphicon glyphicon-ok"></span></a>
                                  <?php } ?> 
                                 
                                  <a href="/print_rfq/<?php echo $value['id'] ?>" class="btn btn-success addmaterial" target="_blank" data-toggle="modal">Print&nbsp;&nbsp;&nbsp;<span class="glyphicon glyphicon-print"></span></a>
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






<div class="modal fade" id="add_po" data-keyboard="false" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      
      <div class="modal-header" style="background: rgb(157, 90, 71)">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel" style="color:white">Add Materials</h4>
      </div>
  <div class="modal-body">
      <form class="form-horizontal" action='/rfq/add_po' method="POST">
            <input type="hidden" name="mid">
            <div class="form-group">
              <label class="col-sm-3 control-label">Supplier:</label>
              <div class="col-sm-9">
                <input type="text"  step="any" class="form-control" name="supplier" placeholder="Enter Supplier Name"/>
              </div>
            </div>
             <div class="form-group">
              <label class="col-sm-3 control-label">Address:</label>
              <div class="col-sm-9">
                <input type="text"  step="any" class="form-control" name="address" placeholder="Enter Address"/>
              </div>
            </div>
             <div class="form-group">
              <label class="col-sm-3 control-label">Tin:</label>
              <div class="col-sm-9">
                <input type="text"  step="any" class="form-control" name="tin" placeholder="Enter TIN No."/>
              </div>
            </div>
        <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save</button>
        </div>
      </form>
    </div>
  </div>
</div>
