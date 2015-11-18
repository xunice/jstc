<?php
// 本类由系统自动生成，仅供测试用途
class UserAction extends Action {
    public function index(){
    	if(session('?username')){
    		$user=M("user")->select();
            $this->assign('user',$user);
            $this->username = session('username');//前台显示登录用户名
            $this->logout =session('logout');   
    		$this->display();
    	}
    	else{
    		header("Content-Type:text/html; charset=utf-8");
    		redirect('./login',0,'请先登录！');
    	}
    	
    }
    
    public function del(){
        $condition['id'] = $_GET["_URL_"][4];
        $id = $_GET["_URL_"][4];
        $user=M("user");
        if($list=$user->where($condition)->delete()){
            $this->success('删除成功！');

        }
        else{
             $this->error('啊哦，删除失败!');
        }

    }
    public function checkup(){
        $condition['id'] = $_GET["_URL_"][4];
        $id = $_GET["_URL_"][4];
        $data['status']=1;
        $user=M("user");
        if($list=$user->where($condition)->save($data)){
            $this->success('审核成功！');

        }
        else{
             $this->error('啊哦，审核失败!');
        }
    }
    
}