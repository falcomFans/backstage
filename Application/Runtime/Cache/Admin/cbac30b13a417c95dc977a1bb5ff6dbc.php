<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>

<head>
    <title>Tables</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Novus Admin Panel Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script type="application/x-javascript">
        addEventListener("load", function () {
        setTimeout(hideURLbar, 0);
    }, false);
    function hideURLbar() {
        window.scrollTo(0, 1);
    }
    </script>
    <!-- Bootstrap Core CSS -->
    <link href="<?php echo C('CSS_URL');?>bootstrap.css" rel='stylesheet' type='text/css' />
    <!-- Custom CSS -->
    <link href="<?php echo C('CSS_URL');?>style.css" rel='stylesheet' type='text/css' />
    <!-- font CSS -->
    <!-- font-awesome icons -->
    <link href="<?php echo C('CSS_URL');?>font-awesome.css" rel="stylesheet">
    <!-- //font-awesome icons -->
    <!-- js-->
    <script src="<?php echo C('JS_URL');?>jquery-1.11.1.min.js"></script>
    <script src="<?php echo C('JS_URL');?>modernizr.custom.js"></script>
    <!--webfonts-->
    <link href='https://fonts.googleapis.com/css?family=Roboto+Condensed:400,300,300italic,400italic,700,700italic' rel='stylesheet'
        type='text/css'>
    <!--//webfonts-->
    <!--animate-->
    <link href="<?php echo C('CSS_URL');?>animate.css" rel="stylesheet" type="text/css" media="all">
    <script src="<?php echo C('JS_URL');?>wow.min.js"></script>
    <script>
        new WOW().init();
    </script>
    <!--//end-animate-->
    <!-- Metis Menu -->
    <script src="<?php echo C('JS_URL');?>metisMenu.min.js"></script>
    <script src="<?php echo C('JS_URL');?>custom.js"></script>
    <link href="<?php echo C('CSS_URL');?>custom.css" rel="stylesheet">
    <!--//Metis Menu -->
</head>

<body class="cbp-spmenu-push">
    <div class="main-content">
        <!--left-fixed -navigation-->
        <div class=" sidebar" role="navigation">
    <div class="navbar-collapse">
        <nav class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left" id="cbp-spmenu-s1">
            <ul class="nav" id="side-menu">
                <!--<li>-->
                    <!--<a href="index.html"><i class="fa fa-home nav_icon"></i>Dashboard</a>-->
                <!--</li>-->
                <?php if(is_array($authA)): foreach($authA as $key=>$v): ?><li>
                    <a href="#"><i class="fa fa-cogs nav_icon"></i><?php echo ($v["auth_name"]); ?><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level collapse">
                        <?php if(is_array($authB)): foreach($authB as $key=>$vv): if(($vv['auth_pid']) == $v["auth_id"]): ?><li>
                            <a href="/index.php/Admin/<?php echo ($vv["auth_c"]); ?>/<?php echo ($vv["auth_a"]); ?>"><?php echo ($vv["auth_name"]); ?></a>
                        </li><?php endif; endforeach; endif; ?>
                    </ul>
                    <!-- /nav-second-level -->
                </li><?php endforeach; endif; ?>
            </ul>
            <div class="clearfix"> </div>
            <!-- //sidebar-collapse -->
        </nav>
    </div>
</div>
        <!--left-fixed -navigation-->
        <!-- header-starts -->
        <div class="sticky-header header-section ">
    <div class="header-left">
        <!--toggle button start-->
        <button id="showLeftPush"><i class="fa fa-bars"></i></button>
        <!--toggle button end-->
        <!--logo -->
        <div class="logo">
            <a href="index.html">
                <h1>NOVUS</h1>
                <span>AdminPanel</span>
            </a>
        </div>
        <!--//logo-->
        <!--search-box-->
        <div class="search-box">
            <form class="input">
                <input class="sb-search-input input__field--madoka" placeholder="Search..." type="search" id="input-31" />
                <label class="input__label" for="input-31">
                    <svg class="graphic" width="100%" height="100%" viewBox="0 0 404 77" preserveAspectRatio="none">
                        <path d="m0,0l404,0l0,77l-404,0l0,-77z"/>
                    </svg>
                </label>
            </form>
        </div><!--//end-search-box-->
        <div class="clearfix"> </div>
    </div>
    <div class="header-right">
        <div class="profile_details_left"><!--notifications of menu start -->
            <ul class="nofitications-dropdown">
                <li class="dropdown head-dpdn">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-envelope"></i></a>
                    <ul class="dropdown-menu">
                        <li>
                            <div class="notification_header">
                                <h3>后续开发</h3>
                            </div>
                        </li>
                        <li><a href="#">
                            <div class="user_img"><img src="<?php echo C('IMG_URL');?>1.png" alt=""></div>
                            <div class="notification_desc">
                                <p>Lorem ipsum dolor amet</p>
                                <p><span>1 hour ago</span></p>
                            </div>
                            <div class="clearfix"></div>
                        </a></li>
                        <li>
                            <div class="notification_bottom">
                                <a href="#">以后当作站内信模块</a>
                            </div>
                        </li>
                    </ul>
                </li>
                <li class="dropdown head-dpdn">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-bell"></i></a>
                    <ul class="dropdown-menu">
                        <li>
                            <div class="notification_header">
                                <h3>后续开发</h3>
                            </div>
                        </li>
                        <li><a href="#">
                            <div class="user_img"><img src="<?php echo C('IMG_URL');?>2.png" alt=""></div>
                            <div class="notification_desc">
                                <p>Lorem ipsum dolor amet</p>
                                <p><span>1 hour ago</span></p>
                            </div>
                            <div class="clearfix"></div>
                        </a></li>

                        <li>
                            <div class="notification_bottom">
                                <a href="#">以后当作通知模块</a>
                            </div>
                        </li>
                    </ul>
                </li>
                <li class="dropdown head-dpdn">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-tasks"></i></a>
                    <ul class="dropdown-menu">
                        <li>
                            <div class="notification_header">
                                <h3>后续开发</h3>
                            </div>
                        </li>
                        <li><a href="#">
                            <div class="task-info">
                                <span class="task-desc">Database update</span><span class="percentage">40%</span>
                                <div class="clearfix"></div>
                            </div>
                            <div class="progress progress-striped active">
                                <div class="bar yellow" style="width:40%;"></div>
                            </div>
                        </a></li>

                        <li>
                            <div class="notification_bottom">
                                <a href="#">做什么还没有想好</a>
                            </div>
                        </li>
                    </ul>
                </li>
            </ul>
            <div class="clearfix"> </div>
        </div>
        <!--notification menu end -->
        <div class="profile_details">
            <ul>
                <li class="dropdown profile_details_drop">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                        <div class="profile_img">
                            <span class="prfil-img"><img src="<?php echo C('IMG_URL');?>a.png" alt="" width="50" height="50"> </span>
                            <div class="user-name">
                                <p><?php echo (session('admin_name')); ?></p>
                                <span>Administrator</span>
                            </div>
                            <i class="fa fa-angle-down lnr"></i>
                            <i class="fa fa-angle-up lnr"></i>
                            <div class="clearfix"></div>
                        </div>
                    </a>
                    <ul class="dropdown-menu drp-mnu">
                        <li> <a href="#"><i class="fa fa-cog"></i> Settings</a> </li>
                        <li> <a href="<?php echo U('Manager/showinfo');?>"><i class="fa fa-user"></i> Profile</a> </li>
                        <li> <a href="<?php echo U('Manager/logout');?>"><i class="fa fa-sign-out"></i> Logout</a> </li>
                    </ul>
                </li>
            </ul>
        </div>
        <div class="clearfix"> </div>
    </div>
    <div class="clearfix"> </div>
