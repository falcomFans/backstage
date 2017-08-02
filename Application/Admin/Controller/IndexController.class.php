<?php
namespace Admin\Controller;
use Admin\Common\AdminController;
use Admin\Model\ManagerModel;

class IndexController extends AdminController {
    public function index(){
        $manager = new ManagerModel();
        $mg_info = $manager->getAllManagers();

        $this->assignAuths();
        $this->assign("mg_info",$mg_info);
        $this->display();
    }

    public function showlog()
    {
        $log = D("updatelog");
        $logs = $log->order("id desc")->limit(15)->select();
        $this->assignAuths();
        $this->assign("info",$logs);
        $this->display();
    }

    public function addlog()
    {
        if (IS_POST)
        {
            $data["content"] = I("post.content");
            $data["time"] = time();
            if (D("updatelog")->add($data))
            {
                $this->success("日志添加成功",U("showlog"),2);
                exit();
            }
        }
        $this->assignAuths();
        $this->display();
    }

    protected function assignAuths()
    {
        $this->assign("authA",$this->auths["authA"]);
        $this->assign("authB",$this->auths["authB"]);
    }
}