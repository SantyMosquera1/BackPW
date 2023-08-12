<?php

require_once __DIR__.'/../vendor/autoload.php';

// Carga las variables de entorno y ajusta la zona horaria
(new Laravel\Lumen\Bootstrap\LoadEnvironmentVariables(
    dirname(__DIR__)
))->bootstrap();

date_default_timezone_set(env('APP_TIMEZONE', 'UTC'));

/*
|--------------------------------------------------------------------------
| Create The Application
|--------------------------------------------------------------------------
|
| Crea la instancia de la aplicación que sirve como el componente central de este framework.
| Utilizaremos esta aplicación como un contenedor "IoC" y enrutador para este framework.
|
*/

$app = new Laravel\Lumen\Application(
    dirname(__DIR__)
);

// Habilita el uso de facades de Laravel (opcional)
// $app->withFacades();

// Habilita el uso de Eloquent ORM
$app->withEloquent();

/*
|--------------------------------------------------------------------------
| Register Container Bindings
|--------------------------------------------------------------------------
|
| Registra algunas vinculaciones en el contenedor de servicios. Registramos el manejador de excepciones
| y el kernel de consola. Puedes agregar tus propias vinculaciones aquí si lo deseas o crear otro archivo.
|
*/

$app->singleton(
    Illuminate\Contracts\Debug\ExceptionHandler::class,
    App\Exceptions\Handler::class
);

$app->singleton(
    Illuminate\Contracts\Console\Kernel::class,
    App\Console\Kernel::class
);

/*
|--------------------------------------------------------------------------
| Register Config Files
|--------------------------------------------------------------------------
|
| Registramos el archivo de configuración "app". Si el archivo existe en tu directorio de configuración,
| se cargará; de lo contrario, cargaremos la versión predeterminada. Puedes registrar otros archivos según sea necesario.
|
*/

$app->configure('app');

/*
|--------------------------------------------------------------------------
| Register Middleware
|--------------------------------------------------------------------------
|
| A continuación, registraremos el middleware en la aplicación. Esto puede ser middleware global que se ejecuta antes
| y después de cada solicitud en una ruta, o middleware que se asignará a rutas específicas.
|
*/

// Registra el middleware de CORS (Cross-Origin Resource Sharing)
$app->middleware([
    App\Http\Middleware\CorsMiddleware::class
]);

// Puedes registrar más middlewares aquí según sea necesario

/*
|--------------------------------------------------------------------------
| Register Service Providers
|--------------------------------------------------------------------------
|
| Aquí registraremos todos los proveedores de servicios de la aplicación que se utilizan para vincular servicios en el contenedor.
| Los proveedores de servicios son totalmente opcionales, así que no es necesario descomentar esta línea.
|
*/

// $app->register(App\Providers\AppServiceProvider::class);
// $app->register(App\Providers\AuthServiceProvider::class);
// $app->register(App\Providers\EventServiceProvider::class);

/*
|--------------------------------------------------------------------------
| Load The Application Routes
|--------------------------------------------------------------------------
|
| A continuación, incluiremos el archivo de rutas para que todas puedan ser agregadas a la aplicación.
| Esto proporcionará todas las URL a las que la aplicación puede responder, así como los controladores que pueden manejarlas.
|
*/

$app->router->group([
    'namespace' => 'App\Http\Controllers',
], function ($router) {
    require __DIR__.'/../routes/web.php';
});

return $app;
