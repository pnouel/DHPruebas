Laravel es un Framwork de codigo abierto, tiene convenciones y estructra de trabajo cerrada.
Para estandarizar y proporcionar herramientas de trabajo con php.

No es una libreria. 

Tiene una biblioteca de clases y metodos con la que trabajar. 

Respetando la sintaxis de PHP nativo.

Laravel depende de una libreria Carbon fechas y horarios.

Dependencias Laravel

Instalacion COMPOSER es un gestor de dependencias. 
En windows descargar el ejecutable e instalar
Para instalar laravel 

git bash
composer create-project laravel/laravel [NombreProyecto]

git Ignore tiene rodas las dependencias de laravel

para bajar las dependencias

git bash
 composer update

 Para que el proyecto funcione .env.example renombrar a .env

 Vendor-> dependencias
 Tests->pruebas
 Storage->archivos subidos por usuario
 routes->rutas o direcciones del sitio
 resourses->html
 public->estatico javascript y css
 database->conexion y modificaciones a la DB
 bootstrap->  it's used to initialize (setting up path & environments) the framework.
 app->logica de la aplicaacion



 Artisan

 php artisan nos permite no depender de xammp

 php artisan serv

php  artisan key:generate [key]
para que opere  con keys

NO TENGO CSS APP en PUBLIC