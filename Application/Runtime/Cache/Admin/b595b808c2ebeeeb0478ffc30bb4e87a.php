<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title> 后台控制系统 </title>
<link rel="stylesheet" href="/myshop/Public/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="/myshop/Public/css/tpl_base.css">
</head>
<body>


	头部
	<nav class="navbar navbar-inverse ">
		  <div class="container">
			<div class="navbar-header">
			  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			  </button>
			  <a class="navbar-brand" href="<?php echo U('Admin/Index/index');?>">主页</a>
			</div>
			<div id="navbar" class="collapse navbar-collapse">
			  <ul class="nav navbar-nav">
				<li class="active"><a href="<?php echo U('Admin/UserManager/showUserList');?>">会员管理</a></li>
				<li><a href="#about">商品管理</a></li>
				<li><a href="#contact">关于公司</a></li>
			  </ul>
			</div><!--/.nav-collapse -->
		  </div>
	</nav>
	
	
	<div class="container-fluid">
		<div class="left_navi col-md-2">
			左侧导航栏
		</div>
		<div class="right_content col-md-10">
			右侧内容区
		</div>
		
		
	</div>
	
	
	
	<div class="container-fluid footer">
		下部信息区
	</div>
	
 
  

<script src= "/myshop/Public/js/jquery-2.1.4.js" type="text/javascript"></script>
<script src= "/myshop/Public/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>

</body>
</html>