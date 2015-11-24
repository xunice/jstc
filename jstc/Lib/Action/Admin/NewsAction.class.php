<?php
// 本类由系统自动生成，仅供测试用途
class NewsAction extends Action {
    public function index(){
    	if(session('?username')){
    		$this->username = session('username');//前台显示登录用户名
    		$this->logout =session('logout');
            //$data['id']=$_GET["_URL_"][3];
             
                            
             $news=M("news")->select();                       
             $this->assign('news',$news);

             //dump($news); 
            //$this->assign('new',$news[0]);

              $data['id'] = $_GET["_URL_"][3];
             // dump($data); 
             if (is_null($data['id'])) {
                 # code...
                $this->assign('new',$news[0]);
                //dump($news[0]); 
              
             }else{
                
                 $new=M('news')->where($data)->select();
                 $this->assign('new',$new[0]);
                // dump($new); 
             }

            $userId['userId']= session('userId');

            //echo $news;
            // dump($news); 
           $this->display();
    	}
    	else{
    	 header("Content-Type:text/html; charset=utf-8");
    	 
    		redirect('login',0,'请先登录！');
    	}
        	
    }

    public function del(){
        $condition['id'] = $_GET["_URL_"][4];
        $id = $_GET["_URL_"][4];
        $news=M("news");
        if($list=$news->where($condition)->delete()){
            $this->success('删除成功！');

        }
        else{
             $this->error('啊哦，删除失败!');
        }

    }

     public function type(){                   
        $types=M("types")->select();                       
        $this->assign('types',$types);
    }

    public function detail(){

        $condition['id'] = $_GET["_URL_"][3];
       // dump($condition); 

        if(session('?username')){
             $this->username = session('username');//前台显示登录用户名
            $this->logout =session('logout');
        //detail/id/22
        $data['id']=$_GET["_URL_"][3];
        $new=M('news')->where($data)->select();
        $this->assign('new',$new);
        //dump($new); 
        $this->display(index);
       //$this->success('');

        }else{
             header("Content-Type:text/html; charset=utf-8");
         
            redirect('../../../login',1,'请先登录！');

        }
       
    }
}