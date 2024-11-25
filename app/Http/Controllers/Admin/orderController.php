<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\order;
use App\Models\product;

class orderController extends Controller
{
    public function list_order(){
        $orders = order::all();
        return view('admin.order.list',[
            'orders'=>$orders
        ]);
    }
    public function detail_order(Request $request){
        $order_detail = json_decode($request->order_detail,true);
        $product_id = array_keys($order_detail);
        $products = product::whereIn('id',$product_id) ->get();
        // dd($products);
        return view('admin.order.detail',[
            'products'=>$products,
            'order_detail' => $order_detail
        ]);
    }
}
