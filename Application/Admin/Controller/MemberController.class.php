<?php
/**
 * Created by PhpStorm.
 * User: Ai Haibara
 * Date: 2017/7/11
 * Time: 15:32
 */

namespace Admin\Controller;
use Admin\Common\AdminController;
use Admin\Model\MemberModel;

class MemberController extends AdminController
{
    public function __construct()
    {
        parent::__construct();
        $this->assignAuths();
    }

    public function add()
    {
        if(IS_POST)
        {
            $data = I("post.");
            $member = new MemberModel();
            if($member->addMember($data))
            {
                $this->success("添加成功",U("showlist"),2);
                exit();
            }
        }
        $this->display();
    }

    public function showlist()
    {
        $member = new MemberModel();
        $info = $member->getAll();
        $this->assign("info",$info);
        $this->display();
    }


    protected function assignAuths()
    {
        $this->assign("authA", $this->auths["authA"]);
        $this->assign("authB", $this->auths["authB"]);
    }

}