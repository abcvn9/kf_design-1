<div id="coinValible">
	
	<?php 
	  
	  foreach ($data as $key => $value) { 
	  	?>
	  	
	  	<div class="row clear-margin">
	  		<div class="col-lg-1"><i onClick="addFavorites('<?php echo $base;?>','<?php echo $value->symbol;?>');$(this).addClass('fa-red');" style="margin-top:8px;" class="fas fa-star"></i></div>
	  		<div class="col-lg-11">
		  		<a class="row FlexCoid" href="<?php echo store_url("trade/{$base}/{$value->symbol}");?>">
				  		
				  		<div class="col-lg-6 cfx">
				  			<div style="float: left; width: 32px; padding-top: 5px;"><img src="<?php echo $value->icon;?>" style="height:32px; width: 32px;"></div>
				  			<div style="margin-left: 40px;">
				  			<div style="margin-bottom: -8px; display: block;"><?php echo $value->symbol;?></div><span><?php echo $value->name;?></span>
				  			</div>
				  		</div>
				  		<div class="col-lg-3 cfx">0.000000</div>
				  		<div class="col-lg-3 cfx text-right">0.00%</div>
				  
			  	</a>
			  </div>
	  	</div>
		
	  	<?php
	  }	
	?>
</div>