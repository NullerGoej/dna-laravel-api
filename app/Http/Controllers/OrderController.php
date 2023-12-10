<?php
namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index(Request $request)
    {
        if($request->has('user_id')) {
            $orders = Order::where('user_id', $request->input('user_id'))->get();
            return response()->json($orders);
        }

        $orders= Order::all();
        return response()->json($orders);
    }

    public function show(Order $order)
    {
       $order->load('order_items');
       return response()->json($order);
    }
    
    public function store(Request $request)
    {
        $order = new Order();
        $order = Order::create($request->all());
        return response()->json(['message' => 'Order created'], 201);
    }
    
    public function update(Request $request, Order $order)
    {
        $order->update($request->all());
        
        return response()->json(['message' => 'Order updated'], 200);
    }
    
    public function destroy(Order $order)
    {
        $order->delete();
        return response()->json(null, 204);
    }
}
