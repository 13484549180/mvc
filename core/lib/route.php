<?php
namespace core\lib;
use core\lib\conf;

class route
{
    public $ctrl;
    public $action;
    public function __construct()
    {
        /**
         * 1.隐藏index.php
         * 2.获取URL参数部分
         * 3.返回对用的控制器和方法
         */
        if (isset($_SERVER['REQUEST_URI']) && $_SERVER['REQUEST_URL'] != '/') {
            $path = $_SERVER['REQUEST_URI'];
            $patharr = explode('/',trim($path, '/'));

            if (isset($patharr[0])) {
                $this->ctrl = $patharr[0];
            }
            unset($patharr[0]);
            if (isset($patharr[1])) {
                $this->action = $patharr[1];
                unset($patharr[1]);
            } else {
                $this->action = conf::get('ACTION', 'route');
            }
            //把url多余的部分转换成 GET
            $count = count($patharr) + 2;
            $i = 2;
            while ($i < $count) {
                if (isset($patharr[$i + 1])) {
                    $_GET[$patharr[$i] = $patharr[$i + 1]];
                }
                $i = $i +2;
            }
        } else {
            $this->ctrl = conf::get('CTRL', 'route');
            $this->action = conf::get('ACTION', 'route');
        }
    }
}





