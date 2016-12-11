<div id="page-content-wrapper">
    <a href="#menu-toggle" id="menu-toggle" class="btn btn-info">Menu</a>
    <div class="container-fluid padding_zero">
        <div class="row padding_zero">
            <div class="col-lg-12">
                <div class="panel panel-default" style="box-shadow: 0px 0px 20px rgb(49, 49, 49)">
                    <div class="panel-heading" style="background: rgb(157, 90, 71)" >
                        <h1 class="panel-title" style="color:white">Reports</h1>
                    </div>
                    <div class="panel-body">
                        <div class="col-md-12">


                            <div class="tabe table-responsive">
                                <table class="table table-bordered table-hover table-striped" id="tbl_materials">
                                    <thead>
                                    <tr class="navbar-inverse">

                                        <th style="color:white;text-align:center" >Requisition Officer</th>
                                        <th style="color:white;text-align:center" >Particulars</th>
                                        <th style="color:white;text-align:center" >Quantity Issued</th>
                                        <th style="color:white;text-align:center" >Unit Cost</th>
                                        <th style="color:white;text-align:center" >Total Cost</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php

                                    $total = 0;
                                    foreach($this->iar_model->getSupplyReports() as $key => $value) {
                                        $total += $value['total'];

                                        ?>
                                        <tr>
                                            <td><?php echo $value['req'] ?></td>
                                            <td><?php echo $value['description'] ?></td>
                                            <td><?php echo $value['quantity'] ?></td>
                                            <td><?php echo $value['unitprice'] ?></td>
                                            <td><?php echo number_format($value['total'], 2, '.', ',') ?></td>

                                        </tr>
                                    <?php } ?>
                                    <tr>
                                        <td colspan="4" style="text-align: center"><b>TOTAL</b></td>
                                        <td><?php echo number_format($total, 2, '.', ',') ?></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                            <hr style="border: 1px solid brown;" />
                            <div class="pull-right">
                                <a href="/print_supply" class="btn btn-success addmaterial" target="_blank" data-toggle="modal">Print&nbsp;&nbsp;&nbsp;<span class="glyphicon glyphicon-print"></span></a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

