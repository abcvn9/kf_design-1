<script type="text/javascript">
	//var sock = new WebSocket('ws://127.0.0.1:8008');
</script>

<div class="container-fluid" id="maincontent" style="padding: 0; min-height: 100vh;">
	
<div class="row">
	<div class="col-lg-7 col-sm-12">

		<div class="shadown-box alert alert-dark alert-dismissible fade show" role="alert">
		  <strong>Notes!</strong> Vote coin list exchange free.
		  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
		    <span aria-hidden="true">&times;</span>
		  </button>
		</div>

		<div class="shadown-box">
			<div class="border-bottom clear-margin">
				<div class="float-left"><img src="<?php echo $info->icon;?>" style="height:45px; width: 45px;"></div>
				<div style="margin-left: 60px;">
					<?php echo $pair;?> / <?php echo $base;?><br>
					<?php echo $info->name;?>
				</div>
			</div>
			<div class="row" style="padding-top: 10px;padding-bottom: 10px;">
				<div class="col-5">
					<h3 class="text-primary" id="lastprice" style="margin-bottom:2px; ">0.00000000</h3>

					24h Change : <span id="change24"></span>

				</div>

				<div class="col-7">
					<div class="row">
						<div class="col-lg-6 border-bottom" style="padding-bottom: 10px;padding-left: 0;">High <span class="float-right" id="high24"></span></div>
						<div class="col-lg-6 border-bottom" style="padding-bottom: 10px;">Volume <span class="float-right" id="volume24"></span></div>

						<div class="col-lg-6" style="padding-left: 0;padding-bottom: 10px;">Low <span class="float-right" id="low24"></span></div>
						<div class="col-lg-6" style="padding-bottom: 10px;">Volume <span class="float-right" id="volume24base"></span></div>

					</div>


				</div>

			</div>

			<div class="border-top bg-light clear-margin" style="line-height: 40px;">
				<strong>Bittrex</strong> : 0.0000000 - <strong>Poloniex</strong> : 0.0000000
			</div>

			<div class="border-bottom border-top bg-light clear-margin">
				<div class="row">
					<div class="col-lg-6 col-md-12">
						<div class="btn-group toolbar" role="group">
						    <button id="btnGroupDrop1" type="button" class="btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						      Candlesticks
						    </button>
						    <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
						      <a class="dropdown-item" href="#">Candlesticks</a>
						      <a class="dropdown-item" href="#">Tradingview</a>
						    </div>

						</div>

					</div>
					<div class="col-lg-6 col-md-12 text-right">
						<div class="btn-group btn-group-sm toolbar" role="group" aria-label="Button group with nested dropdown">


							<div class="btn-group" role="group">
							    <button id="btnGroupDrop1" type="button" class="btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							      Time Line
							    </button>
							    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="btnGroupDrop1">
							      <a class="dropdown-item" href="#">1m</a>
							      <a class="dropdown-item" href="#">5m</a>
							      <a class="dropdown-item" href="#">15m</a>
							      <a class="dropdown-item" href="#">30m</a>
							      <a class="dropdown-item" href="#">45m</a>
							      <a class="dropdown-item" href="#">1h</a>
							      <a class="dropdown-item" href="#">2h</a>
							      <a class="dropdown-item" href="#">3h</a>
							      <a class="dropdown-item" href="#">4h</a>
							      <a class="dropdown-item" href="#">1 day</a>
							      <a class="dropdown-item" href="#">1 week</a>
							      <a class="dropdown-item" href="#">1 month</a>
							    </div>
							</div>

							<div class="btn-group" role="group">
							    <button id="btnGroupDrop1" type="button" class="btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							      Tools
							    </button>
							    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="btnGroupDrop1">
							      <a class="dropdown-item" href="#">SMA</a>
							      <a class="dropdown-item" href="#">EMA</a>
							      <a class="dropdown-item" href="#">MA</a>
							      <a class="dropdown-item" href="#">Ichimoku</a>
							      <a class="dropdown-item" href="#">RSI</a>
							      <a class="dropdown-item" href="#">MACD</a>
							    </div>
							</div>


						</div>
					</div>
				</div>

			</div>

			<?php include __DIR__."/charts/tradingview.php";?>

			<?php //include __DIR__."/charts/tchart.php";?>

		</div> <!--// Shadown box //-->
		<br>
		<div class="">
			
			<div id="history" class="shadown-box" style="height: 483px;">
				<h5>Trade History</h5>
				<div class="history-task align-items-end history">
					
				</div>
			</div>
		</div>
	</div> <!--// End clol-9 -->
	<div class="col-lg-5 col-sm-5">
		<div class="row">
			<div class="col-6">
				<div class="price-task text-center bg-primary text-white shadown-box">
					<span class="lastPrices">0</span> <span style="font-size: 12px;" class="usdprices"></span>
				</div>
			</div>
			<div class="col-6">
				<div id="marketList" class="text-center bg-info btn-lg btn-marker text-white shadown-box">Markets</div>
				
			</div>
		</div>
		
		
		<br>
		<div class="controller">
			<nav>
			  <div class="nav nav-tabs" id="nav-tab" role="tablist">
			  	
			  	<a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Limit</a>
			    <a class="nav-item nav-link" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Market</a>
			    <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Stop limit</a>
			    
			  </div>
			</nav>
			<div class="tab-content border border-top-0" id="nav-tabContent">
			  	
			  <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
			  		<?php include __DIR__."/forms/limit.php";?>
			  </div>
			</div>
		</div>
		<br>
		<div class="row">
			
			<div class="col-lg-6 col-sm-12">
				<div class="task border shadown-box" style="padding: 0;">
					<h6 style="padding-left: 10px; padding-top: 10px; padding-bottom: 10px; padding-right: 10px;">Buy Orders
						<!--<div class="float-right"><span class="total<?php /*echo $pair;*/?>"></span> <?php /*echo $pair;*/?></div>-->
					</h6>
					
					<div class="row title-box">
						<div class="col">Price</div>
						<div class="col">Volume</div>
						<div class="col text-right">Total</div>
					</div>
					<div class="buy-task bids layerSocket">
					
					</div>
				</div>
			</div>

			<div class="col-lg-6 col-sm-12">
				<div class="task border shadown-box" style="padding: 0;">
					<h6 style="padding-left: 10px; padding-top: 10px; padding-bottom: 10px; padding-right: 10px;">Sell Orders
						<!--<div class="float-right"><span class="total<?php /*echo $base;*/?>"></span> <?php /*echo $base;*/?></div>-->
					</h6>
					<div class="row title-box">
						<div class="col">Price</div>
						<div class="col">Volume</div>
						<div class="col text-right">Total</div>
					</div>
					<div class="sell-task asks layerSocket">
						<div class="dataList" style="top:0;"></div>
					</div>
				</div>
			</div>

		</div>
		<br>
		<div class="border shadown-box" style="padding:30px; min-height: 100px;">
			<h5>Depth</h5>
			<div id="depthchart" style="height: 80px;"></div>
		</div>
	</div>
	
