<?php
namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    //create the CRUD operations here

    public function index(Request $request)
    {
        if ($request->has('category_id')) {
            $items = Item::where('category_id', $request->input('category_id'))->get();
            return response()->json($items);
        }

        if ($request->has('name')) {
            $items = Item::where('name', 'like', '%' . $request->input('name') . '%')->get();
            return response()->json($items);
        }

        if ($request->has('user_id')) {
            $items = Item::where('user_id', $request->input('user_id'))->get();
            return response()->json($items);
        }

        $items = Item::all();
        return response()->json($items);
    }

    public function store(Request $request)
    {
        $item = new Item();

        $item = Item::create($request->all());

        return response()->json($request, 201);

    }

    public function show($item_id)
    {
        $item = Item::find($item_id);

        return response()->json($item);
    }


    public function update(Request $request, Item $item)
    {
        $item->update($request->all());

        return response()->json($item, 200);
    }


    public function destroy(Item $item)
    {
        $item->delete();

        return response()->json(null, 204);
    }

}
