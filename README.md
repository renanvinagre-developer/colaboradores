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

# APIS

Todas apis expostas são tem o prefixo `/api` antes dos respectivos endereços.

# /colaboradores [GET]

Lista colaboradores de forma paginada (utiliza a paginação nativa do Laravel).

+ Response 200 (application/json)


# /colaborador/{id} [GET]

Retorna colaborador com histórico de salário.

+ Response 200 (application/json)


# /colaborador/{id} [POST]

Insere colaborador.

+ Response 201 (application/json)

### Estrutura dos dados

- nome_completo: "Exemplo de Nome" (string | required)
- cpf: "12345678900" (string | required | max: 11 | unique)
- email: "nome@dominio.com" (string | required | email | unique)
- rg: "123456431" (string | required)
- data_nascimento: "2000-01-01" (date | required) 
- cep: "00.000-000" (string | required)
- endereco: "Wall Street" (string | required)
- numero: 1000 (string | required)
- cidade: "Nova York" (string | required)
- estado: "Nova York" (string | required)


# /colaborador/{id} [PUT]

Atualiza colaborador.

+ Response 200 (application/json)

### Estrutura dos dados

- nome_completo: "Exemplo de Nome" (string)
- cpf: "12345678900" (string | max: 11 | unique)
- email: "nome@dominio.com" (string | email | unique)
- rg: "123456431" (string)
- data_nascimento: "2000-01-01" (date) 
- cep: "00.000-000" (string)
- endereco: "Wall Street" (string)
- numero: 1000 (string)
- cidade: "Nova York" (string)
- estado: "Nova York" (string)


# /colaborador/{id} [DELETE]

DELETA colaborador.

+ Response 200 (application/json)


# /colaborador/{id}/salario [POST]

Insere colaborador.

- Response 201 (application/json)

### Estrutura dos dados

- salario: 5234.59 (numeric | required)
- colaborador_id: 1 (int | required)