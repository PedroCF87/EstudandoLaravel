<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem de Clientes</title>
</head>
<body>
    <h1>Clientes</h1>

    <a href="/admin/cliente/form-cadastrar">Novo Cliente</a>
    
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Email</th>
                <th>Data Criação</th>
                <th>Atualizado</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($clients as $cliente)
                <tr>
                    <td>{{$cliente->id}}</td>
                    <td>{{$cliente->name}}</td>
                    <td>{{$cliente->email}}</td>
                    <td>{{date('d/m/Y H:i', strtotime($cliente->created_at))}}</td>
                    <td>{{date('d/m/Y H:i', strtotime($cliente->updated_at))}}</td>
                    <td>
                        &nbsp; >> &nbsp;<a href="/admin/cliente/form-editar/{{ $cliente->id }}" title="Editar {{$cliente->name}}">Editar</a> 
                        &nbsp; >> &nbsp;
                        <a href="/admin/cliente/excluir/{{ $cliente->id }}" 
                            title="Excluir {{$cliente->name}}" 
                        onclick="event.preventDefault(); if(confirm('Deseja realmente excluir este registro?')){window.location.href=this.href}">Excluir</a> 
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>