</div>
        <!-- //header-ends -->
        <!-- main content start-->
        <div id="page-wrapper">
            <div class="main-page">
                <div class="tables">
                    <h3 class="title1">编辑管理员</h3>
                    <div class="panel-body widget-shadow">
                        <h4><?php echo ($info["mg_name"]); ?>的信息:</h4>
                        <form class="form-horizontal" action="<?php echo U('add');?>" method="post" >
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>键</th>
                                        <th>值</th>
                                        <th>备注</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">大会员等级名称</th>
                                        <td><input type="text" class="form-control1" id="focusedinput" name="level_name" >                                            </td>
                                        <td id="focusedinput_td">会员等级名</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">大会员商品折扣</th>
                                        <td><input type="number" class="form-control1" id="level_rate" name="level_rate" >                                            </td>
                                        <td id="inputPassword_td1">1-100的整数，95代表9.5折</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">大会员积分下限</th>
                                        <td><input type="number" class="form-control1" name="jifen_bottom" id="jifen_bottom"  ></td>
                                        <td id="inputPassword_td2">达到该等级所需的积分</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">大会员积分上线</th>
                                        <td><input type="number" class="form-control1" id="jifen_top" name="jifen_top" ></td>
                                        <td id="inputPassword_td2">突破该等级所需的积分</td>
                                    </tr>
                                   
                                </tbody>
                            </table>
                            <button type="submit" class="btn btn-large btn-block btn-default">提交</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!--footer-->
        

<div class="footer">
    <p>Copyright &copy; 2017.Company name All rights reserved.More information <a href="https://www.baidu.com/s?wd=falcom">Falcom</a></p>
</div>

<script src="<?php echo C('LAY_URL');?>layer.js"}></script>


        <!--//footer-->
    </div>
    <!-- Classie -->
    <script src="<?php echo C('JS_URL');?>classie.js"></script>
    <script>
        var menuLeft = document.getElementById('cbp-spmenu-s1'),
            showLeftPush = document.getElementById('showLeftPush'),
            body = document.body;

        showLeftPush.onclick = function () {
            classie.toggle(this, 'active');
            classie.toggle(body, 'cbp-spmenu-push-toright');
            classie.toggle(menuLeft, 'cbp-spmenu-open');
            disableOther('showLeftPush');
        };

        function disableOther(button) {
            if (button !== 'showLeftPush') {
                classie.toggle(showLeftPush, 'disabled');
            }
        }
    </script>
    <!--scrolling js-->
    <script src="<?php echo C('JS_URL');?>jquery.nicescroll.js"></script>
    <script src="<?php echo C('JS_URL');?>scripts.js"></script>
    <!--//scrolling js-->
    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo C('JS_URL');?>bootstrap.js"></script>
</body>

</html>


<script>
        var flag_name = true;
        var flag_pwd = true;

        // 用户名的判断，这里使用ajax请求去服务器判断是否存在
        $("#focusedinput").blur(function (e) {
            e.preventDefault();
            $.ajax({
                type: "post",
                url: "<?php echo U('checkName');?>",
                data: "mg_name=" + $("#focusedinput").val(),
                dataType: "json",
                success: function (msg) {
                    if (msg["status"] == 202) {
                        $("#focusedinput_td").html("<font color='red'>该用户名已存在<font>");
                        flag_name = false;
                    }
                    else {
                        $("#focusedinput_td").html("<font color='blue'>该用户名可以使用<font>");
                        flag_name = true;
                    }
                }
            });
        });

function isTrue() {
    return flag_name && flag_pwd;
}

</script>