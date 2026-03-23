<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Rol;


class RolController extends Controller
{
    public function index()
    {
        return Rol::all();
    }

    public function store(Request $request) {
    // Si esto falla, dará error 500
    return Rol::create($request->all()); 
}

    public function show($id)
    {
        return Rol::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $rol = Rol::findOrFail($id);
        $rol->update($request->all());
        return $rol;
    }

    public function destroy($id)
    {
        Rol::destroy($id);
        return response()->json(['message' => 'Rol eliminado']);
    }
}