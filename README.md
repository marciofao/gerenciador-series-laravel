# gerenciador-series-laravel
Sistema em Laravel para gerência de séries

### Requisitos:
php 8.1+, composer

### Instalação:
Para rodar é necessario estes comandos em sequência no terminal:

Do nivel da pasta do projeto

Criar arquivo vazio database.sqlite em /database/database.sqlite

``copy nul "database.sqlite"`` (windows) ou ``touch database/database.sqlite`` (linux)

``composer install``

``copy .env.example .env ``  ou  ``cp .env.example .env``

``php artisan key:generate``

``php artisan migrate`` - gerar estrutura do banco de dados

``php artisan serve``

Basta acessar localhost:8000

### Desenvolvimento:

Necessário rodar npm install para instalar as dependencias do laravel como Webpack/Mix
