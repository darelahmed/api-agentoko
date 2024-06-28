<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Models\Barang;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    public function index()
    {
        return response()->json(Barang::all(), 200);
    }

    public function show($id)
    {
        $barang = Barang::find($id);
        if ($barang) {
            return response()->json($barang, 200);
        }
        return response()->json(['message' => 'Barang not found'], 404);
    }

    public function store(Request $request)
    {
        $barang = Barang::create($request->all());
        return response()->json($barang, 201);
    }

    public function update(Request $request, $id)
    {
        $barang = Barang::find($id);
        if ($barang) {
            $barang->update($request->all());
            return response()->json($barang, 200);
        }
        return response()->json(['message' => 'Barang not found'], 404);
    }

    public function destroy($id)
    {
        $barang = Barang::find($id);
        if ($barang) {
            $barang->delete();
            return response()->json(['message' => 'Barang deleted'], 200);
        }
        return response()->json(['message' => 'Barang not found'], 404);
    }
}
