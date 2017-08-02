<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

<head lang="en">
	<meta charset="UTF-8">
	<title>登录</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<meta name="format-detection" content="telephone=no">
	<meta name="renderer" content="webkit">
	<meta http-equiv="Cache-Control" content="no-siteapp" />

	<link rel="stylesheet" href="<?php echo C('AMZ_URL');?>assets/css/amazeui.css" />
	<link href="<?php echo C('CSS_URL');?>dlstyle.css" rel="stylesheet" type="text/css">
</head>

<body>

	<div class="login-boxtitle">
		<a href="home.html"><img alt="logo" src="<?php echo C('IMG_URL');?>logobig.png" /></a>
	</div>

	<div class="login-banner">
		<div class="login-main">
			<div class="login-banner-bg"><span></span><img src="<?php echo C('IMG_URL');?>big.jpg" /></div>
			<div class="login-box">

				<h3 class="title">登录商城</h3>

				<div class="clear"></div>

				<div class="login-form">
					<form>
						<div class="user-name">
							<label for="user"><i class="am-icon-user"></i></label>
							<input type="text" name="user" id="username" placeholder="邮箱/手机/用户名">
						</div>
						<div class="user-pass">
							<label for="password"><i class="am-icon-lock"></i></label>
							<input type="password" name="pass" id="password" placeholder="请输入密码">
						</div>
					</form>
				</div>

				<div class="login-links">
					<label for="remember-me"><input id="remember-me" type="checkbox">记住密码</label>
					<a href="#" class="am-fr">忘记密码</a>
					<a href="register.html" class="zcnext am-fr am-btn-default">注册</a>
					<br />
				</div>
				<div class="am-cf">
					<input type="submit" id="check" name="" value="登 录" class="am-btn am-btn-primary am-btn-sm">
				</div>
				<div class="partner">
					<h3>合作账号</h3>
					<div class="am-btn-group">
						<li><a href="#"><i class="am-icon-qq am-icon-sm"></i><span>QQ登录</span></a></li>
						<li><a href="<?php echo U('weiboLogin');?>"><i class="am-icon-weibo am-icon-sm"></i><span>微博登录</span> </a></li>
						<li><a href="#"><i class="am-icon-weixin am-icon-sm"></i><span>微信登录</span> </a></li>
					</div>
				</div>

			</div>
		</div>
	</div>

	<div class="footer">
    <p>Copyright &copy; 2017.Company name All rights reserved.More information <a href="https://www.baidu.com/s?wd=falcom">Falcom</a></p>
</div>

<link rel="stylesheet" type="" href="<?php echo C('CSS_URL');?>bootstrap.css">
<script src="<?php echo C('JS_URL');?>jquery.js"></script>
<script src="<?php echo C('JS_URL');?>bootstrap.js"></script>
<script src="<?php echo C('LAY_URL');?>layer.js"}></script>
</body>

</html>

<script>
	$("#check").click(function (e) {
		e.preventDefault();
		var user = $("#username").val();
		var pass = $("#password").val();
		var index = layer.load(0, { shade: false }); //0代表加载的风格，支持0-2

		$.ajax({
			type: "post",
			url: "<?php echo U('User/checkUser');?>",
			data: "user=" + user + "&pass=" + pass,
			dataType: "json",
			success: function (msg) {
				layer.closeAll("loading");
				if (msg['flag'] == 1) {
					console.log(msg);
					layer.msg('登录成功,正在跳转到登录前页面');				
						setTimeout(function () {
							window.location.href = "<?php echo U('Index/index');?>";
						}, 1000);
				} else {
					layer.msg(msg['message']);
				}
			}
		});
	});

</script>