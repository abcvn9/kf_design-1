<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- <base href="https://{$domain}/" /> -->
    <title>Đăng nhập | {shortTitle}</title>
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1">
    <link rel="stylesheet" href="Styles/bootstrap.min.css">
    <link rel="stylesheet" href="Styles/login.css">
</head>

<body>
    <div class="wrapper">
       {include file="common/header.inc.tpl"}
        <main class="main full-content">
            <div class="container-fluid">
                <div class="main-wrap">
                    <div class="main-content">
                        <div class="login-content">
                            <section>
                                <h1 class="page-title text-uppercase">Đăng nhập vào tài khoản của bạn</h1>
                                <div class="row">
                                    <div class="col-md-6 col-sm-6 form-login">
                                        <h2 class="h2">Đăng nhập</h2>
                                        {if $errors} {section name=i loop=$errors}
                                            <div class="alert alert-danger" role="alert">
                                                <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                                <i class="fa fa-exclamation-triangle"></i>&nbsp;{$errors[i]}
                                            </div>
                                            {/section} {/if} {if $messages} {section name=i loop=$messages}
                                            <div class="alert alert-success" role="alert">
                                                <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                                <i class="fa fa-check"></i>&nbsp;{$messages[i]}
                                            </div>
                                        {/section} {/if}
                                        <form name="frmLogin" action="login.html" method="post">
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="fas fa-user"></i></span>
                                                    </div>
                                                    <input type="text" name="xUsername" value="" class="form-control" placeholder="Tên đăng nhập">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="fas fa-lock"></i></span>
                                                    </div>
                                                    <input type="password" name="xPassword" value="" class="form-control" placeholder="Mật khẩu">
                                                </div>
                                            </div>
                                            {if $showcapcha}
                                                {if $recapcha eq 1}
                                                <div class="form-group">
                                                    <script src='https://www.google.com/recaptcha/api.js'></script>
                                                    <div class="g-recaptcha" data-sitekey="6LdsclYUAAAAAC9cHbfa0FdyenwCXE6WSPwvWlaW"></div>
                                                </div>
                                                {else}
                                                <div class="form-group">
                                                    <label for="inputCaptcha" class="control-label">Captcha</label>
                                                    <div class="input-group input-normal">
                                                        <input type="number" name="xCaptcha" value="" class="form-control" placeholder="Enter captcha code" required>
                                                        <div class="input-group-addon text-warning" style="width: 50px;">
                                                            <img src="captcha.php">
                                                        </div>
                                                    </div>
                                                </div>
                                                {/if}
                                            {/if}
                                            {if $code == 'YES'} {if $user.Security.Login == '2FA'}
                                            <div class="form-group">
                                                <label for="inputCode" class="control-label">Google Authenticator :</label>
                                                <div class="input-group input-normal">
                                                    <input type="number" name="xCode" value="" class="form-control">
                                                    <div class="input-group-addon">
                                                        <a href="device.html" data-toggle="tooltip" data-placement="left" title="" data-original-title="Mất Thiết Bị ?"> <i class="fa fa-mobile"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            {/if} {if $user.Security.Login == 'SMS'}
                                            <div class="form-group">
                                                <label for="inputCode" class="control-label">Mã Xác Nhận (SMS) :</label>
                                                <div class="input-group input-normal">
                                                    <input type="number" name="xCode" value="" class="form-control">
                                                    <div class="input-group-addon">
                                                        <a href="javascript:void(0)" class="smsStatus" onclick="smsSend();" data-toggle="tooltip" data-trigger="manual" data-placement="left" title="" data-original-title="Resend SMS">Lấy Mã SMS</a>
                                                    </div>
                                                </div>
                                            </div>
                                            {/if} {/if}
                                            <button class="btn btn-block btn-primary fs-16 text-capitalize mt-4">Đăng nhập</button>
                                            <p class="btn-forgot">
                                                <a href="/forgot.html">Quên mật khẩu</a>
                                            </p>
                                        </form>
                                    </div>
                                    <div class="col-md-6 col-sm-6">
                                        <h2 class="h2">Bạn chưa có tài khoản?</h2>
                                        <p class="text-justify">KFchange.Com là một sàn giao dịch hỗ trợ chuyển đổi VNĐ tới BTC, ETH, ETC, LTC, USDT, ATLCOIN... Tại sàn giao dịch KFchange.Com, bạn có thể đăng ký một tài khoản sau đó sử dụng nó để trao đổi các loại tiền điện tử giữa người mua và người bán. Tất cả các giao dịch trên KFchange.Com diễn ra hoàn toàn tự động và bảo mật thông qua hình thức chuyển khoản ngân hàng. Chúng tôi cam kết sẽ đem lại sự hài lòng cho Quý khách hàng khi sử dụng dịch vụ. Mọi khó khăn hỏi đáp vui lòng liên hệ bộ phận hỗ trợ trực tuyến hoặc tạo câu hỏi tại đây (<a href="http://support.kfchange.com">http://support.kfchange.com</a>)</p>
                                        <a href="" class="btn btn-block btn-primary fs-16 text-capitalize btn-register">Đăng ký</a>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        {include file="common/footer.inc.tpl"}
    </div>
    <script src="Javascripts/jquery-3.1.1.min.js"></script>
    <script src="Javascripts/popper.min.js"></script>
    <script src="Javascripts/bootstrap.js"></script>
    <script src="Javascripts/kfchange.js"></script>
    <script src="Javascripts/price.js"></script>
    <script src="Javascripts/volume.js"></script>
    <!--
    var smsSent = true;
    $('[data-toggle="tooltip"]').tooltip();
    //-->
    </script>
    {if $user.Security.Login == 'SMS'}
    <script type="text/javascript" src="Javascripts/sms.js"></script>
    {/if}
</body>

</html>