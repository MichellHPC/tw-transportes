<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $viewData = [
            'title' => 'Bem-vindo',
            'description' => 'Esta é a página inicial.'
        ];

        return view('home', compact('viewData'));

    }
}
