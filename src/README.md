# Criando projeto
> `composer create-project symfony/skeleton [nome-do-projeto]`

# Instalando maker
> `composer require maker`

# Instalando ORM
> `composer require orm`

# Criando entidade
> `$ php bin/console make:entity`

Properties:
name
description
slug
createdAt
updatedAt

# Criando banco de dados
> `$ php bin/console doctrine:database:create`

# Criando migration
> `$ php bin/console make:migration`

# Executando migration
> `$ php bin/console doctrine:migrations:migrate`

# Criando Controller
> `$ php bin/console make:controller` 

CourseController

# Configurando Rotas
Fora do Controller:
>/**
> *@Route("/courses", name="course_")
> */

Fora do Controller:
>/**
> *@Route("/", name="index")
> */

# Configurando endpoint /courses

> `$courses = $this->getDoctrine()->getRepository(Course::class);`
> `return $this->json([
           'data' => $courses
       ]);`