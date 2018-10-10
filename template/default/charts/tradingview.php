<script type="text/javascript" src="<?php echo base_url("/charting_library/charting_library.min.js"); ?>"></script>
<script type="text/javascript" src="<?php echo base_url("/charting_library/udf/dist/polyfills.js"); ?>"></script>
<script type="text/javascript" src="<?php echo base_url("/charting_library/udf/dist/bundle.js"); ?>"></script>

<div id="tv_chart_container" style="margin: 0px; padding-top: 8px;"></div>
<script type="text/javascript">
	function getParameterByName(name) {
		name = name.replace(/[\[]/, "\\[").replace(/[\]]/, "\\]");
		var regex = new RegExp("[\\?&]" + name + "=([^&#]*)"),
			results = regex.exec(location.search);
		return results === null ? "" : decodeURIComponent(results[1].replace(/\+/g, " "));
	}
	TradingView.onready(function()
	{
		var widget = window.tvWidget = new TradingView.widget({
			debug: true, // uncomment this line to see Library errors and warnings in the console
			width: $("#main_chart").width(),
			height: 385,
			fullscreen: false,

			symbol: '<?php echo $base.$pair;?>',
			interval: '120',
			container_id: "tv_chart_container",
			//	BEWARE: no trailing slash is expected in feed URL
			datafeed: new Datafeeds.UDFCompatibleDatafeed("<?php echo base_url("/datafeeds/"); ?>", 10000), // 5s
			library_path: "<?php echo base_url("/charting_library/"); ?>",
			locale: getParameterByName('lang') || "en",
			//enabled_features: ["move_logo_to_main_pane", "study_templates"],
			//disabled_features: ["use_localstorage_for_settings",/*"header_widget",*/"left_toolbar"],
			//enabled_features: ["study_templates"],
			drawings_access: {
				type: 'black',
				tools: [ { name: "Regression Trend" } ]
			},
			theme: getParameterByName('theme'),
			disabled_features: ["save_chart_properties_to_local_storage", /*"header_widget", */ "use_localstorage_for_settings", "study_templates"],
			//enabled_features: [/*"move_logo_to_main_pane", */"study_templates"],
			overrides: {
				"mainSeriesProperties.style": 0,
				"symbolWatermarkProperties.color" : "#944",
				"volumePaneSize": "tiny"
			},
			client_id: 'kfchange.com',
			studies: ["BB@tv-basicstudies", "ConnorsRSI"],
			/*studies_overrides: {
				"volume.volume.color.0": "#00FFFF",
				"volume.volume.color.1": "#0000FF",
				"volume.volume.transparency": 70,
				"volume.volume ma.color": "#FF0000",
				"volume.volume ma.transparency": 30,
				"volume.volume ma.linewidth": 5,
				"volume.show ma": true,
				"bollinger bands.median.color": "#33FF88",
				"bollinger bands.upper.linewidth": 3
			},*/
			favorites: {
				intervals: ["15", "120", "1D"]
			},
			time_frames: [
				{ text: "1m", resolution: "60" },
				{ text: "1w", resolution: "30" },
				{ text: "7d", resolution: "30" },
				{ text: "5d", resolution: "10" },
				{ text: "3d", resolution: "10" },
				{ text: "2d", resolution: "5" },
				{ text: "1d", resolution: "5" }
			],
		});

		widget.onChartReady(function() {
			/*widget.chart().createStudy("Bollinger Bands", false, false, [
					10 + parseInt(Math.random() * 10),
					3 + parseInt(Math.random() * 3)
				], function (guid) {
					console.log(guid);
				}
			);

			widget.chart().createStudy('Stochastic', false, false, [14, 3, 1], null, {
				"%d.color" : "#000000", "%k.color" : "#00FF00"
			});

			widget.chart().createStudy("Moving Average", false, false, [
					10 + parseInt(Math.random() * 10)
				], function (guid) {
					console.log(guid);
				}
			);

			$('#2hours').on("click", function () {
				console.log("Dsad");
			})*/
		});
	});
</script>
