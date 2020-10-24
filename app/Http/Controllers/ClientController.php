<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function cadastrar() {
        $nome = "Pedro Figueira";
        $var1 = "Valor 1";
    
        return view('admin.cliente.cadastrar')
        ->with("nome", $nome)
        ->with("var1", $var1);
    }
    public function editar() {
        // Códigos
    }
    public function excluir() {
        // Códigos
    }
}
