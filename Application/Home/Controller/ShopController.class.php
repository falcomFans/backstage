<?php
/**
 * Created by PhpStorm.
 * User: Ai Haibara
 * Date: 2017/7/13
 * Time: 20:12
 */

namespace Home\Controller;

use Home\Common\Cart;
use Think\Controller;

class ShopController extends Controller
{
    /**
     * 将商品添加到购物车里边
     * @param $goods = array('goods_id'=>'商品id','goods_name'=>'名称',
     * 'goods_price'=>'单价','goods_buy_number'=>'购买数量','goods_total_price'=>数量*单价);
     */
    public function addGoods()
    {
        if (IS_AJAX) {
            $goods_info = I("post.");
            $cart = new Cart();
            $cart->add($goods_info);
            exit(json_encode(["status" => "200", "info" => $cart->getCartInfo()]));
        }
    }

    /**假设他支付成功了
     *
     */
    public function successPay()
    {
        $cart = new Cart();
        $cartinfo = $cart->getCartInfo();//获得购物车商品信息
        $price_number = $cart->getNumberPrice();
        
//        维护order表
        $data['user_id']       = session('user_id');
        $data['order_number']  = "weshop-".date("YmdHis")."-".mt_rand(1000,9999);
        $data['order_price']   = $price_number['price'];
        $data['user_id']       = session('user_id');
        $data['add_time']      = $data['upd_time'] = time();
        $order_id = D('Order')->add($data); //形成订单记录

        foreach($cartinfo as $k => $v){
            $data['order_id']         = $order_id;
            $data['goods_id']         = $k;
            $data['goods_price']      = $v['goods_price'];
            $data['goods_number']     = $v['goods_buy_number'];
            $data['goods_total_price'] = $v['goods_total_price'];
            //给sp_order_goods表形成记录
            D('OrderGoods')->add($data);
        }

        //2) 清除购物车信息
        $cart -> delAll();

        $this->success("对不起，因为没做支付宝，假设你成功了,高兴吧",U('Index/index'),5);
    }


    /**生成订单界面
     *
     */
    public function pay()
    {
        $user = session("username");
        if (isset($user)) {
            $this->getCartInfo();
            $this->display();
        } else {
            session('back_url', 'Shop/pay');
            $this->display("User/login");
        }
    }


    /**展示购物车
     *
     */
    public function cart()
    {

        $this->getCartInfo();
        $this->display();
    }

    private function getCartInfo()
    {
        $cart = new Cart();
        $cartinfo = $cart->getCartInfo();//获得购物车商品信息

        //获得购物车商品的图片信息(数据表字段：goods_small_logo)
        //获得购物车商品的goods_id信息，并拼装为字符串
        $goods_ids = implode(',', array_keys($cartinfo));//string(5) "21,18"

        //通过$goods_ids获取商品的小图信息
        $logoinfo = D('Goods')
            ->field('goods_id,goods_small_logo')
            ->select($goods_ids);

        //整合，使得$logoinfo的图片信息添加进$cartinfo 里边去
        foreach ($cartinfo as $k => $v) {
            foreach ($logoinfo as $vv) {
                if ($k == $vv['goods_id']) { //购物车商品 与 图片商品对应上
                    //把logo图片添加进$cartinfo的数组里边
                    $cartinfo[$k]['logo'] = $vv['goods_small_logo'];
                }
            }
        }

        $this->assign('cartinfo', $cartinfo);

        //获得购物车商品金额总计
        $number_price = $cart->getNumberPrice();
        $this->assign('number_price', $number_price);
    }
}