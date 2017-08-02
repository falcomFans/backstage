<?php
namespace Home\Controller;
use Home\Model\GoodsModel;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        $good = new GoodsModel();
        $goods= $good->getAllGoods();
        $this->assign("goods",$goods);
        $this->display();
    }
}