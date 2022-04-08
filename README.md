# Back end do teste da pastelaria

Back end feito em lumem RESTful, com migrations

## Consulta, cadastro, alteração, e remoção
    - clientes 
    - produtos 
    - perdidos 

### Pré-requisitos

Antes de começar, você vai precisar ter instalado em sua máquina as seguintes ferramentas:
[Git](https://git-scm.com), [php8](https://www.php.net/releases/8.0/en.php) ,[mysql](https://www.mysql.com/downloads/) e [composer](https://getcomposer.org/download/). 
Além disto é bom ter um editor para trabalhar com o código como [VSCode](https://code.visualstudio.com/) e um Cliente de api [Postman](https://www.postman.com/downloads/) 

Clone o repositorio do projeto 
    git clone git@github.com:braty-001/pastel_back.git
    
Criar um banco de dados chamado pastel 
    CREATE database pastel;

Executar o composer dentro da pasta pastel_back
    composer install
    
Executar o migrations dentro da pasta pastel_back
    php artisan migrate
