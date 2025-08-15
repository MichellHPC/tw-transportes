<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;

class HistoricoController extends Controller
{
    public function __invoke(Request $request)
    {   
        $params = $request->all();

        if( !isset($params['telefone']) or empty($params['telefone'])){
            return redirect()->back()->with(['error' => 'Telefone não encontrado.']);
        }

        $search = Cliente::where('telefone', $params['telefone'])
            ->with('enviados', 'recebidos')
            ->first();

        if (!$search) {
            return redirect()->back()->with(['error' => 'Cliente não encontrado.']);
        }

        return view('frete.historico', compact('search'));
    }
}
