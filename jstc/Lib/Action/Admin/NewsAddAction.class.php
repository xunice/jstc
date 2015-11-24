<?php
// 本类由系统自动生成，仅供测试用途
class NewsAddAction extends Action {
    public function index(){
     if(session('?username')){
        $this->username = session('username');//前台显示登录用户名
          $this->logout =session('logout'); 
           $userId['userId']= session('userId');
        $this->assign('userId',$userId['userId']);// 赋值数据集
        $menu=M("menu")->where($data)->select();
            $this->assign('menu',$menu);

            $datas['fid'] = 0;
            $menus=M("menu")->where($datas)->select();
            $this->assign('menus',$menus);

        $this->display();
      }
      else{
        header("Content-Type:text/html; charset=utf-8");
        redirect('./admin/login',0,'请先登录！');
      }
    }

    public function add(){
        $news = D("news");
        if ($vo = $news->create()) {
            $news->createTime = date("Y-m-d");
            $news->userid = session('userId');
            $news->username = session('username');
            $list = $news->add();
            if ($list !== false) {
                $this->success('数据保存成功！');
            } else {
                $this->error('数据写入错误！');
            }
        } else {
            $this->error($User->getError());
        }
    }
    
}