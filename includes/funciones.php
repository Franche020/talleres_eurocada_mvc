<?php

function debuguear($variable): string
{
    echo "<pre>";
    var_dump($variable);
    echo "</pre>";
    exit;
}
function s($html): string
{
    $s = htmlspecialchars($html);
    return $s;
}

function mapeo(array $piezas, bool $completo, $precioCompleto) :array
{
    $piezasMap = [];
    $mapeo = [
        "puerta-del-izq" => 'Puerta Delantera Izquierda',
        "puerta-del-der" => 'Puerta Delantera Derecha',
        "puerta-tras-izq" => 'Puerta Trasera Izquierda',
        "puerta-tras-der" => 'Puerta Trasera Derecha',
        "aleta-del-izq" => 'Aleta Delantera Izquierda',
        "aleta-del-der" => 'Aleta Delantera Derecha',
        "aleta-tras-izq" => 'Aleta Trasera Izquierda',
        "aleta-tras-der" => 'Aleta Trasera Derecha',
        "paragolpes-del" => 'Paragolpes Delantero',
        "paragolpes-tras" => 'Paragolpes Trasero',
        "retrovisor-izq" => 'Retrovisor Izquierdo',
        "retrovisor-der" => 'Retrovisor Derecho',
        "capo-del" => 'Capó Delantero',
        "techo" => 'Techo',
        "porton-tras" => 'Portón Trasero',
        "faro-del-izq" => 'Faro Delantero Izquierdo',
        "faro-del-der" => 'Faro Delantero Derecho'
    ];
    $mapeoCompleto = [
        "faro-del-izq" => 'Faro Delantero Izquierdo',
        "faro-del-der" => 'Faro Delantero Derecho'
    ];
    
    if($completo){
        foreach ($piezas as $key => $value) {
            if (isset($mapeoCompleto[$key])) {
                $piezasMap[$key]['nombre'] = $mapeo[$key];
                $piezasMap[$key]['precio'] = $piezas[$key];
            }
        }
        $piezasMap['completo']['nombre'] = 'Coche Completo';
        $piezasMap['completo']['precio'] = $precioCompleto;
    } else {
        
        foreach ($piezas as $key => $value) {
            if (isset($mapeo[$key])) {
                $piezasMap[$key]['nombre'] = $mapeo[$key];
                $piezasMap[$key]['precio'] = $piezas[$key];
            }
        }
    }
    return $piezasMap;
}

// Funcion que revisa si issession está vacia para dirigir a la raiz
function isSession() :void{
    startSession();
    if (empty($_SESSION)){
        header('location: /');
    }

}

// Funcion que revisa si hay sesion php, va con la parte anulada de lo anterior
function startSession(): void {
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }
}

function isAdmin () :void {
    if (!isset($_SESSION['admin'])) {
        header('location: /');
    }
}
