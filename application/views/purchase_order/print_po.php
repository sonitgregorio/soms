<?php 
	$this->load->view('include/header');
	$sig = $this->api->get_director();

	$get_letter = $this->api->get_letter($mid);

	$get_name = $this->materialsmd->get_person_pr($mid);

	$get_place = $this->rfq_model->get_pla($mid);

	$get_supplier = $this->rfq_model->get_sup($mid);

	$get_rqui = $this->rfq_model->get_rqui($mid);

	$get_signa = $this->rfq_model->get_signa();
	$sum = 0;

 ?>
<div class="navbar navbar-inverse navbar-fixed-top" style="border-radius:0px">
	<div class="pull-left">
		<span>&nbsp;&nbsp;&nbsp;</span><button class="btn btn-success" onclick="window.print()" style="margin-top:10%;">Print&nbsp;&nbsp;<span class="glyphicon glyphicon-print"></span></button>		
	</div>
</div>
<div class="col-md-10 col-md-offset-1 get_styles">
	<div class="container_div">
		<table class="table table-bordered">
			<tbody>
				<tr class="align_text" >
					<td colspan="8"><p><b>Purcahes Order<br/>EASTERN VISAYAS STATE UNIVERSITY - CARIGARA<br /></b><i>(Agency)</i></p></td>
				</tr>
				<tr>
					<td colspan="6"><p>Supplier: <b><?= $get_supplier['supplier']?></b><br/>Address : <?= $get_supplier['address']?><br />Tin : <?= $get_supplier['tin']?></p></td>	
					<td colspan="2"><p>PO No : <?= $get_supplier['pono']?><br/>Date : <?= $get_supplier['po_date']?><br />Mode of Procurement:</p></td>
				</tr>
				<tr>
					<td colspan="8">
						<p>Gentlemen:<br />&nbsp;&nbsp;&nbsp;Please Furnish this office the following articles subject to the terms & condigion contatined herein.</p>
					</td>
				</tr>
				<tr>
					<td colspan="4">Place of Delivery:</td>
					<td colspan="4">Delivery Time</td>
				</tr>
				<tr>
					<td colspan="4">Date of Deliver Immediate:</td>
					<td colspan="4">Payment Term</td>
				</tr>
				<tr class="align_text">
					<td style="width:3%">Item No</td>
					<td style="width:3%">Quantity</td>
					<td style="width:10%">Unit</td>
					<td style="width:50%" colspan="3">Description</td>
					<td>Unit Cost</td>
					<td>Amount</td>
				</tr>
				<?php $count = 0; ?>
				<?php foreach ($this->rfq_model->get_po_order($mid) as $key => $value): ?>
					<tr>
						<td><?= $count += 1 ?> </td>
						<td><?= $value['quantity'] ?></td>
						<td><?= $value['unit'] ?></td>
						<td colspan="3"><?= $value['description'] ?></td>
						<td style="text-align:right"><?= number_format($value['unitprice'], "2", ".", ",") ?></td>
						<td style="text-align:right"><?= number_format($value['quantity'] * $value['unitprice'], "2", ".", ",") ?></td>
						<?php $sum +=  $value['quantity'] * $value['unitprice']?>
					</tr>
				<?php endforeach ?>
				
				<tr class="align_text">
					<td colspan="7">Net Amount Due</td>
					<td style="text-align:right"><?php echo number_format($sum, "2", ".", ",") ?></td>
				</tr>
				<tr>
					<td colspan="8">(Total amount in words)</td>
				</tr>
				<tr>
					<td colspan="8">
						<p style="text-indent:5%">In case of failure to make delivery within the time sepcified above, a penalty of one-tenth(1/10) of one percent for every day of delay shall be imposed.</p>
					</td>
				</tr>
				<tr>
					<td  class="align_text" colspan="5">________________________<br />Address</td>
					<td colspan="3" style="border-left:none">Very truly yours,<br /><br /><?= $sig['name'] ?><br /><span style="margin-left:50px">	<?= $sig['position'] ?></span></td>
				</tr>
				<tr>
					<td colspan="8">
					<p >Conforme:<br/><span style="margin-left:10%">____________________________</span><br /><span style="margin-left:13%">Signature over Printed Name</span></p>
						
					</td>
				</tr>
				<tr>
					<td colspan="6">Requisting Office/Department:</td>
					<td colspan="2">ALOBS No.:</td>
				</tr>
				<tr>
					<td colspan="4"><br /><b><?= $get_rqui['names'] ?></b><br />Authorized Official</td>
					<td colspan="4"><br /><b><?= $get_signa['names'] ?></b><br/ ><?= $get_signa['position'] ?></td>
				</tr>
			</tbody>
		</table>
	</div>
	
</div>