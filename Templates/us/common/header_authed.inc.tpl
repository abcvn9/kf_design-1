<header id="header">
    <div class="header-in">
        <div class="top-header">
            <div class="container-fluid">
                <div class="clearfix">
                    {include file="lastbtc.inc.tpl"}
                    <!--//.price -->
                    <div class="header-top-right">
                        <div class="div-table">
                            <div class="header__social">
                                <ul>
                                    <li class="tele"><a href="https://t.me/kfcoin" translate="_blank"><img src="/Images/icon_tele.png" alt="tele"></a></li>
                                    <li><a href="https://www.facebook.com/kfchangecom/"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                    <li><a href="https://twitter.com/kfchange"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                            <div>
                                <div class="btn-group account-info">
                                    <div class="in dropdown">
                                        <a href="javascript:void(0)" class="btn btn-default dropdown-toggle"
                                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <span>{$user.Name}</span></a>
                                        <div class="dropdown-menu">
                                            <div class="panel panel-user">
                                                <div class="panel-header"><span>{$user.Email}</span></div>
                                                <!-- //.panel-header -->
                                                <div class="panel-body">
                                                    <div class="row">
                                                        <div class="col-xs-6">UID {$user.Index}</div>
                                                        <!-- //col-xs-->
                                                        <div class="col-xs-6 text-right">
                                                            <a href="setting.html" title="Settings">Cài đặt</a>
                                                        </div>
                                                        <!-- //col-xs-->
                                                    </div>
                                                    <!--//.row-->
                                                </div>
                                                <!-- //.panel-body -->
                                                <div class="panel-footer">
                                                    {include file="user.inc.tpl"}
                                                </div>
                                                <!-- //.panel footer -->
                                            </div>
                                            <!-- //.panel -->
                                        </div>
                                        <!-- //.dropdown-menu -->
                                    </div>
                                    <!-- //.dropdown-->
                                    <span class="vip">{$user.Group.Name}</span> <a href="logout.html">Thoát</a>
                                    <div class="user-menu view-sp">
                                        {*<aside class="widget">
                                          {include file="asset.inc.tpl"}
                                        </aside>*}
                                        {include file="user_menu.inc.tpl"}
                                    </div>
                                </div>
                            </div>
                            <!-- /Acount information area -->
                            <div>
                                {include file="language.inc.tpl"}
                                <!-- /Language list -->
                            </div>
                            <!-- /Language area -->
                        </div>
                        <!-- / -->
                    </div>
                    <!-- / .header-top-right-->
                </div>
                <!--/Row -->
            </div>
            <!--/Container-->
        </div>
        <div class="middle-header sub-nav">
            <div class="header__middle__in">
                <div class="container-fluid">
                    <div class="inner-box">
                        <h1 id="logo"><a href="/markets.html"><img src="{$http}://{$domain}/Images/logo.png" alt="{$domain}"></a></h1>
                        <nav id="gnav">
                            <ul>{include file="gnav.inc.tpl"}</ul>
                        </nav>
                        <!--/Nav -->
                        {*<div class="right-header">
                          {incl ude file="asset.inc .tpl"}
                        </div>*}
                        <div class="nav-mobile"><a href="javascript:void(0);" class="btn-sp"><span>Menu</span></a>
                            <!--/Nav -->
                        </div>
                    </div>
                </div>
            </div><!--/.header__middle__in-->
        </div>
        <!-- /Header middle -->
        <div class="nav-menu-sp">
            <div class="container-fluid">
                <nav id="gnav-mobile">
                    <ul>{include file="gnav.inc.tpl"}</ul>
                </nav>
                <!-- /#gnav-mobile -->
            </div>
            <!-- /.container -->
        </div>
        <!--/view-sp-->
    </div>
</header>
