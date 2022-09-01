# Pré-requisitos

Foi utilizado o Ubuntu como S.O. do ambiente de desenvolvimento.

Além disso foi necessário as seguintes instalações:

**PHP**: 7.4.*

**Mysql**: Versão mais recente (8.0.*)

**Composer**: 2.4.*

# Instalação

**1.** Instação das dependências do projeto 

`composer install`

**2.** Crie um banco de dados no MySql com um nome a sua escolha.

**3.** Duplique o arquivo `.env.example` para um novo arquivo chamado `.env`.

`cp .env.example .env`

**4.** Configuração do .env

Configure os acessos do banco de dados com o nome do banco criado anteriormente e o seu usuário.

```DB_HOST=<seu servidor>
DB_PORT=3306
DB_DATABASE=<seu banco de dados>
DB_USERNAME=<usuario do banco de dados>
DB_PASSWORD=<senha do usuario do banco de dados>
```

**5.** Rode as migrações para que as tabelas do banco de dados sejam criadas.

`php artisan migrate`

**6.** Pronto! A aplicação está pronta para ser utilizada.