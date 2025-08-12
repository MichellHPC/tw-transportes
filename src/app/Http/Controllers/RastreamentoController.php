<?php

namespace App\Http\Controllers;

use App\Models\Frete;
use Illuminate\Http\Request;

class RastreamentoController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {   
        $params = $request->all();

        if( !isset($params['codigo_rastreamento']) or empty($params['codigo_rastreamento'])){
            return redirect()->back()->with(['error' => 'Frete não encontrado.']);
        }

        $search = Frete::where('codigo_rastreamento', $params['codigo_rastreamento'])
            ->with('etapas')
            ->first();
        
        return view('frete.rastreamento', compact('search'));
    }
}
