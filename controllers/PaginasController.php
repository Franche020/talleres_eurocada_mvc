<?php

namespace Controllers;

use Classes\Email;
use Intervention\Image\ImageManagerStatic as Image;
use Model\PreciosPiezas;
use Model\Servicios;
use MVC\Router;

class PaginasController
{
    //! OFF
    public static function index(Router $router){
        startSession();
        $router->render('paginas/index', []);
    }

    public static function legal(Router $router) {

        startSession();
        $router->render('paginas/aviso-legal', [
            'titulo' => 'Aviso Legal'
        ]);
    }

    public static function confirmacion(Router $router) {

        startSession();
        
        $router->render('paginas/confirmacion-contacto', [
            'titulo' => 'Solicitud recibida'
        ]);
    }


    public static function calculadora(Router $router){
        startSession();


        $precio = PreciosPiezas::find(1);


        if ($_SERVER['REQUEST_METHOD'] === 'POST') {;


            $contacto = $_POST['contacto'] ?? [];
            $pieza = $_POST['pieza'] ?? [];
            $completo = $_POST['completo'] ?? '';
            $image = [];
            $imagePath = [];


            $recaptcha = $_POST['g-recaptcha-response'];

            $verifyResponse = file_get_contents(
            "https://www.google.com/recaptcha/api/siteverify?secret=6LccbzUoAAAAABo49pPsEttRPgtaLaYcclLMRvrc&response={$recaptcha}"
            );

            $responseData = json_decode($verifyResponse);

           

            $direccionMail = filter_var($contacto['email'],FILTER_VALIDATE_EMAIL);
            $telefono = filter_var($contacto['telefono'],FILTER_VALIDATE_INT);
            $nombre = s($contacto['nombre']);
            $apellido = s($contacto['apellido']);   
            $modoContacto = s($contacto['contacto']);
            
            if ($responseData->success) {// RECAPTCHA
                // Verificado, es humano

                // Procesado y mapeado de las piezaas
                $completoSanitizado = s($completo);
                $piezaSanitizado = [];
                foreach ($pieza as $key => $value) {
                    $piezaSanitizado[$key] = s($value);
                }
                if(isset($_POST['completo'])) {

                    $piezasMap = mapeo($piezaSanitizado,true, $precio->completo);

                } else {
                    $piezasMap = mapeo($piezaSanitizado, false, $precio->completo);

                }
                // Procesado de las imagenes
                
                if (!empty($_FILES['file1']['name']) || !empty($_FILES['file2']['name']) || !empty($_FILES['file3']['name'])) {
                    foreach ($_FILES as $uploadImg) {
                        //debuguear($uploadImg);
                        if (!empty($uploadImg['tmp_name'])){
                            $image[] = Image::make($uploadImg['tmp_name'])->encode('jpg', 70)->save(__DIR__ . '/../tmp/' . $uploadImg['name']);
                            $imagePath[] = __DIR__ . '/../tmp/' . $uploadImg['name'];
                        }
                    }
                }
                
                // Enviar un correo tanto a la administracion, como al cliente
                $email = new Email($direccionMail, $nombre, $apellido, null, $piezasMap, $telefono, $imagePath, $modoContacto);
    
                $email->emailContacto();
     
                // Borrar las imagenes
    
                foreach ($imagePath as $imagenBorrar) {
                    unlink($imagenBorrar);
                }
    
                header('location: /confirmacion-contacto');
                } else {
                // No verificado, posible bot
                }



        }
        //debuguear($precio);
        $router->render('paginas/calculadora-pintura', [
            'titulo' => '|| Taller Torres de la alameda Mecánica Chapa Pintura',
            'precio' => $precio,
            'script' => ' <script src="/build/js/servicios.js" defer></script>'
        ]);
    }

    public static function ubicacion (Router $router) {
        startSession();


        $router->render ('paginas/ubicacion' , [
            'titulo' => 'Donde estamos en Torres de la alameda',

        ]);
    }

    public static function nosotros (Router $router) {
        startSession();


        $router->render ('paginas/nosotros' , [
            'titulo' => 'Nosotros',

        ]);
    }

}
