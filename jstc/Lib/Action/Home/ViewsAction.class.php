<?php
// 本类由系统自动生成，仅供测试用途
class ViewsAction extends Action {
    public function index(){
    	 

        $type=M("type")->select();                       
        $this->assign('type',$type);

        $data['typeid'] = $_GET["_URL_"][2];                   
        if (is_null($data['typeid'])) {
            $data['typeid'] = $type[0]['id'];
            //dump($type[0]); 
        }
        //分页
        $rack = M('rack'); // 实例化Data数据对象
        import('ORG.Util.Page');// 导入分页类
        $count      = $rack->where($data)->count();// 查询满足要求的总记录数
        $Page       = new Page($count,9);// 实例化分页类 传入总记录数
        // 进行分页数据查询 注意page方法的参数的前面部分是当前的页数使用 $_GET[p]获取
        $nowPage = isset($_GET['p'])?$_GET['p']:1;
        $list = $rack->where($data)->order('id')->page($nowPage.','.$Page->listRows)->select();
        $show       = $Page->show();// 分页显示输出
        $this->assign('page',$show);// 赋值分页输出
        $this->assign('qipaos',$list);// 赋值数据集
        $this->display(); // 输出模板
        	
    }
}