<?php
/**
 * Created by PhpStorm.
 * User: Ai Haibara
 * Date: 2017/7/8
 * Time: 14:52
 */

namespace Admin\Controller;
use Admin\Common\AdminController;
use Admin\Model\AuthModel;
use Admin\Model\RoleModel;

class RoleController extends AdminController
{
    /**展示管理组列表
     *
     */
    public function showlist()
    {
        $role = D("role");
        $info =  $role->getAllRole();
        $this->assign("info",$info);
        $this->assignAuths();
        $this->display();
    }

    public function del()
    {
        $id = I("get.id");
        D("role")->del($id);

    }

    /**增加一个管理组
     *
     */
    public function add()
    {
        if(IS_POST)
        {
            $data["role_name"] = I("post.role_name");
            $role_id = D("role")->add($data);
            D("role")->updateAuth($role_id,I("post.auth_id"),I("post.role_name"));
            $this->success("管理组添加成功",U("showlist"),2);
        }
        else
        {
            $auth = new AuthModel();
            $this->assign("authAA",$auth->getAllAuth()["authA"]);
            $this->assign("authBB",$auth->getAllAuth()["authB"]);

            $this->assignAuths();
            $this->display();
        }
    }

    

    /**编辑管理组的信息，包括分配权限和更改组名
     *
     */
    public function edit()
    {
        if (IS_GET)
        {
//            分别取得管理组的名称，以及所有的权限
            $id = I("get.id");

            $info =  D("role")->find($id);
            $this->assign("info",$info);

            $auth = new AuthModel();
            $this->assign("authAA",$auth->getAllAuth()["authA"]);
            $this->assign("authBB",$auth->getAllAuth()["authB"]);

            $this->assignAuths();
            $this->display();
        }
        elseif (IS_POST)
        {
            $role = new RoleModel();
            $role_id=I("post.role_id");
            $auth_ids = I("post.auth_id");
            $role_name = I("post.role_name");
            if($role->updateAuth($role_id,$auth_ids,$role_name));
            {
                $this->success("权限更新成功",U("showlist"),2);
            }
        }

    }


    /*ajax响应，获取某个role的信息
     *
     */
    public function getOne()
    {
        $role_id = I("post.role_id");
        $roleinfo = D("role")->getOne($role_id);
        if (!empty($roleinfo))
        {
            $roleinfo["status"]="200";
        }
        else
        {
            $roleinfo["status"]="202";
        }

        echo json_encode($roleinfo);
    }

    /**奥义·固有结界
     *
     */
    protected function assignAuths()
    {
        $this->assign("authA", $this->auths["authA"]);
        $this->assign("authB", $this->auths["authB"]);
    }
}