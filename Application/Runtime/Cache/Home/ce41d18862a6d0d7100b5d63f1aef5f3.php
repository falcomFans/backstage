<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

	<title>购物车页面</title>

	<link href="<?php echo C('AMZ_URL');?>assets/css/amazeui.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo C('BAS_URL');?>css/demo.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo C('CSS_URL');?>cartstyle.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo C('CSS_URL');?>optstyle.css" rel="stylesheet" type="text/css" />

	<script type="text/javascript" src="<?php echo C('JS_URL');?>jquery.js"></script>

</head>

<body>

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


	<div class="clear"></div>

	<!--购物车 -->
	<div class="concent">
		<div id="cartTable">
			<div class="cart-table-th">
				<div class="wp">
					<div class="th th-chk">
						<div id="J_SelectAll1" class="select-all J_SelectAll">

						</div>
					</div>
					<div class="th th-item">
						<div class="td-inner">商品信息</div>
					</div>
					<div class="th th-price">
						<div class="td-inner">单价</div>
					</div>
					<div class="th th-amount">
						<div class="td-inner">数量</div>
					</div>
					<div class="th th-sum">
						<div class="td-inner">金额</div>
					</div>
					<div class="th th-op">
						<div class="td-inner">操作</div>
					</div>
				</div>
			</div>
			<div class="clear"></div>

			<div class="clear"></div>

				<div class="bundle  bundle-last ">
					<div class="bundle-hd">
						<div class="bd-promos">		
							<span class="list-change theme-login">编辑</span>
						</div>
					</div>
					<div class="clear"></div>
					<div class="bundle-main">
						<?php if(is_array($cartinfo)): foreach($cartinfo as $key=>$v): ?><ul class="item-content clearfix">
							<li class="td td-chk">
								<div class="cart-checkbox ">
									<input class="check" id="J_CheckBox_170769542747" name="items[]" value="170769542747" type="checkbox">
									<label for="J_CheckBox_170769542747"></label>
								</div>
							</li>
							<li class="td td-item">
								<div class="item-pic">
									<a href="<?php echo U('Goods/detail',array('id'=>$v['goods_id']));?>" target="_blank"  class="J_MakePoint" data-point="tbcart.8.12">
												<img src="<?php echo ($v['logo']); ?>" class="itempic J_ItemImg"></a>
								</div>
								<div class="item-info">
									<div class="item-basic-info">
										<a href="<?php echo U('Goods/detail',array('id'=>$v['goods_id']));?>" target="_blank" title="<?php echo ($v['good_name']); ?>" class="item-title J_MakePoint" data-point="tbcart.8.11"><?php echo ($v['good_name']); ?></a>
									</div>
								</div>
							</li>
							<li class="td td-info">
								<div class="item-props item-props-can">
									<strong>仅此一天，脱离单身狗！！！</strong>
								</div>
							</li>
							<li class="td td-price">
								<div class="item-price price-promo-promo">
									<div class="price-content">
										<div class="price-line">
											<em class="price-original"><?php echo ($v['goods_price']*2); ?></em>
										</div>
										<div class="price-line">
											<em class="J_Price price-now" tabindex="0"><?php echo ($v['goods_price']); ?></em>
										</div>
									</div>
								</div>
							</li>
							<li class="td td-amount">
								<div class="amount-wrapper ">
									<div class="item-amount ">
										<div class="sl">
											<input class="min am-btn" name="" type="button" value="-" />
											<input class="text_box" name="" type="text" value="<?php echo ($v['goods_buy_number']); ?>" style="width:30px;" />
											<input class="add am-btn" name="" type="button" value="+" />
										</div>
									</div>
								</div>
							</li>
							<li class="td td-sum">
								<div class="td-inner">
									<em tabindex="0" class="J_ItemSum number"><?php echo ($v['goods_total_price']); ?></em>
								</div>
							</li>
							<li class="td td-op">
								<div class="td-inner">
									<a title="移入收藏夹" class="btn-fav" href="#">
                  移入收藏夹</a>
									<a href="javascript:;" data-point-url="#" class="delete">
                  删除</a>
								</div>
							</li>
						</ul><?php endforeach; endif; ?>
					</div>
				</div>
			</tr>
		</div>
		<div class="clear"></div>

		<div class="float-bar-wrapper">
			<div id="J_SelectAll2" class="select-all J_SelectAll">
				<div class="cart-checkbox">
					<input class="check-all check" id="J_SelectAllCbx2" name="select-all" value="true" type="checkbox">
					<label for="J_SelectAllCbx2"></label>
				</div>
				<span>全选</span>
			</div>
			<div class="operations">
				<a href="#" hidefocus="true" class="deleteAll">删除</a>
				<a href="#" hidefocus="true" class="J_BatchFav">移入收藏夹</a>
			</div>
			<div class="float-bar-right">
				<div class="amount-sum">
					<span class="txt">已选商品</span>
					<em id="J_SelectedItemsCount"><?php echo ($number_price['number']); ?></em><span class="txt">件</span>
					<div class="arrow-box">
						<span class="selected-items-arrow"></span>
						<span class="arrow"></span>
					</div>
				</div>
				<div class="price-sum">
					<span class="txt">合计:</span>
					<strong class="price">¥<em id="J_Total"><?php echo ($number_price['price']); ?></em></strong>
				</div>
				<div class="btn-area">
					<a href="<?php echo U('pay');?>" id="J_Go" class="submit-btn submit-btn-disabled" aria-label="请注意如果没有选择宝贝，将无法结算">
								<span>结&nbsp;算</span></a>
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

	</div>

	<!--操作页面-->

	<div class="theme-popover-mask"></div>

	<div class="theme-popover">
		<div class="theme-span"></div>
		<div class="theme-poptit h-title">
			<a href="javascript:;" title="关闭" class="close">×</a>
		</div>
		<div class="theme-popbod dform">
			<form class="theme-signin" name="loginform" action="" method="post">

				<div class="theme-signin-left">

					<li class="theme-options">
						<div class="cart-title">颜色：</div>
						<ul>
							<li class="sku-line selected">12#川南玛瑙<i></i></li>
							<li class="sku-line">10#蜜橘色+17#樱花粉<i></i></li>
						</ul>
					</li>
					<li class="theme-options">
						<div class="cart-title">包装：</div>
						<ul>
							<li class="sku-line selected">包装：裸装<i></i></li>
							<li class="sku-line">两支手袋装（送彩带）<i></i></li>
						</ul>
					</li>
					<div class="theme-options">
						<div class="cart-title number">数量</div>
						<dd>
							<input class="min am-btn am-btn-default" name="" type="button" value="-" />
							<input class="text_box" name="" type="text" value="1" style="width:30px;" />
							<input class="add am-btn am-btn-default" name="" type="button" value="+" />
							<span class="tb-hidden">库存<span class="stock">1000</span>件</span>
						</dd>

					</div>
					<div class="clear"></div>
					<div class="btn-op">
						<div class="btn am-btn am-btn-warning">确认</div>
						<div class="btn close am-btn am-btn-warning">取消</div>
					</div>

				</div>
				<div class="theme-signin-right">
					<div class="img-info">
						<img src="<?php echo C('IMG_URL');?>kouhong.jpg_80x80.jpg" />
					</div>
					<div class="text-info">
						<span class="J_Price price-now">¥39.00</span>
						<span id="Stock" class="tb-hidden">库存<span class="stock">1000</span>件</span>
					</div>
				</div>

			</form>
		</div>
	</div>
	<!--引导 -->
	<div class="navCir">
		<li><a href="home2.html"><i class="am-icon-home "></i>首页</a></li>
		<li><a href="sort.html"><i class="am-icon-list"></i>分类</a></li>
		<li class="active"><a href="shopcart.html"><i class="am-icon-shopping-basket"></i>购物车</a></li>
		<li><a href="../person/index.html"><i class="am-icon-user"></i>我的</a></li>
	</div>
</body>

</html>