<h5 class="title"><i class="ti-wallet"></i> Email Template
	<div class="float-right">
		<a href="<?php echo admin_url("email/create");?>" class="btn btn-primary"><i class="ti-plus"></i> Add new email</a>
	</div>
</h5>
<table class="table">
	<thead>
		<th>ID</th>
		<th>Name</th>
		<th>Subject</th>
		<th></th>
	</thead>
	<tbody>
		<?php foreach ($xEmail as $key => $rMail) { ?>

		<tr>
			<td><?php echo $rMail->id;?></td>
			<th><?php echo $rMail->name;?></th>
			<td><?php echo $rMail->subject;?></td>
			<td class="text-right"><a class="btn btn-sm btn-info" href="<?php echo admin_url("email-edit/".$rMail->name);?>"><?php echo lang('admin_email_edit'); ?></a></td>
		</tr>
		<?php } ?>
	</tbody>
</table>
