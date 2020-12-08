# EMS Ventura - Tech Challenge


## Como instalar

   Para instalar basta clonar o projeto e editar o arquivo .env

### Nome do banco Criado
    coin

### Nome da Tabela Criada
    tbl_coins


### Comandos Criados
    php artisan SeedBd:cron
    php artisan schedule:run

### Rota para API

    /alimentarBanco

    Para inserir informações no banco de dados pode acessar essa rota: api/alimentarBanco
    assim o sistema fara o cadastro das moedas na tabela.

    Ou Pode rodar o comando: php artisan SeedBd:cron

### Rota para Web

   Foram criadas duas rotas:
   A principal que lista as moedas cadastradas no banco (/)
   A de detalhes da moeda escolhida (/moeda/{code})






