# Cadastro de Eletrodomésticos - API

Esta é uma API de CRUD (Create, Read, Update, Delete) para um cadastro de eletrodomésticos. Ela foi desenvolvida utilizando o framework Laravel no backend e Vue.js no frontend.

## Requisitos

Certifique-se de ter os seguintes requisitos instalados em sua máquina antes de prosseguir:

-   [php >= 7.3](https://www.php.net/)
-   [composer](https://getcomposer.org/download/)
-   [node](https://nodejs.org)

## Instalação

Siga as etapas abaixo para configurar o projeto:

-   Clone este repositório para o seu diretório local:

`git clone https://github.com/mitaloammon/appliance-registration-API`

-   Acesse o diretório do projeto

`cd appliance-registration-API`

-   Rode a linha de comando no seu terminal para instalar as dependências do Laravel.

`composer install`

-   Crie e adapte o arquivo .env com base no exemplo

`cd .env.example .env`

-   Gere uma nova chave de aplicativo

`php artisan key:generate`

-   Execute as migrações do banco de dados:

`php artisan migrate`

-   Instale as dependências do frontend usando o Node.js:

`npm install`

## Uso

Para iniciar o servidor local, execute o seguinte comando:

`php artisan serve`

Isso iniciará o servidor de desenvolvimento em `http://localhost:8000`.

Acesse [http://localhost:8000](http://localhost:8000) em seu navegador para usar a aplicação frontend para interagir com a API.

## Rotas

A API possui as seguintes rotas:

```
GET /api/eletrodomestico: Retorna todos os registros de eletrodomésticos.
POST /api/eletrodomestico: Cria um novo registro de eletrodoméstico.
GET /api/eletrodomestico/{id}: Retorna um registro de eletrodoméstico específico.
PUT /api/update/{id}: Atualiza um registro de eletrodoméstico existente.
DELETE /api/eletrodomestico/{id}: Remove um registro de eletrodoméstico existente.
```

## Campos do Eletrodoméstico

Um registro de eletrodoméstico possui os seguintes campos:

-   nome: O nome do eletrodoméstico (Ex: Geladeira Frost Free).
-   descricao: A descrição do eletrodoméstico (Ex: Este produto é totalmente versátil. Tudo para ser personalizado para comportar o que você preferir.).
-   tensao: A tensão do eletrodoméstico (Ex: 220v).
-   marca: A marca do eletrodoméstico (Valores possíveis: Electrolux, Brastemp, Fischer, Samsung, LG).

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
