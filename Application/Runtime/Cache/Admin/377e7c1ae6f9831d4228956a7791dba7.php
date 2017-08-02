<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>

<head>
    <title>秋名山车队后台管理系统</title>
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
    <link rel="stylesheet" type="text/css" href="<?php echo C('CSS_URL');?>page.css">

    <style>
        .form-control {
            width: 200px;
        }
    </style>

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
                    <div class="inline-form widget-shadow">
                        <div class="form-title">
                            <h4>这里可以条件搜索</h4>
                        </div>
                        <div class="form-body">
                            <div data-example-id="simple-form-inline">
                                <form class="form-inline" name="search" action="<?php echo U('search');?>" onsubmit="return refresh()" method="post">
                                    <div class="form-group"> <input type="text" name="username" class="form-control" id="exampleInputEmail3" placeholder="账号"> </div>
                                    
                                    <select name="flag"  class="form-control" >
                                        <option value="5">所有状态</option>
                                        <option value="0">注销状态</option>
                                        <option value="1">正常状态</option>
                                        <option value="2">有期限封印</option>
                                        <option value="3">无限期封印</option>
                                    </select>
                                    &nbsp;&nbsp;&nbsp;&nbsp;
                                    注册时间：
                                    <input type="date" name="user_time_start" class="form-control" value="" title="注册时间">-
                                    <input type="date" name="user_time_end" class="form-control" value="" title="注册时间">-
                                    
                                    <button type="submit" class="btn btn-success">GO!!!</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <h3 class="title1">
                    </h3>
                    <div id="fresh" class="panel-body widget-shadow">
                        <h4>用户列表:</h4>
                        <?php echo ($page); ?>
                        <br>
                        <br>
                        <br>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>序号</th>
                                    <th>账号</th>
                                    <th>邮箱</th>
                                    <th>手机</th>
                                    <th>性别</th>
                                    <th>注册时间</th>
                                    <th>当前状态</th>
                                    <th>相关操作</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if(is_array($user)): foreach($user as $k=>$v): ?><tr>
                                        <th scope="row"><?php echo ($k+1); ?></th>
                                        <td><?php echo ($v["username"]); ?></td>
                                        <td><?php echo ($v["user_email"]); ?></td>
                                        <td><?php echo ($v["user_tel"]); ?></td>
                                        <td>
                                            <?php if(($v['user_sex']) == "0"): ?>女<?php endif; ?>
                                            <?php if(($v['user_sex']) == "1"): ?>男<?php endif; ?>
                                            <?php if(($v['user_sex']) == "2"): ?>保密<?php endif; ?>
                                        </td>
                                        <td><?php echo (date("y-m-d H:i:s",$v["last_time"])); ?></td>
                                        <td>
                                            <?php if(($v['flag']) == "0"): ?>注销<?php endif; ?>
                                            <?php if(($v['flag']) == "1"): ?>正常<?php endif; ?>
                                            <?php if(($v['flag']) == "2"): ?>有期限封印<?php endif; ?>
                                            <?php if(($v['flag']) == "3"): ?>无限期封印<?php endif; ?>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-sm btn-primary">查看</button>
                                            <button type="button" id=<?php echo ($v[ 'user_id']); ?> class="btn btn-sm btn-danger" onclick="cold(this)">封印</button>
                                        </td>
                                    </tr><?php endforeach; endif; ?>
                            </tbody>
                        </table>
                        <?php echo ($page); ?>
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

<!--冻结操作-->
<script>
        function cold(e) {
            var id = $(e).attr("id");
            layer.confirm('请选择冻结期限', {
                btn: ['永久冻结', '自定义冻结'] //按钮
            }, function () {
                var index = layer.load(0, { shade: false }); //0代表加载的风格，支持0-2
                var flag = 3;
                $.ajax({
                    type: "post",
                    url: "<?php echo U('coldUser');?>",
                    data: "user_id=" + id + "&flag=" + flag,
                    dataType: "json",
                    success: function (msg) {
                        if (msg['status'] = 200) {
                            layer.closeAll("loading");
                            layer.msg('成功封印');
                            $(e).parent().prev().html("<td>无限期封印</td>")
                        }
                    }
                });
            }, function () {
                layer.prompt({ title: '输入需要封印的天数', formType: 3 }, function (val, index) {
                    layer.close(index);
                    var index = layer.load(0, { shade: false }); //0代表加载的风格，支持0-2

                    var flag = 2;
                    var date = val;
                    $.ajax({
                        type: "post",
                        url: "<?php echo U('coldUser');?>",
                        data: "user_id=" + id + "&flag=" + flag + "&date=" + date,
                        dataType: "json",
                        success: function (msg) {
                            if (msg['status'] = 200) {
                                layer.closeAll("loading");
                                layer.msg('成功封印');
                                $(e).parent().prev().html("<td>有期限封印</td>")
                            }
                        }
                    });
                });
            });
        }

</script>


<!--条件搜索无刷新-->
<script>
    function refresh() {
        var index = layer.load(0, { shade: false }); //0代表加载的风格，支持0-2
        var e = $(".form-inline").serialize();
        $.ajax({
            type: "post",
            url: "<?php echo U('search');?>",
            data: e,
            dataType: "json",
            success: function (msg) {
                layer.closeAll("loading");
                console.log(msg['msg']);
                $("#fresh").empty().append(msg['msg']);
            }
        });
        return false;
    }
</script>