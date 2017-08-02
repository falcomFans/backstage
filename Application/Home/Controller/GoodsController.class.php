<?php
/**
 * Created by PhpStorm.
 * User: Ai Haibara
 * Date: 2017/7/9
 * Time: 18:30
 */

namespace Home\Controller;
use Home\Model\GoodsModel;
use Think\Controller;

class GoodsController  extends Controller
{
    /*展示商品详情的界面
     *
     */
    public function detail()
    {
        $goods_id = I("get.id");
        $good = new GoodsModel();
        $g = $good->getAttrById($goods_id);

        $this->assign('gi',$g['gi']);
        $this->assign('ga',$this->changeGoodsValue($g['ga']));

        $this->display();
    }


    /**给某个商品生成静态化界面
     *
     */
    public function createStatic()
    {
        $goods_id = I("post.goods_id");
        $goods= new GoodsModel();
        $goods_info = $goods->getAttrById($goods_id);
//        $this->ajaxReturn(json_encode($this->fetch("detail")));

        $this->assign('gi',$g['gi']);
        $this->assign('ga',$this->changeGoodsValue($g['ga']));
        $content = $this->fetch("detail");
        echo $content;
    }


//    处理里面的字符串属性的，方便展示
    private function changeGoodsValue($ga)
    {

        foreach ($ga as $k => $v)
        {
            if($v['attr_sel'] == "many"){
                $ga[$k]['attr_value'] = explode("|",$v['attr_value']);
            }
        }
        return $ga;
    }
}