</div>



<div class="row">
	<div class="col-lg-9">
			<br>
			<div id="mytask">
			
			<div class="run-task shadown-box">
				<h5>Open Order</h5>
				<table class="table">
					<thead>
						<th>Date</th>
						<th>Pair</th>
						<th>Type</th>
						<th>Side</th>
						<th>Price</th>
						<th>Amount</th>
						<th>Filled%</th>
						<th>Total</th>
						<th>Trigger Conditions</th>
						<th class="text-right"><a href="#" class="btn btn-outline-info btn-sm">Cancel All</a></th>
					</thead>
					<tbody  class="userTask">
						
					</tbody>
				</table>
			</div>
			<!--//
			<br>
			<h5>My 24h Order History</h5>
			<div class="shadown-box">
				<table class="table">
					<thead>
						<th>Date</th>
						<th>Pair</th>
						<th>Type</th>
						<th>Side</th>
						<th>Price</th>
						<th>Amount</th>
						<th>Filled%</th>
						<th>Total</th>
						<th>Trigger Conditions</th>
						<th class="text-right">Status</th>
					</thead>
					<tbody>
						
					</tbody>
				</table>
			</div>
			//-->
			</div>

			
	</div><!--//End col 8 -->
	<div class="col-lg-3">
		<br>
		<div class="bg-primary" style="text-align: center;  height: 200px;  color: #FFF;"><br><h1>ADS</h1> Add you coin Here</div>
		<br>
		<div class="bg-info" style="text-align: center;  height: 200px;  color: #FFF;"><br><h1>ADS</h1>Add you coin Here</div>
	</div>
