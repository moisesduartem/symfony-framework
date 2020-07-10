# Criando projeto com estrutura mínima (APIs, WebServices, etc.)

> composer create-project symfony/skeleton [nome-do-projeto]

# Criando projeto para estrutura web

> composer create-project symfony/website-skeleton [nome-do-projeto]


# Configurando BD
em .env...

> DATABASE_URL=mysql://[usuario_do_bd]:[senha_do_db]@127.0.0.1:3306/[nome_do_db]

# Criando BD

> $ php bin/console doctrine:database:create

# Criando entidade (model) no banco de dados

> $ php bin/console make:entity

# Criando migration

 Irá analisar as entidades do projeto e gerar arquivos que contém o comando SQL responsável por criar a estrutura no banco de dados.

> $ php bin/console make:migration

# Executando migration

> $ php bin/console doctrine:migrations:migrate

# Criando CRUD com base na entidade (Controllers, Twig Templates)

> $ php bin/console make:crud

# Subindo o servidor

> $ cd public/ 
> php -S localhost:8000 

Entidade disponível em localhost:8000/[entidade]