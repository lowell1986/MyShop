<?php
namespace Home\Model;
use Think\Model;
class UserModel extends Model {

    protected $_validate = array(

        array('username','','帐号名称已经存在!' , 0 , 'unique' , 1 ), // 在新增的时候验证name字段是否唯一
        array('username','/^[a-zA-Z0-9_-]{4,8}$/','账号名不合法' , 1 , 'regex' , 1 ), // 在新增的时候验证name字段是否合法
        // array('value',array(1,2,3),'值的范围不正确！',2,'in'), // 当值不为空的时候判断是否在一个范围内
        array('password2','password','两次密码不正确',1,'confirm'), // 验证确认密码是否和密码一致
        array('password','/[a-zA-Z0-9_-]{4,8}$/','密码不合法' , 1 , 'regex' , 1),
    );

    protected $_map = array(
        'user_name' => 'username',
    );

    protected $_auto = array(
        array('password' , 'md5' , 3 , 'function'),
    );

    public function login(){

       // $this->show('login page');
        if(I('post.username') != ''){
            $notice = array(
                'status' => 0,
                'msg' => '登陆成功',
            );

        }
        else{
            $notice = array(
                'status' => 1,
                'msg' => '登陆失败',
            );

        }
        return $notice;
    }

    public function register(){

		
       // $user = D('User');
        if( !$this -> create()){
            exit($this -> getError());
        }
        else{
            $this->add();
            return '注册成功';
        }


    }

}