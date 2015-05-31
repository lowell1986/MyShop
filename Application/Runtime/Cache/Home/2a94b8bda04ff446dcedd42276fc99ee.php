<?php if (!defined('THINK_PATH')) exit();?><html>
<Head>
<style type="text/css">
.w {
width: 990px;
margin: 0 auto;
}
#logo {
position: relative;
width: 300px;
margin: 10px 0 0 ;
height: 60px;
}
a img {
	border:0;
}
#logo b{
	display: block;
	width:110px;
	height: 40px;
	position: absolute;
	right: 0;
	top: 10px;
	background: url(/myshop/Public/img/l-icon.png) no-repeat;
}
</style>
<div class= "w">
<div id="logo">
<img src="/myshop/Public/img/logo-201305-b.png">
<b></b>
</div>
</div>

</Head>

<body>
<style type="text/css">
body{
font: 12px/150% Arial,Verdana,"\5b8b\4f53";
}

</style>
<form>
    <a href="<?php echo U ('Home/User/login');?>">登陆</a>
    <a href="<?php echo U ('Home/User/register');?>">注册</a>

</form>
</body>
<footer>
<style type="text/css">

.w {
width: 990px;
margin: 0 auto;

}
#footer{
	padding-bottom: 30px;
	text-align: center;
}
#footer .links a{
	color: #666;
	text-decoration: none;
	margin: 0 10px;
}
</style>
<div class="w">
	<div id="footer">
		<div class="links">
		
			<a rel="nofollow" target="_blank" href="#">
			关于我们
			</a>
			|
			<a rel="nofollow" target="_blank" href="#">
			联系我们
			</a>
			|
			<a rel="nofollow" target="_blank" href="#">
			人才招聘
			</a>
			|
			<a rel="nofollow" target="_blank" href="#">
			友情链接
			</a>
		</div>
		<div class="copyright">
			copyright@2015&nbsp;huwei
			
		</div>
	</div>
</div>
</footer>
</html>