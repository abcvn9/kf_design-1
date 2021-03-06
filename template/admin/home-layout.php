<!doctype html>
<html lang="en-US">
<head>
  <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
  <title>Smart Exchange</title>
  <link rel="shortcut icon" href="<?php echo store_url("favicon.ico");?>">
  <link rel="icon" href="<?php echo store_url("favicon.ico");?>">


  <script type="text/javascript" language="javascript" charset="utf-8" src="<?php echo resource_url("apps.js");?>"></script>
  <link rel="stylesheet" type="text/css" media="all" href="<?php echo template_url("apps.css");?>">
  <!--<script type="text/javascript" language="javascript" charset="utf-8" src="<?php /*echo template_url("apps.js");*/?>"></script>-->
  <link rel="stylesheet" type="text/css" media="all" href="<?php echo resource_url("bootstrap-toggle.css");?>">
  <script type="text/javascript" language="javascript" charset="utf-8" src="<?php echo resource_url("bootstrap-toggle.js");?>"></script>
  
</head>
<body>
<header>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
	  <a class="navbar-brand" href="#">Smart Exchange</a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>

	  <div class="collapse navbar-collapse" id="navbarSupportedContent">
	    <ul class="navbar-nav mr-auto">
	      <li class="nav-item active">
	        <a class="nav-link" href="<?php echo admin_url("");?>">Home <span class="sr-only">(current)</span></a>
	      </li>
	      
	      <li class="nav-item">
	        <a class="nav-link" href="<?php echo admin_url("exchange");?>">Exchange</a>
	      </li>

	      <li class="nav-item">
	        <a class="nav-link" href="<?php echo admin_url("account");?>">Account</a>
	      </li>
		    <li class="nav-item">
			    <a class="nav-link" href="<?php echo admin_url("email");?>">Email Template</a>
		    </li>
	      <li class="nav-item">
	        <a class="nav-link" href="<?php echo admin_url("ann");?>">Coind</a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="<?php echo admin_url("ann/vote");?>">Vote</a>
	      </li>
	      <li class="nav-item dropdown">
	        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	          Report
	        </a>
	        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
	          <a class="dropdown-item" href="<?php echo admin_url("vote");?>">Vote</a>
	          <a class="dropdown-item" href="<?php echo admin_url("coinbase");?>">Con Info</a>
	          <div class="dropdown-divider"></div>
	          <a class="dropdown-item" href="<?php echo admin_url("vote/create");?>">Add Your Coin</a>
	        </div>
	      </li>

	      

	    </ul>
	    
	    <ul class="navbar-nav">
	     
	      <li class="nav-item" style="padding-right: 10px;">
	      	<a href="<?php echo admin_url("settings");?>" class="btn btn-outline-info">Settings</a>
	      </li>
		    <?php
		        if($is_admin){
		        	?>

			        <li class="nav-item" style="padding-right: 10px;">
				        <a href="<?php echo store_url("profile.html");?>" class="btn btn-outline-info">Member Cpanel</a>
			        </li>

			        <?php
		        }
		    ?>
	      <li class="nav-item dropdown">
	        <a class="btn btn-outline-info btn-sm nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	          Account
	        </a>
	        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
	          <a class="dropdown-item" href="<?php echo store_url("account/settings");?>">Settings</a>
	          <a class="dropdown-item" href="<?php echo store_url("account/changepassword");?>">Change Password</a>
	          <div class="dropdown-divider"></div>
	          <a class="dropdown-item" href="<?php echo store_url("account/security");?>">Security</a>
		        <a class="dropdown-item" href="<?php echo store_url("logout.html");?>">Logout</a>
	        </div>
	      </li>
	    </ul>
	  </div>
	</nav>
</header>
	<main ruller="main" class="container-fluid">
		<div class="alert-layout"><?php echo $flash;?></div>
		<?php print_r($content);?>
	</main>
	<footer>
		<div class="container-fluid"></div>
	</footer>
</body>
</html>
