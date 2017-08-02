<?php
/**
 * Created by PhpStorm.
 * User: Ai Haibara
 * Date: 2017/7/7
 * Time: 16:19
 */

namespace Admin\Model;
use Think\Model;

class AuthModel extends Model
{
    /**根据sessionid取得他的拥有权限名，也可以主动传入一个管理员id来获取
     * @param $admin_id  登录的管理员id
     * @return 两个等级的权限数组
     */
    public function getAuthsBySeesionID($id = 0)
    {
        $auth = D("auth");
        $admin_id = session("admin_id") ? session("admin_id") : $id;
        $flag=["flag"=>"1"];
        if ($admin_id != "503")
        {
            $ids = D("manager")
                ->alias("m")
                ->join("__ROLE__ as r on m.role_id = r.role_id")
                ->field("r.role_auth_ids")
                ->find($admin_id);
            $flag["auth_id"] =["in",$ids[role_auth_ids]];
        }
        $flag["auth_level"] = "0";
        $authA  = $auth->where($flag)->select();
        $flag["auth_level"] = "1";
        $authB = $auth->where($flag) ->select();
        return ["authA"=>$authA,"authB"=>$authB];
    }


    /**获取数据库里面所有的权限,这里是区分了权限等级的
     * @return array 两个等级的权限数组
     */
    public function getAllAuth()
    {
        $auth = D("auth");
        $flag=["flag"=>"1"];
        $flag["auth_level"] = "0";
        $authA  = $auth->where($flag)->select();
        $flag["auth_level"] = "1";
        $authB = $auth->where($flag) ->select();
        return ["authA"=>$authA,"authB"=>$authB];
    }

    /** 因为要对level进行特殊维护，之后才添加这个权限
     * @param $data 传入的data
     */
    public function addAuth($data)
    {
        $data["auth_level"] = $data["auth_pid"] == 0 ? 0 : 1;
        $this->add($data);
        return true;
    }

}