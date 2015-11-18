<?php
// 本类由系统自动生成，仅供测试用途
class DetailAction extends Action {
    public function index(){
    	if(session('?userName')){
            $this->userName = session('userName');//前台显示登录用户名
            $this->logout =session('logout');
            $userId['userId']= session('userId');
        }



        $type=M("type")->select();                       
        $this->assign('type',$type);

    
         $data['id'] = $_GET["_URL_"][2];
         
                        
         $qipao=M("qipao")->where($data)->select();                       
         $this->assign('qipao',$qipao[0]);

          $user['id'] = $qipao[0]['userid'];
         $User=M("User")->where($user)->select();
         $this->assign('user',$User[0]); 
        // dump($User[0]);
         $this->display();
        	
    }
}