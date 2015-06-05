<?php
namespace Admin\Model;
use Think\Model;
class UserModel extends Model{
	public function getUserList(){
			
		$data = $this->order('regist_time')->limit(10)->select();
		return $data;
	}
	public function getPage($start , $one_page_display_num){
		
		$data = $this->page($start , $one_page_display_num)->select();
	
		return $data;
	}
}