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
<!--te-->

## Alunos:
### *Maria Eduarda Macedo*
### *Alexandre Rosas Costa*
### *Jeferson Augusto Wisbiski*  


## Descrição:
### Trabalho realizado para a matéria de Web-Servidor com o intuito de apresentar o terceiro projeto para avaliação. O projeto trata-se de uma api que realiza consultas, inserções, atualizações e deleções no banco de dados do sistema da pizzaria dos outros projetos.


## Documentação:
### Caso haja o `mysql` instalado na máquina, pode rodar os seguintes comandos:
- "mysql -h localhost -u root -p" - Para acessar o terminal do MySQL;
#### Dentro do terminal:
- "CREATE DATABASE web_api;" - Para criar o banco de dados "web_api";

### :warning: Utilizamos o Xampp para inicializarmos o MySQL, desta forma, o Apache e o MySQL precisam estar ativos. 

### Como trata-se do laravel, será necessário rodar os comandos a seguir: 
- "php artisan migrate" - Utilizado para realizar a construção das tabelas do banco

### Para o teste da API utilizamos o client http Insomnia
- será necessário importar o arquivo API_pizzaria.json para execução dos testes
- devido a autenticação necessária para as rotas somente os testes de registro e login foram automatizados
- para as demais rotas, faz-se necessário utilizar um token já criado via registro ou login

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
- Migrations;
- Seeders; 
- Factory;
- Models;

### *Jeferson* 

##### Criações:
- Criação da rota e controller de Dough e Edge
- Autenticação API Token via Sanctum
- Validação de testes por meio do Insomnia