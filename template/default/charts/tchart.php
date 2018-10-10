<script src="<?php echo base_url("tchart/bower_components/d3/d3.js");?>"></script>
<script src="<?php echo base_url("tchart/bower_components/techan/dist/techan.js");?>"></script>

<script src="<?php echo base_url("tchart/graphic.js");?>"></script>
<link rel="stylesheet" type="text/css" href="<?php echo base_url("tchart/style.css");?>">


<!--//-->
<div class="chart layerSocket" id="main_chart">Loadding chart..</div>
<script type="text/javascript">
	$("#main_chart").kline({
		width:$("#main_chart").width(),
		url:"<?php echo base_url("/datafeeds/kline");?>",
	});
</script>
