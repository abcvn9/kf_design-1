
<div id="menuleft">
	<div class="card">
		<div class="card-header">
			<div style="width: 60px; line-height: 60px; text-align: center; background-color: #FFF; height: 60px; border:1px solid #ddd; margin-top: 5px; margin:auto; border-radius: 100px;  "><i class="fas fa-users fa-2x"></i></div>
		</div>
		<div class="card-body">
			
			<div >
				ID : <?php echo $this->account_model->get_login_id();?><br>
				Status : Online<br>
				Last Login : 12/12/2012
			</div>
		</div>
	</div>
	<div class="card" style="margin-top: 15px;">
		<div class="card-body">
			

			<ul class="user-menu">
			  <li><a href="<?php echo store_url("profile.html");?>">Personal Information <i class="fas fa-address-card"></i></a></li>
			  
			  
			  <li><a href="<?php echo store_url("referrals.html");?>">Referrals <i class="fas fa-link"></i></a></li>
			  
			  <li><a href="<?php echo store_url("history.html");?>">Login History <i class="fas fa-history"></i></a></li>
			  <li><a href="<?php echo store_url("api.html");?>">Api Author <i class="fas fa-bezier-curve"></i></a></li>
			  <li><a href="<?php echo store_url("account/notifications");?>">Notifications <i class="fas fa-bullhorn"></i></a></li>
			  <li>Security</li>
			  <li><a href="<?php echo store_url("authentication.html");?>">Authentication <i class="fas fa-lock"></i></a></li>
			  <li><a href="<?php echo store_url("password.html");?>">Change Password <i class="fas fa-unlock"></i></a></li>
			  <li>Trader</li>
			  <li><a href="<?php echo store_url("balancer.html");?>">Balancer <i class="fas fa-wallet"></i></a></li>
			 
			  
			  
			  <li><a href="<?php echo store_url("account/ordermanager");?>">Order Management <i class="fas fa-chart-bar"></i></a></li>
			  
			  <li><a href="<?php echo store_url("account/orderhistory");?>">Orders History <i class="fas fa-history"></i></a></li>
			  <li>Master</li>
			  <li><a href="<?php echo store_url("account/coindmaster");?>">Coind Master <i class="fas fa-bitcoin"></i></a></li>

			  
			</ul>
		</div>
	</div>
</div>
