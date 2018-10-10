<div class="row flex-xl-nowrap">
        <div class="col-12 col-md-3 col-xl-2 bd-sidebar">
		<?php include __DIR__."/menu.php"; ?>
	</div>
	<div class="col-12 col-md-9 col-xl-10 bd-content">
		<div class="card card-body">
		<h4><i class="fas fa-coins fa-icon"></i> All Coins
			<div class="float-right w-25">
				<div class="input-group mb-3 input-group-sm">
				  <input type="text" class="form-control" placeholder="Enter Keywork">
				  <div class="input-group-append">
				    <button class="btn btn-secondary" type="button" id="button-addon2"><i class="fas fa-search"></i></button>
				  </div>
				</div>
			</div>
		</h4>

		<div class="alert alert-danger" role="alert">
		  A simple danger alert—check it out!
		</div>

		<table class="table table-striped">
			<thead class="thead-dark">
				
				
				<th>Symbol</th>
				
				
				<th>Main</th>
				<th style="max-width: 100px;">Transfer</th>
				<th>Trader</th>
				<th>Orders</th>
				<th>Deposit</th>
				
				<th>Withdraw</th>
			</thead>
			<tbody>
				<?php foreach ($data as $key => $value) { ?>
					
				<tr id="options<?php echo $value->symbol;?>" data-json="<?php echo $value->symbol;?>,<?php echo $value->wallet;?>,<?php echo $value->deposit;?>,<?php echo $value->withdraw;?>">
					
					
					<td>
						<div class="float-left"><img src="<?php echo $value->icon;?>" style="height: 48px;"></div>
						<div style="margin-left: 60px;">
							<?php echo $value->name;?> / <?php echo $value->symbol;?>
							<br>
							<small>
								Go to Trader
								<?php

									$trade = explode(',',$value->base,5);
									foreach ($trade as $key_base => $value_base) {
									 	?>
									 		<a href="<?php echo store_url("trade/{$value_base}/{$value->symbol}");?>"><?php echo $value_base;?></a>
									 	<?php
									 } 
								?>
							</small>
						</div>
					</td>
					
					
					
					<td><?php echo ($value->base_value ? $value->base_value : 0);?></td>
					<td><div class="input-group">
						  <div class="input-group-prepend" id="button-addon3">
						    <button class="btn btn-outline-info btn-sm" onClick="updateMain(this, '<?php echo $value->symbol;?>');" type="button"><i class="fas fa-arrow-alt-circle-left"></i></button>
						    
						  </div>
						  <input type="text" class="form-control form-control-sm border-info" placeholder="" aria-label="Example text with two button addons" aria-describedby="button-addon3">
						  	<div class="input-group-append" id="button-addon4">
							  <button class="btn btn-outline-info btn-sm" onClick="updateTrade(this, '<?php echo $value->symbol;?>');" type="button"><i class="fas fa-arrow-alt-circle-right"></i></button>
							</div>
						</div>
					</td>
					<td><?php echo ($value->trade_value > 0 ? $value->trade_value : 0);?></td>
					<td><?php echo ($value->in_order > 0 ? $value->in_order : 0);?></td>
					<td>
						<?php if($value->deposit == 1){ ?>
							<a class="btn btn-outline-info btn-sm" href="<?php echo store_url("account/deposit/{$value->symbol}");?>"><i class="fas fa-chevron-circle-down"></i> Deposit</a>
						<?php }else { ?>
							<button class="btn btn-outline-secondary btn-sm disable"><i class="fas fa-chevron-circle-down"></i> Deposit</button>
						<?php } ?>
					</td>
					<td><a class="btn btn-outline-warning btn-sm" href="<?php echo store_url("account/withdraw/{$value->symbol}");?>"><i class="fas fa-chevron-circle-up "></i> Withdraw</a></td>
				</tr>
				
				<?php } ?>
			</tbody>
		</table>
		</div>
	</div>
</div>

<script type="text/html" id="zoomid">
	<tr class="zoomid">
		<td colspan="7" class="border">

			<div class="row">
				<div class="col">
					<h5 class="text-right">Deposit {COIN}</h5>
					<hr>
					<div class="text-right">
						<div class="float-right border" style="width: 100px; height: 100px;"></div>
						<div style="margin-right: 120px;">
							Wallet Address
							
							<div class="input-group mb-3">
							  <input type="text" class="form-control" readonly="" value="{WALLET}">
							  <div class="input-group-append">
							    <button class="btn btn-primary" title="Create or Reset Wallet" type="button" id="button-addon2"><i class="fas fa-chevron-circle-down"></i></button>
							  </div>
							</div>
							Validate 1-30 min
						</div>
					</div>
				</div>
				<div class="col">
					<h5>Withdraw {COIN}</h5>
					<hr>
					Wallet Address
					<input type="text" name="" class="form-control" placeholder="Wallet">

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
		</td>
	</tr>
</script>

<script type="text/javascript">
	$(document).ready(function(){
		$("[data-option]").click(function(){
			var id = "options"+$(this).attr('data-option');
			var html = $("#zoomid").html();
			
			var json =  $("#"+id).attr('data-json').split(',');
			html = html.replace(/{COIN}/g,json[0]).replace(/{WALLET}/g,json[1]);

			$(".zoomid").remove();
			$("#"+id).after(html);
		});
	});

	var updateTrade = function(obj, symbol){
		var value = $(obj).parent().parent().find("input").val();
		
		$.ajax({
	        url: "/account/sendtrade_balancer",
	        type: "post",
	        data: {'<?php echo $this->security->get_csrf_token_name(); ?>' : '<?php echo $this->security->get_csrf_hash(); ?>', value : value, symbol : symbol},
	     
	        success: function (response) {
	           window.location.href = '/balancer.html';         

	        },
	        error: function(jqXHR, textStatus, errorThrown) {
	           console.log(textStatus, errorThrown);
	        }


	    });
	};
	var updateMain = function(obj, symbol){
		var value = $(obj).parent().parent().find("input").val();
		
		$.ajax({
	        url: "/account/sendmain_balancer",
	        type: "post",
	        data: {'<?php echo $this->security->get_csrf_token_name(); ?>' : '<?php echo $this->security->get_csrf_hash(); ?>', value : value, symbol : symbol},
	     
	        success: function (response) {
	           window.location.href = '/balancer.html';         

	        },
	        error: function(jqXHR, textStatus, errorThrown) {
	           console.log(textStatus, errorThrown);
	        }


	    });
	};
</script>