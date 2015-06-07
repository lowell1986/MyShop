<?php
namespace Admin\Controller;
use Think\Controller;

define(ONE_PAGE_SHOW , 10);//每页显示条数
class UserManagerController extends Controller {
	public function showUserList(){
		$userManager = M("User");
		$total_count = $userManager->count();
		$page = new \My\Page($total_count , 10);

		$page->setConfig('prev',  '<span aria-hidden="true">上一页</span>');//上一页
		$page->setConfig('next',  '<span aria-hidden="true">下一页</span>');//下一页
		$page->setConfig('first', '<span aria-hidden="true">首页</span>');//第一页
		$page->setConfig('last',  '<span aria-hidden="true">尾页</span>');//最后一页
		$page->setConfig ( 'theme', '<li><a>当前%NOW_PAGE%/%TOTAL_PAGE%</a></li>  %UP_PAGE% %FIRST% %LINK_PAGE% %DOWN_PAGE% %END%');
		$show = $page->show();
		$list = $userManager->order('id')->limit($page->firstRow.','.$page->listRows)->select();
		$this->assign('list',$list);// 赋值数据集
		$this->assign('page',$show);// 赋值分页输出
		$this->display(); // 输出模板
		

		/*
		$userManager = M("User");
		
		$total_count = (int)($userManager->count());
		
		//共有几页
		$page_count = ceil($total_count / ONE_PAGE_SHOW);
		/*
		if($total_count % ONE_PAGE_SHOW){//有余数
			$page_count = $total_count / ONE_PAGE_SHOW + 1;
		}else{
			$page_count = $total_count / ONE_PAGE_SHOW;
		}
		
		//目前页数
		if($_GET['p']){
			$now_page = (int)$_GET['p'];
		}
		else{
			$now_page = 1;
		}
		
		//第一页

		$first_page = 1;
		
		//最后一页
		$end_page = $page_count;
		
		//上一页
		if($now_page > $first_page){
			$previous_page = $now_page - 1;
		}
		else{
			$previous_page = $first_page; 
		}
		
		//下一页
		if($now_page == $end_page){
			$next_page = $end_page;
		}
		else{
			$next_page = $now_page + 1;
		}
		
		//获得当前页码的内容
		$now_page_content_list = $userManager->page($now_page , ONE_PAGE_SHOW)->select();
		
		//dump($previous_page);
		//将页码分配到html
		$this->assign('total_count' , $total_count);
		$this->assign('previous_page' , $previous_page);
		$this->assign('next_page' , $next_page);
		$this->assign('page_count' , $page_count);
		$this->assign('now_page_content_list' , $now_page_content_list);
		$this->display();
		*/
		
		
	
	}
	
}