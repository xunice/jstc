<?php
class Tool {
    static public $treeList = array(); //存放无限分类结果如果一页面有多个无限分类可以使用 Tool::$treeList = array(); 清空
    /**
     * 无限级分类
     * @access public
     * @param Array $data     //数据库里获取的结果集
     * @param Int $pid        //父类id
     * @param Int $level       //第几级分类
     * @param Int $sign       //符号
     * @return Array $treeList
    */
    static public function tree(&$data,$pid = 0,$level = 0,$sign=' ┣  ') {
        foreach ($data as $key => $value){
            if($value['pid']==$pid){
                $value['level']=$level+1;
                $value['sign']=str_repeat($sign,$level);
                self::$treeList []=$value;                
                self::tree($data,$value['id'],$level+1,$sign);
            }
        }
        return self::$treeList ;
    }
}