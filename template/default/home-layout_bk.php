<!doctype html>
<html lang="en-US">
<head>
  <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
  <title>KFChange Trading Platform</title>
  	<meta name="msapplication-TileColor" content="#da532c">
    <meta name="msapplication-config" content="<?php echo template_url("browserconfig.xml");?>">
    <meta name="theme-color" content="#ffffff">
    
    <meta name="twitter:url" content="<?php echo store_url();?>">
    <meta name="twitter:title" content="Blockchain Assets Trading Platform">
    <meta name="twitter:description" content="The first 300K registered members will be free of trading fees in the first year. With each member invited, you will receive an additional one month free trading fee.">
    <meta name="twitter:image" content="/images/logo.png">
    <meta name="twitter:creator" content="aiodex">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@smartexchange">

    <meta property="og:title" content="Blockchain Assets Trading Platform">
    <meta property="og:image" content="/images/logo.png">
    <meta property="og:description" content="The first 300K registered members will be free of trading fees in the first year. With each member invited, you will receive an additional one month free trading fee.">
    <meta property="article:author" content="smartexchange">
    <meta property="og:url" content="<?php echo store_url();?>">
    <meta property="og:type" content="article">
    <meta property="article:publisher" content="https://www.facebook.com/smartexchange">
    <meta property="og:site_name" content="aiodex.com">
    
	<meta charset="utf-8" content="<?php echo $this->security->get_csrf_hash(); ?>" name="<?php echo $this->security->get_csrf_token_name(); ?>">
	<link rel="shortcut icon" href="<?php echo store_url("favicon.ico");?>">
	<link rel="icon" href="<?php echo store_url("favicon.ico");?>">

	<script>
		var socket_url = "<?php echo $_config['url_client_socket']; ?>";
	</script>
	<script type="text/javascript" language="javascript" charset="utf-8" src="<?php echo resource_url("apps.js");?>"></script>
	<link rel="stylesheet" type="text/css" media="all" href="<?php echo template_url("css/bootstrap.css");?>">
	<link rel="stylesheet" type="text/css" media="all" href="<?php echo template_url("css/market.css");?>">
	<script type="text/javascript" language="javascript" charset="utf-8" src="<?php echo template_url("apps.js");?>"></script>
	<script type="text/javascript" language="javascript" charset="utf-8" src="<?php echo template_url("slider.js");?>"></script>
  
  
	<script type="text/javascript" language="javascript" charset="utf-8" src="<?php echo resource_url("bootstrap-notify.js");?>"></script>
	<script type="text/javascript" language="javascript" charset="utf-8" src="<?php echo resource_url("bootstrap-toggle.js");?>"></script>

	<script src='//cdnjs.cloudflare.com/ajax/libs/socket.io/1.7.4/socket.io.min.js'></script>

	<!--<meta name="google-site-verification" content="M329jGz1izszNrlin_lnP_ssu8VrX0rRvwve1L8sVhk" />-->
	<link rel="stylesheet" href="<?php echo resource_url("icons/css/all.css");?>" crossorigin="anonymous">

</head>
<body>
<header>

	<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
	  <a class="navbar-brand" href="#"><img src="/template/default/images/logo.png" alt="kfchange.com">KFCHANGE</a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>

	  <div class="collapse navbar-collapse" id="navbarSupportedContent">
	    <ul class="navbar-nav mr-auto">
	      <li class="nav-item active">
	        <a class="nav-link" href="<?php echo store_url("");?>"><?php echo lang('home'); ?> <span class="sr-only">(current)</span></a>
	      </li>
	      
	      <li class="nav-item">
	        <a class="nav-link" href="<?php echo store_url("trade");?>">Exchange</a>
	      </li>

	      <li class="nav-item">
	        <a class="nav-link" href="<?php echo store_url("profile.html");?>">Account</a>
	      </li>

	      <li class="nav-item">
	        <a class="nav-link" href="<?php echo store_url("vote.html");?>">Vote</a>
	      </li>

	      <li class="nav-item">
	        <a class="nav-link" href="<?php echo store_url("addcoind.html");?>">Add Your Coin</a>
	      </li>

	      
	      

	    </ul>
	    
	    <ul class="navbar-nav">
	      <li class="nav-item" id="connect"><a></a></li>
	      <?php if($is_login){?>
	      <li class="nav-item nav-balancer">
	      	Balancer : <span id="balancerbase">0.0</span> BTC<br>
	      	Balancer : <span id="balancerpair">0.0</span> <span id="HeaderPair"></span>
	      </li>

		      <?php
		      if($is_admin){
			      ?>
			      <li class="nav-item nav-balancer">
				      <a class="btn btn-outline-info btn-sm nav-link" href="<?php echo admin_url("dashboard");?>">Admin Cpanel</a>
			      </li>
			      <?php
		      }
		      ?>

	      <li class="nav-item dropdown">
	        <a class="btn btn-outline-info btn-sm nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	          Account
	        </a>
	        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
	          <a class="dropdown-item" href="<?php echo store_url("profile.html");?>">Settings</a>
	          <a class="dropdown-item" href="<?php echo store_url("password.html");?>">Change Password</a>
	          <div class="dropdown-divider"></div>
	          <a class="dropdown-item" href="<?php echo store_url("authentication.html");?>">Security</a>
	          <a class="dropdown-item" href="<?php echo store_url("logout.html");?>">Logout</a>
	        </div>
	      </li>
	      <?php }else{?>
	      	<li class="nav-item nav-balancer">
	      		<a class="btn btn-outline-info btn-sm nav-link" href="<?php echo store_url("register.html");?>">Register</a>
	      </li>
		      <li class="nav-item">
			      <a class="btn btn-outline-info btn-sm nav-link" href="<?php echo store_url("login.html");?>">Login</a>
		      </li>
	      <?php } ?>
	    </ul>
	  </div>
	</nav>
</header>
<main class="container-fluid" ruller="main">
	<div class="alert-layout"><?php echo $flash;?></div>
	<?php print_r($content);?>
</main>

	<footer class="border-top">
		<div class="container">
			<div class="row">
				<div class="col">
					<h5>Information</h5>
					<ul>
						<li><a>Community</a></li>
						<li><a>Team Development</a></li>
					</ul>
				</div>
				<div class="col">
					<h5>Support</h5>
					<ul>
						<li><a href="<?php echo store_url("addcoind.html");?>">Coin Listing</a></li>
						<li><a href="https://support.kfchange.com" target="_bank">Support 24/7</a></li>
					</ul>
				</div>
				<div class="col">
					<h5>Development</h5>
					<ul>
						<li><a>API</a></li>
						<li><a>Document</a></li>
					</ul>
				</div>
				<div class="col">
					<h5>Social</h5>
					<ul class="w-50 float-left">
						<li><a>Facebook</a></li>
						<li><a>Discord</a></li>
					</ul>
					<ul class="w-50 float-right">
						<li><a>Telegram</a></li>
						<li><a>Discord</a></li>
					</ul>
				</div>
				
			</div>
			
		</div>
		<div class="text-center bg-primary text-white" style="margin-top:30px; padding-top: 30px; padding-bottom: 30px;">
				(C) 2018 KFChange.com Inc. All Rights Reserved <br>
				All trading products offered through KFchange.com should be considered HIGH RISK.

			<br>Language: <a href="<?php echo base_url('/language/english'); ?>">English</a>  <a href="<?php echo base_url('/language/vietnam'); ?>">Vietnam</a>
			<br>Current lang is: <?php echo lang('lang'); ?>
		</div>
	</footer>
</body>
</html>
