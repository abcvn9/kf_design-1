<div class="loginForm">
	<div class="card">
		<div class="card-body">
			<?php echo form_open(store_url("login.html"));?>
			  <div class="form-group">
			    <label for="exampleInputEmail1">Email address</label>
			    <input type="email" name="email" class="form-control" placeholder="Enter email" required="">
			    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
			  </div>
			  <div class="form-group">
			    <label for="exampleInputPassword1">Password</label>
			    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password" required="">
			  </div>
			  <?php echo @$captcha; ?>
			  <div class="row">
			  	<div class="col">
			  		<label class="form-check-label" for="exampleCheck1"><input type="checkbox" name="remember"> Remember</label>
			  	</div>

			  	<div class="col text-right">
			  		<a class="form-check-label" for="exampleCheck1" href="<?php echo store_url("register.html");?>">Register</a>
			  	</div>

			  	
			  </div>
			 <hr>
			  <button type="submit" class="btn btn-primary">Login</button>
			</form>
		</div>
	</div>
</div>

<style type="text/css">
	.loginForm{
		margin: auto;
		width: 350px;
	}
</style>
<script type="text/javascript">
	$("main").height($(window).height());
	$(".loginForm").css({"margin-top" : ($(window).height() - $(".loginForm").height()) / 2});
</script>

