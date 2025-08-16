<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function store(Request $request){
        try {

            $creating = Cliente::create($request->all());

            return response()->json([
                'message' => 'Cliente created successfully',
                'data' => $creating
            ], 201);
        } catch (\Throwable $th) {
            return response()->json([
                'message' =>  $th->getMessage() ?: 'Failed to create cliente'
            ], $th->getCode() ?: 500);
        }
    }
}
