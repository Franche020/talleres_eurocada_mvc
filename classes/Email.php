<?php

namespace Classes;

use PHPMailer\PHPMailer\PHPMailer;

class Email
{

    public $email;
    public $nombre;
    public $apellido;
    public $token;
    public $piezas;
    public $telefono;
    public $imagenes;
    public $contacto;

    public function __construct($email, $nombre, $apellido, $token, $piezas, $telefono, $imagenes, $contacto)
    {
        $this->email = $email ?? '';
        $this->nombre = $nombre ?? '';
        $this->apellido = $apellido ?? '';
        $this->token = $token ?? null;
        $this->piezas = $piezas ?? [''];
        $this->telefono = $telefono ?? '';
        $this->imagenes = $imagenes ?? [''];
        $this->contacto = $contacto ?? '';
    }

    public function enviarConfirmacion()
    {

        // create a new object
        $mail = new PHPMailer();
        $mail->isSMTP();
        $mail->Host = $_ENV['EMAIL_HOST'];
        $mail->SMTPAuth = true;
        $mail->SMTPSecure = 'ssl';
        $mail->Port = $_ENV['EMAIL_PORT'];
        $mail->Username = $_ENV['EMAIL_USER_CUENTAS'];
        $mail->Password = $_ENV['EMAIL_PASS_CUENTAS'];

        $mail->setFrom('cuentas@tallereseurocada.es', 'Cuentas Talleres Eurocada');
        $mail->addAddress($this->email, $this->nombre);
        $mail->Subject = 'Confirma tu Cuenta';

        // Set HTML
        $mail->isHTML(TRUE);
        $mail->CharSet = 'UTF-8';

        $contenido = '<html>';
        $contenido .= "<p><strong>Hola " . $this->nombre .  "</strong> Has Registrado Correctamente tu cuenta en Eurocada; pero es necesario confirmarla</p>";
        $contenido .= "<p>Presiona aquí: <a href='" . $_ENV['HOST'] . "/confirmar-cuenta?token=" . $this->token . "'>Confirmar Cuenta</a>";
        $contenido .= "<p>Si tu no creaste esta cuenta; puedes ignorar el mensaje</p>";
        $contenido .= '</html>';
        $mail->Body = $contenido;

        //Enviar el mail
        $mail->send();
    }

    public function enviarInstrucciones()
    {

        // create a new object
        $mail = new PHPMailer();
        $mail->isSMTP();
        $mail->Host = $_ENV['EMAIL_HOST'];
        $mail->SMTPAuth = true;
        $mail->SMTPSecure = 'ssl';
        $mail->Port = $_ENV['EMAIL_PORT'];
        $mail->Username = $_ENV['EMAIL_USER_CUENTAS'];
        $mail->Password = $_ENV['EMAIL_PASS_CUENTAS'];

        $mail->setFrom('cuentas@tallereseurocada.es', 'Cuentas Talleres Eurocada');
        $mail->addAddress($this->email, $this->nombre);
        $mail->Subject = 'Reestablece tu password';

        // Set HTML
        $mail->isHTML(TRUE);
        $mail->CharSet = 'UTF-8';

        $contenido = '<html>';
        $contenido .= "<p><strong>Hola " . $this->nombre .  "</strong> Has solicitado reestablecer tu password, sigue el siguiente enlace para hacerlo.</p>";
        $contenido .= "<p>Presiona aquí: <a href='" . $_ENV['HOST'] . "/reestablecer?token=" . $this->token . "'>Reestablecer Password</a>";
        $contenido .= "<p>Si tu no solicitaste este cambio, puedes ignorar el mensaje</p>";
        $contenido .= '</html>';
        $mail->Body = $contenido;

        //Enviar el mail
        $mail->send();
    }

