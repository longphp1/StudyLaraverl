<?php

namespace App\Http\Controllers;

use App\Events\OrderShipped;
use App\Http\Controllers\Controller;
class OrderController extends Controller {

    /**
     * 运送给定的订单。
     *
     * @param  int  $orderId
     * @return Response
     */
    public function ship($orderId){

        $order=Order::findOrFail($orderId);
        // 订单的发货逻辑...
        event(new OrderShipped($order));
    }
}