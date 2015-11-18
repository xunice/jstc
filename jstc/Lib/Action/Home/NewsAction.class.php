<?php
// 本类由系统自动生成，仅供测试用途
class NewsAction extends Action {
    public function index(){
                            
            $news=M("news")->select();                       
            $this->assign('news',$news);

           // $type=M("type")->select();               
           // $this->assign('type',Tool::tree($type));
             Load('extend');            //加载扩展方法
            $type=D('type');
           // $data['type'] = 'type';
            $list=$type->order('id asc')->select();//实现同级节点排序
            $list=list_to_tree($list,'id','tid'); //详细参数见手册
           // dump($list);
            $this->assign('type',$list);

             $data['typeid'] = $_GET["_URL_"][3];
             // dump($data); 
             if (is_null($data['typeid'])) {
                 # code...
                $this->assign('new',$news[0]);
                //dump($news[0]); 
              
             }else{
                
                 $new=M('news')->where($data)->select();
                 $this->assign('new',$new[0]);
                // dump($new); 
             }

            $this->display();


            
    }

     public function type(){                   
        $types=M("type")->select();                       
        $this->assign('types',$types);
    }

    function list_to_tree($list, $pk='id', $tid = 'tid', $child = '_child', $root = 0) {
        // 创建Tree
        $tree = array();
        if(is_array($list)) {
            // 创建基于主键的数组引用
            $refer = array();
            foreach ($list as $key => $data) {
                $refer[$data[$pk]] =& $list[$key];
            }
            foreach ($list as $key => $data) {
                // 判断是否存在parent
                $parentId =  $data[$tid];
                if ($root == $parentId) {
                    $tree[] =& $list[$key];
                }else{
                    if (isset($refer[$parentId])) {
                        $parent =& $refer[$parentId];
                        $parent[$child][] =& $list[$key];
                    }
                }
            }
        }
        return $tree;
    }

}