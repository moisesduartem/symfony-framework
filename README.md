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

# Configurando métodos da rota
>`@Route("/", name="index", methods={"GET"})`

>`@Route("/", name="create", methods={"POST"})`

>`@Route("/{courseId}", name="update", methods={"PUT", "PATCH"})`

>`@Route("/{courseId}", name="delete", methods={"DELETE})`

# Checando rotas existentes 
>`php bin/console debug:route`

# Instalando serializer 

>`composer require serializer   `

# CRUD - Create

    public function create(Request $request)
    {
        $data = $request->request->all();

        $course = new Course();
        $course->setName($data['name']);
        $course->setDescription($data['description']);
        $course->setSlug($data['slug']);
        $course->setCreatedAt(new \DateTime('now', new \DateTimeZone('America/Sao_Paulo')));
        $course->setUpdatedAt(new \DateTime('now', new \DateTimeZone('America/Sao_Paulo')));

        $doctrine = $this->getDoctrine()->getManager();

        $doctrine->persist($course);
        $doctrine->flush();

        return $this->json('Curso criado com sucesso!');
    }