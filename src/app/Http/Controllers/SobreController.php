<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SobreController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {   
        $viewData = [
            'title' => 'Sobre Mim',
            'description' => 'Esta é a página sobre mim.'
        ];

        return view('about-me', compact('viewData'));
    }
}
