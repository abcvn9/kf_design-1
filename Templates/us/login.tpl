<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <base href="https://{$domain}/" />
    <title>Login | {shortTitle}</title>
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
                                <h1 class="page-title text-uppercase">Sign in to your account</h1>
                                <div class="row">
                                    <div class="col-md-6 col-sm-6 form-login">
                                        <h2 class="h2">Sign in</h2>
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
                                                    <input type="text" name="xUsername" value="" class="form-control" placeholder="Username">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="fas fa-lock"></i></span>
                                                    </div>
                                                    <input type="password" name="xPassword" value="" class="form-control" placeholder="Password">
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
                                                        <a href="device.html" data-toggle="tooltip" data-placement="left" title="" data-original-title="Equipment Loss?"> <i class="fa fa-mobile"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            {/if} {if $user.Security.Login == 'SMS'}
                                            <div class="form-group">
                                                <label for="inputCode" class="control-label">Verification (SMS) :</label>
                                                <div class="input-group input-normal">
                                                    <input type="number" name="xCode" value="" class="form-control">
                                                    <div class="input-group-addon">
                                                        <a href="javascript:void(0)" class="smsStatus" onclick="smsSend();" data-toggle="tooltip" data-trigger="manual" data-placement="left" title="" data-original-title="Resend SMS">Get SMS Code</a>
                                                    </div>
                                                </div>
                                            </div>
                                            {/if} {/if}
                                            <button class="btn btn-block btn-primary fs-16 text-capitalize mt-4">Sign in</button>
                                            <p class="btn-forgot">
                                                <a href="/forgot.html">Forgot password</a>
                                            </p>
                                        </form>
                                    </div>
                                    <div class="col-md-6 col-sm-6">
                                        <h2 class="h2">Have and account yet?</h2>
                                        <p class="text-justify">KFchange.Com is a trading platform supporting VND conversion to BTC, ETH, ETC, LTC, USDT, ATLCOIN ... At KFchange.Com, All transactions on KFchange.Com are fully automatic and secure via bank transfer. We are committed to bring satisfaction to customers when using the service. If you have any questions, please contact our online support or create a question here (<a href="http://support.kfchange.com">http://support.kfchange.com</a>)</p>
                                        <a href="" class="btn btn-block btn-primary fs-16 text-capitalize btn-register">Regiser</a>
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
    <script type="text/javascript">
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