<?php

namespace Classes;



class NewEmail
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

        // Cabecera
        $para = `{$this->nombre} , {$this->email}`;
        $subject = 'Confirma tu Cuenta';
        $headers[] = 'MIME-Version: 1.0';
        $headers[] = 'Content-type: text/html; charset=iso-8859-1';
        $headers[] = `To: {$this->nombre} <{$this->email}>`;
        $headers[] = 'From: Cuentas Talleres Eurocadar <cuentas@tallereseurocada.es>';

        $contenido = '<html>';
        $contenido .= "<p><strong>Hola " . $this->nombre .  "</strong> Has Registrado Correctamente tu cuenta en Eurocada; pero es necesario confirmarla</p>";
        $contenido .= "<p>Presiona aquí: <a href='" . $_ENV['HOST'] . "/confirmar-cuenta?token=" . $this->token . "'>Confirmar Cuenta</a>";
        $contenido .= "<p>Si tu no creaste esta cuenta; puedes ignorar el mensaje</p>";
        $contenido .= '</html>';

        //Enviar el mail
        mail($para, $subject, $contenido, $headers);
    }

    public function enviarInstrucciones()
    {

        // Cabecera
        $para = `{$this->nombre} , {$this->email}`;
        $subject =  'Reestablece tu password';
        $headers[] = 'MIME-Version: 1.0';
        $headers[] = 'Content-type: text/html; charset=iso-8859-1';
        $headers[] = `To: {$this->nombre} <{$this->email}>`;
        $headers[] = 'From: Cuentas Talleres Eurocadar <cuentas@tallereseurocada.es>';


        $contenido = '<html>';
        $contenido .= "<p><strong>Hola " . $this->nombre .  "</strong> Has solicitado reestablecer tu password, sigue el siguiente enlace para hacerlo.</p>";
        $contenido .= "<p>Presiona aquí: <a href='" . $_ENV['HOST'] . "/reestablecer?token=" . $this->token . "'>Reestablecer Password</a>";
        $contenido .= "<p>Si tu no solicitaste este cambio, puedes ignorar el mensaje</p>";
        $contenido .= '</html>';


        //Enviar el mail
        mail($para, $subject, $contenido, $headers);
    }

    public function emailContacto()
    {

        // Set HTML
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

        $para = $this->email;
        $asunto = 'Presupuesto de pintura';
        
        $cabeceras = "From: contacto@tallereseurocada.es" . "\r\n";
        $cabeceras .= "Reply-To: contacto@tallereseurocada.es" . "\r\n";
        $cabeceras .= "BCC: tallereseurocada@yahoo.es\r\n";
        $cabeceras .= "MIME-Version: 1.0" . "\r\n";
        $cabeceras .= "Content-Type: multipart/mixed; boundary=\"limite\"\r\n";
        
        // Crear mensaje
        $mensaje = "--limite\r\n";
        $mensaje .= "Content-Type: text/html; charset=UTF-8\r\n";
        $mensaje .= "Content-Transfer-Encoding: 8bit\r\n\r\n";
        $mensaje .= $contenido . "\r\n\r\n"; 
        
        // Adjuntar archivos
        foreach ($this->imagenes as $img) {
          $adjunto = chunk_split(base64_encode(file_get_contents($img)));
          
          $mensaje .= "--limite\r\n";
          $mensaje .= "Content-Type: application/octet-stream; name=\"".basename($img)."\"\r\n";
          $mensaje .= "Content-Transfer-Encoding: base64\r\n";
          $mensaje .= "Content-Disposition: attachment; filename=\"".basename($img)."\"\r\n";
          $mensaje .= $adjunto . "\r\n\r\n";
        }
        
        $mensaje .= "--limite--";
        
        // Enviar correo
        $enviado = mail($para, $asunto, $mensaje, $cabeceras);
        
        if ($enviado) {
          // Éxito
        } else {
          // Error
        }
    }
}
