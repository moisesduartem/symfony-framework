# ManyToOne / OneToMany 

1. Criando entidade 'Category'

> `$ php bin/console make:entity Category`

> New property name (press <return> to stop adding fields):
> name

> Field type (enter ? to see all types) [string]:
> string

> Field length [255]:
> 255

> Can this field be null in the database (nullable) (yes/no) [no]:
> no

> New property name (press <return> to stop adding fields):
>
> (press enter again to finish)

2. Mapeando relacionamento ManyToOne (Muitos Para Um)
<p>Nesse exemplo, cada Categoria pode ser associada a vários Produtos. Mas cada produto só pode ser associado a UMA Categoria.</p>

Então, vamos criar a entidade Product e relacioná-la com Category.

> $ php bin/console make:entity


> Class name of the entity to create or update (e.g. BraveChef):
> Product

>New property name (press <return> to stop adding fields):
> category

>Field type (enter ? to see all types) [string]:
> relation

> What class should this entity be related to?:
> Category

> Relation type? [ManyToOne, OneToMany, ManyToMany, OneToOne]:
> ManyToOne

> Is the Product.category property allowed to be null (nullable)? (yes/no) [yes]:
> no

> Do you want to add a new property to Category so that you can access/update
> Product objects from it - e.g. $category->getProducts()? (yes/no) [yes]:
> yes

> New field name inside Category [products]:
> products

> Do you want to automatically delete orphaned App\Entity\Product objects
> (orphanRemoval)? (yes/no) [no]:
> no

> New property name (press <return> to stop adding fields):
>
> (press enter again to finish)