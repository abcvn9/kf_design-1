<section class="login-content">
	<h1 class="page-title text-uppercase">Đăng nhập vào tài khoản của bạn</h1>
	<div class="row">
		<div class="col-md-6 col-sm-6">
			<h2 class="h2">Đăng nhập</h2>
			<div class="loginForm">
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
				  		<a class="form-check-label" for="exampleCheck1" href="/forget.html">Forget Password</a>
				  	</div>
				  	<!-- <div class="col text-right">
				  		<a class="form-check-label" for="exampleCheck1" href="<?php echo store_url("register.html");?>">Register</a>
				  	</div> -->
				  </div>
				  <button type="submit" class="btn btn-block btn-primary mt-2">Login</button>
				</form>
			</div>
		</div>
		<div class="col-md-6 col-sm-6">
            <h2 class="h2">Bạn chưa có tài khoản?</h2>
            <p>KFchange.Com là một sàn giao dịch hỗ trợ chuyển đổi VNĐ tới BTC, ETH, ETC, LTC, USDT, ATLCOIN... Tất cả các giao dịch trên KFchange.Com diễn ra hoàn toàn tự động. Chúng tôi cam kết sẽ đem lại sự hài lòng cho Quý khách hàng khi sử dụng dịch vụ. Mọi khó khăn hỏi đáp vui lòng liên hệ bộ phận hỗ trợ trực tuyến hoặc tạo câu hỏi tại đây (<a href="http://support.kfchange.com">http://support.kfchange.com</a>)</p>
            <a href="/register.html" class="btn btn-block btn-primary fs-16 text-capitalize btn-register">Đăng ký</a>
        </div>
	</div>
	<div class="mt-3 text-center"><a class="btn bg-transparent" href="/"><i class="fas fa-home"></i> Back to home</a></div>
</div>
<script type="text/javascript">
	// $("main").height($(window).height());
	// $(".loginForm").css({"margin-top" : ($(window).height() - $(".loginForm").height()) / 2});
	function _checkPageHeight() {
        var winHeight = $(window).height();
        var mainHeight = $('.main').outerHeight(true);
        var mainContentHeight = 'auto';
        if(mainHeight>winHeight){
            $('.main').removeAttr('style').removeClass('d-flex align-items-center');
        }else{
            $('.main').css({'height':winHeight+'px'}).addClass('d-flex align-items-center');
        }

    }
    $(window).on('load resize', function() {
        _checkPageHeight();
    });
</script>
<style type="text/css">
	body {
	    background: url(/template/default/images/img-bg-1.jpg) no-repeat center center;
	    background-size: cover;
	}
</style>
