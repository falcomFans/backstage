<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>后台页面左侧二级折叠菜单</title>

<link href="<?php echo C('PUBLIC');?>css/menu.css" rel="stylesheet" type="text/css" />

</head>
<body>

<div class="box">
	<h2>折叠菜单</h2>
	<ul class="menu">
		<li class="level1"><a href="#none">管理首页</a></li>
		<li class="level1">
			<a href="#">帖子管理</a>
			<ul class="level2">
				<li><a href="<?php echo U('Article/showList');?>" target="frame_right">帖子列表</a></li>
				<li><a href="#none">用户购卡申请</a></li>
				<li><a href="#none">用户课程变更情况</a></li>
			</ul>
		</li>
		<li class="level1">
			<a href="#none">课程管理</a>
			<ul class="level2">
				<li><a href="#none">课程列表</a></li>
				<li><a href="#none">添加课程</a></li>
				<li><a href="#none">添加模块或单元</a></li>
				<li><a href="#none">修改模块或单元</a></li>
			</ul>
		</li>
		<li class="level1">
			<a href="#none">基础数据管理</a>
			<ul class="level2">
				<li><a href="#none">学科管理</a></li>
				<li><a href="#none">系列管理</a></li>
				<li><a href="#none">学段管理</a></li>
				<li><a href="#none">年份管理</a></li>
			</ul>
		</li>  
		<li class="level1"><a href="#none">课程评论管理</a></li>  
		<li class="level1">
			<a href="#none">信息管理</a>
			<ul class="level2">
				<li><a href="#none">同步动态</a></li>
				<li><a href="#none">常见问题</a></li>
				<li><a href="#none">站内消息管理</a></li>      
			</ul>
		</li> 
		<li class="level1">
			<a href="#none">数据统计</a>
			<ul class="level2">
				<li><a href="#none">总体统计</a></li>
				<li><a href="#none">课程销售统计</a></li>
				<li><a href="#none">课程学习统计</a></li> 
				<li><a href="#none">课程按日期等统计</a></li>
				<li><a href="#none">课程按小时统计</a></li>     
			</ul>
		</li> 
	</ul>
</div>

<script type="text/javascript" src="<?php echo C('PUBLIC');?>js/menu.js"></script>
<script src="http://www.mycodes.net/<?php echo C('PUBLIC');?>js/tongji.js"></script>
<script src="http://www.mycodes.net/<?php echo C('PUBLIC');?>js/youxia.js" type="text/javascript"></script>
</body>
</html>