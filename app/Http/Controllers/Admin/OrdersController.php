<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Model\Order;
use Illuminate\Http\Request;

class OrdersController extends Controller
{
    public function all_orders() {
		return view('admin.orders.index');
	}
	public function ajax_orders() {
        $orders = Order::all();
        $html = view('admin.orders.ajax-orders',compact('orders'))->render();
        if ($html) {
            $res_array = array(
                'msg' => 'success',
                'response' => $html,
            );
            echo json_encode($res_array);
            exit;
        }
    }
}
