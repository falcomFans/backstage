<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

	<title>首页</title>

	<link href="<?php echo C('AMZ_URL');?>assets/css/amazeui.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo C('AMZ_URL');?>assets/css/admin.css" rel="stylesheet" type="text/css" />

	<link href="<?php echo C('BAS_URL');?>css/demo.css" rel="stylesheet" type="text/css" />

	<link href="<?php echo C('CSS_URL');?>hmstyle.css" rel="stylesheet" type="text/css" />
	<script src="<?php echo C('AMZ_URL');?>assets/js/jquery.min.js"></script>
	<script src="<?php echo C('AMZ_URL');?>assets/js/amazeui.min.js"></script>

</head>

<body>
	<div class="hmtop">
		<!--顶部导航条 -->
		<div class="am-container header">
	<ul class="message-l">
		<div class="topMessage">
			<div class="menu-hd">

				<?php if(($_SESSION['username']) != ""): echo (session('username')); ?> 丨
					<a href="<?php echo U('User/logout');?>" target="_top" class="h">注销</a><?php endif; ?>
				<?php if(($_SESSION['username']) == ""): ?><a href="<?php echo U('User/login');?>" target="_top" class="h">
								亲，请登录</a><?php endif; ?>
				<a href="<?php echo U('User/register');?>" target="_top">免费注册</a>
			</div>
		</div>
	</ul>
	<ul class="message-r">
		<div class="topMessage home">
			<div class="menu-hd"><a href="<?php echo U('Index/index');?>" target="_top" class="h">商城首页</a></div>
		</div>
		<div class="topMessage my-shangcheng">
			<div class="menu-hd MyShangcheng"><a href="#" target="_top"><i class="am-icon-user am-icon-fw"></i>个人中心</a></div>
		</div>
		<div class="topMessage mini-cart">
			<div class="menu-hd"><a id="mc-menu-hd" href="<?php echo U('Shop/cart');?>" target="_top"><i class="am-icon-shopping-cart  am-icon-fw"></i><span>购物车</span><strong id="J_MiniCartNum" class="h">0</strong></a></div>
		</div>
		<div class="topMessage favorite">
			<div class="menu-hd"><a href="#" target="_top"><i class="am-icon-heart am-icon-fw"></i><span>收藏夹</span></a></div>
	</ul>
	</div>

	<!--悬浮搜索框-->

	<div class="nav white">
		<div class="logo"><img src="<?php echo C('IMG_URL');?>logo.png" /></div>
		<div class="logoBig">
			<li><img src="<?php echo C('IMG_URL');?>logobig.png" /></li>
		</div>

		<div class="search-bar pr">
			<a name="index_none_header_sysc" href="#"></a>
			<form>
				<input id="searchInput" name="index_none_header_sysc" type="text" placeholder="搜索" autocomplete="off">
				<input id="ai-topsearch" class="submit am-btn" value="搜索" index="1" type="submit">
			</form>
		</div>
	</div>
	<div class="clear"></div>
