<?php
namespace App\Http\Controllers;

use App\Models\Order_Item;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class OrderItemController extends Controller
{
    public function index(Request $request)
    {
        // If the request has an order_id, return all order items for that order
        if ($request->has('order_id')) {
            $orderItems = Order_Item::where('order_id', $request->input('order_id'))->get();
            return response()->json($orderItems);
        }

        // Otherwise, return all order items
        $orderItems = Order_Item::all();
        return response()->json($orderItems);
    }

    public function show($order_item_id)
    {
        $orderItem = Order_Item::find($order_item_id);

        return response()->json($orderItem);
    }

    public function update(Request $request, Order_Item $orderItem)
    {
        // Update the order item with the request data
        $orderItem->update($request->all());

        return response()->json($orderItem, 200);
    }

    public function store(Request $request)
    {
        // Create a new order item with the request data
        $orderItem = Order_Item::create($request->all());

        return response()->json($orderItem, 201);
    }

    public function destroy(Order_Item $orderItem)
    {
        // Delete the order item
        $orderItem->delete();

        return response()->json(null, 204);
    }
}
