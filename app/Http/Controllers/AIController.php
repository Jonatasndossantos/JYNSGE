<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\OpenAIService;

class AIController extends Controller
{
    protected $openAI;

    public function __construct(OpenAIService $openAI)
    {
        $this->openAI = $openAI;
    }

    public function analisarTexto(Request $request)
    {
        $texto = $request->input('texto', 'Digite um texto');
        $resposta = $this->openAI->lerTexto($texto);
        return response()->json(['resposta' => $resposta]);
    }
}

