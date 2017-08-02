<?php
/**
 * Created by PhpStorm.
 * User: Ai Haibara
 * Date: 2017/7/10
 * Time: 0:40
 */

namespace Admin\Controller;
use Admin\Common\AdminController;
use Admin\Model\AttributeModel;
use Admin\Model\GoodsModel;

class GoodsController extends AdminController
{
    public function __construct()
    {
        parent::__construct();
        $this->assignAuths();
    }

    public function add()
    {
        if (IS_POST)
        {
            if(D("Goods")->addGoods($_POST,$_FILES))
            {
                $this->success("商品添加成功",U("showlist"),2);
                exit();
            }
        }
        $this->assign("attr_info",D("Attribute")->getAllAttribute(13));
        $this->assign("type_info",D("type")->select());
        $this->display();
    }

    public function edit()
    {
        if (IS_POST)
        {
            $goods = new GoodsModel();
            if($goods->editGoods($_POST,$_FILES))
            {
                $this->success("更新成功",U('showlist'),2);
            }
        }
        else
        {
            $goods_id = I("get.id");
            $goods= new GoodsModel();
            $goods_info =$goods->getOneGoodsInfo($goods_id);
            $this->assign("gt",$goods_info["gt"]);

            $this->assign("");
            $this->assign("type_info",D("type")->select());
            $this->display();
        }
    }

    /**获取一个商品的详细属性
     *
     */
    public function getAttr()
    {
        if (IS_AJAX)
        {
            $goods_id = I("post.goods_id");
            $goods= new GoodsModel();
            $ga = $goods->getOneGoodsInfo($goods_id);
            $ga = $ga["ga"];

            $type_id =I("post.type_id");
            $attr = new AttributeModel();
            $info = $attr->getAllAttribute($type_id);
            exit(json_encode(["status"=>"200","info"=>$info,"ga"=>$ga]));
        }
    }


    public function showlist()
    {
        $this->assign("info",D("goods")->getGoodsList());
        $this->display();
    }

    protected function assignAuths()
    {
        $this->assign("authA", $this->auths["authA"]);
        $this->assign("authB", $this->auths["authB"]);
    }
}