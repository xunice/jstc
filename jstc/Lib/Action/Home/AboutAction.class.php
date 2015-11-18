<?php
// 本类由系统自动生成，仅供测试用途
class AboutAction extends Action {
    public function index(){
                            
        //$news=M("news")->select();                       
        //$this->assign('news',$news);

        $data['fid'] = '1';//关于我们
        $menus=M("menu")->where($data)->select();                       
        $this->assign('menu',$menus);

         $data['typeid'] = $_GET["_URL_"][3];
         // dump($data); 
         if (is_null($data['typeid'])) {
            $this->assign('new',$news[0]);
         }else{
             $new=M('news')->where($data)->select();
             $this->assign('new',$new[0]);
            // dump($new); 
         }

        $this->display();
        	
    }

     public function type(){                   
        $menus=M("menu")->select();                       
        $this->assign('menu',$menus);
    }

}