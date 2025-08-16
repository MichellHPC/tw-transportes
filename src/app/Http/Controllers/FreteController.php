<?php

namespace App\Http\Controllers;

use App\Enums\FreteStatus;
use App\Http\Requests\StorFreteRequest;
use App\Models\Frete;
use Illuminate\Http\Request;

class FreteController extends Controller
{
    public function store(StorFreteRequest $request)
    {
        try {
            
            $params = $request->all();
            $params['status'] = FreteStatus::PENDENTE;

            $creating = Frete::create($params);

            return response()->json([
                'message' => 'Frete created successfully',
                'data' => $creating
            ], 201);
        } catch (\Throwable $th) {
            return response()->json([
                'message' => $th->getMessage() ?: 'Failed to create frete'
            ], $th->getCode() ?: 500);
        }
    }
}
