<?php
namespace Admin\Controller;
use Think\Controller;
class UserController extends Controller {
	public function getUserList(){
		$user_list = D("User")->getUserList();
		
		$this->assign('user_list', $user_list);
		$this->display();
		
	}
}