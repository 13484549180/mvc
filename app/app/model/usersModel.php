<?php
namespace app\model;
use core\lib\model;

class usersModel extends model
{
    public $table = "users";
    public function lists()
    {
        $list = $this->select($this->table, '*');
        return $list;
    }
}