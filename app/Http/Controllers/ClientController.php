<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function cadastrar() {
        $nome = "Pedro Figueira";
        $var1 = "Valor 1";
    
        return view('teste')
        ->with("nome", $nome)
        ->with("var1", $var1)
        ->with("teste", "XXXXXXXXXX");
    }
    public function editar() {
        // Códigos
    }
    public function excluir() {
        // Códigos
    }
}
