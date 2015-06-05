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
			
<div class="list-group">

  <!--<a href="#" class="list-group-item active accordion-toggle" data-toggle="collapse" data-parent="#list-group" href="#11">
    会员管理-->
	
	<a class=" list-group-item active accordion-toggle" data-toggle="collapse" data-parent="#list-group" href="#menu" >
	 会员管理
  </a>

  <div id="menu" class="collapse in">		
  <a href="#" class="list-group-item id="11">&nbsp&nbsp&nbsp&nbsp会员编辑</a>
  <a href="#" class="list-group-item">&nbsp&nbsp&nbsp&nbsp待定</a>
  <a href="#" class="list-group-item">&nbsp&nbsp&nbsp&nbsp待定</a>
  <a href="#" class="list-group-item">&nbsp&nbsp&nbsp&nbsp待定</a>
  </div>
</div>



		</div>
		<div class="right_content col-md-10">
			

<table class="table table-bordered table-hover">
  <thead>

	<th>ID</th>
	<th>用户名</th>
	<th>登录IP</th>
	<th>注册时间</th>
	<th>最后登录时间</th>
  </thead>
  <tbody>
  
  <?php if(is_array($now_page_content_list)): foreach($now_page_content_list as $key=>$user): ?><tr>
		<td><?php echo ($user["id"]); ?></td>
		<td><?php echo ($user["username"]); ?></td>
		<td><?php echo ($user["ip"]); ?></td>
		<td><?php echo ($user["regist_time"]); ?></td>
		<td><?php echo ($user["last_time"]); ?></td>
	</tr><?php endforeach; endif; ?>

  </tbody>

</table>

<nav align="center">
  <ul class="pagination">
	 
    <li>
      <a href="/myshop/index.php/Admin/UserManager/showUserList/p/<?php echo ($previous_page); ?>" aria-label="Previous">
        <span aria-hidden="true">上一页</span>
      </a>
    </li>

	<?php $__FOR_START_9724__=1;$__FOR_END_9724__=$page_count+1;for($i=$__FOR_START_9724__;$i < $__FOR_END_9724__;$i+=1){ ?><li><a href="/myshop/index.php/Admin/UserManager/showUserList/p/<?php echo ($i); ?>"><?php echo ($i); ?></a></li><?php } ?>
    <li>
      <a href="/myshop/index.php/Admin/UserManager/showUserList/p/<?php echo ($next_page); ?>" aria-label="Next">
        <span aria-hidden="true">下一页</span>
      </a>
	   <li>
	   <button type="button" class="btn btn-success " >查询到<?php echo ($total_count); ?>个会员</button>
		<!--<span> 查询到<?php echo ($total_count); ?>个会员 </span> -->
	</li>
    </li>
  </ul>
 
</nav>



		</div>
		
		
	</div>
	
	
	
	<div class="container-fluid footer">
		下部信息区
	</div>
	
 
  

<script src= "/myshop/Public/js/jquery-2.1.4.js" type="text/javascript"></script>
<script src= "/myshop/Public/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>

</body>
</html>