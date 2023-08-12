# Lumen PHP Framework

[![Build Status](https://travis-ci.org/laravel/lumen-framework.svg)](https://travis-ci.org/laravel/lumen-framework)
[![Total Downloads](https://img.shields.io/packagist/dt/laravel/lumen-framework)](https://packagist.org/packages/laravel/lumen-framework)
[![Latest Stable Version](https://img.shields.io/packagist/v/laravel/lumen-framework)](https://packagist.org/packages/laravel/lumen-framework)
[![License](https://img.shields.io/packagist/l/laravel/lumen)](https://packagist.org/packages/laravel/lumen-framework)

Laravel Lumen is a stunningly fast PHP micro-framework for building web applications with expressive, elegant syntax. We believe development must be an enjoyable, creative experience to be truly fulfilling. Lumen attempts to take the pain out of development by easing common tasks used in the majority of web projects, such as routing, database abstraction, queueing, and caching.

## Official Documentation

Documentation for the framework can be found on the [Lumen website](https://lumen.laravel.com/docs).

## Contributing

Thank you for considering contributing to Lumen! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Security Vulnerabilities

If you discover a security vulnerability within Lumen, please send an e-mail to Taylor Otwell at taylor@laravel.com. All security vulnerabilities will be promptly addressed.

## License

The Lumen framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).


## Para poner en marcha el API, sigue estos pasos:

## Configuración de la Base de Datos: Primero, crea una nueva base de datos en MySQL manualmente. No necesitas crear tablas, ya que el API las generará automáticamente. Asegúrate de tener los detalles de conexión: nombre de la base de datos, nombre de usuario, host y contraseña.

## Configuración de Conexión: En el archivo de configuración de la aplicación ".env", establece los detalles de conexión a la base de datos, incluyendo el nombre de la base de datos, el nombre de usuario, el host y la contraseña.

## Composer: Asegúrate de tener instalado Composer, ya que es necesario para gestionar las dependencias de la aplicación.

## Migraciones: Ejecuta el comando "php artisan migrate" en la línea de comandos. Esto creará automáticamente las tablas requeridas en la base de datos.

## Iniciar el Servidor: Finalmente, ejecuta el comando "php -S localhost:8000 -t public" en la línea de comandos. Esto iniciará el servidor y pondrá en funcionamiento todo el proceso.

## Siguiendo estos pasos, tendrás el API listo para usar y conectado a la base de datos que has creado.