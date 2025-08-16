<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreEtapaRequest;
use App\Models\Etapa;
use Illuminate\Http\Request;

class EtapaController extends Controller
{
    public function store(StoreEtapaRequest $request)
    {
        try {

            $params = $request->all();

            $creating = Etapa::create($params);

            return response()->json([
                'message' => 'Etapa created successfully',
                'data' => $creating
            ], 201);
        } catch (\Throwable $th) {
            return response()->json([
                'message' => $th->getMessage() ?: 'Failed to create frete'
            ], $th->getCode() ?: 500);
        }
    }
}
