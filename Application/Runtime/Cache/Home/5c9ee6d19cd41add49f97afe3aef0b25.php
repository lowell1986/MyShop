<?php if (!defined('THINK_PATH')) exit();?><html>
<script type="text/javascript" src="/myshop/Public/Js/jquery-2.1.4.js"></script>
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

<style type="text/css">
* {
	margin: 0;
	padding: 0;
}
div {
	display: block;
}
body{
font: 12px/150% Arial,Verdana,"\5b8b\4f53";
}
#content{
margin: 0;
padding: 0;
}

#content .login-wrap{
	position: relative;
	height: 475px;
	margin: 10px 0 20px;
}
.w{
	width: 990px;
	margin: auto;
}
.login-form{
	float: right;
	top:40px;
	position: relative;
	z-index: 4;
	width: 306px;
	background: #fff;
	padding: 20px;
	overflow: visible;
}
.mt{
	display: block;
	width: 306px;
	overflow: visible;
	height: 27px;
}
.mt h1{
	position: relative;
	height: 27px;
	line-height: 27px;
	top: -5px;
	float: left;
	color: #666;
	font-family: '\5fae\8f6f\96c5\9ed1';
	font-size: 20px;

}
.mt .regist-link{
	float:right

}
.login-box{

}
#loginname , #loginpwd{
	border: 1px solid #bdbdbd;
height: 38px;
width: 304px;
margin-bottom: 20px;
}
.login-btn{
	border: 1px solid #cb2a2d;
margin: auto;
height: 33px;
position: relative;
}

#loginsubmit{
	border: 1px solid #e85356;
display: block;
width: 302px;
background: #e4393c;
height: 31px;
line-height: 31px;
color: #fff;
font-size: 20px;
font-family: '\5fae\8f6f\96c5\9ed1';
text-align: center;
cursor: pointer;
}

.login-banner{
position: absolute;
left: 0;
top: 0;
width: 100%;
height: 475px;
background: #e93854;

}
.i-inner{
position: relative;
z-index: 3;
height: 475px;
}
</style>
<body>
<div id="content">

	<div class = "login-wrap">
	
		<div class = "w">
		
		
		
			<div class="login-form">
				<div class="login-box">
					<div class="mt">
						<h1>京东会员</h1>
						<div class="regist-link">
							<a href="" target="_blank">立即注册</a>
						</div>
						
					</div>
					<div class="msg-wrap">
					公共场所不建议自动登录,以防账号丢失
					</div>
					<div class="mc">
						<div class="form">
							<form id = "login_form" method="post" action="<?php echo U('Home/User/login');?>">
								<div class="username">
									<input id="loginname" name = "loginname" type="text" placeholder="请填写用户名"/>
								</div>
								<div class="userpwd">
									<input id="loginpwd" name = "loginpwd" type="text" placeholder="密码"/>
								</div>
								<div class="login-btn">
									<a herf="javascript:;" id="loginsubmit" tabindex="6" >登录</a>
								</div>	
							</form>
						</div>
						

							
						</div>
					</div>
				</div>
			</div>
				<div class = "login-banner" style="background-color: #5e8f36">
					<div class ="w">
						<div id="banner-bg" clstag="pageclick|keycount|20150112ABD|46" class="i-inner" style="background: url(/myshop/Public/img/554ad450Na30d68d6.jpg) 0px 0px no-repeat;background-color: #6975e1"></div>
						</div>
					</div>
				</div>
		
			</div>
</div>
															
							
															



</body>
    <script>
		$(document).ready(function(){
				$("#loginsubmit").click(function(){
					$post_data = $("#login_form").serialize() ;
					
					$submit_page = $("#reg_form").attr("action");
					$.post($submit_page , $post_data ,function($data){
					    console.log($data);
						$("#notice").text($data['msg']);
					});
			
				});
			});
    </script>
	
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