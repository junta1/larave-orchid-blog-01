# Laravel Orchid
Exemplo de uso do cms feito em laravel.

## Documentação do Laravel Orchid

Fonte: <https://orchid.software/en/docs>

## Template - Business Casual Bootstrap Theme

Fonte: <https://usebootstrap.com/theme/business-casual>

## Baixando projeto

`git clone https://github.com/junta1/larave-orchid-blog-01.git`

## Levantar o Container

Acesse ao projeto e lavante o container: `docker-compose up -d`

Link para acessar a página inicial do projeto: <http://localhost:8282>

Link para acessar o Dashboard: <http://localhost:8282/dashboard>

_Obs: Configure o projeto nos próximos passos._ 

## Configurando projeto

**Criando o atalho de acesso aos estilos de usuário, cenários de javascript e outros arquivos vinculáveis disponíveis:**

`php artisan storage:link`

`php artisan orchid:link`

_Obs: Exclua os atalhos caso exista Orchid ou Storage na pasta /public._

**Gerando a migration**

`php artisan migrate`

**Criar a senha de administrador**

`php artisan make:admin admin admin@admin.com admin`