</div>
<div id="menuContainer">
	
	<div style="min-width: 460px; margin-left: 42px; height: 100%; top:0; z-index: 1002; position: relative;" class="shadown-box border-left">
		<div class=""><button onclick='superslideMenu.close()' class="btn btn-info btn-sm app-control" style="border:0;">Close</button></div>
		
		<div class="input-group mb-3" style="margin-top: 0;">
			  <div class="input-group-append">
			    <button class="btn btn-info" type="button" onClick="loadCoid('favorites');"><i class="fas fa-star"></i></button>
			  </div>
			  <input type="text" class="form-control" placeholder="Keyword">
			  <div class="input-group-append">
			    <button class="btn btn-info" type="button"><i class="fas fa-search"></i></button>
			  </div>
			</div>
		  	
		
		<?php 
		foreach ($data as $key => $value) {
			?>
			<button type="button" onClick="loadCoid('<?php echo $value;?>');" class="btn btn-coind btn-sm btn-<?php echo ($value == $base ? "" :"outline-");?>info"><?php echo $value;?></button>
			<?php
		}
		//include __DIR__."/forms/listcoind.php";?>
		<div class="row border-top border-bottom clear-margin" style="margin-top: 10px; line-height: 30px;">
			<div class="col-lg-6">Symbol</div>
			<div class="col-lg-3">Prices</div>
			<div class="col-lg-3 text-right">Volume</div>
		</div>
		<div class="CoindGird clear-margin" id="CoindGird"></div>
	</div>