</div>


		<div class="banner">
			<!--轮播 -->
			<div class="am-slider am-slider-default scoll" data-am-flexslider id="demo-slider-0">
				<ul class="am-slides">
					<li class="banner1"><a href="introduction.html"><img src="<?php echo C('IMG_URL');?>ad1.jpg" /></a></li>
					<li class="banner2"><a><img src="<?php echo C('IMG_URL');?>ad2.jpg" /></a></li>
					<li class="banner3"><a><img src="<?php echo C('IMG_URL');?>ad3.jpg" /></a></li>
					<li class="banner4"><a><img src="<?php echo C('IMG_URL');?>ad4.jpg" /></a></li>

				</ul>
			</div>
			<div class="clear"></div>
		</div>

		<div class="shopNav">
			<div class="slideall">

				<div class="long-title"><span class="all-goods">全部分类</span></div>
				<div class="nav-cont">
					<ul>
						<li class="index"><a href="#">首页</a></li>
						<li class="qc"><a href="#">闪购</a></li>
						<li class="qc"><a href="#">限时抢</a></li>
						<li class="qc"><a href="#">团购</a></li>
						<li class="qc last"><a href="#">大包装</a></li>
					</ul>
					<div class="nav-extra">
						<i class="am-icon-user-secret am-icon-md nav-user"></i><b></b>我的福利
						<i class="am-icon-angle-right" style="padding-left: 10px;"></i>
					</div>
				</div>

				<!--侧边导航 -->
				<div id="nav" class="navfull">
					<div class="area clearfix">
						<div class="category-content" id="guide_2">

							<div class="category">
								<ul class="category-list" id="js_climit_li">
									<li class="appliance js_toggle relative first">
										<div class="category-info">
											<h3 class="category-name b-category-name"><i><img src="<?php echo C('IMG_URL');?>cake.png"></i><a class="ml-22" title="点心">点心/蛋糕</a></h3>
											<em>&gt;</em></div>
										<div class="menu-item menu-in top">
											<div class="area-in">
												<div class="area-bg">
													<div class="menu-srot">
														<div class="sort-side">
															<dl class="dl-sort">
																<dt><span title="蛋糕">蛋糕</span></dt>
																<dd><a title="蒸蛋糕" href="#"><span>蒸蛋糕</span></a></dd>
																<dd><a title="脱水蛋糕" href="#"><span>脱水蛋糕</span></a></dd>
																<dd><a title="瑞士卷" href="#"><span>瑞士卷</span></a></dd>
																<dd><a title="软面包" href="#"><span>软面包</span></a></dd>
																<dd><a title="马卡龙" href="#"><span>马卡龙</span></a></dd>
																<dd><a title="千层饼" href="#"><span>千层饼</span></a></dd>
																<dd><a title="甜甜圈" href="#"><span>甜甜圈</span></a></dd>
																<dd><a title="蒸三明治" href="#"><span>蒸三明治</span></a></dd>
																<dd><a title="铜锣烧" href="#"><span>铜锣烧</span></a></dd>
															</dl>
															<dl class="dl-sort">
																<dt><span title="蛋糕">点心</span></dt>
																<dd><a title="蒸蛋糕" href="#"><span>蒸蛋糕</span></a></dd>
																<dd><a title="脱水蛋糕" href="#"><span>脱水蛋糕</span></a></dd>
																<dd><a title="瑞士卷" href="#"><span>瑞士卷</span></a></dd>
																<dd><a title="软面包" href="#"><span>软面包</span></a></dd>
																<dd><a title="马卡龙" href="#"><span>马卡龙</span></a></dd>
																<dd><a title="千层饼" href="#"><span>千层饼</span></a></dd>
																<dd><a title="甜甜圈" href="#"><span>甜甜圈</span></a></dd>
																<dd><a title="蒸三明治" href="#"><span>蒸三明治</span></a></dd>
																<dd><a title="铜锣烧" href="#"><span>铜锣烧</span></a></dd>
															</dl>

														</div>
														<div class="brand-side">
															<dl class="dl-sort">
																<dt><span>实力商家</span></dt>
																<dd><a rel="nofollow" title="呵官方旗舰店" target="_blank" href="#" rel="nofollow"><span  class="red" >呵官方旗舰店</span></a></dd>
																<dd><a rel="nofollow" title="格瑞旗舰店" target="_blank" href="#" rel="nofollow"><span >格瑞旗舰店</span></a></dd>
																<dd><a rel="nofollow" title="飞彦大厂直供" target="_blank" href="#" rel="nofollow"><span  class="red" >飞彦大厂直供</span></a></dd>
																<dd><a rel="nofollow" title="红e·艾菲妮" target="_blank" href="#" rel="nofollow"><span >红e·艾菲妮</span></a></dd>
																<dd><a rel="nofollow" title="本真旗舰店" target="_blank" href="#" rel="nofollow"><span  class="red" >本真旗舰店</span></a></dd>
																<dd><a rel="nofollow" title="杭派女装批发网" target="_blank" href="#" rel="nofollow"><span  class="red" >杭派女装批发网</span></a></dd>
															</dl>
														</div>
													</div>
												</div>
											</div>
										</div>
										<b class="arrow"></b>
									</li>
									<li class="appliance js_toggle relative">
										<div class="category-info">
											<h3 class="category-name b-category-name"><i><img src="<?php echo C('IMG_URL');?>cookies.png"></i><a class="ml-22" title="饼干、膨化">饼干/膨化</a></h3>
											<em>&gt;</em></div>
										<div class="menu-item menu-in top">
											<div class="area-in">
												<div class="area-bg">
													<div class="menu-srot">
														<div class="sort-side">
															<dl class="dl-sort">
																<dt><span title="饼干">饼干</span></dt>
																<dd><a title="蒸蛋糕" href="#"><span>蒸蛋糕</span></a></dd>
																<dd><a title="脱水蛋糕" href="#"><span>脱水蛋糕</span></a></dd>
																<dd><a title="瑞士卷" href="#"><span>瑞士卷</span></a></dd>
																<dd><a title="软面包" href="#"><span>软面包</span></a></dd>
																<dd><a title="马卡龙" href="#"><span>马卡龙</span></a></dd>
															</dl>
															<dl class="dl-sort">
																<dt><span title="薯片">薯片</span></dt>
																<dd><a title="蒸蛋糕" href="#"><span>蒸蛋糕</span></a></dd>
																<dd><a title="脱水蛋糕" href="#"><span>脱水蛋糕</span></a></dd>
																<dd><a title="瑞士卷" href="#"><span>瑞士卷</span></a></dd>
																<dd><a title="软面包" href="#"><span>软面包</span></a></dd>
																<dd><a title="马卡龙" href="#"><span>马卡龙</span></a></dd>
																<dd><a title="千层饼" href="#"><span>千层饼</span></a></dd>
																<dd><a title="甜甜圈" href="#"><span>甜甜圈</span></a></dd>
																<dd><a title="蒸三明治" href="#"><span>蒸三明治</span></a></dd>
																<dd><a title="铜锣烧" href="#"><span>铜锣烧</span></a></dd>
															</dl>
															<dl class="dl-sort">
																<dt><span title="蛋糕">虾条</span></dt>
																<dd><a title="蒸蛋糕" href="#"><span>蒸蛋糕</span></a></dd>
																<dd><a title="脱水蛋糕" href="#"><span>脱水蛋糕</span></a></dd>
																<dd><a title="瑞士卷" href="#"><span>瑞士卷</span></a></dd>
																<dd><a title="软面包" href="#"><span>软面包</span></a></dd>
																<dd><a title="马卡龙" href="#"><span>马卡龙</span></a></dd>
																<dd><a title="千层饼" href="#"><span>千层饼</span></a></dd>
																<dd><a title="甜甜圈" href="#"><span>甜甜圈</span></a></dd>
																<dd><a title="蒸三明治" href="#"><span>蒸三明治</span></a></dd>
																<dd><a title="铜锣烧" href="#"><span>铜锣烧</span></a></dd>
															</dl>
														</div>
														<div class="brand-side">
															<dl class="dl-sort">
																<dt><span>实力商家</span></dt>
																<dd><a rel="nofollow" title="YYKCLOT" target="_blank" href="#" rel="nofollow"><span  class ="red" >YYKCLOT</span></a></dd>
																<dd><a rel="nofollow" title="池氏品牌男装" target="_blank" href="#" rel="nofollow"><span  class ="red" >池氏品牌男装</span></a></dd>
																<dd><a rel="nofollow" title="男装日志" target="_blank" href="#" rel="nofollow"><span >男装日志</span></a></dd>
																<dd><a rel="nofollow" title="索比诺官方旗舰店" target="_blank" href="#" rel="nofollow"><span >索比诺官方旗舰店</span></a></dd>
																<dd><a rel="nofollow" title="onTTno傲徒" target="_blank" href="#" rel="nofollow"><span  class ="red" >onTTno傲徒</span></a></dd>
																<dd><a rel="nofollow" title="玛狮路男装旗舰店" target="_blank" href="#" rel="nofollow"><span >玛狮路男装旗舰店</span></a></dd>
																<dd><a rel="nofollow" title="劳威特品牌男装" target="_blank" href="#" rel="nofollow"><span >劳威特品牌男装</span></a></dd>
																<dd><a rel="nofollow" title="卡斯郎世家批发城" target="_blank" href="#" rel="nofollow"><span  class ="red" >卡斯郎世家批发城</span></a></dd>
															</dl>
														</div>
													</div>
												</div>
											</div>
										</div>
										<b class="arrow"></b>
									</li>
									<li class="appliance js_toggle relative">
										<div class="category-info">
											<h3 class="category-name b-category-name"><i><img src="<?php echo C('IMG_URL');?>meat.png"></i><a class="ml-22" title="熟食、肉类">熟食/肉类</a></h3>
											<em>&gt;</em></div>
										<div class="menu-item menu-in top">
											<div class="area-in">
												<div class="area-bg">
													<div class="menu-srot">
														<div class="sort-side">
															<dl class="dl-sort">
																<dt><span title="猪肉脯">猪肉脯</span></dt>
																<dd><a title="蒸蛋糕" href="#"><span>蒸蛋糕</span></a></dd>
																<dd><a title="脱水蛋糕" href="#"><span>脱水蛋糕</span></a></dd>
																<dd><a title="瑞士卷" href="#"><span>瑞士卷</span></a></dd>
																<dd><a title="软面包" href="#"><span>软面包</span></a></dd>
																<dd><a title="马卡龙" href="#"><span>马卡龙</span></a></dd>
															</dl>
															<dl class="dl-sort">
																<dt><span title="牛肉丝">牛肉丝</span></dt>
																<dd><a title="蒸蛋糕" href="#"><span>蒸蛋糕</span></a></dd>
																<dd><a title="脱水蛋糕" href="#"><span>脱水蛋糕</span></a></dd>
																<dd><a title="瑞士卷" href="#"><span>瑞士卷</span></a></dd>
																<dd><a title="软面包" href="#"><span>软面包</span></a></dd>
																<dd><a title="马卡龙" href="#"><span>马卡龙</span></a></dd>
															</dl>
															<dl class="dl-sort">
																<dt><span title="小香肠">小香肠</span></dt>
																<dd><a title="蒸蛋糕" href="#"><span>蒸蛋糕</span></a></dd>
																<dd><a title="脱水蛋糕" href="#"><span>脱水蛋糕</span></a></dd>
																<dd><a title="瑞士卷" href="#"><span>瑞士卷</span></a></dd>
																<dd><a title="软面包" href="#"><span>软面包</span></a></dd>
																<dd><a title="铜锣烧" href="#"><span>铜锣烧</span></a></dd>
															</dl>
														</div>
														<div class="brand-side">
															<dl class="dl-sort">
																<dt><span>实力商家</span></dt>
																<dd><a rel="nofollow" title="花颜巧语 " target="_blank" href="#" rel="nofollow"><span  class="red" >花颜巧语 </span></a></dd>
																<dd><a rel="nofollow" title="糖衣小屋" target="_blank" href="#" rel="nofollow"><span >糖衣小屋</span></a></dd>
																<dd><a rel="nofollow" title="卡拉迪克  " target="_blank" href="#" rel="nofollow"><span  class="red" >卡拉迪克  </span></a></dd>
																<dd><a rel="nofollow" title="暖春童话 " target="_blank" href="#" rel="nofollow"><span >暖春童话 </span></a></dd>
																<dd><a rel="nofollow" title="华盛童装批发行 " target="_blank" href="#" rel="nofollow"><span >华盛童装批发行 </span></a></dd>
																<dd><a rel="nofollow" title="奈仕华童装旗舰店" target="_blank" href="#" rel="nofollow"><span >奈仕华童装旗舰店</span></a></dd>
																<dd><a rel="nofollow" title="斑蒂尼BONDYNI" target="_blank" href="#" rel="nofollow"><span  class="red" >斑蒂尼BONDYNI</span></a></dd>
																<dd><a rel="nofollow" title="猫儿朵朵 " target="_blank" href="#" rel="nofollow"><span >猫儿朵朵 </span></a></dd>
																<dd><a rel="nofollow" title="童衣阁" target="_blank" href="#" rel="nofollow"><span  class="red" >童衣阁</span></a></dd>
															</dl>
														</div>
													</div>
												</div>
											</div>
										</div>
										<b class="arrow"></b>
									</li>
									<li class="appliance js_toggle relative">
										<div class="category-info">
											<h3 class="category-name b-category-name"><i><img src="<?php echo C('IMG_URL');?>bamboo.png"></i><a class="ml-22" title="素食、卤味">素食/卤味</a></h3>
											<em>&gt;</em></div>
										<div class="menu-item menu-in top">
											<div class="area-in">
												<div class="area-bg">
													<div class="menu-srot">
														<div class="sort-side">
															<dl class="dl-sort">
																<dt><span title="豆干">豆干</span></dt>
																<dd><a title="蒸蛋糕" href="#"><span>蒸蛋糕</span></a></dd>
																<dd><a title="脱水蛋糕" href="#"><span>脱水蛋糕</span></a></dd>
																<dd><a title="瑞士卷" href="#"><span>瑞士卷</span></a></dd>
																<dd><a title="铜锣烧" href="#"><span>铜锣烧</span></a></dd>
															</dl>
															<dl class="dl-sort">
																<dt><span title="干笋">干笋</span></dt>
																<dd><a title="蒸蛋糕" href="#"><span>蒸蛋糕</span></a></dd>
																<dd><a title="脱水蛋糕" href="#"><span>脱水蛋糕</span></a></dd>
																<dd><a title="瑞士卷" href="#"><span>瑞士卷</span></a></dd>
																<dd><a title="铜锣烧" href="#"><span>铜锣烧</span></a></dd>
															</dl>
															<dl class="dl-sort">
																<dt><span title="鸭脖">鸭脖</span></dt>
																<dd><a title="蒸蛋糕" href="#"><span>蒸蛋糕</span></a></dd>
																<dd><a title="脱水蛋糕" href="#"><span>脱水蛋糕</span></a></dd>
																<dd><a title="瑞士卷" href="#"><span>瑞士卷</span></a></dd>
																<dd><a title="软面包" href="#"><span>软面包</span></a></dd>
																<dd><a title="马卡龙" href="#"><span>马卡龙</span></a></dd>
																<dd><a title="千层饼" href="#"><span>千层饼</span></a></dd>
																<dd><a title="甜甜圈" href="#"><span>甜甜圈</span></a></dd>
																<dd><a title="蒸三明治" href="#"><span>蒸三明治</span></a></dd>
																<dd><a title="铜锣烧" href="#"><span>铜锣烧</span></a></dd>
															</dl>
														</div>
														<div class="brand-side">
															<dl class="dl-sort">
																<dt><span>实力商家</span></dt>
																<dd><a rel="nofollow" title="歌芙品牌旗舰店" target="_blank" href="#" rel="nofollow"><span  class="red" >歌芙品牌旗舰店</span></a></dd>
																<dd><a rel="nofollow" title="爱丝蓝内衣厂" target="_blank" href="#" rel="nofollow"><span >爱丝蓝内衣厂</span></a></dd>
																<dd><a rel="nofollow" title="香港优蓓尔防辐射" target="_blank" href="#" rel="nofollow"><span >香港优蓓尔防辐射</span></a></dd>
																<dd><a rel="nofollow" title="蓉莉娜内衣批发" target="_blank" href="#" rel="nofollow"><span >蓉莉娜内衣批发</span></a></dd>
															</dl>
														</div>
													</div>
												</div>
											</div>
										</div>
										<b class="arrow"></b>
									</li>
									<li class="appliance js_toggle relative">
										<div class="category-info">
											<h3 class="category-name b-category-name"><i><img src="<?php echo C('IMG_URL');?>nut.png"></i><a class="ml-22" title="坚果、炒货">坚果/炒货</a></h3>
											<em>&gt;</em></div>
										<div class="menu-item menu-in top">
											<div class="area-in">
												<div class="area-bg">
													<div class="menu-srot">
														<div class="sort-side">
															<dl class="dl-sort">
																<dt><span title="蛋糕">坚果</span></dt>
																<dd><a title="蒸蛋糕" href="#"><span>蒸蛋糕</span></a></dd>
																<dd><a title="脱水蛋糕" href="#"><span>脱水蛋糕</span></a></dd>
																<dd><a title="瑞士卷" href="#"><span>瑞士卷</span></a></dd>
																<dd><a title="软面包" href="#"><span>软面包</span></a></dd>
																<dd><a title="马卡龙" href="#"><span>马卡龙</span></a></dd>
																<dd><a title="千层饼" href="#"><span>千层饼</span></a></dd>
																<dd><a title="甜甜圈" href="#"><span>甜甜圈</span></a></dd>
																<dd><a title="蒸三明治" href="#"><span>蒸三明治</span></a></dd>
																<dd><a title="铜锣烧" href="#"><span>铜锣烧</span></a></dd>
															</dl>
															<dl class="dl-sort">
																<dt><span title="蛋糕">锅巴</span></dt>
																<dd><a title="蒸蛋糕" href="#"><span>蒸蛋糕</span></a></dd>
																<dd><a title="脱水蛋糕" href="#"><span>脱水蛋糕</span></a></dd>
																<dd><a title="瑞士卷" href="#"><span>瑞士卷</span></a></dd>
																<dd><a title="软面包" href="#"><span>软面包</span></a></dd>
																<dd><a title="马卡龙" href="#"><span>马卡龙</span></a></dd>
																<dd><a title="千层饼" href="#"><span>千层饼</span></a></dd>
																<dd><a title="甜甜圈" href="#"><span>甜甜圈</span></a></dd>
																<dd><a title="蒸三明治" href="#"><span>蒸三明治</span></a></dd>
																<dd><a title="铜锣烧" href="#"><span>铜锣烧</span></a></dd>
															</dl>
														</div>
														<div class="brand-side">
															<dl class="dl-sort">
																<dt><span>实力商家</span></dt>
																<dd><a rel="nofollow" title="呵呵嘿官方旗舰店" target="_blank" href="#" rel="nofollow"><span  class="red" >呵呵嘿官方旗舰店</span></a></dd>
																<dd><a rel="nofollow" title="格瑞旗舰店" target="_blank" href="#" rel="nofollow"><span >格瑞旗舰店</span></a></dd>
																<dd><a rel="nofollow" title="飞彦大厂直供" target="_blank" href="#" rel="nofollow"><span  class="red" >飞彦大厂直供</span></a></dd>
																<dd><a rel="nofollow" title="红e·艾菲妮" target="_blank" href="#" rel="nofollow"><span >红e·艾菲妮</span></a></dd>
																<dd><a rel="nofollow" title="本真旗舰店" target="_blank" href="#" rel="nofollow"><span  class="red" >本真旗舰店</span></a></dd>
																<dd><a rel="nofollow" title="杭派女装批发网" target="_blank" href="#" rel="nofollow"><span  class="red" >杭派女装批发网</span></a></dd>
																<dd><a rel="nofollow" title="华伊阁旗舰店" target="_blank" href="#" rel="nofollow"><span >华伊阁旗舰店</span></a></dd>
																<dd><a rel="nofollow" title="独家折扣旗舰店" target="_blank" href="#" rel="nofollow"><span >独家折扣旗舰店</span></a></dd>
															</dl>
														</div>
													</div>
												</div>
											</div>
										</div>
										<b class="arrow"></b>
									</li>
									<li class="appliance js_toggle relative">
										<div class="category-info">
											<h3 class="category-name b-category-name"><i><img src="<?php echo C('IMG_URL');?>candy.png"></i><a class="ml-22" title="糖果、蜜饯">糖果/蜜饯</a></h3>
											<em>&gt;</em></div>
										<div class="menu-item menu-in top">
											<div class="area-in">
												<div class="area-bg">
													<div class="menu-srot">
														<div class="sort-side">
															<dl class="dl-sort">
																<dt><span title="糖果">糖果</span></dt>
																<dd><a title="蒸蛋糕" href="#"><span>蒸蛋糕</span></a></dd>
																<dd><a title="脱水蛋糕" href="#"><span>脱水蛋糕</span></a></dd>
																<dd><a title="瑞士卷" href="#"><span>瑞士卷</span></a></dd>
																<dd><a title="软面包" href="#"><span>软面包</span></a></dd>
																<dd><a title="马卡龙" href="#"><span>马卡龙</span></a></dd>
																<dd><a title="千层饼" href="#"><span>千层饼</span></a></dd>
																<dd><a title="甜甜圈" href="#"><span>甜甜圈</span></a></dd>
																<dd><a title="蒸三明治" href="#"><span>蒸三明治</span></a></dd>
																<dd><a title="铜锣烧" href="#"><span>铜锣烧</span></a></dd>
															</dl>
															<dl class="dl-sort">
																<dt><span title="蜜饯">蜜饯</span></dt>
																<dd><a title="猕猴桃干" href="#"><span>猕猴桃干</span></a></dd>
																<dd><a title="糖樱桃" href="#"><span>糖樱桃</span></a></dd>
																<dd><a title="瑞士卷" href="#"><span>瑞士卷</span></a></dd>
																<dd><a title="软面包" href="#"><span>软面包</span></a></dd>
																<dd><a title="马卡龙" href="#"><span>马卡龙</span></a></dd>
																<dd><a title="千层饼" href="#"><span>千层饼</span></a></dd>
																<dd><a title="甜甜圈" href="#"><span>甜甜圈</span></a></dd>
																<dd><a title="蒸三明治" href="#"><span>蒸三明治</span></a></dd>
																<dd><a title="铜锣烧" href="#"><span>铜锣烧</span></a></dd>
															</dl>
														</div>
														<div class="brand-side">
															<dl class="dl-sort">
																<dt><span>实力商家</span></dt>
																<dd><a rel="nofollow" title="YYKCLOT" target="_blank" href="#" rel="nofollow"><span  class ="red" >YYKCLOT</span></a></dd>
																<dd><a rel="nofollow" title="池氏品牌男装" target="_blank" href="#" rel="nofollow"><span  class ="red" >池氏品牌男装</span></a></dd>
																<dd><a rel="nofollow" title="男装日志" target="_blank" href="#" rel="nofollow"><span >男装日志</span></a></dd>
																<dd><a rel="nofollow" title="索比诺官方旗舰店" target="_blank" href="#" rel="nofollow"><span >索比诺官方旗舰店</span></a></dd>
																<dd><a rel="nofollow" title="onTTno傲徒" target="_blank" href="#" rel="nofollow"><span  class ="red" >onTTno傲徒</span></a></dd>
																<dd><a rel="nofollow" title="卡斯郎世家批发城" target="_blank" href="#" rel="nofollow"><span  class ="red" >卡斯郎世家批发城</span></a></dd>
															</dl>
														</div>
													</div>
												</div>
											</div>
										</div>
										<b class="arrow"></b>
									</li>
									<li class="appliance js_toggle relative">
										<div class="category-info">
											<h3 class="category-name b-category-name"><i><img src="<?php echo C('IMG_URL');?>chocolate.png"></i><a class="ml-22" title="巧克力">巧克力</a></h3>
											<em>&gt;</em></div>
										<div class="menu-item menu-in top">
											<div class="area-in">
												<div class="area-bg">
													<div class="menu-srot">
														<div class="sort-side">
															<dl class="dl-sort">
																<dt><span title="蛋糕">巧克力</span></dt>
																<dd><a title="蒸蛋糕" href="#"><span>蒸蛋糕</span></a></dd>
																<dd><a title="脱水蛋糕" href="#"><span>脱水蛋糕</span></a></dd>
																<dd><a title="瑞士卷" href="#"><span>瑞士卷</span></a></dd>
																<dd><a title="软面包" href="#"><span>软面包</span></a></dd>
																<dd><a title="马卡龙" href="#"><span>马卡龙</span></a></dd>
																<dd><a title="千层饼" href="#"><span>千层饼</span></a></dd>
																<dd><a title="甜甜圈" href="#"><span>甜甜圈</span></a></dd>
																<dd><a title="蒸三明治" href="#"><span>蒸三明治</span></a></dd>
																<dd><a title="铜锣烧" href="#"><span>铜锣烧</span></a></dd>
															</dl>
															<dl class="dl-sort">
																<dt><span title="蛋糕">果冻</span></dt>
																<dd><a title="蒸蛋糕" href="#"><span>蒸蛋糕</span></a></dd>
																<dd><a title="脱水蛋糕" href="#"><span>脱水蛋糕</span></a></dd>
																<dd><a title="瑞士卷" href="#"><span>瑞士卷</span></a></dd>
																<dd><a title="软面包" href="#"><span>软面包</span></a></dd>
																<dd><a title="马卡龙" href="#"><span>马卡龙</span></a></dd>
																<dd><a title="千层饼" href="#"><span>千层饼</span></a></dd>
																<dd><a title="甜甜圈" href="#"><span>甜甜圈</span></a></dd>
																<dd><a title="蒸三明治" href="#"><span>蒸三明治</span></a></dd>
																<dd><a title="铜锣烧" href="#"><span>铜锣烧</span></a></dd>
															</dl>
														</div>
														<div class="brand-side">
															<dl class="dl-sort">
																<dt><span>实力商家</span></dt>
																<dd><a rel="nofollow" title="花颜巧语 " target="_blank" href="#" rel="nofollow"><span  class="red" >花颜巧语 </span></a></dd>
																<dd><a rel="nofollow" title="糖衣小屋" target="_blank" href="#" rel="nofollow"><span >糖衣小屋</span></a></dd>
																<dd><a rel="nofollow" title="卡拉迪克  " target="_blank" href="#" rel="nofollow"><span  class="red" >卡拉迪克  </span></a></dd>
																<dd><a rel="nofollow" title="暖春童话 " target="_blank" href="#" rel="nofollow"><span >暖春童话 </span></a></dd>
																<dd><a rel="nofollow" title="华盛童装批发行 " target="_blank" href="#" rel="nofollow"><span >华盛童装批发行 </span></a></dd>
																<dd><a rel="nofollow" title="奈仕华童装旗舰店" target="_blank" href="#" rel="nofollow"><span >奈仕华童装旗舰店</span></a></dd>
																<dd><a rel="nofollow" title="斑蒂尼BONDYNI" target="_blank" href="#" rel="nofollow"><span  class="red" >斑蒂尼BONDYNI</span></a></dd>
																<dd><a rel="nofollow" title="童衣阁" target="_blank" href="#" rel="nofollow"><span  class="red" >童衣阁</span></a></dd>
															</dl>
														</div>
													</div>
												</div>
											</div>
										</div>
										<b class="arrow"></b>
									</li>
									<li class="appliance js_toggle relative">
										<div class="category-info">
											<h3 class="category-name b-category-name"><i><img src="<?php echo C('IMG_URL');?>fish.png"></i><a class="ml-22" title="海味、河鲜">海味/河鲜</a></h3>
											<em>&gt;</em></div>
										<div class="menu-item menu-in top">
											<div class="area-in">
												<div class="area-bg">
													<div class="menu-srot">
														<div class="sort-side">
															<dl class="dl-sort">
																<dt><span title="海带丝">海带丝</span></dt>
																<dd><a title="蒸蛋糕" href="#"><span>蒸蛋糕</span></a></dd>
																<dd><a title="脱水蛋糕" href="#"><span>脱水蛋糕</span></a></dd>
																<dd><a title="瑞士卷" href="#"><span>瑞士卷</span></a></dd>
																<dd><a title="软面包" href="#"><span>软面包</span></a></dd>
																<dd><a title="马卡龙" href="#"><span>马卡龙</span></a></dd>
																<dd><a title="千层饼" href="#"><span>千层饼</span></a></dd>
																<dd><a title="甜甜圈" href="#"><span>甜甜圈</span></a></dd>
																<dd><a title="蒸三明治" href="#"><span>蒸三明治</span></a></dd>
																<dd><a title="铜锣烧" href="#"><span>铜锣烧</span></a></dd>
															</dl>
															<dl class="dl-sort">
																<dt><span title="小鱼干">小鱼干</span></dt>
																<dd><a title="蒸蛋糕" href="#"><span>蒸蛋糕</span></a></dd>
																<dd><a title="脱水蛋糕" href="#"><span>脱水蛋糕</span></a></dd>
																<dd><a title="瑞士卷" href="#"><span>瑞士卷</span></a></dd>
																<dd><a title="软面包" href="#"><span>软面包</span></a></dd>
															</dl>
															<dl class="dl-sort">
																<dt><span title="鱿鱼丝">鱿鱼丝</span></dt>
																<dd><a title="蒸蛋糕" href="#"><span>蒸蛋糕</span></a></dd>
																<dd><a title="脱水蛋糕" href="#"><span>脱水蛋糕</span></a></dd>
																<dd><a title="瑞士卷" href="#"><span>瑞士卷</span></a></dd>
																<dd><a title="软面包" href="#"><span>软面包</span></a></dd>
															</dl>
														</div>
														<div class="brand-side">
															<dl class="dl-sort">
																<dt><span>实力商家</span></dt>
																<dd><a rel="nofollow" title="歌芙品牌旗舰店" target="_blank" href="#" rel="nofollow"><span  class="red" >歌芙品牌旗舰店</span></a></dd>
																<dd><a rel="nofollow" title="爱丝蓝内衣厂" target="_blank" href="#" rel="nofollow"><span >爱丝蓝内衣厂</span></a></dd>
																<dd><a rel="nofollow" title="炫点服饰" target="_blank" href="#" rel="nofollow"><span >炫点服饰</span></a></dd>
																<dd><a rel="nofollow" title="雪茵美内衣厂批发" target="_blank" href="#" rel="nofollow"><span >雪茵美内衣厂批发</span></a></dd>
																<dd><a rel="nofollow" title="金钻夫人" target="_blank" href="#" rel="nofollow"><span >金钻夫人</span></a></dd>
																<dd><a rel="nofollow" title="伊美莎内衣" target="_blank" href="#" rel="nofollow"><span  class="red" >伊美莎内衣</span></a></dd>
																<dd><a rel="nofollow" title="粉客内衣旗舰店" target="_blank" href="#" rel="nofollow"><span >粉客内衣旗舰店</span></a></dd>
																<dd><a rel="nofollow" title="泽芳行旗舰店" target="_blank" href="#" rel="nofollow"><span >泽芳行旗舰店</span></a></dd>
																<dd><a rel="nofollow" title="彩婷" target="_blank" href="#" rel="nofollow"><span  class="red" >彩婷</span></a></dd>
																<dd><a rel="nofollow" title="黛兰希" target="_blank" href="#" rel="nofollow"><span >黛兰希</span></a></dd>
																<dd><a rel="nofollow" title="香港优蓓尔防辐射" target="_blank" href="#" rel="nofollow"><span >香港优蓓尔防辐射</span></a></dd>
																<dd><a rel="nofollow" title="蓉莉娜内衣批发" target="_blank" href="#" rel="nofollow"><span >蓉莉娜内衣批发</span></a></dd>
															</dl>
														</div>
													</div>
												</div>
											</div>
										</div>
										<b class="arrow"></b>
									</li>
									<li class="appliance js_toggle relative">
										<div class="category-info">
											<h3 class="category-name b-category-name"><i><img src="<?php echo C('IMG_URL');?>tea.png"></i><a class="ml-22" title="花茶、果茶">花茶/果茶</a></h3>
											<em>&gt;</em></div>
										<div class="menu-item menu-in top">
											<div class="area-in">
												<div class="area-bg">
													<div class="menu-srot">
														<div class="sort-side">
															<dl class="dl-sort">
																<dt><span title="蛋糕">蛋糕</span></dt>
																<dd><a title="蒸蛋糕" href="#"><span>蒸蛋糕</span></a></dd>
																<dd><a title="脱水蛋糕" href="#"><span>脱水蛋糕</span></a></dd>
																<dd><a title="瑞士卷" href="#"><span>瑞士卷</span></a></dd>
																<dd><a title="软面包" href="#"><span>软面包</span></a></dd>
																<dd><a title="马卡龙" href="#"><span>马卡龙</span></a></dd>
																<dd><a title="千层饼" href="#"><span>千层饼</span></a></dd>
																<dd><a title="甜甜圈" href="#"><span>甜甜圈</span></a></dd>
																<dd><a title="蒸三明治" href="#"><span>蒸三明治</span></a></dd>
																<dd><a title="铜锣烧" href="#"><span>铜锣烧</span></a></dd>
															</dl>
															<dl class="dl-sort">
																<dt><span title="蛋糕">点心</span></dt>
																<dd><a title="蒸蛋糕" href="#"><span>蒸蛋糕</span></a></dd>
																<dd><a title="脱水蛋糕" href="#"><span>脱水蛋糕</span></a></dd>
																<dd><a title="瑞士卷" href="#"><span>瑞士卷</span></a></dd>
																<dd><a title="软面包" href="#"><span>软面包</span></a></dd>
																<dd><a title="马卡龙" href="#"><span>马卡龙</span></a></dd>
																<dd><a title="千层饼" href="#"><span>千层饼</span></a></dd>
																<dd><a title="甜甜圈" href="#"><span>甜甜圈</span></a></dd>
																<dd><a title="蒸三明治" href="#"><span>蒸三明治</span></a></dd>
																<dd><a title="铜锣烧" href="#"><span>铜锣烧</span></a></dd>
															</dl>
														</div>
														<div class="brand-side">
															<dl class="dl-sort">
																<dt><span>实力商家</span></dt>
																<dd><a title="今生只围你" target="_blank" href="#" rel="nofollow"><span >今生只围你</span></a></dd>
																<dd><a title="忆佳人" target="_blank" href="#" rel="nofollow"><span  class="red" >忆佳人</span></a></dd>
																<dd><a title="斐洱普斯" target="_blank" href="#" rel="nofollow"><span  class="red" >斐洱普斯</span></a></dd>
																<dd><a title="聚百坊" target="_blank" href="#" rel="nofollow"><span  class="red" >聚百坊</span></a></dd>
																<dd><a title="朵朵棉织直营店" target="_blank" href="#" rel="nofollow"><span >朵朵棉织直营店</span></a></dd>
															</dl>
														</div>
													</div>
												</div>
											</div>
										</div>
										<b class="arrow"></b>
									</li>
									<li class="appliance js_toggle relative last">
										<div class="category-info">
											<h3 class="category-name b-category-name"><i><img src="<?php echo C('IMG_URL');?>package.png"></i><a class="ml-22" title="品牌、礼包">品牌/礼包</a></h3>
											<em>&gt;</em></div>
										<div class="menu-item menu-in top">
											<div class="area-in">
												<div class="area-bg">
													<div class="menu-srot">
														<div class="sort-side">
															<dl class="dl-sort">
																<dt><span title="大包装">大包装</span></dt>
																<dd><a title="蒸蛋糕" href="#"><span>蒸蛋糕</span></a></dd>
																<dd><a title="脱水蛋糕" href="#"><span>脱水蛋糕</span></a></dd>
																<dd><a title="瑞士卷" href="#"><span>瑞士卷</span></a></dd>
																<dd><a title="软面包" href="#"><span>软面包</span></a></dd>
																<dd><a title="马卡龙" href="#"><span>马卡龙</span></a></dd>
																<dd><a title="千层饼" href="#"><span>千层饼</span></a></dd>
																<dd><a title="甜甜圈" href="#"><span>甜甜圈</span></a></dd>
																<dd><a title="蒸三明治" href="#"><span>蒸三明治</span></a></dd>
																<dd><a title="铜锣烧" href="#"><span>铜锣烧</span></a></dd>
															</dl>
															<dl class="dl-sort">
																<dt><span title="两件套">两件套</span></dt>
																<dd><a title="蒸蛋糕" href="#"><span>蒸蛋糕</span></a></dd>
																<dd><a title="脱水蛋糕" href="#"><span>脱水蛋糕</span></a></dd>
																<dd><a title="瑞士卷" href="#"><span>瑞士卷</span></a></dd>
																<dd><a title="软面包" href="#"><span>软面包</span></a></dd>
																<dd><a title="马卡龙" href="#"><span>马卡龙</span></a></dd>
																<dd><a title="千层饼" href="#"><span>千层饼</span></a></dd>
																<dd><a title="甜甜圈" href="#"><span>甜甜圈</span></a></dd>
																<dd><a title="蒸三明治" href="#"><span>蒸三明治</span></a></dd>
																<dd><a title="铜锣烧" href="#"><span>铜锣烧</span></a></dd>
															</dl>
														</div>
														<div class="brand-side">
															<dl class="dl-sort">
																<dt><span>实力商家</span></dt>
																<dd><a title="琳琅鞋业" target="_blank" href="#" rel="nofollow"><span >琳琅鞋业</span></a></dd>
																<dd><a title="宏利鞋业" target="_blank" href="#" rel="nofollow"><span >宏利鞋业</span></a></dd>
																<dd><a title="比爱靓点鞋业" target="_blank" href="#" rel="nofollow"><span >比爱靓点鞋业</span></a></dd>
																<dd><a title="浪人怪怪" target="_blank" href="#" rel="nofollow"><span >浪人怪怪</span></a></dd>
															</dl>
														</div>
													</div>
												</div>
											</div>
										</div>

									</li>
								</ul>
							</div>
						</div>

					</div>
				</div>
				<!--轮播 -->
				<script type="text/javascript">
					(function () {
						$('.am-slider').flexslider();
					});
					$(document).ready(function () {
						$("li").hover(function () {
							$(".category-content .category-list li.first .menu-in").css("display", "none");
							$(".category-content .category-list li.first").removeClass("hover");
							$(this).addClass("hover");
							$(this).children("div.menu-in").css("display", "block")
						}, function () {
							$(this).removeClass("hover")
							$(this).children("div.menu-in").css("display", "none")
						});
					})
				</script>


				<!--小导航 -->
				<div class="am-g am-g-fixed smallnav">
					<div class="am-u-sm-3">
						<a href="sort.html"><img src="<?php echo C('IMG_URL');?>navsmall.jpg" />
								<div class="title">商品分类</div>
							</a>
					</div>
					<div class="am-u-sm-3">
						<a href="#"><img src="<?php echo C('IMG_URL');?>huismall.jpg" />
								<div class="title">大聚惠</div>
							</a>
					</div>
					<div class="am-u-sm-3">
						<a href="#"><img src="<?php echo C('IMG_URL');?>mansmall.jpg" />
								<div class="title">个人中心</div>
							</a>
					</div>
					<div class="am-u-sm-3">
						<a href="#"><img src="<?php echo C('IMG_URL');?>moneysmall.jpg" />
								<div class="title">投资理财</div>
							</a>
					</div>
				</div>

				<!--走马灯 -->

				<div class="marqueen">
					<span class="marqueen-title">商城头条</span>
					<div class="demo">

						<ul>
							<li class="title-first"><a target="_blank" href="#">
									<img src="<?php echo C('IMG_URL');?>TJ2.jpg"></img>
									<span>[特惠]</span>商城爆品1分秒								
								</a></li>
							<li class="title-first"><a target="_blank" href="#">
									<span>[公告]</span>商城与广州市签署战略合作协议
								     <img src="<?php echo C('IMG_URL');?>TJ.jpg"></img>
								     <p>XXXXXXXXXXXXXXXXXX</p>
							    </a></li>

							<div class="mod-vip">
								<div class="m-baseinfo">
									<a href="../person/index.html">
									<img src="<?php echo C('IMG_URL');?>getAvatar.do.jpg">
								</a>
									<em>
									Hi,<span class="s-name">小叮当</span>
									<a href="#"><p>点击更多优惠活动</p></a>									
								</em>
								</div>
								<div class="member-logout">
									<a class="am-btn-warning btn" href="<?php echo U('User/login');?>">登录</a>
									<a class="am-btn-warning btn" href="<?php echo U('User/register');?>">注册</a>
								</div>
								<div class="member-login">
									<a href="#"><strong>0</strong>待收货</a>
									<a href="#"><strong>0</strong>待发货</a>
									<a href="#"><strong>0</strong>待付款</a>
									<a href="#"><strong>0</strong>待评价</a>
								</div>
								<div class="clear"></div>
							</div>

							<li><a target="_blank" href="#"><span>[特惠]</span>洋河年末大促，低至两件五折</a></li>
							<li><a target="_blank" href="#"><span>[公告]</span>华北、华中部分地区配送延迟</a></li>
							<li><a target="_blank" href="#"><span>[特惠]</span>家电狂欢千亿礼券 买1送1！</a></li>

						</ul>
						<div class="advTip"><img src="<?php echo C('IMG_URL');?>advTip.jpg" /></div>
					</div>
				</div>
				<div class="clear"></div>
			</div>
			<script type="text/javascript">
							if ($(window).width() < 640) {
								function autoScroll(obj) {
									$(obj).find("ul").animate({
										marginTop: "-39px"
									}, 500, function () {
										$(this).css({
											marginTop: "0px"
										}).find("li:first").appendTo(this);
									})
								}
								$(function () {
									setInterval('autoScroll(".demo")', 3000);
								})
							}
			</script>
		</div>
		<div class="shopMainbg">
			<div class="shopMain" id="shopmain">

				<!--今日推荐 -->

				<div class="am-g am-g-fixed recommendation">
					<div class="clock am-u-sm-3" ">
							<img src="<?php echo C( 'IMG_URL');?>2016.png "></img>
							<p>今日<br>推荐</p>
						</div>
						<div class="am-u-sm-4 am-u-lg-3 ">
							<div class="info ">
								<h3>真的有鱼</h3>
								<h4>开年福利篇</h4>
							</div>
							<div class="recommendationMain ">
								<img src="<?php echo C( 'IMG_URL');?>tj.png "></img>
							</div>
						</div>						
						<div class="am-u-sm-4 am-u-lg-3 ">
							<div class="info ">
								<h3>囤货过冬</h3>
								<h4>让爱早回家</h4>
							</div>
							<div class="recommendationMain ">
								<img src="<?php echo C( 'IMG_URL');?>tj1.png "></img>
							</div>
						</div>
						<div class="am-u-sm-4 am-u-lg-3 ">
							<div class="info ">
								<h3>浪漫情人节</h3>
								<h4>甜甜蜜蜜</h4>
							</div>
							<div class="recommendationMain ">
								<img src="<?php echo C( 'IMG_URL');?>tj2.png "></img>
							</div>
						</div>

					</div>
					<div class="clear "></div>
					<!--热门活动 -->
					<!--甜点-->
                 
					<div class="am-container ">
						<div class="shopTitle ">
							<h4>后宫</h4>
							<h3>后宫佳丽三千人，铁柱磨成绣花针</h3>
							<div class="today-brands ">
								<a href="# ">元气少女</a>
								<a href="# ">傲娇少女</a>
								<a href="# ">激萌萝莉</a>
								<a href="# ">黑长直御姐</a>
							</div>
							<span class="more ">
                    <a class="more-link " href="# ">更多媳妇儿</a>
                        </span>
						</div>
					</div>
					<div class="am-g am-g-fixed flood method3 ">
						<ul class="am-thumbnails ">
							<?php if(is_array($goods)): foreach($goods as $key=>$v): ?><li>
								<div class="list ">
									<a href="<?php echo U('Goods/detail',array('id'=>$v['goods_id']));?>">
										<img src="<?php echo ($v['goods_small_logo']); ?>" />
										<div class="pro-title "><?php echo ($v['goods_name']); ?></div>
										<span class="e-price "><?php echo ($v['goods_price']); ?></span>
									</a>
								</div>
							</li><?php endforeach; endif; ?>
						</ul>
					</div>
				<div class="footer">
    <p>Copyright &copy; 2017.Company name All rights reserved.More information <a href="https://www.baidu.com/s?wd=falcom">Falcom</a></p>
</div>

<link rel="stylesheet" type="" href="<?php echo C('CSS_URL');?>bootstrap.css">
<script src="<?php echo C('JS_URL');?>jquery.js"></script>
<script src="<?php echo C('JS_URL');?>bootstrap.js"></script>
<script src="<?php echo C('LAY_URL');?>layer.js"}></script>
				</div>
			</div>
		</div>
		</div>
	
		<script type="text/javascript " src="<?php echo C( 'BAS_URL');?>js/quick_links.js "></script>
	</body>

</html>