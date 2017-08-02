<?php
/**
 * Created by PhpStorm.
 * User: Ai Haibara
 * Date: 2017/7/6
 * Time: 23:41
 */

namespace Admin\Controller;
use Admin\Common\AdminController;
use Admin\Model\ManagerModel;


class ManagerController extends AdminController
{
    /**登录逻辑
     *
     */
    public function login()
    {
        if (IS_POST) {
            $manager = D("manager");
            $mg_name = I("post.name");
            $mg_pwd = I("post.Password");
            $info = $manager->where(["mg_name" => $mg_name])->find();
            if ($info && \getSalt($mg_pwd, $info["mg_salt"]) === $info["mg_pwd"]) {
                session("admin_name", $mg_name);
                session("admin_id", $info["mg_id"]);
                $this->success("登录成功", U('Index/index'), 2);
            } else {
                $this->error("账号或密码错误,请重试或者联系单身狗管理员", U('login'), 2);
            }
        } else {
            $this->display();
        }
    }

    /**增加一个管理员
     *
     */
    public function add()
    {
        if (IS_POST)
        {
            $data = $_POST;
            if (D("manager")->addManager($data) !== false)
            {
                $this->success("添加成功",U("showlist"),2);
                exit();
            }
        }
        //        获取所有的管理组名字
        $role = D("role");
        $info =  $role->getAllRole();
        $this->assign("role_info",$info);
        //        固有结界
        $this->assignAuths();
        $this->display();
    }

    /**编辑某个管理员
     *
     */
    public function edit()
    {
        if(IS_GET)
        {
//        获取管理员自己的信息
            $id = I("get.id") ? I("get.id") : session("admin_id");

            $manager = new ManagerModel();
            $mg_info = $manager->getAllInfoByID($id);
            $this->assign("info", $mg_info);

//        获取所有的管理组名字
            $role = D("role");
            $info =  $role->getAllRole();
            $this->assign("role_info",$info);

//        固有结界
            $this->assignAuths();
            $this->display();
        }
        elseif (IS_POST)
        {
            $data = $_POST;
            if(D("manager")->save($data)!==false)
            {
                $this->success("修改成功",U("showlist"),2);
            }
        }
    }

    /**注销
     *
     */
    public function logout()
    {
        session(null);
        $this->success("退出成功",U("login"),2);
    }


    /**展示所有管理员
     *
     */
    public function showlist()
    {
        $manager = new ManagerModel();
        $mg_info = $manager->getAllManagers();

        $this->assignAuths();
        $this->assign("mg_info", $mg_info);
        $this->display();
    }

    /**展示某位管理员的信息，点右上角的时候默认使用当前登录用户的信息
     *
     */
    public function showinfo()
    {
        $id = I("get.id") ? I("get.id") : session("admin_id");

        $manager = new ManagerModel();
        $mg_info = $manager->getAllInfoByID($id);
        $this->assignAuths();
        $this->assign("info", $mg_info);
        $this->display();
    }

    /**奥义 固有结界
     *
     */
    protected function assignAuths()
    {
        $this->assign("authA", $this->auths["authA"]);
        $this->assign("authB", $this->auths["authB"]);
    }


    /*ajax响应  检查某个用户名是否存在
     *
     */
    public function checkName()
    {
        if (IS_POST)
        {
            $mg_name = I("post.mg_name");
            $flag = D("manager")->where(["mg_name"=>$mg_name])->find();
            if ($flag)
            {
                echo json_encode(["status"=>202]);
            }
            else
            {
                echo json_encode((["status"=>200]));
            }
        }
    }

}