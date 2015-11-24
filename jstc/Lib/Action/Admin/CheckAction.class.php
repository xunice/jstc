<?php
// 本类由系统自动生成，仅供测试用途
class CheckAction extends Action {
    public function index(){
        $User=M("user");
        //多字段查询
        $condition['username']=$_POST['username'];
        $condition['password']=$_POST['password'];
        $condition['status']=1;
        if($list=$User->where($condition)->select() ){
               session('username',$condition['username']); //讴置session    
               session('userId',$list[0]['id']); //讴置session     
               session('logout','[退出]'); //设置session   
               redirect('../admin',0,'请先登录！');          
        }
        else{
        $this->error('帐号或密码错误!');
        }
    }

    
}