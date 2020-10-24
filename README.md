# EstudandoLaravel
Meu primeiro projeto em Laravel. Neste projeto eu testei as funcionalidades básicas do FrameWork.

Este projeto foi desenvolvido durante o curso de Larvel 5.5 do "[School of Net](https://www.schoolofnet.com)".

### Curso [Iniciando com Laravel 5.5](https://www.schoolofnet.com/curso/php/laravel/iniciando-com-laravel-55/).


# Índice
1. [Rodar o projeto](rodar-o-projeto)

* 1.1 [Instalar o Laravel 5.5.* (versão estável)](#11---instalar-o-laravel-55-vers%C3%A3o-est%C3%A1vel)

* 1.2 [Clonar este repositório](#12---clonar-este-repositório)

* 1.3 [Acessar a pasta do projeto](#13---acessar-a-pasta-do-projeto)

* 1.4 [Executar o projeto](#14---executar-o-projeto)

* 1.5 [Acessar o endereço](#15---acessar-o-endereço)

2. [Controlar o servidor Artisan](#2---controlar-o-servidor-artisan)

* 2.1 [Passar o Servidor para modo de Manutenção](#21---passar-o-servidor-para-modo-de-manutenção)

* 2.2 [Modo de Manutenção com Mensagem Personalizada*](22---modo-de-manutenção-com-mensagem-personalizada*)

* 2.3 [Reativar o servidor](23---reativar-o-servidor)

3. [Conteúdo abordado no curso](3---conteúdo-abordado-no-curso) 

4. [4 - Anotações](4---anotações)

5. [5 - Rotas do projeto](5---rotas-do-projeto)
#  
 
 
## 1 - Rodar o projeto
 
### 1.1 - Instalar o Laravel 5.5.* (versão estável)
 
Acesse: [Laravel 5.5](https://laravel.com/docs/5.5)
 
### 1.2 - Clonar este repositório
 
> HTTPS: $ git clone https://github.com/PedroCF87/EstudandoLaravel.git
 
OU
 
> SSH: $ git clone git@github.com:PedroCF87/EstudandoLaravel.git
 
OU
 
> GitHub CLI: $ gh repo clone PedroCF87/EstudandoLaravel
 
### 1.3 - Acessar a pasta do projeto
 
> $ cd EstudandoLaravel
 
### 1.4 - Executar o projeto
#### Execute UM DOS comandos abaixo:
 
> $ php artisan serve
> 
> Resposta: "Laravel development server started: <http://127.0.0.1:8000> (...)"
 
OU
 
> $ php -S localhost:8000 -t public public/index.php
> 
> Resposta: "PHP 7.2.24-0ubuntu0.18.04.7 Development Server started at Fri Oct 23 19:50:52 2020
> 
> Listening on http://localhost:8000 (...)"
 
 
OU se quiser alterar a porta do servidor:
 
 
> $ php -S localhost:PORTAESCOLHIDA -t public public/index.php
> 
> Resposta: "PHP 7.2.24-0ubuntu0.18.04.7 Development Server started at Fri Oct 23 19:50:52 2020
> 
> Listening on http://localhost:PORTAESCOLHIDA (...)"
 
Obs.: altere o termo "PORTAESCOLHIDA" para o número da porta que deseja utilizar.
 
## 1.5 - Acessar o endereço
 
> Porta Padrão "8000"
> 
> [LocalHost:8000](http://localhost:8000)

OU 

> "PORTAESCOLHIDA":
> 
> localhost:PORTAESCOLHIDA
 
# 2 - Controlar o servidor Artisan
 
## 2.1 - Passar o Servidor para modo de Manutenção
 
> $ php artisan down
 
## 2.2 - Modo de Manutenção com Mensagem Personalizada*

> $ php artisan down --message="Minha mensagem personalizada"
 
## *
Conteúdo extra (não faz parte no presente curso).
 
## 2.3 - Reativar o servidor

> $ php artisan up
 
 
# 3 - Conteúdo abordado no curso

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
 
 
# 4 - Anotações

> '*' **.env & .env.example:** *são arquivos que armazenam as variáveis de ambiente do Laravel.*
> 
> **.env.example** é o arquivo que deve armazenar o exemplo de variáveis globais padrão do projeto.
> 
> **.env** é um arquivo pessoal, que deve ser gerado a partir do .env.example e personalizado de acordo com cada ambiente de trabalho.
 
 
# 5 - Rotas do projeto

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