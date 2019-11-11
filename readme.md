<p align="center"><img src="https://i.ibb.co/xg4LTnP/carrers.png" width="400"></p>

## Descripcion

4 formularios para recibir informacion de candidatos a operadores de unidades de transporte, dando la opcion de seleccionar el perfil que buscan aplicar siendo los siguientes:

- Transfer/B1.
- Foraneo.
- Movimientos Locales.
- Corto - Foraneo.  

Se integra dentro de la Pagina oficial de la empresa com seccion de "Ofertas de Empledo".

## Conocimiento 

La informacion llenada se Verifican los campos desde el Controller siendo mostrada en caso que no cumplan con los campos requeridos.
En la opcion de Archivo se Verifica que cumplan el Formato: **.pdf, .doc. docx.**

Posteriormente se revisa que existan un archivo en el formulario y se pasan por variables para almacenamiento en un directorio especifico y se le Asigna un Nombre Inicial (document-), con un final aleatorio deacuerdo a la hora enviada.

enseguida se envian los datos a la Tabla de la Base de Datos  y se guardan con la ruta del archivo almacenado.

Despues se envia la informacion por Correo, usando el controller de Mail y se pasa por una plantilla echa en Markdown personalizada en CSS aplicando la libreria de Laravel-mail

Se agregaron los siguientes paquetes dentro del proyecto:

- [Laravel SendGrid Driver](https://github.com/s-ichikawa/laravel-sendgrid-driver)
- [Lenguajes para traducir 4.0](https://github.com/caouecs/Laravel-lang)
- [Markdown Personalizado ](https://laravel.com/docs/6.x/notifications#customizing-the-components)


## Install

- Copiar el repositorio y clonar con git:
    ~~~
    git clone https://github.com/manuelvidales/carerrs.git
    ~~~

- Correr el composer install:
    ~~~
    composer install --optimize-autoloader --no-dev
    ~~~
- Configurar el archvo .env (se requiere Base de datos Mysql: usuario y pass):
    
- Generar la clave de laravel:
    ~~~
    php artisan key:generate
    ~~~
- Ejecutar las migraciones:
    ~~~
    php artisan migrate
    ~~~
- Listo para trabajar (Se puede actualizar el correo que recibe en el controller):


## License

The Laravel framework is open-source software licensed under the [MIT license](https://opensource.org/licenses/MIT).
