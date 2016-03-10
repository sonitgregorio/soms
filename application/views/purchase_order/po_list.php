<div id="page-content-wrapper">
  <a href="#menu-toggle" id="menu-toggle" class="btn btn-info">Menu</a>
    <div class="container-fluid padding_zero">
        <div class="row padding_zero">
            <div class="col-lg-12">
                  <div class="panel panel-default" style="box-shadow: 0px 0px 20px rgb(49, 49, 49)">
                  <div class="panel-heading" style="background: rgb(157, 90, 71)" >
                    <h1 class="panel-title" style="color:white">Purchase Order</h1>
                  </div>
                  <div class="panel-body">
                  
                    
                      <div class="col-md-12">
                     
                        <hr style="border: 1px solid brown;" />
                        <div class="tabe table-responsive">
                          <?php echo $this->session->flashdata('message') ?>
                          <table class="table table-bordered table-hover table-striped">
                            <thead>
                              <tr class="navbar-inverse">
                                <td style="color:white;text-align:center">PO NO.</td>
                                <td style="color:white;text-align:center">Name</td>
                                <td style="color:white;text-align:center">Department</td>
                                <td style="color:white;text-align:center">Supplier</td>
                                <!-- <td style="color:white;text-align:center">Letter</td> -->
                                <td style="color:white;text-align:center;width:22%">Action</td>
                              </tr>
                            </thead>
                            <tbody>
                              <?php foreach ($this->rfq_model->get_po_stat() as $key => $value): ?>
                                <tr>
                                  <td><?= $value['pono']?></td>
                                  <td><?= strtoupper($value['firstname'] . " " . $value['lastname'])?></td>
                                  <td><?= strtoupper($value['code']) ?></td>
                                  <td><?= strtoupper($value['supplier']) ?></td>
                                  <td>
                                    <a href="#" class="btn btn-info invoice" data-toggle="modal" data-param="<?php echo $value['id'] ?>">IAR&nbsp;&nbsp;<span class="glyphicon glyphicon-ok"></span></a>
                                    <a href="/print_po/<?php echo $value['id'] ?>" class="btn btn-success addmaterial" target="_blank" data-toggle="modal">Print&nbsp;&nbsp;&nbsp;<span class="glyphicon glyphicon-print"></span></a>
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



<div class="modal fade" id="inv_mat" data-keyboard="false" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      
        <div class="modal-header" style="background: rgb(157, 90, 71)">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" id="myModalLabel" style="color:white">Add Invoce No.</h4>
        </div>
        <div class="modal-body">
            <form class="form-horizontal" action="/submit_inv" method="POST">
                <div class="form-group">
                  <label class="col-sm-3 control-label">Invoice No</label>
                  <div class="col-sm-9">
                      <input type="hidden" value="" name="mid">
                      <input type="text" class="form-control" name="invoiceno" placeholder="Enter Invoice no" required>
                  </div>
                </div>
            
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary">Save</button>
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
        </form>
      </div>
    </div>
  </div>
</div>