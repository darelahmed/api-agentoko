<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pelanggan;

class PelangganController extends Controller
{
    public function index()
    {
        return response()->json(Pelanggan::all(), 200);
    }

    public function show($id)
    {
        $pelanggan = Pelanggan::find($id);
        if ($pelanggan) {
            return response()->json($pelanggan, 200);
        }
        return response()->json(['message' => 'Pelanggan not found'], 404);
    }

    public function store(Request $request)
    {
        $pelanggan = Pelanggan::create($request->all());
        return response()->json($pelanggan, 201);
    }

    public function update(Request $request, $id)
    {
        $pelanggan = Pelanggan::find($id);
        if ($pelanggan) {
            $pelanggan->update($request->all());
            return response()->json($pelanggan, 200);
        }
        return response()->json(['message' => 'Pelanggan not found'], 404);
    }

    public function destroy($id)
    {
        $pelanggan = Pelanggan::find($id);
        if ($pelanggan) {
            $pelanggan->delete();
            return response()->json(['message' => 'Pelanggan deleted'], 200);
        }
        return response()->json(['message' => 'Pelanggan not found'], 404);
    }
}
