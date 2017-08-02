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
                    <h3 class="title1">添加一个商品属性</h3>
                    <div class="panel-body widget-shadow">
                        <form class="form-horizontal" action="" id="attr_form" onsubmit="return false">
                            <input type="hidden" name="mg_id" value="<?php echo ($info['mg_id']); ?>">
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
                                        <th scope="row">属性名称</th>
                                        <td><input type="text" required class="form-control1" id="focusedinput1" name="attr_name"
                                                value="<?php echo ($info["mg_name"]); ?>"> </td>
                                        <td id="focusedinput_td">该属性的名称，例如CPU/屏幕大小等等</td>
                                    </tr>

                                    <tr>
                                        <th scope="row">所属商品类型</th>
                                        <td><select id="type_id" class="form-control1"> 
                                            <?php if(is_array($info)): foreach($info as $key=>$v): ?><option value="<?php echo ($v['type_id']); ?>" ><?php echo ($v["type_name"]); ?></option><?php endforeach; endif; ?>          
									</select></td>
                                        <td>选择一个类型，例如CPU可以属于电脑类商品</td>
                                    </tr>

                                    <tr>
                                        <th scope="row">属性类别</th>
                                        <td><select name="attr_sel" id="selector1" class="form-control1">  
										    <option value="only" >唯一属性</option>          
										    <option value="many"  >可选属性</option>         
									</select></td>
                                        <td>是唯一属性还是可选属性,例如手机品牌是唯一的，而颜色是可选的</td>
                                    </tr>

                                    <tr>
                                        <th scope="row">录入方式</th>
                                        <td><select name="attr_write" id="selector2" disabled class="form-control1">  
										    <option value="manual" id="only">手工录入</option>          
										    <option value="list" id="many">列表选择</option>          
									</select></td>
                                        <td>不可更改，由属性类别决定</td>
                                    </tr>

                                    <tr>
                                        <th scope="row">属性值</th>
                                        <td><input type="text" class="form-control1"   disabled id="focusedinput" name="attr_vals">                                            </td>
                                        <td id="focusedinput_td">如果是可选属性请写出所有的属性并使用"|"分开</td>
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
        $("#selector1").change(function (e) {
            e.preventDefault();
            var sel = $("#selector1").val();
            if (sel == "only") {
                $("#only").attr("selected", true);
                $("#many").attr("selected", false);
                $("#focusedinput").attr("disabled", true);
            } else {
                $("#only").attr("selected", false);
                $("#many").attr("selected", true);
                $("#focusedinput").attr("disabled", false);
            }
        });

        $("#attr_form").submit(function (e) {
            e.preventDefault();

            var index = layer.load(0, { shade: false }); //0代表加载的风格，支持0-2
    
            attr_name = $("#focusedinput1").val();
            type_id    = $("#type_id").val();
            attr_sel   = $("#selector1").val();
            attr_write = $("#selector2").val();
            attr_vals  = $("#focusedinput").val();


            $.ajax({
                type: "post",
                url: "<?php echo U('add');?>",
                data: "attr_name="+attr_name+"&attr_sel="+attr_sel+"&type_id="+type_id+"&attr_write="+attr_write+"&attr_vals="+attr_vals,
                dataType: "json",
                success: function (msg) {
                    if (msg["status"]=="200") {
                        layer.closeAll("loading");
                        layer.confirm(" 属性添加成功，是否继续添加属性", {
                            btn: ['继续添加', '不，添加完成'] //按钮
                        }, function () {
                            layer.msg('可以继续执行添加操作');
                        }, function () {
                            window.location.href = "<?php echo U('showlist');?>";
                        });
                    }
                }
            });
        });

</script>