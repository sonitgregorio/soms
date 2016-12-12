<?php
$this->load->view('include/header');
$sig = $this->api->get_director();

$get_letter = $this->api->get_letter($mid);

$get_name = $this->materialsmd->get_person_pr($mid);
?>
<div class="navbar navbar-inverse navbar-fixed-top" style="border-radius:0px">
    <div class="pull-left">
        <span>&nbsp;&nbsp;&nbsp;</span>
        <button class="btn btn-success" onclick="window.print()" style="margin-top:10%;">Print&nbsp;&nbsp;<span
                class="glyphicon glyphicon-print"></span></button>
    </div>
</div>
<div class="col-md-10 col-md-offset-1 get_styles">
    <div class="container_div">
        <center><img src="<?= base_url() ?>assets/images/EVSU.jpg" width="50" height="50"></center>
        <center><h6 style="margin:5px">Republic of the Philippines</h6></center>
        <center><h5 style="margin:5px"><b>EASTERN VISAYAS STATE UNIVERSITY</b></h5></center>
        <center><h5 style="margin:5px"><b>CARIGARA CAMPUS</b></h5></center>
        <center><h6 style="margin:5px">Carigara, Leyte</h6></center>
        <center><h5 style="margin:5px"><u>evsu_carigara@yahoo.com | 053 331 2356</u></h5></center>
        <br/><br/>
        <center>
            <table class="table table-bordered">
                <thead>
                <tr style="text-align:center">

                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>Department</td>
                    <td><?php echo $get_name['department'] ?></td>
                    <td>PR NO</td>
                    <td><?php echo $get_name['prno'] ?></td>
                    <td>Date</td>
                    <td><?php echo $get_name['date_request'] ?></td>
                </tr>
                <tr>
                    <td>Section</td>
                    <td><?php echo $get_name['section'] ?></td>
                    <td>SAI NO</td>
                    <td></td>
                    <td>Date</td>
                    <td></td>
                </tr>

                </tbody>
            </table>
        </center>
        <center><h3><b>PURCHASE REQUEST</b></h3></center>

        <center>
            <table class="table table-bordered">
                <thead>
                <tr style="text-align:center">
                    <td>QTY</td>
                    <td>UNIT OF MEASURE</td>
                    <td style="width:30%">ITEM DESCRIPTION</td>
                    <td>STOCK NO.</td>
                    <td>ESTIMATED UNIT COST</td>
                    <td>ESTIMATED COST</td>
                </tr>
                </thead>
                <tbody>
                <?php
                $x = 0;
                foreach ($this->materialsmd->get_items($mid) as $key => $value): ?>
                    <tr>
                        <td><?php echo $value['quantity'] ?></td>
                        <td><?php echo $value['unit'] ?></td>
                        <td><?php echo $value['description'] ?></td>
                        <td></td>
                        <td><?php echo $value['unitcost'] ?></td>
                        <td><?php
                            $sum = $value['quantity'] * $value['unitcost'];
                            echo number_format($sum, 2, ".", ",");
                            ?></td>
                    </tr>
                    <?php
                    $x += $sum;

                endforeach ?>
                <tr>
                    <td></td>
                    <td></td>
                    <td style="text-align:center;font-size:10px">------NOTHING FOLLOWS------</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td><?php echo number_format($x, 2, ".", ",") ?></td>
                </tr>
                </tbody>
            </table>
        </center>

        <br/>
        <p>Purpose:</p>
        <br/>

        <table class="table table-bordered">
            <thead></thead>
            <tbody>
            <tr>
                <td class="remove_border"></td>
                <td>Requisted By:</td>
                <td>Approved By:</td>
            </tr>
            <tr>
                <td width="120">Signature</td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td width="120">Printed Name</td>
                <td style="text-align:center"><b><?php echo strtoupper($get_name['names']) ?></b></td>
                <td style="text-align:center"><b><?php echo $sig['name'] ?></td>
            </tr>
            <tr>
                <td width="120">Designation</td>
                <td style="text-align:center"><?php echo $get_name['position'] ?></td>
                <td style="text-align:center"><?php echo $sig['position'] ?></td>
            </tr>
            <tr>
                <td width="120">Date</td>
                <td style="text-align:center"><?php echo $get_name['date_request'] ?></td>
                <td></td>
            </tr>
            </tbody>
        </table>


    </div>

