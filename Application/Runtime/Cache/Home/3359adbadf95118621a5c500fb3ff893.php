<?php if (!defined('THINK_PATH')) exit();?><html>
<head>
    <script type="text/javascript" src="/thinkPHP/Public/Js/jquery-2.1.4.js"></script>
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
</head>

<body>
<p id="notice"></p>
<form id="reg_form" method="post" action="<?php echo U('Home/User/register');?>">

    用户名:<input type="text" name="user_name">
    密码: <input type="password" name = "password">
    确认密码: <input type="password" name = "password2">
    <input id="submit" type="button" value="注册">
</form>

</body>
</html>