<div class="row flex-xl-nowrap">
        <div class="col-12 col-md-3 col-xl-2 bd-sidebar">
    <?php include __DIR__."/menu.php"; ?>
  </div>
  <div class="col-12 col-md-9 col-xl-10 bd-content">
      <div class="card">
          
          <div class="card-body">
              
              <h4><i class="fas fa-lock fa-icon"></i> Account History</h4>
              <hr>
              <table class="table table-hover">
              	<thead>
              		<th>Date</th>
              		<th>Type</th>
              		<th>IP</th>
              		<th class="text-right">Action</th>
              	</thead>
              	<tbody>
              		<?php foreach ($data as $key => $value) { ?>
              			
              		<tr>
              			<td><?php echo $value->log_time;?></td>
              			<td><?php echo $value->log_type;?></td>
              			<td><?php echo $value->log_by_ip;?></td>
              			<td class="text-right"><?php echo $value->log_by_device;?>, <?php echo $value->log_by_platform;?></td>
              		</tr>
              		<?php } ?>
              	</tbody>
              </table>
          </div>
      </div>
  </div>
</div>