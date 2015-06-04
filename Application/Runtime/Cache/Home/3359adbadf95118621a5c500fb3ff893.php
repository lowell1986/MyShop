<?php if (!defined('THINK_PATH')) exit();?><html>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
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


<body>

<p id="notice"></p>
<form id="reg_form" method="post" action="<?php echo U('Home/User/register');?>">

    用户名:<input type="text" name="user_name">
    密码: <input type="password" name = "password">
    确认密码: <input type="password" name = "password2">
    <input id="submit" type="button" value="注册">
</form>

</body>
   
    <script>
        $(document).ready(function(){
            $("#submit").click(function(){
                $post_data = $("#reg_form").serialize() ;
                $submit_page = $("#reg_form").attr("action");
                $.post($submit_page , $post_data ,function($data){
                   console.log($data);
                    $("#notice").text($data['msg']);
                });
              //console.log($submit_page);
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