<div class="slider text-center">
	List ROL-BTC 2/10/2019
</div>
<div class="border-top border-bottom" style="margin-left: -15px; margin-right: -15px; padding: 30px; background-color: #FFF;">
    <div class="container">
        <div class="row">
            <div class="col">
                <h4>Member</h4>
                <?php echo number_format($member + 50000);?>
            </div>
            <div class="col border-left border-right">
                <h4>Coind Support</h4>
                On Trade : <?php echo number_format($coind);?> | On Testnet : <?php echo number_format($coindtestnet);?>
            </div>
            <div class="col border-right">
                <h4>Airdrop</h4>
                Deposit <b>0.01</b> BTC trader get <b>30 ROL</b> Free
            </div>
            <div class="col">
                <h4>Contact Us</h4>
                rollerdavic@gmail.com
            </div>
        </div>
    </div>
</div>


<div class="marker bg-white clear-margin">
	
<div class="tabs_market border-bottom clear-margin">
	<div class="container">
	<nav class="text-center">

	  <div class="nav nav-tabs"  id="nav-tab" role="tablist" style="padding-left: 40%;">
	    <?php foreach (config_item("coin_base") as $key => $value) { ?>
	    	<a class="nav-item nav-link <?php echo $key == 0 ? "active" : "";?>" id="nav-home-tab" data-toggle="tab" href="#nav-<?php echo $value;?>" role="tab" aria-controls="nav-home" aria-selected="true"><?php echo $value;?></a>
	    <?php } ?>
	    
	   
	  </div>
	</nav>
	</div>
</div>
	<div class="container">
		<div class="tab-content" id="nav-tabContent">
		  <?php foreach (config_item("coin_base") as $key => $value) { ?>
		  	<div class="tab-pane fade show <?php echo $key == 0 ? "active" : "";?>" id="nav-<?php echo $value;?>" role="tabpanel" aria-labelledby="nav-home-tab">
		  		<br>
		  		<h4>Market <?php echo $value;?></h4>
		  		<table class="table">
		  			<thead>
		  				<th>Symbol</th>
		  				<th>Last Prices</th>
		  				<th>Low 24h</th>
		  				<th>Hight 24h</th>
		  				<th>Volume 24h</th>
		  				<th class="text-right">Change 24h</th>
		  			</thead>
		  			<tbody>
		  				<tr>
		  					<td></td>
		  					<td></td>
		  					<td></td>
		  					<td></td>
		  					<td></td>
		  					<td></td>
		  				</tr>
		  			</tbody>
		  		</table>
		  		<br>
		  	</div>
		  <?php } ?>
		</div>
	</div>
</div>
