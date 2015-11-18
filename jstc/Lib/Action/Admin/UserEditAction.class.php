<?php
// 本类由系统自动生成，仅供测试用途
class UserEditAction extends Action {
    public function index(){
    	if(session('?username')){
            //$condition['id']=$_get['id'];
            //$this->num=$_GET['id'];
            $id['id']=$_GET['id'];
    		$user=M("user")->where($id)->select();
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
    public function save(){
        if(session('?username')){
            $this->username = session('username');//前台显示登录用户名
            $this->logout =session('logout');   

            $data['id']=$_GET['id'];
            $data['username']=$_POST['username'];
            $data['password']=$_POST['password'];
            if($User=M("user")->save($data)){
                $this->success('数据保存成功！');
            }
            else{
                $this->error('数据写入错误！');
            }
            
            
           
        }
        else{
            header("Content-Type:text/html; charset=utf-8");
            redirect('./login',0,'请先登录！');
        }

    }
   
    
}