<?php
namespace app\ctrl;
use core\lib\model;

class indexCtrl extends \core\imooc
{
    public function index()
    {
        $model = new \app\model\usersModel();
        $arr = $model->lists();
        dump($arr);
    }
}



