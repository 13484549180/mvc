<?php
namespace app\ctrl;
use core\lib\model;

class indexCtrl extends \core\imooc
{
    public function index()
    {
        $data = "Hello Word";
        $this->assign("data", $data);
        $this->display("index.html");
    }
}



