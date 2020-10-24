<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Clientes</title>
</head>
<body>
    <h1>Cadastro de Clientes</h1>
    
    <form method="post" action="/admin/cliente/cadastrar">
        {!! csrf_field() !!}
        <label for="name">Nome</label>
        <input type="text" name="name" id="name" autofocus />

        <label for="email">Email</label>
        <input type="text" name="email" id="email" />

        <button type="submit">Enviar</button>
    </form>

</body>
</html>