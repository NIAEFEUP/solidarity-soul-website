# Solidarity Soul Website

## Objectivo do Projeto

O projeto apresentado foi realizado a pedido da Solidarity Soul, um grupo de estudantes, maioritariamente da FEP, com o intuito de ter um papel influente na sociedade, apoiando causas sociais, ambientais, entre outras. Conforme solicitado, é apresentado um website desenvolvido com base num Content Management System, possibilitando aos administradores do sistema controlar os conteúdos apresentados, mesmo sem terem formação em programação.

## Tecnologias Usadas

- WordPress (v4.8.2)
- MySQL

## Como Instalar

Durante o período de desenvolvimento, o projeto foi hospedado no Heroku. Criando uma aplicação numa conta Heroku, resta apenas clonar o repositório da aplicação para o PC, inserir a pasta do WordPress e carregá-la para o repositório. Automáticamente, a aplicação detetará as dependências do WordPress e iniciará o servidor Apache.

Devido a limitações da base de dados neste serviço, a BD foi alojada em separado na Amazon Web Services, recorrendo a um plano gratuito de uma instância MySQL.

## Como Executar

Ao aceder à página online do projeto dedicada à aplicação do Heroku, é apresentado um formulário relativo à conexaão com a DB. Após inserção dos dados, a ligação será confirmada e surgirá um segundo formulário com para criação de um utilizador inicial, com poderes de administrador. Concluindo a submissão deste segundo formulário, estará terminado o processo de instalação e configuração.

Consultando o endereço <endereço-do-website>/wp-login.php é possivel aceder à página de login do website.

## Estrutura do Projeto

O projeto consiste numa componente WordPress com ligação a uma base de dados MySQL. Nenhum componente complementar foi considerado uma vez que o plano do projeto era simples e as tecnologias apresentadas eram suficientes.
