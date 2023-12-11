<?php

namespace App\Http\Controllers;

use App\Models\Item_Category;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ItemCategoryController extends Controller
{
    public function index()
    {
        $itemCategories = Item_Category::all();
        return response()->json($itemCategories, Response::HTTP_OK);
    }

    public function store(Request $request)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'category_name' => 'required|string|max:255',
        ]);

        // Create a new item category
        $itemCategory = Item_Category::create($validatedData);

        return response()->json($itemCategory, 201);
    }

    public function show($item_category_id)
    {
        $itemCategory = Item_Category::find($item_category_id);

        return response()->json($itemCategory);
    }

    public function update(Request $request, Item_Category $itemCategory)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'category_name' => 'required|string|max:255',
        ]);

        // Update the item category
        $itemCategory->update($validatedData);

        return response()->json($itemCategory, 200);
    }

    public function destroy(Item_Category $itemCategory)
    {
        $itemCategory->delete();

        return response()->json(null, 204);
    }

}
