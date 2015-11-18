<?php
// 
class IndexAction extends Action {
    public function index(){
    	if(session('?userName')){
            $this->userName = session('userName');//前台显示登录用户名
            $this->logout =session('logout');
            $userId['userId']= session('userId');
        }

        //品牌
        $data['tid'] = 22;
        $type=M("type")->where($data)->select();                       
        $this->assign('type',$type);
        //dump($type);


        $qipaos=M("qipao")->select();                       
        $this->assign('qipaos',$qipaos);

        //展示
        $group['group'] = 0;
        $qipaoviews=M('qipao')->where($group)->select();
        $this->assign('qipaoviews',$qipaoviews);
       
        //竞赛
        $group['group'] = 1;
        $qipaojingsai=M('qipao')->where($group)->select();
        $this->assign('qipaojingsai',$qipaojingsai);
        //女子
        $group['group'] = 2;
        $qipaowoman=M('qipao')->where($group)->select();
        $this->assign('qipaowoman',$qipaowoman);

        $this->display(); 	

    }

}