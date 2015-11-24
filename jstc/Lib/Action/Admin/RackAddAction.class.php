<?php
// 本类由系统自动生成，仅供测试用途
class RackAddAction extends Action {
    public function index(){
     if(session('?username')){
        $this->username = session('username');//前台显示登录用户名
        $userId['userId']= session('userId');
        $this->assign('userId',$userId['userId']);// 赋值数据集
        $this->logout =session('logout'); 

        $type=M("type")->where()->select();
        $this->assign('type',$type);

        // $data['tid'] = 2;
        // $typefengge=M("type")->where($data)->select();
        // $this->assign('typefengge',$typefengge);

        // $data['tid'] = 2;
        // $typexilie=M("type")->where($data)->select();
        // $this->assign('typexilie',$typexilie);

        // $data['tid'] = 2;
        // $typepingpai=M("type")->where($data)->select();
        // $this->assign('typepingpai',$typepingpai);

        // $data['tid'] = 2;
        // $typepingpai=M("type")->where($data)->select();
        // $this->assign('typepingpai',$typepingpai);


        $this->display();
      }
      else{
        header("Content-Type:text/html; charset=utf-8");
        redirect('./admin/login',0,'请先登录！');
      }
    }

    public function add(){
        $rack = D("rack");
        if ($vo = $rack->create()) {
          
            //$data['create_time']=date("Y-m-d");
            import('ORG.Net.UploadFile');
            $upload = new UploadFile();// 实例化上传类
            $upload->maxSize  = 3145728 ;// 设置附件上传大小
            $upload->allowExts  = array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
            $upload->rootPath = '../Public/Uploads/';
            $upload->savePath = '../Public/Uploads/';// 设置附件上传目录

             if(!$upload->upload()) {// 上传错误提示错误信息
            $this->error($upload->getErrorMsg());
             }else{// 上传成功 获取上传文件信息
            $info =  $upload->getUploadFileInfo();
             }

            $qipao->image = $info[0]['savename']; // 保存上传的照片根据需要自行组装
            $qipao->create_time = date("Y-m-d");

            $list = $qipao->add();
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

  //  Public function upload(){

  //     $userId['userId']= session('userId');

  //     import('ORG.Net.UploadFile');
  //     $upload = new UploadFile();// 实例化上传类
  //     $upload->maxSize  = 3145728 ;// 设置附件上传大小
  //     $upload->allowExts  = array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
  //     $upload->rootPath = '../Public/Uploads/';
  //     $upload->savePath = '../Public/Uploads/';// 设置附件上传目录

  //      if(!$upload->upload()) {// 上传错误提示错误信息
  //     $this->error($upload->getErrorMsg());
  //      }else{// 上传成功 获取上传文件信息
  //     $info =  $upload->getUploadFileInfo();
  //      }

  //      // 保存表单数据 包括附件数据
  //     $qipao = M("qipao"); // 实例化User对象

  //     $data['group']=$_POST['group'];
  //     $data['series_name']=$_POST['series_name'];
  //     $data['name']=$_POST['name'];
  //     $data['price']=$_POST['price'];
  //     $data['city']=$_POST['city'];
  //     $data['is_vote']=$_POST['is_vote'];

  //     $data['style']=$_POST['style'];
  //     $data['age']=$_POST['age'];
  //     $data['quality']=$_POST['quality'];
  //     $data['brand']=$_POST['brand'];
  //     $data['intro']=$_POST['intro'];
  //     $data['create_time']=date("Y-m-d");

  //     $data['userid']=$userId['userId'];

  //     dump($data);

  //     $qipao->create(); // 创建数据对象
  //     $qipao->image = $info[0]['savename']; // 保存上传的照片根据需要自行组装
  //     $qipao->create_time = date("Y-m-d");
  //     $qipao->add(); // 写入用户数据到数据库
  //     $this->success('数据保存成功！');
  // }



  //  Public function video(){
  //     import('ORG.Net.UploadFile');
  //     $upload = new UploadFile();// 实例化上传类
  //     $upload->maxSize  = 3145728 ;// 设置附件上传大小
  //     $upload->allowExts  = array('flv', 'mp4', '3gp');// 设置附件上传类型
  //     $upload->rootPath = '../Public/Uploads/';
  //     $upload->savePath = '../Public/Uploads/';// 设置附件上传目录

  //      if(!$upload->upload()) {// 上传错误提示错误信息
  //     $this->error($upload->getErrorMsg());
  //      }else{// 上传成功 获取上传文件信息
  //     $info =  $upload->getUploadFileInfo();
  //      }
  //      // 保存表单数据 包括附件数据
  //     $qipao = M("qipao"); // 实例化User对象
  //     $qipao->create(); // 创建数据对象
  //     $qipao->video = $info[0]['savename']; // 保存上传的照片根据需要自行组装
  //     $qipao->add(); // 写入用户数据到数据库
  //     $this->success('数据保存成功！');
  // }

   public function upload() {
           
        if (!empty($_FILES)) {
            //如果有文件上传 上传附件
            $this->_upload();
            
        }
    }

    // 文件上传
    protected function _upload() {
        import('@.ORG.UploadFile');
        //导入上传类
        $upload = new UploadFile();
        //设置上传文件大小
        $upload->maxSize            = 3292200;
        //设置上传文件类型
        $upload->allowExts          = explode(',', 'jpg,gif,png,jpeg');
        //设置附件上传目录
        $upload->rootPath = '../Public/Uploads/';
        $upload->savePath = '../Public/Uploads/';// 设置附件上传目录
        //设置需要生成缩略图，仅对图像文件有效
        $upload->thumb              = true;
        // 设置引用图片类库包路径
        $upload->imageClassPath     = '@.ORG.Image';
        //设置需要生成缩略图的文件后缀
        $upload->thumbPrefix        = 'm_,s_';  //生产2张缩略图
        //设置缩略图最大宽度
        $upload->thumbMaxWidth      = '300,100';
        //设置缩略图最大高度
        $upload->thumbMaxHeight     = '300,100';
        //设置上传文件规则
        $upload->saveRule           = 'uniqid';
        //删除原图
        $upload->thumbRemoveOrigin  = true;
        if (!$upload->upload()) {
            //捕获上传异常
            $this->error($upload->getErrorMsg());
        } else {
            //取得成功上传的文件信息
            $uploadList = $upload->getUploadFileInfo();
            import('@.ORG.Image');
            //给m_缩略图添加水印, Image::water('原文件名','水印图片地址')
            Image::water($uploadList[0]['savepath'] . 'm_' . $uploadList[0]['savename'], APP_PATH.'Tpl/Public/Images/logo.png');
            $_POST['image'] = $uploadList[0]['savename'];
        }
   
        $rack = D("rack");
        if ($vo = $rack->create()) {
          $rack->image = $_POST['image']; // 保存上传的照片根据需要自行组装
          $rack->createTime = date("Y-m-d");

          $list = $rack->add();

          if ($list !== false) {
              $this->success('数据保存成功！');
          } else {
             $this->error('数据写入错误！');
          }
        }


        // $model  = M('Photo');
        // //保存当前数据对象
        // $data['image']          = $_POST['image'];
        // $data['create_time']    = NOW_TIME;


        // $list   = $model->add($data);
        // if ($list !== false) {
        //     $this->success('上传图片成功！');
        // } else {
        //     $this->error('上传图片失败!');
        // }
    }
    
}