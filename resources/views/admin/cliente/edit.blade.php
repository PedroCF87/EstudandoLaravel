<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Cliente</title>
</head>
<body>
    <h1>Editar Cliente</h1>
    
    <form method="post" action="/admin/cliente/editar/{{ $cliente->id }}">
        {!! csrf_field() !!}
        <label for="name">Nome</label>
        <input type="text" name="name" id="name" value="{{ $cliente->name }}" />

        <label for="email">Email</label>
        <input type="text" name="email" id="email" value="{{ $cliente->email }}" />

        <button type="submit">Enviar</button>
    </form>

</body>
</html>