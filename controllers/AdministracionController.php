<?php

namespace Controllers;

use MVC\Router;
use Model\Galeria;
use Model\PreciosPiezas;
use Intervention\Image\ImageManagerStatic as Image;

class AdministracionController {

    public static function index (Router $router) {
        isSession();
        isAdmin();
        
        $precio = PreciosPiezas::find(1);

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $args = $_POST['pieza'];
            $precio->sincronizar($args);
            $precio->sanitizarAtributos();
            $resultado = $precio->guardar();

            if ($resultado) {
                header('location: /administracion');
            }
        }

        $router->render('administracion/index', [
            'precio' => $precio,
            'titulo' => 'Administracion'
        ]);
    }

    public static function galeria(Router $router) {
        isSession();
        isAdmin();

        $galeria = Galeria::allResaltada();

        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            $id = filter_var($_POST['id'],FILTER_VALIDATE_INT);
            if($id !== false){
                $imagenBorrar = Galeria::find($id);
                $imagenJpg = CARPETA_IMAGENES.$imagenBorrar->nombre_imagen.'.jpg';
                $imagenWebp = CARPETA_IMAGENES.$imagenBorrar->nombre_imagen.'.webp';
                $imagenThumb = CARPETA_THUMBNAILS.'thumb_'.$imagenBorrar->nombre_imagen.'.jpg';

                if(is_file($imagenJpg)){
                    unlink($imagenJpg);
                }
                if(is_file($imagenWebp)){
                    unlink($imagenWebp);
                }
                if(is_file($imagenThumb)){
                    unlink($imagenThumb);
                }
                $resultado = $imagenBorrar->eliminar();
                
                if ($resultado) {
                    header('location: /administracion/galeria');
                }
            }
        }

        $router->render('galeria/admin', [
            'titulo' => 'Administracion de imagenes',
            'galeria' => $galeria,
            'script' => '<script src="/build/js/admin.js" defer></script>'
        ]);
    }
    
    public static function nueva (Router $router) {
        isSession();
        isAdmin();

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            
            $galeria = new Galeria($_POST);
            
            // Creacion de la carpeta Imagnes
            if (!is_dir(CARPETA_IMAGENES)){
                mkdir(CARPETA_IMAGENES);
            }
            if(!is_dir(CARPETA_THUMBNAILS)){
                mkdir(CARPETA_THUMBNAILS);
            }
            
            $nombreImagen = md5(uniqid(rand(),true));
            //Creacion de las distintas imagenes

            $imagen = Image::make($_FILES['file1']['tmp_name'])->encode('jpg',70)->save(CARPETA_IMAGENES.$nombreImagen.'.jpg');
            $imagen = null;
            $imagen = Image::make($_FILES['file1']['tmp_name'])->encode('webp',70)->save(CARPETA_IMAGENES.$nombreImagen.'.webp');
            $imagen = null;
            $thumbnail = Image::make($_FILES['file1']['tmp_name'])->resize(300, 185, function ($constraint) {
                $constraint->aspectRatio();
            })->save(CARPETA_THUMBNAILS.'thumb_'.$nombreImagen.'.jpg',20,'jpg');
            $thumbnail = null;
            
            $galeria->nombre_imagen = $nombreImagen;
            $resultado = $galeria->guardar();
            
            if ($resultado) {
                header('location: /administracion/galeria');
            }
            
        }

        $router->render('/galeria/nueva', [
            'titulo' => 'Añadir Imagen',
            'script' => '<script src="/build/js/admin.js" defer></script>'
        ]);
    }

    public static function actualizar () {
        isSession();
        isAdmin();

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            $id = filter_var($_POST['imagen']['id'], FILTER_VALIDATE_INT);
    
            if($id !== false) {
                $imagen = Galeria::find($id);
                
                
                if (isset($_POST['imagen']['resaltar'])) {
                    $imagen->resaltar = 1;
                } else {
                    $imagen->resaltar = 0;
                }
                $resultado = $imagen->guardar();
                echo json_encode($resultado);
            }

        }

    }
    
}