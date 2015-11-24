<?php
// 本类由系统自动生成，仅供测试用途
class AboutAction extends Action {
    public function index(){
                            

        $data['fid'] = '1';//关于我们
        $menus=M("menu")->where($data)->select();                       
        $this->assign('menu',$menus);

         $menuId['menuId'] = $_GET["_URL_"][3];
         // dump($data); 
         if (is_null($menuId['menuId'])) {
            $menuId['menuId'] = $menus[0]['id'];
         }

        $new=M('news')->where($menuId)->select();
        $this->assign('new',$new[0]);

        $this->display();
        	
    }

     public function type(){                   
        $menus=M("menu")->select();                       
        $this->assign('menu',$menus);
    }

}