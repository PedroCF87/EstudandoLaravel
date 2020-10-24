<?php

use Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/controller/cliente/cadastrar', 'ClientController@cadastrar');


Route::get('/Blade', function () {
    $nome = "Pedro Figueira";
    $var1 = "Valor 1";

    return view('teste')
    ->with("nome", $nome)
    ->with("var1", $var1)
    ->with("teste", "XXXXXXXXXX");
});

Route::get('/for-if/{value}', function ($value) {
    return view('for-if')
    ->with('value', $value)
    ->with('minhaArray', [
        'chave1' => 'Valor1',
        'chave2' => 'Valor2',
        'chave3' => 'Valor3'
    ]);
});

Route::get('/OlaMundo', function () {
    return 'Olá Mundo!';
});

Route::get('/produto/{id}/{name}', function ($id,$name) {
    return "Produto $name ($id)";
});

Route::get('/fornecedor/{id}/{name?}', function ($id,$name = "Desconhecido") {
    return "Fornecedor $name ($id)";
});

Route::get('/exemploCadastroHtmlErrado', function () {
    $csrfToken = csrf_token();
    $html = "
        <html lang='pt-BR'>
        <head>
            <meta charset='UTF-8'>
            <meta name='viewport' content='width=device-width, initial-scale=1.0'>
            <title>Teste 1 do Laravel com HTML</title>
        </head>
        <body>
            <h1>Teste do post no Laravel</h1>
            <form method='post' action='/cliente/cadastrar'>
                <input type='hidden' name='_token' value='".$csrfToken."'>
                <input type='text' name='name' />
                <button type='submit'>Enviar</button>
            </form>
        </body>
        </html>";

    return $html;
});

Route::post('/cliente/cadastrar', function (Request $request) {
    echo "<h2>Cliente <strong>".$request->name."</strong> cadastrado com sucesso!</h2>";
});

Route::get('/cadastrarCliente', function () {

    /*return view('cadastrar', [
        "nome" => "Pedro Figueira",
        "var1" => "Valor 1"
    ]);*/

    $nome = "Pedro Figueira";
    $var1 = "Valor 1";
    return view('cadastrar', compact("nome", "var1"));
});

Route::get('/cadastrarClienteV2', function () {

    $nome = "Pedro Figueira";
    $var1 = "Valor 1";
    return view('cliente.cadastrar')
    ->with("nome", $nome)
    ->with("var1", $var1);
});
