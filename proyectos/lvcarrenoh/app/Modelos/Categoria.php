<?php

// Crear todo el modelo
namespace App\Modelos;

class Categoria implements \JsonSerializable{
    private $id;
    private $nombre;

    public function __construct($datos = null){
        if(is_array($datos)){
            if(isset($datos['id'])) $this->id =$datos['id'];
            $this->nombre = $datos['nombre'];
        }

    }

    public function jsonSerialize(){
        return[
            'id'=> $this->id,
            'nombre' => $this->nombre
        ];
    }
    
    public function __get($propieda){
        if(property_exists($this, $propiedad)){
            return $this->$propiedad;
        }
    }

    public function __isset($propiedad){
        return isset($this->$propiedad);
    }
}