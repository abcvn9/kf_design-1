<div class="row">
	<div class="col border-right" style="padding-right:15px; ">
		<h5>Buy <div class="float-right" style="font-size: 12px;">
			<i class="ti-wallet"></i>You have <span id="balancer_base"></span> <?php echo $base;?>
		</div></h5>
	
	  
	  <form action="<?php echo store_url("order.html");?>" mthod="POST" id="formAskLimit">
	  <input type="hidden" name="base" value="<?php echo $base;?>">
	  <input type="hidden" name="symbol" value="<?php echo $pair;?>">
	  <input type="hidden" name="type" value="ask">

	  <div class="form-group row">
	    <label for="staticEmail" class="col-sm-4 col-form-label col-form-label-sm">Amount</label>
	    <div class="col-sm-8">
	      <input type="text" class="form-control form-control-sm" name="amount" value="0.0" required="">
	    </div>
	  </div>
	  <div class="form-group row">
	    <label for="inputPassword" class="col-sm-4 col-form-label col-form-label-sm">Prices</label>
	    <div class="col-sm-8">
	      
	      	<div class="input-group input-group-sm">
			  <input type="text" class="form-control form-control-sm" name="prices" placeholder="Prices" required="">
			  <div class="input-group-append" id="button-addon4">
			    <button class="btn btn-outline-secondary" type="button">-</button>
			    <button class="btn btn-outline-secondary" type="button">+</button>
			  </div>
			</div>
	    </div>
	  </div>

	  <div class="form-group">
	   
	    <input type="range" min="1" max="100" value="50" class="form-control-range" id="formControlRange">
	  </div>

	  <div class="form-group row">
	    <label for="inputPassword" class="col-sm-4 col-form-label col-form-label-sm">Total</label>
	    <div class="col-sm-8">
	      <input type="text" readonly="" name="total" class="form-control form-control-sm" placeholder="0.00">
	    </div>
	  </div>
	  <?php if($is_login){ ?>
	  		 <button class="btn btn-block btn-outline-info btnBuy" type="submit">Buy</button>
	  <?php }else{ ?>

			<a class="btn btn-block btn-outline-info btnSell" href="<?php echo store_url("access/login");?>"><b>Login</b> & Buy <?php echo $pair;?></a>
		<?php } ?>
	 
	</form>
	</div>
	<div class="col" style="padding-left:15px; ">
		<h5>Sell <div class="float-right" style="font-size: 12px;">
			<i class="ti-wallet"></i>You have <span id="balancer_pair"></span> <?php echo $pair;?>
		</div></h5>
	  
	  <form action="<?php echo store_url("order.html");?>" id="formBidLimit">
	  <input type="hidden" name="base" value="<?php echo $base;?>">
	  <input type="hidden" name="symbol" value="<?php echo $pair;?>">
	  <input type="hidden" name="type" value="bid">

	  <div class="form-group row">
	    <label for="staticEmail" class="col-sm-4 col-form-label col-form-label-sm">Amount</label>
	    <div class="col-sm-8">
	      <input type="text" class="form-control form-control-sm" name="amount" id="staticEmail" value="0.0">
	    </div>
	  </div>
	  <div class="form-group row">
	    <label for="inputPassword" class="col-sm-4 col-form-label col-form-label-sm">Prices</label>
	    <div class="col-sm-8">
	      	<div class="input-group input-group-sm">
			  <input type="text" class="form-control form-control-sm" name="prices" placeholder="Prices">
			  <div class="input-group-append" id="button-addon4">
			    <button class="btn btn-outline-secondary" type="button">-</button>
			    <button class="btn btn-outline-secondary" type="button">+</button>
			  </div>
			</div>
	    </div>
	  </div>

	  <div class="form-group">
	   
	    <input type="range" class="form-control-range" id="formControlRange">
	  </div>

	  <div class="form-group row">
	    <label for="inputPassword" class="col-sm-4 col-form-label col-form-label-sm">Total</label>
	    <div class="col-sm-8">
	      <input type="text" name="total" readonly="" class="form-control form-control-sm" placeholder="0.00">
	    </div>
	  </div>
	  	<?php if($is_login){ ?>
	  		<button class="btn btn-block btn-outline-primary btnSell" type="submit">Sell</button>
		<?php }else{ ?>
			<a class="btn btn-block btn-outline-info btnSell"  href="<?php echo store_url("access/login");?>"><b>Login</b>Sell <?php echo $pair;?></a>
		<?php } ?>
	</form>
	</div>

</div>
<br>
<div class="text-center">Using ROLX 0.01% fee VIP <b>Setup</b></div>

<script type="text/javascript">
	jQuery(document).ready(function(){
		var _token = $('[name="<?php echo $this->security->get_csrf_token_name(); ?>"]').attr("content");
		if(!_token){
			_token = $('[name="<?php echo $this->security->get_csrf_token_name(); ?>"]').attr("content");
		}
		var token = '&<?php echo $this->security->get_csrf_token_name(); ?>='+_token;
		
		$("form#formAskLimit").submit(function(){
			var form = $(this);
		    var url = form.attr('action');
		    var amount = $(this).find('[name=amount]').val();
		    var prices = $(this).find('[name=prices]').val();

		    var balancer = parseFloat($("#balancer_base").text()).toFixed(4);
		    if(amount < 0.001){
		    	alert("Amount Small");
		    	return false;
		    }

		    if(balancer == 0 || balancer < amount * prices){
		    	alert("Balancer Small, Pls Deposit");
		    	return false;
		    }


		    jQuery.ajax({
		           type: "POST",
		           url: url,
		           data: form.serialize()+token, // serializes the form's elements.
		          
		           success: function(data)
		           {
		           	   _token = data;
		               console.log(data);
		           },
		           error: function(jqXHR, textStatus, errorThrown) {
			           console.log(textStatus, errorThrown);
			        }	
	         });
		    //getDataJson();
		    return false;
		});

		
		$("form#formBidLimit").submit(function(){
			var form = $(this);
		    var url = form.attr('action');
		    var amount = $(this).find('[name=amount]').val();
		    var prices = $(this).find('[name=prices]').val();

		    var balancer = parseFloat($("#balancer_pair").text()).toFixed(4);
		    if(amount < 0.001){
		    	alert("Amount Small");
		    	return false;
		    }

		    if(balancer == 0 || balancer < amount){
		    	alert("Balancer Small, Pls Deposit");
		    	return false;
		    }


		    jQuery.ajax({
		           type: "POST",
		           url: url,
		           data: form.serialize()+token, // serializes the form's elements.
		          
		           success: function(data)
		           {
		           	   _token = data;
		               console.log(data);
		           },
		           error: function(jqXHR, textStatus, errorThrown) {
			           console.log(textStatus, errorThrown);
			        }	
	         });
		    //getDataJson();
		    return false;
		});

		$("form#formBuyLimit #formControlRange").on("input", function(){

		});

		$("form#formBuyLimit input[name=amount], form#formBuyLimit input[name=prices]").on("input", function(){
			call_total($("form#formBuyLimit input[name=amount]").val(),$("form#formBuyLimit input[name=prices]").val(), $("form#formBuyLimit input[name=total]"), "buy");
		});

		function call_total(amount, prices, target, type){
			var call = amount * prices;
			target.val(call);
		}
	});
</script>
