<?php 
	$this->load->view('include/header');
	$sig = $this->api->get_director();

	$get_letter = $this->api->get_letter($mid);

	$get_name = $this->materialsmd->get_person_pr($mid);
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
												echo number_format($sum,2,".",",");
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
									<td><?php echo number_format($x,2,".",",") ?></td>
								</tr>
							</tbody>
						</table>
					</center>

					<br />
					<p>Purpose:</p>
					<br />
					
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