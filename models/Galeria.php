<?php

namespace Model;

class Galeria extends ActiveRecord {
    protected static $tabla = 'galeria';
    protected static $columnasDB = ['id', 'nombre_imagen', 'resaltar'];

    public $id;
    public $nombre_imagen;
    public $resaltar;

    function __construct($args = [])
    {
        $this->id = $args['id'] ?? null;
        $this->nombre_imagen = $args['nombre_imagen']?? '';
        $this->resaltar = $args['resaltar'] ?? '0';
    }

    public static function allResaltada () {
        $query = "SELECT * FROM " . static::$tabla . " ORDER BY resaltar DESC, id DESC";
        $resultado = self::consultarSQL($query);
        return $resultado;
    }


} 