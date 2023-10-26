<?php 

require_once __DIR__ . '/../includes/app.php';

use MVC\Router;
use Controllers\AuthController;
use Controllers\GaleriaController;
use Controllers\PaginasController;
use Controllers\AdministracionController;

$router = new Router();


// Contacto y calculadora
$router->get('/', [PaginasController::class, 'calculadora']);
$router->post('/', [PaginasController::class, 'calculadora']);
$router->get('/confirmacion-contacto', [PaginasController::class, 'confirmacion']);

// Ubicacion y legal
$router->get('/aviso-legal', [PaginasController::class, 'legal']);
$router->get('/ubicacion', [PaginasController::class, 'ubicacion']);
$router->get('/nosotros', [PaginasController::class, 'nosotros']);


// galeria
$router->get('/galeria', [GaleriaController::class, 'index']);

// Administracion Imagenes
$router->get('/administracion/galeria', [AdministracionController::class, 'galeria']);
$router->post('/administracion/galeria', [AdministracionController::class, 'galeria']);
$router->get('/administracion/galeria/nueva-imagen', [AdministracionController::class, 'nueva']);
$router->post('/administracion/galeria/nueva-imagen', [AdministracionController::class, 'nueva']);
$router->post('/administracion/galeria/actualizar', [AdministracionController::class, 'actualizar']);

// Administracion Precios
$router->get('/administracion', [AdministracionController::class, 'index']);
$router->post('/administracion', [AdministracionController::class, 'index']);



// Login
$router->get('/login', [AuthController::class, 'login']);
$router->post('/login', [AuthController::class, 'login']);
$router->get('/logout', [AuthController::class, 'logout']);

// Crear Cuenta
$router->get('/registro', [AuthController::class, 'registro']);
$router->post('/registro', [AuthController::class, 'registro']);

// Formulario de olvide mi password
$router->get('/olvide', [AuthController::class, 'olvide']);
$router->post('/olvide', [AuthController::class, 'olvide']);

// Colocar el nuevo password
$router->get('/reestablecer', [AuthController::class, 'reestablecer']);
$router->post('/reestablecer', [AuthController::class, 'reestablecer']);

// Confirmación de Cuenta
$router->get('/mensaje', [AuthController::class, 'mensaje']);
$router->get('/confirmar-cuenta', [AuthController::class, 'confirmar']);


$router->comprobarRutas();