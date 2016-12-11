<?php
$this->load->view('include/header');
?>
<div class="navbar navbar-inverse navbar-fixed-top" style="border-radius:0px">
    <div class="pull-left">
        <span>&nbsp;&nbsp;&nbsp;</span><button class="btn btn-success" onclick="window.print()" style="margin-top:0;">Print&nbsp;&nbsp;<span class="glyphicon glyphicon-print"></span></button>
        <label style="margin-left: 10px;color:#fff">From&nbsp;&nbsp;&nbsp;&nbsp;</label><input type="date" id="sfromDate">
        <label for="" style="margin-left: 10px;color:#fff">To&nbsp;&nbsp;&nbsp;&nbsp;</label><input type="date" id="stoDate">
    </div>
</div>
<div class="col-md-10 col-md-offset-1 get_styles">
    <div class="container_div">
        <center><img src="<?=base_url()?>assets/images/EVSU.jpg" width="50" height="50"></center>
        <center><h6 style="margin:5px">Republic of the Philippines</h6></center>
        <center><h5 style="margin:5px"><b>EASTERN VISAYAS STATE UNIVERSITY</b></h5></center>
        <center><h5 style="margin:5px"><b>CARIGARA CAMPUS</b></h5></center>
        <center><h6 style="margin:5px">Carigara, Leyte</h6></center>
        <br>
        <center><h4 style="margin:5px"><b>Reports Of Supplies And Material Issued</b></h4></center>
        <center><h6 style="margin:5px"><b>__________________________</b></h6></center>
        <br/>

        <table class="table table-bordered table-hover table-striped" id="tbl_materials">
            <thead>
            <tr class="navbar-inverse">

                <th style="color:white;text-align:center" >Requisition Officer</th>
                <th style="color:white;text-align:center" >Particulars</th>
                <th style="color:white;text-align:center" >Quantity Issued</th>
                <th style="color:white;text-align:center" >Unit Cost</th>
                <th style="color:white;text-align:center" >Total Cost</th>
                <th style="color:white;text-align:center" >Office Supplies</th>
                <th style="color:white;text-align:center" >Med/Dental and Lab</th>
                <th style="color:white;text-align:center" >Construction Material</th>
                <th style="color:white;text-align:center" >Other Inventory</th>
                <th style="color:white;text-align:center" >Remarks</th>
            </tr>
            </thead>
            <tbody id="sbody">
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
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>

                </tr>
            <?php } ?>
            <tr>
                <td colspan="4" style="text-align: center"><b>TOTAL</b></td>
                <td><?php echo number_format($total, 2, '.', ',') ?></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            </tbody>
        </table>
        <br/>
        <div class="col-md-12">
            <div class="pull-left">
                <p>Prepared By</p><br/>
                <b>PEDRO A. PROFETANA</b>
            </div>
            <div class="pull-right">
                <p>Noted</p><br/>
                <b>MA. SOCORRO F. MAZO</b>
            </div>
        </div>

    </div>

</div>