# Teste-DotGroup
Exercícios do teste de conhecimentos para Analista Desenvolvedor do DotGroup. Processo de recrutamento da BDR - Recrutamento e Seleção.

## 1 - FizzBuzz
Embora este teste também sirva para demonstrar a capacidade lógica e de  enxugar o código, utilizei também para demonstrar algo de orientação a objetos e TDD, portanto:
* Acesse /FizzBuzz para rodar o script apenas para ver o resultado;
* Abra o arquivo /FizzBuzz/Core/FizzBuzz.php para avaliar a classe;
* Abra o arquivo /tests/FizzBuzz/Core/FizzBuzzTest.php para avaliar os testes.

## 2 - Refactor1
Além de algumas correções básicas e ajustes de boas práticas, novamente priorizamos o exercício no sentido de orientar a objetos, separar as ações em métodos e usar exception.
* Acesse /Refactoring1 para rodar o script e ver que não está logado;
* Abra o arquivo /Refactoring1/Core/Refactoring1.php para avaliar a classe;

## 3 - Refactor2
Neste exercício organizamos um pouco mais para definir melhor cada papel da pequena aplicação, com classes para config, connection, DAO e User. Para ficar mais divertido fiz com acesso real ao banco. Para rodar:
- Crie um banco de dados
- Rode os comandos SQLs contidos em /Refactorig2/user.sql
- Coloque as configurações do banco em /Refactoring2/Core/Config.php
- Novamente, o arquivo da raiz, em /Refactoring2 apenas roda a aplicação,
- A aplicação que está em /Refactoring2/Core

## 4 - API Rest
A Api foi feita em Cake, conforme sugerido, e com auxílio de alguns plugins. Para rodar apenas estes simples passos precisam ser dados.
- Crie um banco de dados, ou use o mesmo do exercício 3, como preferir.
- Altere o arquivo "config/app.php": em "Datasources" adicione suas configurações de banco de dados
- Em /api-rest/bin execute: "cake migrations migrate "

Pronto, o Cake está rodando. Para testar a API Rest utilize um desses plugins:
- RESTClient se o navegador é o Firefox
- Postman plugin para o Chrome
- Cocoa REST Client se está em um Mac

Para testar as requisições, alguns exemplos, considerando um servidor com endereço "localhost"
- Index via GET: http://localhost/api-rest/tasks.json
- View via GET: http://localhost/api-rest/tasks/4.json
- Add via POST http://localhost/api-rest/tasks (enviando campos por json)
- Edit via PUT http://localhost/api-rest/tasks/4 (enviando campos por json)
- Delete via DELETE http://localhost/api-rest/tasks/4

##Interface:
O acesso à API também pode ser feita utilizando a interface padrão do CakePHP, com todas as funcções da API:
- Lista: http://localhost/api-rest/tasks

## 5 - Outros Diferenciais: Responsividade e drag and drop
Infelizmente não houve tempo hábil para colocar o layout responsivo e o drag and drop mas espero que o demonstrado até aqui seja uma amostra útil para a avaliação.

Priorizarei o envio dentro do prazo embora gostaria de caprichar mais. Fico inteiramente a disposição para novos contatos, conversar ou outros testes.

Estou desde já feliz com a  oportunidade de possivelmente integrar um time de desenvolvimento maduro, onde poderei encontrar bons desafios, me desenvolver e também contribuir com a experiência que trago nesses 15 anos de estrada.

Atenciosamente
Gesian Bender








