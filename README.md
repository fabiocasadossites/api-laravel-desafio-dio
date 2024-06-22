# Entrega de projeto - Laravel: Construindo uma API do Zero | DIO
Projeto de desenvolvimento de uma API utilizando Laravel, realizado como parte do desafio da DIO para a conclusão do curso de Formação PHP Experience.


### Versões
- PHP 8.1
- Laravel 10.10

### Clonar o repositório
````
git clone https://github.com/fabiocasadossites/api-laravel-desafio-dio.git
````

### Para rodar a aplicação
Dentro da pasta do projeto
````
composer update
````
Após isso, crie na raiz do projeto um arquivo copiando o .env.example e renomeando para .env. Depois, rode o comando:
````
php artisan key:generate --ansi
````
Para rodar o servidor
````
php artisan serve
````

### Rotas da API
Lista todas as bandas
````
/api/bands
````

Lista a banda pelo ID
````
/api/bands/1
````

Lista a banda pelo gênero (gender)
````
/api/bands/gender/progressivo
````

Adicionar uma nova banda
````
/api/bands/bands/store
````


