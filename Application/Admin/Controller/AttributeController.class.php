<?php
/**
 * Created by PhpStorm.
 * User: Ai Haibara
 * Date: 2017/7/9
 * Time: 20:25
 */

namespace Admin\Controller;
use Admin\Common\AdminController;
use Admin\Model\AttributeModel;

class AttributeController extends AdminController
{
    public function __construct()
    {
        parent::__construct();
        $this->assignAuths();
    }

    public function showlist()
    {
        $attr=new AttributeModel();
        if (IS_POST)
        {
            $type_id = I("post.type_id");
            $info =$attr->getAllAttribute($type_id);
            echo json_encode(["status"=>"200","info"=>$info]);
            exit();
        }
        else{
            $info =$attr->getAllAttribute();
            $this->assign("type",D("type")->select());
            $this->assign("info",$info);
            $this->display();
        }

    }

    /*添加一个属性
     *
     */
    public function add()
    {

        if(IS_POST)
        {
            $data=$_POST;
            $flag = D("Attribute")->add($data);
            if ($flag!==false)
            {
                echo json_encode(["status" => "200"]);
                exit();
            }
        }
        $type = D("type")->select();
        $this->assign("info",$type);
        
        $this->display();
    }

    protected function assignAuths()
    {
        $this->assign("authA", $this->auths["authA"]);
        $this->assign("authB", $this->auths["authB"]);
    }
}