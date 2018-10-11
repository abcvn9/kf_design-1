<head>
  <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
  <title>KFChange Trading Platform</title>
  	<meta name="msapplication-TileColor" content="#da532c">
    <meta name="msapplication-config" content="<?php echo template_url("browserconfig.xml");?>">
    <meta name="theme-color" content="#ffffff">
    
    <meta name="twitter:url" content="<?php echo store_url();?>">
    <meta name="twitter:title" content="Blockchain Assets Trading Platform">
    <meta name="twitter:description" content="The first 300K registered members will be free of trading fees in the first year. With each member invited, you will receive an additional one month free trading fee.">
    <meta name="twitter:image" content="<?php echo template_url("images/logo.png");?>">
    <meta name="twitter:creator" content="aiodex">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@smartexchange">

    <meta property="og:title" content="Blockchain Assets Trading Platform">
    <meta property="og:image" content="<?php echo template_url("images/logo.png");?>">
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
	<link rel="stylesheet" type="text/css" media="all" href="<?php echo template_url("bootstrap.css");?>">
	<link rel="stylesheet" type="text/css" media="all" href="<?php echo template_url("apps.css");?>">
	<link rel="stylesheet" type="text/css" media="all" href="<?php echo resource_url("bootstrap-toggle.css");?>">
	<script type="text/javascript" language="javascript" charset="utf-8" src="<?php echo template_url("apps.js");?>"></script>
	<script type="text/javascript" language="javascript" charset="utf-8" src="<?php echo template_url("slider.js");?>"></script>
  
  
	<script type="text/javascript" language="javascript" charset="utf-8" src="<?php echo resource_url("bootstrap-notify.js");?>"></script>
	<script type="text/javascript" language="javascript" charset="utf-8" src="<?php echo resource_url("bootstrap-toggle.js");?>"></script>

	<script src='//cdnjs.cloudflare.com/ajax/libs/socket.io/1.7.4/socket.io.min.js'></script>

	<!--<meta name="google-site-verification" content="M329jGz1izszNrlin_lnP_ssu8VrX0rRvwve1L8sVhk" />-->
	<link rel="stylesheet" href="<?php echo resource_url("icons/css/all.css");?>" crossorigin="anonymous">
	<script type="text/javascript" language="javascript" charset="utf-8" src="<?php echo template_url("js/common.js");?>"></script>

</head>
<body>
	<div class="wrapper">
        <header class="header">
        	<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-primary">
			  <a class="navbar-brand" href="/"><img src="/template/default/images/logo.png" alt="kfchange.com"></a>
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
						      <a class="btn btn-outline-info btn-sm nav-link" href="<?php echo admin_url("dashboard");?>"><i class="fas fa-tachometer-alt"></i> Admin Cpanel</a>
					      </li>
					      <?php
				      }
				      ?>

			      <li class="nav-item dropdown">
			        <a class="btn btn-outline-info btn-sm nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			          <i class="fas fa-users"></i> Account
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
			      		<a class="btn btn-outline-info btn-sm nav-link" href="<?php echo store_url("register.html");?>"><i class="fas fa-users"></i> Register</a>
			      </li>
				      <li class="nav-item">
					      <a class="btn btn-outline-info btn-sm nav-link" href="<?php echo store_url("login.html");?>"><i class="fas fa-unlock"></i> Login</a>
				      </li>
			      <?php } ?>
			    </ul>
			  </div>
			</nav>
        </header>
        <main class="main" ruller="main">
			<div class="alert-layout"><?php echo $flash;?></div>
			<?php print_r($content);?>
		</main>
        <footer class="footer">
            <div class="footer-top">
                <div class="container-fluid">
                    <div class="d-flex flex-wrap">
                        <div>
                            <nav class="footer-memu">
                                <ul>
                                	<li>
							        	<a href="/document/privacypolicy.html">Privacy Policy<span class="sr-only">(current)</span></a>
							      	</li>
								      
								    <li>
								        <a href="/document">Document</a>
								    </li>
								    <li>
								        <a href="document/apipublic.html">Public API</a>
								    </li>
								     <li>
								        <a href="document/tradeguide.html">Trade Guide</a>
								    </li>

								    <li>
								        <a href="http://support.kfchange.com">Support 24/7</a>
								    </li>

								    <li>
								        <a href="vote.html">Fee</a>
								    </li>


                                </ul>
                            </nav>
                        </div>
                        <div class="group-button">
                            <button class="btn-theme" data-theme="dark-theme" data-show="default" tite="Switch to dark theme"><i class="far fa-moon"></i></button>
                            <ul class="social-list">
                                <li><a href="https://t.me/kfcoin" target="_blank"><i class="fab fa-telegram"></i></a></li>
                                <li><a href="https://www.facebook.com/kfchangecom/"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="https://twitter.com/kfchange"><i class="fab fa-twitter"></i></a></li>
                            </ul>
                            <div class="dropdown langauge">
							  <button class="btn dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							    <i class="fas fa-globe-asia"></i> <?php echo lang('lang');?>
							  </button>
							  <div class="dropdown-menu">
							    <a class="dropdown-item" href="<?php echo base_url('/language/vietnam'); ?>">Việt Nam</a>
							    <a class="dropdown-item" href="<?php echo base_url('/language/english'); ?>">English</a>
							    <a class="dropdown-item" href="<?php echo base_url('/language/switzerland'); ?>">Switzerland	</a>
							  </div>
							</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="container-fluid">
                    <div class="footer-bottom-wrap">
                        <div class="copyright">&copy; 2018 KFChange.com Inc. All Rights Reserved</div>
                        <div class="date">21-09-2018 18:37:48</div>
                        <div class="btctm-top">
                            <div> 24h Vol:</div>
                            <div><span class="volumeBTC">14.89</span>BTC</div>
                            <div><span class="volumeETH">540.77</span>ETH</div>
                            <div><span class="volumeVND">5,533,003,750</span>VND</div>
                            <div><span class="volumeKRW">0.00</span>KRW</div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>	
</body>
</html>
