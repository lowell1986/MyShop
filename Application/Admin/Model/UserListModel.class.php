<?php
namespace Admin\Model;
use Think\Model;
class UserModel extends Model{
	public function getUserList(){
			$User = M("User");
			$data = $User->order('regist_time')->limit(10)->select();
			if(!$data){
				return $data;
			}
		
	}

}