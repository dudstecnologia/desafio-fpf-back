# Cadastro de Projetos - Back-end

Sistema para gerenciar cadastros de projetos, desenvolvido com Laravel.

É necessário que você possua um servidor com PHP >= 7.2.5 e MySQL

## Clone o projeto
```
git clone https://github.com/dudstecnologia/desafio-fpf-back.git
```

## Acesse a pasta do projeto clonado
```
cd desafio-fpf-back
```

## Criar o arquivo de variáveis baseado no modelo
```
cp .env.example .env
```

## Instalar as dependências do projeto
```
composer install
```

## Gerar a chave da aplicação
Esta chave é usada pelo serviço de criptografia da aplicação
```
php artisan key:generate
```

## Configurar o banco de dados
Neste momento, crie manualmente um banco de dados MySQL no seu servidor.

Após criar o banco, abra o arquivo '.env' que está na raiz do projeto e faça a alteração nas variáveis que são responsáveis pelo Banco de Dados elas são identificadas pelo prefixo 'DB_'.

Altere para que elas fiquem de acordo com o seu ambiente.
```
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravel
DB_USERNAME=root
DB_PASSWORD=
```
Caso esteja utilizando Laragon, Xampp ou WampServer, provavelmente só vai ser preciso alterar o nome do banco.

## Executar as migrations para preparar o banco de dados
Após esse comando, o seu banco de dados vai ter algumas tabelas criadas, mas observe que foi gerado as tabelas participantes, projetos e participante_projeto.
```
php artisan migrate
```

## Iniciar a aplicação em modo de desenvolvimento
Se a porta 8000 não estiver ocupada, ela será usada nesse modo. Logo o endereço da API será: http://127.0.0.1:8000/api
```
php artisan serve
```
