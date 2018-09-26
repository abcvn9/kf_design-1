<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- <base href="https://{$domain}/" /> -->
    <title>Đăng ký | {shortTitle}</title>
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1">
    <link rel="stylesheet" href="Styles/bootstrap.min.css">
    <link rel="stylesheet" href="Styles/register.css">
</head>

<body>
    <div class="wrapper">
       {include file="common/header.inc.tpl"}
        <main class="main full-content">
            <div class="container-fluid">
                <div class="main-wrap">
                    <div class="main-content">
                        <div class="register-content">
                            <section>
                                <h1 class="page-title text-uppercase">Đăng ký</h1>
                                <p class="text-description">Bạn đã có tài khoản? <a href="/login.html">Đăng nhập</a></p>
                                {if $errors} {section name=i loop=$errors}
			                    <div class="alert alert-danger" role="alert">
			                        <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
			                        <i class="fa fa-exclamation-triangle"></i>&nbsp;{$errors[i]}
			                    </div>
			                    {/section} {/if} {if $messages} {section name=i loop=$messages}
			                    <div class="alert alert-success" role="alert">
			                        <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Đóng</span></button>
			                        <i class="fa fa-check"></i>&nbsp;{$messages[i]}
			                    </div>
			                    {/section} {/if}
                                <form name="frmRegister" id="frmRegister" action="register.html" method="post">
                                    <div class="row">
                                        <div class="col-sm-6 order-sm-1">
                                            <div class="form-group">
                                                <label for="inputUsername" class="control-label">Tên đăng nhập</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text min-w-40 justify-content-center"><i class="fas fa-user"></i></span>
                                                    </div>
                                                    <input type="text" class="form-control" name="xUsername" onblur="checkInformation(this);" value="{$_POST.xUsername}" placeholder="Tên đăng nhập">
                                                    <div class="input-group-append">
                                                        <div class="input-group-text min-w-35 p-0 justify-content-center"><a href="javascript:void(0)" id="checkUsername"></a></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 order-sm-3">
                                            <div class="form-group">
                                                <label for="inputPassword" class="control-label">Mật Khẩu:</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text min-w-40 justify-content-center"><i class="fas fa-lock"></i></span>
                                                    </div>
                                                    <input type="password" value="{$_POST.xPassword}" placeholder="Mật khẩu" name="xPassword" value="" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 order-sm-5">
                                            <div class="form-group">
                                                <label for="inputPassword" class="control-label">Xác nhận mật Khẩu:</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text min-w-40 justify-content-center">
                                                           <i class="fa fa-undo"></i>
                                                        </span>
                                                    </div>
                                                    <input type="password" placeholder="Xác nhận mật Khẩu" name="xPasswordConfirm" value="" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 order-sm-2">
                                            <div class="form-group">
                                                <label for="inputPassword" class="control-label">Họ Và Tên:</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text min-w-40 justify-content-center min-w-40 text-center"><i class="fas fa-address-card"></i></span>
                                                    </div>
                                                    <input type="text" placeholder="Họ và tên" name="xName" value="{$_POST.xName}" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 order-sm-7">
                                            <div class="form-group">
                                                <label for="xPhone" class="control-label">Điện thoại:</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text min-w-40 justify-content-center pl-0 pr-0">+<span id="phoneCode">{$country.Phone}</span></span>
                                                    </div>
                                                    <input type="tel" placeholder="Điện thoại" name="xPhone" value="{$_POST.xPhone}" class="form-control" onblur="checkInformation(this);" class="form-control">
                                                    <div class="input-group-append">
                                                        <div class="input-group-text min-w-35 p-0"><a href="javascript:void(0)" id="checkPhone"></a></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 order-sm-4">
                                            <div class="form-group">
                                                <label for="inputEmail" class="control-label">Email:</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text min-w-40 justify-content-center"><i class="fas fa-at"></i></span>
                                                    </div>
                                                    <input type="email" placeholder="Email" name="xEmail" value="{$_POST.xEmail}" class="form-control" onblur="checkInformation(this);">
                                                    <div class="input-group-append">
                                                        <div class="input-group-text min-w-35 p-0 justify-content-center"><a href="javascript:void(0)" id="checkEmail"></a></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 order-sm-6">
                                            <div class="form-group">
                                                <label class="control-label">Quốc gia:</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text min-w-40 justify-content-center"><i class="fas fa-globe-americas"></i></span>
                                                    </div>
                                                    <select name="xCountry" class="form-control">
                                                        {section name=i loop=$countries}
						                                <option value="{$countries[i].Code}" phone="{$countries[i].Phone}" {if $country.Code==$countries[i].Code} selected{/if}>+{$countries[i].Phone} ( {$countries[i].Name} )</option>
						                                {/section}
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        {if $recapcha eq 1}
                                        <div class="col-sm-6 order-sm-8">
					                        <div class="form-group">
					                            <script src='https://www.google.com/recaptcha/api.js'></script>
					                            <div class="g-recaptcha" data-sitekey="6LdsclYUAAAAAC9cHbfa0FdyenwCXE6WSPwvWlaW"></div>
					                        </div>
					                    </div>
				                        {else}
                                        <div class="col-sm-6 order-sm-8">
                                            <div class="form-group">
                                                <label for="inputCaptcha" class="control-label">Captcha</label>
                                                <div class="input-group">
                                                    <input type="number" name="xCaptcha" value="" class="form-control" placeholder="Nhập mã capcha bên phải phải vào đây" required>
                                                    <div class="input-group-append">
                                                        <div class="input-group-text"><img src="captcha.php"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        {/if}
                                    </div> 
                                    <div class="check-accept-group form-group">
                                        <div class="d-flex justify-content-center">
                                            <div>
                                                <label class="checkbox-custom">
                                                    <input type="checkbox" name="xAgree" id="check-accept" value="YES"><span>Tôi đã đọc và đồng ý</span>
                                                </label><a href="/custom/terms-of-service.html">Điều khoản dịch vụ.</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="max-w-200 ml-auto mr-auto">
                                            <button type="submit" class="btn btn-block btn-primary">Đăng Ký</button>
                                        </div>
                                    </div>
                                </form>
                            </section>
                        </div><!--/.register-content-->
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
    <script src="Javascripts/register.js"></script>
    <script src="Javascripts/function.js"></script>
    <script src="Javascripts/price.js"></script>
    <script src="Javascripts/volume.js"></script>
    <script>
    <!--
    $('select[name=xCountry]').change(function() {
        $('#phoneCode').html($(this).find('option:selected').attr('phone'));
    });
    //-->
    </script>
</body>

</html>