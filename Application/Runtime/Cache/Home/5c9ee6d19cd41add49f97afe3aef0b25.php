<?php if (!defined('THINK_PATH')) exit();?><html>
<body>
<form method="post" action="<?php echo U('Home/User/login');?>">

    用户名:<input type="text" name="username">
    密码: <input type="text" name = "userpd">
    <input type="submit" value="登陆">
</form>

</body>
</html>