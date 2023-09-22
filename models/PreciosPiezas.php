<?php

namespace Model;

class PreciosPiezas extends ActiveRecord {
    protected static $tabla = "preciosPiezas";
    protected static $columnasDB = [
        'id',
        'puerta_del_izq',
        'puerta_del_der',
        'puerta_tras_izq',
        'puerta_tras_der',
        'retrovisor_izq',
        'retrovisor_der',
        'techo',
        'capo_del',
        'porton_tras',
        'paragolpes_del',
        'paragolpes_tras',
        'aleta_del_izq',
        'aleta_del_der',
        'aleta_tras_izq',
        'aleta_tras_der',
        'faro_del_izq',
        'faro_del_der',
        'completo'
    ];

    public $id;
    public $puerta_del_izq;
    public $puerta_del_der;
    public $puerta_tras_izq;
    public $puerta_tras_der;
    public $retrovisor_izq;
    public $retrovisor_der;
    public $techo;
    public $capo_del;
    public $porton_tras;
    public $paragolpes_del;
    public $paragolpes_tras;
    public $aleta_del_izq;
    public $aleta_del_der;
    public $aleta_tras_izq;
    public $aleta_tras_der;
    public $faro_del_izq;
    public $faro_del_der;
    public $completo;
    

    public function __construct($args= [])
    {
        $this->id = $args['id'] ?? null;
        $this->puerta_del_izq = $args['puerta_del_izq'] ?? '';
        $this->puerta_del_der = $args['puerta_del_der'] ?? '';
        $this->puerta_tras_izq = $args['puerta_tras_izq'] ?? '';
        $this->puerta_tras_der = $args['puerta_tras_der'] ?? '';
        $this->retrovisor_izq = $args['retrovisor_izq'] ?? '';
        $this->retrovisor_der = $args['retrovisor_der'] ?? '';
        $this->techo = $args['techo'] ?? '';
        $this->capo_del = $args['capo_del'] ?? '';
        $this->porton_tras = $args['porton_tras'] ?? '';
        $this->paragolpes_del = $args['paragolpes_del'] ?? '';
        $this->paragolpes_tras = $args['paragolpes_tras'] ?? '';
        $this->aleta_del_izq = $args['aleta_del_izq'] ?? '';
        $this->aleta_del_der = $args['aleta_del_der'] ?? '';
        $this->aleta_tras_izq = $args['aleta_tras_izq'] ?? '';
        $this->aleta_tras_der = $args['aleta_tras_der'] ?? '';
        $this->faro_del_izq = $args['faro_del_izq'] ?? '';
        $this->faro_del_der = $args['faro_del_der'] ?? '';
        $this->completo = $args['completo'] ?? '';
    }
    
}