<?php

namespace Controllers;

class ValidacionContactoController
{
    public $nombre;
    public $apellido;
    public $email;
    public $telefono;
    public $contacto;
    public $acepto;

    public $alertas =[];

    public function __construct(array $args = [])
    {
        $this->nombre = $args['nombre'] ?? '';
        $this->apellido = $args['apellido'] ?? '';
        $this->email = $args['email'] ?? '';
        $this->telefono = $args['telefono'] ?? '';
        $this->contacto = $args['contacto'] ?? 'email';
        $this->acepto = $args['acepto'] ?? false;
    }

    public function validacion (): array
    {
        if(!$this->nombre) {
            $this->alertas['error'][] = 'El Nombre es Obligatorio';
        }
        if(!$this->apellido) {
            $this->alertas['error'][] = 'El Apellido es Obligatorio';
        }
        if(!$this->email) {
            $this->alertas['error'][] = 'El Email del Usuario es Obligatorio';
        }
        if(!$this->telefono) {
            $this->alertas['error'][] = 'El Teléfono es Obligatorio';
        }
        if(!filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
            $this->alertas['error'][] = 'Email no válido';
        }
        if(!$this->acepto){
            $this->alertas['error'][] = 'Ha de aceptar nuestra politica de privacidad';            
        }
        return $this->alertas;
    }
}