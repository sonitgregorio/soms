<div id="page-content-wrapper">
  <a href="#menu-toggle" id="menu-toggle" class="btn btn-info">Menu</a>
    <div class="container-fluid padding_zero">
        <div class="row padding_zero">
            <div class="col-lg-12">
                  <div class="panel panel-default" style="box-shadow: 0px 0px 20px rgb(49, 49, 49)">
                  <div class="panel-heading" style="background: rgb(157, 90, 71)" >
                    <h1 class="panel-title" style="color:white">Inspection And Acceptance Report</h1>
                  </div>
                  <div class="panel-body">
                      <div class="col-md-12">
                        <form class="form-horizontal">
                          <div class="form-group">
                         
                                    <?php $y = $this->iar_model->get_sampleDataID($mid); ?>
                                      

                                        <div class="col-sm-3">
                                              <input style="border:1px solid black;text-align:center" type="text" class="form-control" value="<?= $y['supplier']; ?>">
                                        </div>

                                      
                                        <div class="col-sm-3  ">
                                              <input style="border:1px solid black;text-align:center" type="text" id="add"  class="form-control" value="<?= $y['address']; ?>">
                                        </div>

                                        <div class="col-sm-2">
                                              <input style="border:1px solid black;text-align:center" type="text" id="tin" class="form-control" value="<?= $y['tin']; ?>">
                                        </div>

                                        <div class="col-sm-2">
                                              <input style="border:1px solid black;text-align:center" type="text" id="pono" class="form-control" value="<?= $y['pono']; ?>">
                                        </div>

                                        <div class="col-sm-2">
                                              <input style="border:1px solid black;text-align:center" type="text" id="date" class="form-control" value="<?= $y['po_date']; ?>">
                                        </div>          
                          </div>
                        </form>
                        <hr style="border: 1px solid brown;" />
                        <div class="tabe table-responsive">
                          <table class="table table-bordered table-hover table-striped" id="tbl_materials">
                            <thead>
                              <tr class="navbar-inverse">
                                <td style="color:white;text-align:center" width="20">Check</td>
                                <td style="color:white;text-align:center">Quantity</td>
                                <td style="color:white;text-align:center">Unit</td>
                                <td style="color:white;text-align:center">Description</td>
                                <td style="color:white;text-align:center;">Unit Cost</td>
                                <td style="color:white;text-align:center;">Amount</td>
                              </tr>
                            </thead>
                            <?php foreach ($this->iar_model->get_sampleData($mid) as $key => $value) { ?>                          
                                  <tbody>
                                        <td style="color:white;text-align:center">
                                        
                                        <input data-param6="<?= $value['tid']; ?>" data-param="<?= $value['supplier']; ?>" class="checkIt" data-param1="<?= $value['address']; ?>" data-param2="<?= $value['tin']; ?>" data-param3="<?= $value['pono']; ?>" data-param4="<?= $value['po_date']; ?>" type="checkbox">
                                        </td>
                                        <td style="text-align:center;"><?= round($value['quantity']); ?></td>
                                        <td style="text-align:center;"><?= $value['unit']; ?></td>
                                        <td style="text-align:center;"><?= $value['description']; ?></td>
                                        <td style="text-align:right;"><?= '₱ '. $value['unitcost']; ?></td>
                                        <td style="text-align:right;"><?= '₱ '. $value['quantity'] * $value['unitcost']; ?></td>

                                  </tbody>
                          <?php } ?>
                         </table>
                        </div>


                        <hr style="border: 1px solid brown;" />
                        <label>Comment:</label>
                        <form id="notes">
                          <textarea id="conote" style="width: 100%;;"></textarea>
                         <button type="submit" class="btn btn-info pull-right" id="sub_com">Submit</button>
                        </form>
                      </div>
                      <p class="com"></p>
                  </div>
                </div>
            </div>
        </div>
    </div>
</div>

