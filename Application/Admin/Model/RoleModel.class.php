<?php
/**
 * Created by PhpStorm.
 * User: Ai Haibara
 * Date: 2017/7/8
 * Time: 20:14
 */

namespace Admin\Model;
use Think\Model;

class RoleModel  extends Model
{

    /**更新某个管理组的权限
     * @param $role_id  待更新的角色ID
     * @param $role_name
     * @param $auth_ids 待更新的角色IDS
     * @return bool 更新成功返回true
     */
    public function updateAuth($role_id,$auth_ids,$role_name)
    {
        $auth = D("auth");
        $auth_ac=[];
        $ca = $auth->where(["auth_id"=>["in",$auth_ids],"auth_level"=>["gt","0"]])->field("auth_c,auth_a")->select();
        foreach ($ca as $v)
        {
            $auth_ac[] = $v["auth_c"]."-".$v["auth_a"];
        }
        $auth_ac = implode(",",$auth_ac);

        //     开始更新三个字段的数据
        $data["role_id"]=$role_id;
        $data["role_auth_ids"] = implode(",",$auth_ids);
        $data["role_auth_ac"] = $auth_ac;
        $data["role_name"] = $role_name;
        $this->save($data);
        return true;
    }

    /**删除某个管理组
     * @param $id  待删除的管理组id
     */
    public function del($id)
    {
        $data["role_id"] = $id;
        $data["flag"] = "0";
        $this->save($data);
    }

    public function getOne($role_id)
    {
        return $this->find($role_id);
    }

    /**
     *
     */
    public function getAllRole()
    {
        return  $this->where(["flag"=>"1"])->select();
    }
}