</div>
<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
<div class="col-md-10 col-md-offset-1 get_styles print_psd" style="margin-top: -1%">
    <div class="container_div">
        <center><img src="<?= base_url() ?>assets/images/EVSU.jpg" width="50" height="50"></center>
        <center><h6 style="margin:5px">Republic of the Philippines</h6></center>
        <center><h5 style="margin:5px"><b>EASTERN VISAYAS STATE UNIVERSITY</b></h5></center>
        <center><h5 style="margin:5px"><b>CARIGARA CAMPUS</b></h5></center>
        <center><h6 style="margin:5px">Carigara, Leyte</h6></center>
        <center><h5 style="margin:5px"><u>evsu_carigara@yahoo.com | 053 331 2356</u></h5></center>
        <br/><br/>

        <p style="text-indent: 30px"><b>Office of the Campus Director EVSU-Carigara Campus, Carigara, Leyte. Recieved From EASTERN VISAYAS STATE
            UNIVERSITY-CARIGARA CAMPUS, "NOTICE TO BUDDERS" REQUEST FOR QUOTATION</b></p>
        <br/>
        <p><b>Purpos&nbsp;:&nbsp;&nbsp;</b><u>________________________________________________________________________________________</u></p>
        <center>
            <table class="table table-bordered">
                <thead>
                <tr style="text-align:center">
                    <td>Dealer Name</td>
                    <td>Printed Name & Signature</td>
                    <td style="width:30%">Time</td>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>1</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>1</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>3</td>
                    <td></td>
                    <td></td>
                </tr>
                </tbody>
            </table>
        </center>
        <p>IMPORTANT&nbsp;:&nbsp;&nbsp; To be opened on _____________________ at ______________________</p>
        <br/>
        <br/>
        <p><b>OPENED IN THE PRESENCE OF:</b</p>
        <br/>
        <p><b>LOLITA O. CLEMENCIO Ph. D&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-Chariman<span style="margin-left:300px"><u>__________________________________</u></span></b></p>
        <p><b>OTILIA O. MISAGAL Ph. D&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-Member<span style="margin-left:310px"><u>__________________________________</u></span></b></p>
        <p><b>MA. MYRNA B. BASILAN&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-Chariman<span style="margin-left:300px"><u>__________________________________</u></span></b></p>

    </div>

</div>

<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
<div class="col-md-10 col-md-offset-1 get_styles">
    <div class="container_div">
        <center><img src="<?=base_url()?>assets/images/EVSU.jpg" width="50" height="50"></center>
        <center><h6 style="margin:5px">Republic of the Philippines</h6></center>
        <center><h5 style="margin:5px"><b>EASTERN VISAYAS STATE UNIVERSITY</b></h5></center>
        <center><h5 style="margin:5px"><b>CARIGARA CAMPUS</b></h5></center>
        <center><h6 style="margin:5px">Carigara, Leyte</h6></center>
        <center><h5 style="margin:5px"><u>evsu_carigara@yahoo.com | 053 331 2356</u></h5></center>
        <br /><br />


        <p>___________________________<span style="margin-left:40%"><U></U></span></p>
        <p>___________________________<span style="margin-left:45%">Date</span></p>

        <br/><br/>
        <center><h4><b>REQUEST FOR QUOTATION</b></h4></center>

        <p>PLEASE QUOTE YOUR PRICE FOR EACH OF THE FOLLOWING:</p>
        <div class="table table-responsive">
            <table class="table table-bordered">
                <thead>
                <tr>
                    <td>QTY</td>
                    <td>Unit of Measure</td>
                    <td>Item Description</td>
                    <td>Unit Pricee</td>
                    <td>Total</td>
                </tr>
                </thead>
                <tbody>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <br />

        <p>PLACE OF DELIVERY:&nbsp;&nbsp;&nbsp;&nbsp;TIME OF DELIVERY: _______________________ DAYS FROM RECIEPTS OF THE DELIVERY ORDER. _____________________</p>

        <br />

        <p><b>I HEREBY CERTIFY that I</b> am in a position to furnish the above articles at the prices shown in quantities as called for / to the place of delivery within the time stipulated above.</p>


        <br />

        <p>&nbsp;&nbsp;___________________________<span style="margin-left:30%"><b></b></span></p>
        <p>(Full Name and Signature of Dealer)<span style="margin-left:35%"></span></p>

        <br/>

        <p>IMPORTANT:&nbsp;&nbsp;to be opende. on ______________________ at ____________________</p>
        <p><span style="margin-left:40%">(Date)</span><span style="margin-left:22%">(Time)</span></p>

        <br />
        <p>Canvassed by: ____________________</p>
        <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Canvasser Designate</p



    </div>

</div>