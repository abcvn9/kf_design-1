
<div class="row">
  <div class="col-lg-3">
    <?php include __DIR__."/menu.php"; ?>
  </div>
  <div class="col-lg-9">
      <div class="card">
          
          <div class="card-body">
              
              <h4><i class="fas fa-lock fa-icon"></i> Deposit</h4>
              <hr>
              <h5>Transfering description</h5>

				Reminder：<br>

				1. The transfer is automatic, <b><?php echo $data->name;?></b> transfers need to be confirmed by the entire network,after reaching 6 confirmations your <b><?php echo $data->name;?></b> will be automatically recharged to your account.<br>

				2. This address is your unique and single use of the transfer address, you can recharge at the same time.<br>

				<h6>This is your <?php echo $data->name;?> Wallet address，Please deposit <b><?php echo $data->name;?></b> to this address：</h6><br>

				<div class="row">
					<div class="col-lg-8">
						<textarea class="form-control" readonly="" style="height: 40px;"><?php echo @$balancer->wallet;?></textarea><br>
						<button class="btn btn-info"><i class="fas fa-copy"></i> Copy</button> <button class="btn btn-info"><i class="fas fa-reload"></i> Reset</button>
					</div>
					<div class="col-lg-4">
						<img src="https://www.bitexbay.com/Home/Pay/qrcode.html">
					</div>
				</div>

				<h4>Transfer to record</h4>
				<table class="table">
					<thead>
						<th>Record ID</th>
						<th>Amount</th>
						<th>Amount of Confirmation</th>
						<th>Time</th>
						<th>Status</th>
					</thead>
				</table>
			</div>
		</div>
	</div>
</div>
