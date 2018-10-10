<h5 class="title"><i class="ti-wallet"></i> Coind
	<div class="float-right">
		<a href="<?php echo admin_url("ann/create");?>" class="btn btn-primary"><i class="ti-plus"></i> Add new coin</a>
	</div>
</h5>
<table class="table">
	<thead>
		<th>ID</th>
		<th>Base</th>
		<th>Name</th>
		<th>Symbol</th>
		<th>Deposit</th>
		<th>Withdraw</th>
		<th>Open Trade</th>
		<th>Class</th>
		<th>Fee</th>
		<th>Status</th>
		<th></th>
	</thead>
	<tbody>
		<?php foreach ($data as $key => $value) { ?>
			
		<tr>
			<td><?php echo $value->id;?></td>
			<th><?php echo $value->base;?></th>
			<td><?php echo $value->name;?></td>
			<td><?php echo $value->symbol;?></td>
			<td><?php echo ($value->deposit == 1 ? "On" : "Off");?></td>
			<td><?php echo ($value->withdraw == 1 ? "On" : "Off");?></td>
			<td><?php echo ($value->opentrade == 1 ? "On" : "Off");?></td>
			<td><?php echo $value->runclass;?></td>
			<td>Fee</td>
			<td><?php echo ($value->status == 1 ? "On" : "Off");?></td>
			<td class="text-right"><a class="btn btn-sm btn-info" href="<?php echo admin_url("ann/create/".$value->id);?>">Options</a></td>
		</tr>
		<?php } ?>
	</tbody>
</table>