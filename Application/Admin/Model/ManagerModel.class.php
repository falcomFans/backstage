<?php
/**
 * Created by PhpStorm.
 * User: Ai Haibara
 * Date: 2017/7/7
 * Time: 11:29
 */

namespace Admin\Model;
use Think\Model;

class ManagerModel extends Model
{
    public function getAllManagers()
    {
        $info = $this
            ->alias("m")
            ->join("__ROLE__ as r on m.role_id = r.role_id")
            ->order("m.mg_id")
            ->field("m.*,r.role_name")
            ->select();
        return $info;
    }

    public function getAllInfoByID($id)
    {
        $info = $this
            ->alias("m")
            ->join("__ROLE__ as r on m.role_id = r.role_id")
            ->where(["m.mg_id"=>"$id"])
            ->find();
        return $info;
    }

    public function addManager($data)
    {
        $data["mg_time"] = time();
        $data["mg_salt"] = substr(md5(time),5,8);
        $data["mg_pwd"] = \getSalt($data["mg_pwd"],$data["mg_salt"]);
        $this->add($data);
    }
}