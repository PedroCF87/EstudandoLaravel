<?php

namespace App\Http\Controllers;

use App\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function listar() {
        $clients = Client::all();
        return view('admin.cliente.list', compact("clients"));
    }
    public function formCadastrar() {
        return view('admin.cliente.create');
    }
    public function cadastrar(Request $request) {
        $cliente = new Client();
        $cliente->name = $request->name;
        $cliente->email = $request->email;
        $cliente->save();
        return redirect()->to("/admin/cliente/lista");
    }

    public function formEditar($id) {
        $cliente = Client::find($id);
        if (!$cliente) {
            abort(404);
        }
        return view('admin.cliente.edit', compact("cliente"));
    }
    public function editar(Request $request, $id) {
        $cliente = Client::find($id);
        if (!$cliente) {
            abort(404);
        }
        $cliente->name = $request->name;
        $cliente->email = $request->email;
        $cliente->save();
        return redirect()->to("/admin/cliente/lista");
    }
    
    public function excluir(Request $request, $id) {
        $cliente = Client::find($id);
        if (!$cliente) {
            abort(404);
        }
        $cliente->delete();
        return redirect()->to("/admin/cliente/lista");
    }
}
