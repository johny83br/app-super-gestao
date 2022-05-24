<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    public function index()
    {
        $fornecedores =
            [
                'fornecedores' => [
                    'nome' => 'João',
                    'email' => 'joao@teste.com.br'
                ]
            ];
        return view('app.fornecedor.index', compact('fornecedores'));
    }
}
