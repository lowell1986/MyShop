<?php
namespace Admin\Model;
use Think\Model;
class UserModel extends Model{
	public function getUserList(){
			
		$data = $this->order('regist_time')->limit(10)->select();
		return $data;
	}
	public function getPage($user_count , $one_page_display_count){
		
		$data = $this->page(user_count , $one_page_display_count)->select();
	
		dump($data);
		return $data;
	}
}