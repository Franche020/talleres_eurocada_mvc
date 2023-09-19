<?php

namespace Controllers;


use Model\Galeria;
use MVC\Router;

class GaleriaController {

    public static function index(Router $router) {
        startSession();

        $galeria = Galeria::allResaltada();

        $router->render('galeria/index', [
            'titulo' => 'Galería de Fotos',
            'galeria' => $galeria,
            'script' => '<script src="/build/js/galeria.js" defer></script>'
        ]);
    }
    
}