    public function emailContacto()
    {

        // create a new object
        $mail = new PHPMailer();
        $mail->isSMTP();
        $mail->Host = $_ENV['EMAIL_HOST'];
        $mail->SMTPAuth = true;
        //$mail->SMTPSecure = 'ssl';
        $mail->Port = $_ENV['EMAIL_PORT'];
        $mail->Username = $_ENV['EMAIL_USER_CONTACTO'];
        $mail->Password = $_ENV['EMAIL_PASS_CONTACTO'];

        $mail->setFrom('contacto@tallereseurocada.es', 'Talleres Eurocada');
        $mail->addAddress($this->email, $this->nombre);
        $mail->addBCC('contacto@tallereseurocada.es');
        $mail->Subject = 'Solicitud de presupuesto de pintura';

        // Set HTML
        $mail->isHTML(true);
        $mail->CharSet = 'UTF-8';

        $stringPiezas = '';

        // UL piezas
        if (!empty($this->piezas)) {
            
            $stringPiezas = '<ul>';
            foreach ($this->piezas as $pieza) {
                $stringPiezas .= '<li>';
                $stringPiezas .= $pieza['nombre'];
                $stringPiezas .= ' ';
                $stringPiezas .= $pieza['precio'];
                $stringPiezas .= '€';
                $stringPiezas .= '</li>';
            }
            $stringPiezas .= '</ul>';
        }

        $contenido = '

        <html>
        <head>
        <style>
  header {
    display: bloc;

    padding: 3.5rem 2.8rem 3.6rem 2.8rem;

    background-color: #06073d;
    gap: 0.4rem;
  }
  
  h1,
  h2 {
    text-transform: uppercase;
    margin: 0 auto;
    padding: 0;
    letter-spacing: 0.75rem;
  }
  
  h1 {
    color: #e5da44;
  }
  
  h2 {
    color: #FFFFFF;
  }
  footer{
    display: block;
    background-color: #06073d;
    padding: 2.8rem;
    margin: 0 auto;
}
footer p, footer a {
    color: #FFFFFF;
    padding: 2rem 0;
    margin: 0 auto;
}
</style>
        </head>
            <body>
            <header>
            <h2>Talleres</h2>
            <h1>Eurocada</h1>
            <h2>Automoción</h2>
            </header>
            <main>
            <p>Estimado/a ';
        $contenido .= $this->nombre;



        $contenido .= ',</p>
            <p>Queremos agradercerle el interes mostrado en relacion a los trabajos de chapa y pintura para los que usted ha solicitado presupuesto.<br><br>';

        if (!empty($this->piezas)) {
            $contenido .= 'Las partes de su vehiculo que desea pintar son';
            $contenido .= $stringPiezas;;
        }

        $contenido .= '<br>Nuestros especialistas estan revisando su solicitud y responderan a la mayor brevedad por medio de ';
        $contenido .= $this->contacto;

        $contenido .= '.</p><br>                
                </main>
                <section>';

        $contenido .= '<ul>';

        $contenido .= '<li>';
        $contenido .= $this->nombre;
        $contenido .= '</li>';
        $contenido .= '<li>';
        $contenido .= $this->apellido;
        $contenido .= '</li>';
        $contenido .= '<li>';
        $contenido .= $this->telefono;
        $contenido .= '</li>';
        $contenido .= '<li>';
        $contenido .= $this->email;
        $contenido .= '</li>';
        $contenido .= '<li>';
        $contenido .= $this->contacto;
        $contenido .= '</li>';

        $contenido .= '</ul>';

        $contenido .= '</section>
                
                <footer>
                    <p>Todos los derechos reservados, Eurocada ';
        $contenido .= DATE('Y');
        $contenido .= '</p> <a href="https://www.tallereseurocada.es/aviso-legal">Aviso Legal</a>
                </footer>
                
            </body>

        </html>
        ';

        foreach ($this->imagenes as $imagen) {
            $mail->addAttachment($imagen);
        }


        $mail->Body = $contenido;
        $mail->send();
    }
}
