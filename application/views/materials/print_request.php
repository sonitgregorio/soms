<?php 
	$this->load->view('include/header');
	$sig = $this->api->get_director();

	$get_letter = $this->api->get_letter($mid);
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
					<center><h5 style="margin:5px"><b>INFORMATION TECHNOLOGY DEPARTMENT</b></h5></center>
					<br /><br />


					<p><?php
							 $date = explode('-', Date('Y-m-d'));
							 echo $this->api->monthselect($date[1]) . " " . $date[2] . ", " . $date[0]; 
					?></p>


					<p style="font-size:12px"><b><?php echo $sig['name'] ?></b><br/><?php echo $sig['position'] ?></p>
					<br />
					<p style="font-size:12px">Dear <?php echo $sig['title'] ?></p>		

					<br />
					<br />

					<p class="letter_style"><?php echo $get_letter['description'] ?></p>
					<br />
					
						<center>
							<table class="table table-bordered" style="width:70%">
								<thead>
									<tr style="text-align:center">
										<td style="width:20%">Quantity</td>
										<td style="width:25%">Unit</td>
										<td style="width:55%">Description</td>
									</tr>
								</thead>
								<tbody>
								<?php foreach ($this->materialsmd->get_items($mid) as $key => $value): ?>
									<tr>
										<td><?php echo $value['quantity'] ?></td>
										<td><?php echo $value['unit'] ?></td>
										<td><?php echo $value['description'] ?></td>
									</tr>
								<?php endforeach ?>
									
								</tbody>
							</table>	
						</center>
					
					<br />
					<p class="letter_style">May this request merit your kind consideration and immediate favorable response. Thank you very much and more power.</p>
					<br /><br />
					<p>Respectfully yours,</p>
					<br />
					<p><b>
						<?php 
							$get_name = $this->api->get_person($mid);
							echo $get_name['firstname'] . " " . $get_name['middlename'] . ". " . $get_name['lastname']; 
						 ?></b><br />
						 <?php echo $get_name['description'] ?>
					</p>
					<br/>
					<p style="margin-left:50%">Approved:</p>
					<p style="margin-left:65%"><b><?php echo $sig['name'] ?></b><br/><?php echo $sig['position'] ?></p>

				</div>
	
</div>


