<?php
namespace App\Http\Controllers;

use App\Models\Address;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class AddressController extends Controller
{
    public function index(Request $request)
    {
        if($request->has('user_id')) {
            $addresses = Address::where('user_id', $request->input('user_id'))->get();
            return response()->json($addresses);
        }

        $addresses= Address::all();
        return response()->json($addresses);
    }

    public function store(Request $request)
    {
        $address = new Address();

        $address = Address::create($request->all());

        return response()->json($request, 201);

    }

    public function show($address_id)
    {
        $address = Address::find($address_id);

        return response()->json($address);
    }

    public function update(Request $request, Address $address)
    {
        $address = [
            'street_address' => $request->input('street'),
            'city' => $request->input('city'),
            'postal_code' => $request->input('postal_code'),
            'country' => $request->input('country'),
        ];

        return response()->json($address, 200);
    }

    public function destroy(Address $address)
    {
        $address->delete();
        return response()->json(null, 204);
    }
}
