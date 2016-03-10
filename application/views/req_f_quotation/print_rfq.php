<?php 
	$this->load->view('include/header');
	$sig = $this->api->get_director();

	$get_letter = $this->api->get_letter($mid);

	$get_name = $this->materialsmd->get_person_pr($mid);

	$get_place = $this->rfq_model->get_pla($mid);
 ?>
<div class="navbar navbar-inverse navbar-fixed-top" style="border-radius:0px">
	<div class="pull-left">
		<span>&nbsp;&nbsp;&nbsp;</span><button class="btn btn-success" onclick="window.print()" style="margin-top:10%;">Print&nbsp;&nbsp;<span class="glyphicon glyphicon-print"></span></button>		
	</div>
</div>
<div class="col-md-10 col-md-offset-1 get_styles">
				<div class="container_div">
					<center><img src="<?=base_url()?>assets/images/EVSU.jpg" width="50" height="50"></center>
					<center><h6 style="margin:5px">Republic of the Philippines</h6></center>
					<center><h5 style="margin:5px"><b>EASTERN VISAYAS STATE UNIVERSITY</b></h5></center>
					<center><h5 style="margin:5px"><b>CARIGARA CAMPUS</b></h5></center>
					<center><h6 style="margin:5px">Carigara, Leyte</h6></center>
					<center><h5 style="margin:5px"><u>evsu_carigara@yahoo.com | 053 331 2356</u></h5></center>
					<br /><br />


					<p>___________________________<span style="margin-left:40%"><U><?php   $date = explode('-', Date('Y-m-d'));
							 									echo $this->api->monthselect($date[1]) . " " . $date[2] . ", " . $date[0];  ?></U></span></p>
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
								<?php foreach ($this->materialsmd->get_items($mid) as $key => $value): ?>
									<tr>
										<td><?=$value['quantity']?></td>
										<td><?=$value['unit']?></td>
										<td><?=$value['description']?></td>
										<td></td>
										<td></td>
									</tr>
								<?php endforeach ?>
							</tbody>
						</table>
					</div>
					<br />

					<p>PLACE OF DELIVERY: <u><?=$get_place ?></u>&nbsp;&nbsp;&nbsp;&nbsp;TIME OF DELIVERY: _______________________ DAYS FROM RECIEPTS OF THE DELIVERY ORDER. _____________________</p>

					<br />

					<p><b>I HEREBY CERTIFY that I</b> am in a position to furnish the above articles at the prices shown in quantities as called for / to the place of delivery within the time stipulated above.</p>


					<br />

					<p>&nbsp;&nbsp;___________________________<span style="margin-left:30%"><b><U><?=$sig['name']  ?></U></b></span></p>
					<p>(Full Name and Signature of Dealer)<span style="margin-left:35%"><?=$sig['position']  ?></span></p>

					<br/>

					<p>IMPORTANT:&nbsp;&nbsp;to be opende. on ______________________ at ____________________</p>
					<p><span style="margin-left:40%">(Date)</span><span style="margin-left:22%">(Time)</span></p>

					<br />
					<p>Canvassed by: ____________________</p>
					<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Canvasser Designate</p



				</div>
	
</div>