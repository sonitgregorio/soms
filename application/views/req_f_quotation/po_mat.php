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
                     <div class="col-md-6">
                     <?php echo $this->session->flashdata('message'); ?>
                       <form class="form-horizontal" method="POST" action="/rfq/insert_po">
                          <input type="hidden" name="poid" value="<?=$poid?>">
                           <input type="hidden" name="mid" value="<?=$mid?>">
                          <div class="form-group">
                            <label class="col-sm-3 control-label">Select Item</label>
                            <div class="col-sm-9">
                              <select class="form-control item_select" name="materialid">
                                      <option value="0">Select Material</option>
                                  <?php foreach ($this->rfq_model->get_selected_item($mid) as $key => $value): ?>
                                      <option value="<?=$value['id']?>"><?=$value['description']?></option>
                                  <?php endforeach ?>
                              </select>
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-sm-3 control-label">Quantity</label>
                            <div class="col-sm-9">
                             <input type="text" class="form-control" name="qty" disabled style="background:white">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-sm-3 control-label">Unit Price</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control unitp" name="unitprice">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-sm-3 control-label">Total Price</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" name="total">
                            </div>
                          </div>
                          <div class="pull-right">
                            <button class="btn btn-primary">Save</button>
                          </div>
                      </form>

                     </div>
                      <div class="col-md-12">
                        <hr style="border: 1px solid brown;" />
                        <div class="tabe table-responsive">
                          <table class="table table-bordered table-hover table-striped">
                            <thead>
                              <tr class="navbar-inverse">
                                <td style="color:white;text-align:center;width:2%">Item NO.</td>
                                <td style="color:white;text-align:center">Description</td>
                                <td style="color:white;text-align:center">Unit</td>
                                <td style="color:white;text-align:center">Unit Price</td>
                                <td style="color:white;text-align:center">Total</td>
                              </tr>
                            </thead>
                            <tbody>
                            <?php $count = 0; ?>
                              <?php foreach ($this->rfq_model->get_po_prices($mid, $poid) as $key => $value): ?>
                                  <tr>
                                    <td><?=$count += 1?></td>
                                    <td><?=$value['description']?></td>
                                    <td><?=$value['unit']?></td>
                                    <td style="text-align:right"><?=$value['unitprice']?></td>
                                    <td style="text-align:right"><?=$value['quantity'] * $value['unitprice']?></td>
                                  </tr>
                              <?php endforeach ?>
                               
                            </tbody>
                         </table>
                         <div class="pull-right">
                           <a href="/rfq/rfq_update_status/<?=$mid?>" class="btn btn-success">Submit</a>
                         </div>
                        </div>
                      </div>
                      
                        
                      </div>
                  </div>
                </div>
            </div>
        </div>
    </div>
</div>

