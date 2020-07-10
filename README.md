# Criando projeto com estrutura mínima (APIs, WebServices, etc.)

> composer create-project symfony/skeleton [nome-do-projeto]

# Criando projeto para estrutura web

> composer create-project symfony/website-skeleton [nome-do-projeto]


# Configurando BD
em .env...

> DATABASE_URL=mysql://[usuario_do_bd]:[senha_do_db]@127.0.0.1:3306/[nome_do_db]

# Criando BD

> $ php bin/console doctrine:database:create