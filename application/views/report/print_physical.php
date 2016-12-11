<?php
$this->load->view('include/header');
?>
<div class="navbar navbar-inverse navbar-fixed-top" style="border-radius:0px">
    <div class="pull-left">
        <span>&nbsp;&nbsp;&nbsp;</span><button class="btn btn-success" onclick="window.print()" style="margin-top:0;">Print&nbsp;&nbsp;<span class="glyphicon glyphicon-print"></span></button>
        <label style="margin-left: 10px;color:#fff">From&nbsp;&nbsp;&nbsp;&nbsp;</label><input type="date" id="fromDate">
        <label for="" style="margin-left: 10px;color:#fff">To&nbsp;&nbsp;&nbsp;&nbsp;</label><input type="date" id="toDate">
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
                <label>For which </label> <u>_________________________</u>   <u>________________________</u> is accountable having assumed such accountability on <u>_________</u>
            </div>
        </div>

        <table class="table-bordered table-responsive" id="tbl_rep" style="width: 100%">
            <thead >
            <tr >
                <th style="padding:3px" rowspan="4"><center><small>Type of Property Plant and Equipment</small></center></th>
                <th style="padding:3px" rowspan="4"><center><small>Total</small></center></th>
            </tr>
            </thead>
            <tbody id="repl">
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