<?php
// 本类由系统自动生成，仅供测试用途
class RackAction extends Action {
    public function index(){
    	if(session('?username')){
    		$this->username = session('username');//前台显示登录用户名
    		$this->logout =session('logout');

        //分页
        $rack = M('rack'); // 实例化Data数据对象
        import('ORG.Util.Page');// 导入分页类
        $count      = $rack->count();// 查询满足要求的总记录数
        $Page       = new Page($count,30);// 实例化分页类 传入总记录数
        // 进行分页数据查询 注意page方法的参数的前面部分是当前的页数使用 $_GET[p]获取
        $nowPage = isset($_GET['p'])?$_GET['p']:1;
        $list = $rack->order('id')->page($nowPage.','.$Page->listRows)->select();
        $show       = $Page->show();// 分页显示输出
        $this->assign('rack',$show);// 赋值分页输出
        $this->assign('racks',$list);// 赋值数据集
        $this->display(); // 输出模板

            // $group['group'] = 2;                  
            // $qipaos=M("qipao")->where($group)->select();                      
            // $this->assign('qipaos',$qipaos);
            // $this->display();
    	}
    	else{
    	 header("Content-Type:text/html; charset=utf-8");
    	 
    		redirect('login',0,'请先登录！');
    	}
        	
    }
}