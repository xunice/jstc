<?php
// 本类由系统自动生成，仅供测试用途
class TypeEditAction extends Action {
    public function index(){
    	if(session('?username')){
            $data['id']=$_GET['id'];
            
    		$type=M("type")->where($data)->select();
            $this->assign('type',$type);

            $datas['tid'] = 0;
            $types=M("type")->where($datas)->select();
            $this->assign('types',$types);

            
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
        
        $data['id']=$_GET['id'];
        $data['title']=$_POST['title'];
        
        if($bookclass=M("type")->save($data)){
                $this->success('数据保存成功！');
            }
            else{
                $this->error('数据写入错误！');
            }
    }
    
    
}