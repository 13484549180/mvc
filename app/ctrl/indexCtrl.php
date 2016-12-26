<?php
namespace app\ctrl;

class indexCtrl extends \core\imooc
{
    public function index()
    {
        $model = new \core\lib\model();
        $sql = "SELECT * FROM nav";
        $res = $model->query($sql);
        p($res->fetchAll());
//        $temp = new \core\lib\model();
//        $data = "Hello World";
//        $title = "这是视图文件";
//        $this->assign('title',$title);
//        $this->assign('data',$data);
//        $this->display("index.html");
    }
}



