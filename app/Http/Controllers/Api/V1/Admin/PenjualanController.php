<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Models\Penjualan;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PenjualanController extends Controller
{
    public function index()
    {
        return response()->json(Penjualan::all(), 200);
    }

    public function show($id)
    {
        $penjualan = Penjualan::find($id);
        if ($penjualan) {
            return response()->json($penjualan, 200);
        }
        return response()->json(['message' => 'Penjualan not found'], 404);
    }

    public function store(Request $request)
    {
        $penjualan = Penjualan::create($request->all());
        return response()->json($penjualan, 201);
    }

    public function update(Request $request, $id)
    {
        $penjualan = Penjualan::find($id);
        if ($penjualan) {
            $penjualan->update($request->all());
            return response()->json($penjualan, 200);
        }
        return response()->json(['message' => 'Penjualan not found'], 404);
    }

    public function destroy($id)
    {
        $penjualan = Penjualan::find($id);
        if ($penjualan) {
            $penjualan->delete();
            return response()->json(['message' => 'Penjualan deleted'], 200);
        }
        return response()->json(['message' => 'Penjualan not found'], 404);
    }
}
