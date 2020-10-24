# EstudandoLaravel
Meu primeiro projeto em Laravel. Neste projeto eu testei as funcionalidades básicas do FrameWork.

Este projeto foi desenvolvido durante o curso de Larvel 5.5 do "[School of Net](https://www.schoolofnet.com)".

### Curso [Iniciando com Laravel 5.5](https://www.schoolofnet.com/curso/php/laravel/iniciando-com-laravel-55/).


# Índice

1 - [Instale o Laravel 5.5.* (versão estável)](#1---instale-o-laravel-5.5.*-(versão-estável))

2 - [2 - Clone este repositório](#2---clone-este-repositório)

3 - [3 - Acesse a pasta do projeto](#3---acesse-a-pasta-do-projeto)

4 - [4 - Execute UM DOS comandos abaixo](#4---execute-um-dos-comandos-abaixo)



## Para rodar o projeto

### 1 - Instale o Laravel 5.5.* (versão estável)

Acesse: [Laravel 5.5](https://laravel.com/docs/5.5)


### 2 - Clone este repositório

> HTTPS: $ git clone https://github.com/PedroCF87/EstudandoLaravel.git

OU

> SSH: $ git clone git@github.com:PedroCF87/EstudandoLaravel.git

OU

> GitHub CLI: $ gh repo clone PedroCF87/EstudandoLaravel


### 3 - Acesse a pasta do projeto

> $ cd EstudandoLaravel


### 4 - Execute UM DOS comandos abaixo

> $ php artisan serve

> Resposta: "Laravel development server started: <http://127.0.0.1:8000> (...)"

OU

> $ php -S localhost:8000 -t public public/index.php

> Resposta: "PHP 7.2.24-0ubuntu0.18.04.7 Development Server started at Fri Oct 23 19:50:52 2020

> Listening on http://localhost:8000 (...)"


OU se quiser alterar a porta do servidor:

> $ php -S localhost:PORTAESCOLHIDA -t public public/index.php

> Resposta: "PHP 7.2.24-0ubuntu0.18.04.7 Development Server started at Fri Oct 23 19:50:52 2020

> Listening on http://localhost:PORTAESCOLHIDA (...)"

Obs.: altere o termo "PORTAESCOLHIDA" para o número da porta que deseja utilizar.


## 5 - Acesse o endereço

> [LocalHost:8000](http://localhost:8000)



# Controlando o servidor Artisan

## Passar o Servidor para modo de Manutenção

> $ php artisan down

## Modo de Manutenção com Mensagem Personalizada*

> $ php artisan down --message="Minha mensagem personalizada"

## *
Conteúdo extra (não faz parte no presente curso).

## Reativar o servidor

> $ php artisan up


# Conteúdo abordado no curso

## Aulas

1. [x] Introdução > ~~0:09:52~~
2. [x] Criando uma aplicação Laravel > ~~0:13:03~~
3. [x] Esqueleto Laravel vs Framework > ~~0:08:31~~
4. [x] Rotas amigáveis > ~~0:13:51~~
5. [x] Rotas amigáveis POST e formulários > ~~0:11:28~~
6. [x] Criando views > ~~0:11:14~~
7. [x] Iniciando com Blade > ~~0:13:54~~
8. [x] Mais detalhes sobre a interpolação do Blade > ~~0:11:14~~
9. [x] Blade - estruturas condicionais e de repetição > ~~0:11:44~~
10. [x] Ferramenta Artisan > ~~0:06:35~~
11. [x] Criando controllers > ~~0:13:08~~
12. [x] Agrupamento de rotas de boas práticas > ~~0:08:46~~
13. [x] Ambientes de trabalho e variáveis de ambiente* > ~~0:11:08~~

14. [ ] Iniciando com Eloquent ORM > 0:10:54
15. [ ] Iniciando com sistema de migrations > 0:11:21
16. [ ] Prática com sistema de migrações > 0:10:38
17. [ ] Prática com Eloquent ORM > 0:11:29
18. [ ] Listagem de dados > 0:06:05
19. [ ] Criar dados > 0:09:46
20. [ ] Edição de dados > 0:09:08
21. [ ] Exclusão de dados > 0:07:55

> '*' **.env & .env.example:** *são arquivos que armazenam as variáveis de ambiente do Laravel.*
> 
> **.env.example** é o arquivo que deve armazenar o exemplo de variáveis globais padrão do projeto.
> 
> **.env** é um arquivo pessoal, que deve ser gerado a partir do .env.example e personalizado de acordo com cada ambiente de trabalho.


# Rotas do projeto 

> $ php artisan route:list

+--------+----------+-----------------------------+------+-------------------------------------------------+--------------+
| Domain | Method   | URI                         | Name | Action                                          | Middleware   |
+--------+----------+-----------------------------+------+-------------------------------------------------+--------------+
|        | GET|HEAD | /                           |      | Closure                                         | web          |
|        | GET|HEAD | Blade                       |      | Closure                                         | web          |
|        | GET|HEAD | OlaMundo                    |      | Closure                                         | web          |
|        | GET|HEAD | admin/cliente/cadastrar     |      | App\Http\Controllers\ClientController@cadastrar | web          |
|        | GET|HEAD | admin/cliente/editar        |      | App\Http\Controllers\ClientController@editar    | web          |
|        | GET|HEAD | admin/cliente/excluir       |      | App\Http\Controllers\ClientController@excluir   | web          |
|        | GET|HEAD | api/user                    |      | Closure                                         | api,auth:api |
|        | GET|HEAD | cadastrarCliente            |      | Closure                                         | web          |
|        | GET|HEAD | cadastrarClienteV2          |      | Closure                                         | web          |
|        | POST     | cliente/cadastrar           |      | Closure                                         | web          |
|        | GET|HEAD | cliente/cadastrarController |      | App\Http\Controllers\ClientController@cadastrar | web          |
|        | GET|HEAD | envLaravelXPTO              |      | Closure                                         | web          |
|        | GET|HEAD | exemploCadastroHtmlErrado   |      | Closure                                         | web          |
|        | GET|HEAD | for-if/{value}              |      | Closure                                         | web          |
|        | GET|HEAD | fornecedor/{id}/{name?}     |      | Closure                                         | web          |
|        | GET|HEAD | getEnvPhpNome               |      | Closure                                         | web          |
|        | GET|HEAD | produto/{id}/{name}         |      | Closure                                         | web          |
|        | GET|HEAD | variaveisGlobais            |      | Closure                                         | web          |
+--------+----------+-----------------------------+------+-------------------------------------------------+--------------+