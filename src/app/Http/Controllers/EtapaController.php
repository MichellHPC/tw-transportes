<?php

namespace App\Http\Controllers;

use App\Enums\FreteStatus;
use App\Http\Requests\StoreEtapaRequest;
use App\Models\Etapa;
use App\Models\Frete;
use Illuminate\Http\Request;

class EtapaController extends Controller
{
    public function store(StoreEtapaRequest $request)
    {
        try {

            $params = $request->all();

            $searchFrete = Frete::find($params['frete_id']);

            if($searchFrete->status == FreteStatus::ENTREGUE) {
                throw new \Exception("Não é possível adicionar etapas a um frete já entregue.", 400);
            }

            $creating = Etapa::create($params);
            $tipoFreteStatus = FreteStatus::fromName($params['tipo_etapa']);

            $searchFrete->update([
                'status' => $tipoFreteStatus
            ]);

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
