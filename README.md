# **Projeto Web-Servidor**
![image](https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white)


*Sumário*
=================
<!--ts-->
   * [Alunos](#alunos)
   * [Descrição](#descrição)
   * [Documentação](#documentação)
   * [Features](#features)
   * [Atividades](#atividades)
      * [Maria Eduarda](#maria-eduarda)
      * [Alexandre](#alexandre)
      * [Jeferson](#jeferson)
  * [Descrição de Rotas](#rotas)
<!--te-->

## Alunos:
### *Maria Eduarda Macedo*
### *Alexandre Rosas Costa*
### *Jeferson Augusto Wisbiski*  


## Descrição:
### Trabalho realizado para a matéria de Web-Servidor com o intuito de apresentar o terceiro projeto para avaliação. O projeto trata-se de uma api que realiza consultas, inserções, atualizações e deleções no banco de dados do sistema da pizzaria dos outros projetos.


## Documentação:

### :warning: Utilizamos o Xampp para inicializarmos o MySQL, desta forma, o Apache e o MySQL precisam estar ativos. 
### :warning: Necessitará também da criação do banco de dados "web_api".

### Caso haja o `mysql` instalado na máquina, pode rodar os seguintes comandos:
- "mysql -h localhost -u root -p" - Para acessar o terminal do MySQL;
#### Dentro do terminal:
- "CREATE DATABASE web_api;" - Para criar o banco de dados "web_api";

### Caso não haja o `mysql` instalado:
#### Neste caso, sugerimos que realize a criação do banco de dados pelo phpmyadmin acessando, caso esteja executando o projeto em máquina local, `localhost/phpmyadmin`, mas caso não, necessitamos que crie e acesse o banco de dados com nome "web_api" no servidor que esteja utilizando. 

### Como trata-se do laravel, será necessário rodar o comando a seguir: 
- "php artisan migrate" - Utilizado para realizar a construção das tabelas do banco.

### Para o teste da API utilizamos o client http Insomnia
- Será necessário importar o arquivo API_pizzaria.json para execução dos testes;
- Devido a autenticação necessária para as rotas somente os testes de registro e login foram automatizados;
- Para as demais rotas, faz-se necessário utilizar um token já criado via registro ou login.

### Trabalho finalizado com sucesso!!:white_check_mark:

## Features:

- :heavy_check_mark: Criação do banco de dados;
- :heavy_check_mark: CRUD;
- :heavy_check_mark: Rotas estruturadas;
- :heavy_check_mark: Autenticação;


## Atividades:

### *Maria Eduarda*

#### Criações:
- Criação da rota e controller de Flavor e Size
- Padronização de mensagens de retorno para todos os métodos dos controllers
- Tratamento de erros de todos os métodos dos controllers
  
### *Alexandre*

#### Criações:
- Criação das Migrations;
- Criação dos Models;
- Realização do README

### *Jeferson* 

##### Criações:
- Criação da rota e controller de Dough e Edge
- Autenticação API Token via Sanctum
- Validação de testes por meio do Insomnia


## Rotas

### POST
    #Flavor#
    
    /flavor
    /flavor/{id}
### GET
    -  
### DELETE
    - 
### PUT
    - 
