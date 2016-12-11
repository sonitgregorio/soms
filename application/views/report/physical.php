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

                                        <th style="color:white;text-align:center" rowspan="4">Type of Property Plant and Equipment</th>
                                        <th style="color:white;text-align:center" rowspan="4">Total Amount</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $total = 0;
                                        foreach ($this->iar_model->getPhysical() as $key => $value) { ?>
                                            <tr>
                                                <td><?php echo $value['description'] ?></td>
                                                <td><?php
                                                    $total += $this->iar_model->getPhysicalItem($value['id']);
                                                    echo number_format($this->iar_model->getPhysicalItem($value['id']), 2,'.', ',');

                                                    ?></td>
                                            </tr>
                                        <?php } ?>
                                    <tr>
                                        <td>TOTAL</td>
                                        <td><?php echo number_format($total, 2, '.', ',') ?></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                            <hr style="border: 1px solid brown;" />
                            <div class="pull-right">
                                <a href="/print_physical" class="btn btn-success addmaterial" target="_blank" data-toggle="modal">Print&nbsp;&nbsp;&nbsp;<span class="glyphicon glyphicon-print"></span></a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

