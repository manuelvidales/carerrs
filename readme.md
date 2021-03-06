<p align="center"><img src="https://i.ibb.co/8grQgVQ/jobs.png" width="650"></p>
<p align="center"><img src="https://i.ibb.co/5Bvn7wp/correo.png" width="450"></p>

## Descripcion

4 formularios para recibir informacion de candidatos a operadores de unidades de transporte, dando la opcion de seleccionar el perfil que buscan aplicar siendo los siguientes:

- Transfer/B1.
- Foraneo.
- Movimientos Locales.
- Corto - Foraneo.  

Se integra dentro de la Pagina oficial de la empresa como seccion de "Bolsa de Trabajo".

## Conocimiento 

La informacion que se ingresa, pasa por un proceso de Verificacion de campos desde el Controller y devuelve alertas visuales al Cumplir o de No cumplir con alguno segun aplique.
En la opcion de Archivo se Verifica que cumplan el Formato: **.pdf, .doc. docx.**

Posteriormente se revisa que existan un archivo en el formulario y se pasan por variables para almacenamiento en un directorio especifico y se le Asigna un Nombre Inicial (document-), con un final aleatorio deacuerdo a la hora enviada.

enseguida se envian los datos a la Tabla de la Base de Datos  y se guardan con la ruta del archivo almacenado.

Despues se envia la informacion por Correo, usando el controller de Mail y se pasa por una plantilla echa en Markdown personalizada en CSS aplicando la libreria de Laravel-mail.

Se agregaron los siguientes paquetes dentro del proyecto:

- [Laravel SendGrid Driver](https://github.com/s-ichikawa/laravel-sendgrid-driver)
- [Lenguajes para traducir 4.0](https://github.com/caouecs/Laravel-lang)
- [Markdown Personalizado ](https://laravel.com/docs/6.x/notifications#customizing-the-components)
- [NoCAPTCHA reCAPTCHA ](https://github.com/anhskohbo/no-captcha)


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
