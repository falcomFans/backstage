<?php
/**
 * Created by PhpStorm.
 * User: Ai Haibara
 * Date: 2017/7/7
 * Time: 14:02
 */

namespace Admin\Common;
use Admin\Model\AuthModel;
use Think\Controller;

abstract class AdminController extends Controller
{

    protected $auths;

    /**
     * AdminController constructor.
     */
    public function __construct()
    {
        parent::__construct();
//这里做越权访问控制
//        首先判断用户是否登录，没有登录首先让其进行登录

        $nowAC = CONTROLLER_NAME . "-" . ACTION_NAME;

        $auth_default = "Manager-login,Manager-logout,Manager-showinfo";

        $id = session("admin_id");

        if(!empty($id))
        {
            if (session("admin_id") != 503){
                $ac = D("manager")
                    ->alias("m")
                    ->join("__ROLE__ as r on m.role_id = r.role_id")
                    ->field("r.role_auth_ac")
                    ->find(session("admin_id"));
                $auth_allow=$ac["role_auth_ac"];
                if (strpos($auth_allow,$nowAC)===false && strpos($auth_default,$nowAC)===false){
                    $this->error("没有访问权限，请联系超级管理员",U("Index/index"),2);
                }
            }
            $auth = new AuthModel();
            $this->auths = $auth->getAuthsBySeesionID();
        }
        else
        {
            if (strpos($auth_default,$nowAC)===false){
                $this->redirect("Manager/login");
            }
        }
    }
    protected abstract function assignAuths();
}