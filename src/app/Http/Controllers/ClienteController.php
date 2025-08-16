<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;
use App\Http\Requests\StoreClienteRequest;

class ClienteController extends Controller
{
    public function store(StoreClienteRequest $request){
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
