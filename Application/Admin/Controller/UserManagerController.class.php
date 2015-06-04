<?php
namespace Admin\Controller;
use Think\Controller;
define(ONE_PAGE_SHOW , 3);
class UserManagerController extends Controller {
	public function showUserList(){
		if($_GET['p']){
			
			print('有P');
		}
		else{
			print('没有P');
		}
		$userManager = D("User");
		$user_list = $userManager->getUserList();
		$user_count = (int)($userManager->count());
		
		$pagin = 0;
		if($user_count % ONE_PAGE_SHOW){//有余数
			$pagin = $user_count % ONE_PAGE_SHOW + 1;
		}else{
			$pagin = $user_count;
		}
	
		
	
		print(  $pagin );
		//$pagin = $userManager->getPage($user_count , 3);
		$this->assign('pagin', $pagin);
		$this->assign('UserList', $user_list);
		
		$this->display();
	}
	
}