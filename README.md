# gerenciador-series-laravel
Sistema em Laravel para gerência de séries

### Requisitos:
php 8.1+, composer

### Instalação:

Criar arquivo vazio database.sqlite em /database/database.sqlite

Para rodar necessario estes comandos em sequência no terminal:

Uma vez estando dentro da pasta

``composer install``

``copy .env.example .env``

``php artisan key:generate``

``php artisan migrate`` - gerar estrutura do banco de dados

``php artisan serve``

Basta acessar localhost:8000

### Desenvolvimento:

Necessário rodar npm install para instalar as dependencias do laravel como Webpack/Mix
