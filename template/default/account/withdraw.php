<div class="row flex-xl-nowrap">
        <div class="col-12 col-md-3 col-xl-2 bd-sidebar">
    <?php include __DIR__."/menu.php"; ?>
  </div>
  <div class="col-12 col-md-9 col-xl-10 bd-content">
      	<div class="card">
          
          <div class="card-body">
              
              <h4><i class="fas fa-lock fa-icon"></i> Withdraw</h4>
              <hr>
              <table class="table">
              	<thead>
              		<th>Name</th>
              		<th>Wallet</th>
              		<th>Created</th>
              		<th>Total</th>
              	</thead>
              	<tbody>
              		<tr>
              			<td></td>
              			<td></td>
              			<td></td>
              			<td></td>
              		</tr>
              	</tbody>
              </table>

              		<h5>Withdraw {COIN}</h5>
					<hr>
					Wallet Address
					<input type="text" name="" class="form-control" placeholder="Wallet">

					Account Address
					<select type="text" name="" class="form-control" placeholder="Wallet"></select>

					<div class="row">
						<div class="col">
							Amount
							<input type="text" name="" class="form-control" placeholder="Wallet">
						</div>
						<div class="col">
							F2A Code
							<input type="text" name="" class="form-control" placeholder="Wallet">
						</div>
					</div>
					<br>
					
					<button class="btn btn-primary">Withdraw</button>
           </div>
        </div>
 	</div>
</div>