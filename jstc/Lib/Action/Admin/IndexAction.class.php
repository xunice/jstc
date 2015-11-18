<?php
// 本类由系统自动生成，仅供测试用途
class IndexAction extends Action {
    public function index(){
    	if(session('?username')){
    		$this->username = session('username');//前台显示登录用户名
        	$this->logout =session('logout');
             $data['id'] = session('userId');
            $user=M("user")->where($data)->select();
            $this->assign('user',$user[0]);	
    		$this->display();
    	}
    	else{
    		header("Content-Type:text/html; charset=utf-8");
    		redirect('./admin/login',0,'请先登录！');
    	}
    	
    }
    
}