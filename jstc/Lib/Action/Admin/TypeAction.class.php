<?php
// 本类由系统自动生成，仅供测试用途
class TypeAction extends Action {
    public function index(){
    	if(session('?username')){

    		$type=M("type")->select();
            $this->assign('type',$type);
            
            $this->username = session('username');//前台显示登录用户名
            $this->logout =session('logout');   
    		$this->display();
    	}
    	else{
    		header("Content-Type:text/html; charset=utf-8");
    		redirect('./login',0,'请先登录！');
    	}
    	
    }
    public function add(){
        $type = D("type");
        if ($vo = $type->create()) {
            $list = $type->add();
            /* 比如
             *  $Form->add($data);
              或者使用data方法连贯操作
              $User->data($data)->add();
              如果在add之前已经创建数据对象的话（例如使用了create或者data方法），add方法就不需要再传入数据了。
             */
            //如果你的主键是自动增长类型，并且如果插入数据成功的话，add方法的返回值就是最新插入的主键值，可以直接获取。 
            if ($list !== false) {
                $this->success('数据保存成功！');
            } else {
                $this->error('数据写入错误！');
            }
        } else {
            $this->error($User->getError());
        }
    }
    
    public function del(){
        $condition['id'] = $_GET["_URL_"][4];
       
        $type=M("type");
        if($list=$type->where($condition)->delete()){
            $this->success('删除成功！');

        }
        else{
             $this->error('啊哦，删除失败!');
        }

    }
    
    
}