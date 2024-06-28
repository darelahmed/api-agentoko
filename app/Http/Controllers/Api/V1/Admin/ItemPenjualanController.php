<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Models\ItemPenjualan;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ItemPenjualanController extends Controller
{
    public function index()
    {
        return response()->json(ItemPenjualan::all(), 200);
    }

    public function show($id)
    {
        $itemPenjualan = ItemPenjualan::find($id);
        if ($itemPenjualan) {
            return response()->json($itemPenjualan, 200);
        }
        return response()->json(['message' => 'ItemPenjualan not found'], 404);
    }

    public function store(Request $request)
    {
        $itemPenjualan = ItemPenjualan::create($request->all());
        return response()->json($itemPenjualan, 201);
    }

    public function update(Request $request, $id)
    {
        $itemPenjualan = ItemPenjualan::find($id);
        if ($itemPenjualan) {
            $itemPenjualan->update($request->all());
            return response()->json($itemPenjualan, 200);
        }
        return response()->json(['message' => 'ItemPenjualan not found'], 404);
    }

    public function destroy($id)
    {
        $itemPenjualan = ItemPenjualan::find($id);
        if ($itemPenjualan) {
            $itemPenjualan->delete();
            return response()->json(['message' => 'ItemPenjualan deleted'], 200);
        }
        return response()->json(['message' => 'ItemPenjualan not found'], 404);
    }
}
