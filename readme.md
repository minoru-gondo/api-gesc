# API gesc

Para executar a api gesc é necessário que você tenha: 
- PHP >= 7 https://www.php.net/downloads.php;
- Composer https://getcomposer.org/;
- MySQL https://www.mysql.com/;
    
Faça o clone do projeto;

Acesse a pasta do projeto;

Edite o arquivo .env na raiz do projeto, DB_DATABASE=[nome do seu banco], DB_USERNAME=[usuário], DB_PASSWORD=[senha];

Abra o terminal na pasta do projeto e execute: php artisan migrate;

Depois de concluído, execute: php -S localhost:8000 -t public;

O servidor será iniciado;
