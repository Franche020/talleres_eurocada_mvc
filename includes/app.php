<?php 

use Dotenv\Dotenv;
use Model\ActiveRecord;
require __DIR__ . '/../vendor/autoload.php';

// Añadir Dotenv
$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->safeLoad();

require 'funciones.php';
require 'database.php';

// Conectarnos a la base de datos
ActiveRecord::setDB($db);

// Rutas de archivos

define('CARPETA_IMAGENES', __DIR__ . '/../public/fotos/');
define('CARPETA_THUMBNAILS', __DIR__ . '/../public/fotos/miniaturas/');
