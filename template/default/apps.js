
var pathname = window.location.pathname; // Returns path only
var url      = window.location.href;     // Returns full URL
var segments = pathname.split( '/' );
var action = segments[1];
var base = segments[2];
var pair = segments[3];

jQuery(document).ready(function(){
	/*
		// Grab the current date
		var currentDate = new Date();
		// Set some date in the future. In this case, it's always Jan 1
		var futureDate  = new Date('2018-10-29 00:00:00');//Tue Jan 01 2019 00:00:00 GMT+0700 (+07)

		// Calculate the difference in seconds between the future and current date
		var diff = futureDate.getTime() / 1000 - currentDate.getTime() / 1000;
		var clock = $('.timer-wapper').FlipClock(diff,{
			clockFace: 'DailyCounter',
			countdown: true
		});
	*/
		// console.log(action);
		/*
			Socket manager
		*/
		
		window.onerror = function(msg, url, linenumber)
		{
			//alert('Error message: '+msg+'\nURL: '+url+'\nLine Number: '+linenumber);
			return true;
		};

		var onMenuMarket = function()
		{

			superslideMenu = new OSREC.superslide(
			{
				slider: 					document.getElementById('menuContainer'),
				content: 					document.getElementById('maincontent'),
				animation: 					'slideRight',
				duration: 					0.5,
				allowDrag: 					true,
				slideContent: 				true,
				allowContentInteraction:	true,
				closeOnBlur:				false,
				width: 						'10vw',
				height:						'100vh'
			});

			console.log(superslideMenu);

			var p = superslideMenu.open();
			console.log(p);


		};
		$("#marketList").on("click",function(){
			superslideMenu = new OSREC.superslide(
			{
				slider: 					document.getElementById('menuContainer'),
				content: 					document.getElementById('maincontent'),
				animation: 					'slideRight',
				duration: 					0.5,
				allowDrag: 					true,
				slideContent: 				false,
				allowContentInteraction:	true,
				closeOnBlur:				false,
				width: 						'41vw',
				height:						'100vh'
			});

			console.log(superslideMenu);

			var p = superslideMenu.open();
			console.log(p);
		});

		if(pair) $("#HeaderPair").text(pair);
		
			var socket = io.connect('https://demo.kfchange.com:3000',{
	            secure: true // for SSL
	        });

			socket.on('connect', function () {
			    console.log('connected');
			    connectStatus(true);
			    socket.on('broadcast', function (data) {
			        // console.log(data);
			        //socket.emit("broadcast", data);
			        //alert(data.text);
			        if(data.action == "exchange"){
				        makeBoard(data.updatedata);
				        
				    }

				    if(data.action == "chat"){

			        	$(".chatbox ul").append('<li><b>'+data.uname+'</b> : '+data.text+'</li>');
			        	$(".chatbox").animate({scrollTop: $("#chatbox").get(0).scrollHeight}, 100);
			        }
			        if(data.action == "deposit"){
			        	alertDashboard("Deposit",data.text);
			        }
			        if(data.action == "order"){
			        	alertDashboard("Order",data.text);
			        }
			        if(data.action == "system"){
			        	alertDashboard("Notify Systems",data.text);
			        }
			    });

			    socket.on('disconnect', function () {
			        console.log('disconnected');
			        connectStatus(false);
			    });
			    
			    //$("body").append('<div id="chatbox" class="troll-box"><div class="status"><i class="fas fa-wifi fa-2x"></i></div><ul></ul></div>');
			    //mytask();
			});
		
		/*
		Chart Form
		*/
		$("form#chatForm").submit(function(){
			var inbox = $(this).find("input[type=text]");
			
			$.ajax({
		        url: "/chat.html",
		        type: "post",
		        data: {text : inbox.val()}
		    });
		    inbox.val('');
		    inbox.focus();
		    return false;
		});




		var alertDashboard = function(title,data, type="success"){
			type = (type == "error" ? "danger" : type);

			html = '<div class="alert alert-'+type+' alert-dismissible fade show" role="alert">' +
					  '<strong>'+title+'!</strong> '+data+'.' +
					  '<button type="button" class="close" data-dismiss="alert" aria-label="Close">' +
					    '<span aria-hidden="true">&times;</span>' +
					  '</button>' +
					'</div>';

			$.notify({
					// options
					title : "Test",
					message: 'Hello World' 
				},{
					// settings
					template : html,
					type: 'danger'
				});

		};
		

		var connectStatus = function(text){

			if(text){
				$(".layerSocket .waitconnect").remove();
			}else{
				$(".layerSocket").append('<div class="waitconnect">Wait Connect</div>');
			}
			//$(".layerSocket").append('<div class="waitconnect">Wait Connect</div>');
		};
		

});
