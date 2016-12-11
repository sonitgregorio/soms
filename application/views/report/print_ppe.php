<?php
$this->load->view('include/header');
?>
<div class="navbar navbar-inverse navbar-fixed-top" style="border-radius:0px">
    <div class="pull-left">
        <span>&nbsp;&nbsp;&nbsp;</span><button class="btn btn-success" onclick="window.print()" style="margin-top:0;">Print&nbsp;&nbsp;<span class="glyphicon glyphicon-print"></span></button>
        <label style="margin-left: 10px;color:#fff">From&nbsp;&nbsp;&nbsp;&nbsp;</label><input type="date" id="pfromDate">
        <label for="" style="margin-left: 10px;color:#fff">To&nbsp;&nbsp;&nbsp;&nbsp;</label><input type="date" id="ptoDate">
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
        <center><h4 style="margin:5px"><b>Reports on Phyisical ount of Property Plant & Equipment</b></h4></center>

        <center><h6 style="margin:5px"><b>Summary</b></h6></center>
        <br/>
        <div class="form horizontal">
            <div class="col-md-12">
                <label>For which </label> <u>__________________</u>   <u>____________________</u> <u>EVSU CARIGARA CAMPUS</u>is accountable having assumed such accountability on <u>_________</u>
            </div>
        </div>

        <table class="table table-bordered table-hover table-striped" id="tbl_materials">
            <thead>
            <tr class="">

                <th style="text-align:center" >Article</th>
                <th style="text-align:center" >Description</th>
                <th style="text-align:center" >Property No</th>
                <th style="text-align:center" >Unit Measure</th>
                <th style="text-align:center" >Unit Value</th>
                <th style="text-align:center" >Bal Per (qty)</th>
                <th style="text-align:center" >On Hand Per Count (qty)</th>
                <th style="text-align:center" >Total Amount</th>
            </tr>
            </thead>
            <tbody id="pbody">
            <?php

            $total = 0;
            foreach($this->iar_model->getDetailedPPE() as $key => $value) {
                $total += $value['total'];
                ?>
                <tr>
                    <td><?php echo $value['mat_type'] ?></td>
                    <td><?php echo $value['description'] ?></td>
                    <td></td>
                    <td><?php echo $value['quantity'] ?></td>
                    <td><?php echo $value['unitprice'] ?></td>
                    <td><?php echo $value['quantity'] ?></td>
                    <td><?php echo $value['quantity'] ?></td>
                    <td><?php echo number_format($value['total'], 2, '.', ',') ?></td>

                </tr>
            <?php } ?>
            <tr>
                <td colspan="7" style="text-align: center"><b>TOTAL</b></td>
                <td><?php echo number_format($total, 2, '.', ',') ?></td>
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