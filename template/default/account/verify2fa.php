<div class="loginForm">
	<div class="card">
		<div class="card-body">
			<?php echo form_open(store_url("verify2fa.html"));?>
			<input type="hidden" name="verify" value="login">
			<div class="form-group">
				<label for="code">2FA Code</label>
				<input id="code" type="text" name="2fa" class="form-control" placeholder="Enter your code" required="required">
			</div>
			<div class="row">
				<div class="col">
					<a class="form-check-label" href="<?php echo store_url("logout.html");?>">Cancel!</a>
				</div>

				<div class="col text-right">
					<a class="form-check-label" for="exampleCheck1" href="https://support.kfchange.com/" target="_blank">Lost device!</a>
				</div>

			</div><hr>
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

