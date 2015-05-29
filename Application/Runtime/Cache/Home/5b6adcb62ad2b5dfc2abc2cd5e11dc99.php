<?php if (!defined('THINK_PATH')) exit();?><html>
<body>
<form action="<?php echo U('Home/Login/login');?>"  method="post">
    用户名:<input type="text" name="username">
    密码:<input type="password" name="userpd">
    <input type="submit" value="登陆">
</form>
</body>
</html>