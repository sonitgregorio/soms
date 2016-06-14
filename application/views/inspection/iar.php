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
                        <hr style="border: 1px solid brown;" />
                        <div class="tabe table-responsive">
                          <table class="table table-bordered table-hover table-striped">
                            <thead>
                              <tr class="navbar-inverse">
                                <td style="color:white;text-align:center">AR NO.</td>
                                <td style="color:white;text-align:center">INVOICE NO</td>
                                <td style="color:white;text-align:center">PR NO</td>
                                <td style="color:white;text-align:center">Section</td>
                                <td style="color:white;text-align:center;">Date</td>
                                <td style="color:white;text-align:center;">Action</td>
                              </tr>
                            </thead>
                            <tbody>
                              <?php foreach ($this->iar_model->get_iar() as $key => $value): ?>
                                <tr>
                                  <td><?= $value['ar_no'] ?></td>
                                  <td><?= $value['invoice_no'] ?></td>
                                  <td><?= $value['prno'] ?></td>
                                  <td><?= $value['section'] ?></td>
                                  <td><?= $value['date_request'] ?></td>
                                  <td style="text-align:center;"> <a href="/check_item/<?php echo $value['mid'] ?>" class="btn btn-info addmaterial">Check&nbsp;&nbsp;<span class="glyphicon glyphicon-check"></span></a></td>
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
