<?php
/**
 * Created by PhpStorm.
 * User: Ai Haibara
 * Date: 2017/7/9
 * Time: 18:59
 */

namespace Admin\Controller;
use Admin\Common\AdminController;

class TypeController extends AdminController
{

    public function showlist()
    {
        $info = D("type")->select();
        $this->assign("info",$info);
        $this->assignAuths();
        $this->display();
    }

    public function edit()
    {
        if (IS_GET)
        {
            $type_id = I("get.type_id");
            $info = D("type")->find($type_id);
            $this->assign("info",$info);
            $this->assignAuths();
            $this->display();
        }
    }

    /**添加一个类型名字
     * 这里是ajax噢
     */
    public function add()
    {
        if (IS_POST)
        {
            $data["type_name"] = I("post.type_name");
            $type_id = D("type")->add($data);
            if($type_id !== false)
            {
                echo json_encode(["status"=>200,"type_id"=>$type_id,"type_name" =>$data["type_name"]]);
                exit();
            }
        }
        $this->assignAuths();
        $this->display();
    }

    /*奥义，固有结界
     *
     */
    protected function assignAuths()
    {
        $this->assign("authA", $this->auths["authA"]);
        $this->assign("authB", $this->auths["authB"]);
    }

}