</div>
<script type="text/javascript">
	$(document).ready(function(){
		
		//$("#coinValible").height($("#main_chart").height());
		//$(".task").height(parenHeight);
		$(".sell-task, .buy-task").height(550);
		
		//$(".sell-task").animate({scrollTop: $(".sell-task").get(0).scrollHeight}, 500);
		getDataJson();
		
		loadCoid("<?php echo $base;?>");
		
		
	});
	
	var loadCoid = function(base){
		$("#CoindGird").load("/coind.html?base="+base+"&pair=<?php echo $pair;?>");
	}
	var getDataJson = function(){

			$.getJSON("/api/marketstatus/<?php echo $base;?>/<?php echo $pair;?>", function(data){
				makeBoard(data);
				

			});


		}
	

	var makeBoard = function(data){
				$("#volume24").text(formatNumber(data.sumary.volume,0,2) + " <?php echo $pair;?>");
				$("#volume24base").text(formatNumber(data.sumary.volume * data.sumary.last,0,4) + " <?php echo $base;?>");
				$("#lastprice, .lastPrices").text(formatNumber(data.sumary.last,0,8)+" "+data.base + "/" + data.pair);
				// $(".usdprices").text(formatNumber(data.usdprices * data.sumary.last)+" " + data.pair);

				//console.log(data);

				$("#low24").text(formatNumber(data.sumary.low,0,8));
				$("#high24").text(formatNumber(data.sumary.high,0,8));
				var c24 = "0.00%";
				var contracts_change = parseFloat(((parseFloat(data.sumary.last) - parseFloat(data.sumary.low)) / parseFloat(data.sumary.low))*100).toFixed(2);

				if(formatNumber(data.sumary.last) > formatNumber(data.sumary.low)){
					
					c24 = "<span class='text-green'>+"+contracts_change+"%</span>";
				}

				if(formatNumber(data.sumary.last) < formatNumber(data.sumary.low)){
					c24 = "<span class='text-red'>-"+contracts_change+"%</span>";
				}


				$("#change24").html(c24);

				document.title = (formatNumber(data.sumary.last) > 0 ? formatNumber(data.sumary.last) +" - <?php echo $base;?> <?php echo $pair;?> - " : "")+"KFChange";

				/*
				List Bids
				*/
				var bids_html = '';
				$.each(data.order.bids, function(index, value){
					var dot = 100 - 100/(formatNumber(value[0] * value[1],0,2));
					//dot = (dot > 100 ? 100 : dot);
					bids_html += '<div class="cell"><dd style="width:'+dot+'%;" class="oscbtc"></dd><dd class="showData"><div class="askPrices">'+(new Intl.NumberFormat("en-US", {useGrouping: false, minimumFractionDigits: 2, maximumFractionDigits: 8}).format(value[0]))+'</div><div class="askAmount">'+(new Intl.NumberFormat("en-US", {useGrouping: false, minimumFractionDigits: 0, maximumFractionDigits: 8}).format(value[1]))+'</div><div class="text-right askTotal">'+(new Intl.NumberFormat("en-US", {useGrouping: false, minimumFractionDigits: 2, maximumFractionDigits: 8}).format(value[0] * value[1]))+'</div></dd></div>';
				});
				
				$(".bids").html(bids_html);


				/*
				List asks
				*/
				var asks_html = '';

				$.each(data.order.asks, function(index, value){
					
					var dot = 100 - 100/(formatNumber(value[0] * value[1],0,2));
					//dot = (dot > 100 ? 100 : dot);
					asks_html += '<div class="cell"><dd style="width:'+dot+'%;" class="oscbtc2"></dd><dd class="showData"><div class="askPrices">'+(new Intl.NumberFormat("en-US", {useGrouping: false, minimumFractionDigits: 2, maximumFractionDigits: 8}).format(value[0]))+'</div><div class="askAmount">'+(new Intl.NumberFormat("en-US", {useGrouping: false, minimumFractionDigits: 0, maximumFractionDigits: 8}).format(value[1]))+'</div><div class="text-right askTotal">'+(new Intl.NumberFormat("en-US", {useGrouping: false, minimumFractionDigits: 2, maximumFractionDigits: 8}).format(value[0] * value[1]))+'</div></dd></div>';

				});
				
				$(".asks .dataList").html(asks_html);


				/*
				List History
				*/
				var history_html = '<table class="table">';
				history_html += '<thead><th>Type</th><th>Amount</th><th>Price</th><th class="text-right">Total</th></thead>';
				history_html += '<tbody>';
				$.each(data.history, function(index, value){
					history_html += '<tr class="'+(value.type == "sell" ? "ask-color" : "bid-color")+'"><td>'+value.type+'</td><td>'+value.amount+'</td><td>'+formatNumber(value.price,0,8)+'</td><td class="text-right">'+formatNumber(value.amount * value.price,0,8)+'</td></tr>';
				});
				history_html += '</tbody>';
				history_html += '</table>';
				
				$(".history").html(history_html);


				/*
				Call User Task
				*/
				if(data.users_history){
					var mytask_html = "";
					$.each(data.users_history, function(index, value){
						mytask_html += '<tr id="orderID'+value.id+'">';
						mytask_html += '		<td></td>';
						mytask_html += '		<td>'+value.market+'</td>';
						mytask_html += '		<td></td>';
						mytask_html += '		<td>'+(value.side == 1 ? "Sell" : "Buy")+'</td>';
						mytask_html += '		<td>'+formatNumber(value.price)+'</td>';
						mytask_html += '		<td>'+value.amount+'</td>';
						mytask_html += '		<td>'+value.left+'</td>';
						mytask_html += '		<td>'+formatNumber(value.price * value.amount,0,4)+'</td>';
						mytask_html += '		<td></td>';
						mytask_html += '		<td class="text-right"><a class="btn btn-sm btn-outline-info btnCancel" onClick="cancelOrder('+value.id+',\''+value.market+'\');">Cancel</a></td>';
						mytask_html += '	</tr>'
					});
					$(".userTask").html(mytask_html);
				}
				//alert(data);

				/*
				Balancer
				*/
				$("#balancer_base, #balancerbase").html(formatNumber(data.balancer.base.available,0,4));
				$("#balancer_pair, #balancerpair").html(formatNumber(data.balancer.pair.available,0,8));



				$(".askPrices").on("click",function(){
					var prices = $(this).text();
					$('input[name="prices"]').val(prices);
				});

				$(".askAmount").on("click",function(){
					var amount = $(this).text();
					$('input[name="amount"]').val(amount);
				});

				$(".askTotal").on("click",function(){
					var prices = $(this).parent().parent().find(".askPrices").text();
					$('input[name="prices"]').val(prices);

					var amount = $(this).parent().parent().find(".askAmount").text();
					$('input[name="amount"]').val(amount);

				});
	}

	var formatNumber = function(number,min,max){
		min = (min ? min : 2);
		max = (max ? max : 8);
		return new Intl.NumberFormat("en-US", {useGrouping: false, minimumFractionDigits: min, maximumFractionDigits: max}).format(number);
	}

	var addFavorites = function (base, symbol){
		

		$.ajax({
		    type: "GET",
		    url: "<?php echo store_url("account/favorites");?>",
		    data : {base : base, pair : symbol},
		    success: function(){
		    	
		    }
		  });

	};

	var cancelOrder = function(orderid, symbol){
		
		$.ajax({
		    type: "GET",
		    url: "<?php echo store_url("account/cancelorder");?>/"+orderid+"/"+symbol,
		    
		    success: function(){
		    	$("tr#orderID"+orderid).remove();
		    }
		  });
	};
</script>




<style type="text/css">
	.highcharts-input-group, text.highcharts-credits{
		display: none;
	}
	.highcharts-scrollbar-thumb{
		display: none;
	}
</style>
