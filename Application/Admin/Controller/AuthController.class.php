<?php
/**
 * Created by PhpStorm.
 * User: Ai Haibara
 * Date: 2017/7/9
 * Time: 9:19
 */

namespace Admin\Controller;
use Admin\Common\AdminController;

class AuthController  extends AdminController
{

    /**展示权限列表
     *
     */
    public function showlist()
    {
        $auths = D("auth")->getAllAuth();
        $this->assign("authAA",$auths["authA"]);
        $this->assign("authBB",$auths["authB"]);
        $this->assignAuths();
        $this->display();
    }

    /**添加一个权限
     *
     */
    public function add()
    {
        if (IS_POST)
        {
            if (D("auth")->addAuth($_POST))
            {
                $this->success("添加权限成功",U("showlist"),2);
            }
        }
        else
        {
            $auths = D("auth")->getAllAuth();
            $this->assign("authAA",$auths["authA"]);
            $this->assign("authBB",$auths["authB"]);
            $this->assignAuths();
            $this->display();
        }
    }


    /**奥义 固有结界 用于导航栏的权限展示
     *
     */
    protected function assignAuths()
    {
        $this->assign("authA", $this->auths["authA"]);
        $this->assign("authB", $this->auths["authB"]);
    }
}