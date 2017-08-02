<?php
/**
 * Created by PhpStorm.
 * User: Ai Haibara
 * Date: 2017/7/14
 * Time: 0:48
 */

namespace Admin\Controller;


use Admin\Common\AdminController;

class OrderController extends AdminController
{
    public function __construct()
    {
        parent::__construct();
        $this->assignAuths();
    }

    public function showlist()
    {
        $info = D("order")->select();
        $this->assign("info",$info);
        $this->display();
    }

    protected function assignAuths()
    {
        $this->assign("authA", $this->auths["authA"]);
        $this->assign("authB", $this->auths["authB"]);
    }
}