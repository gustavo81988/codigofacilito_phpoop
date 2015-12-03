<?php

class Persona{
    
    //Atributos
    public $nombre = array();
    public $apellido = array();
    
    //Metodos
    
    public function guardar($nombre,$apellido){
        $this->nombre[] = $nombre;
        $this->apellido[] = $apellido;
    }
    
    public function mostrar(){
        for($i=0; $i < count($this->nombre); $i++){
            self::formato($this->nombre[$i],$this->apellido[$i]);
        }
    }    
    
    public function formato($nombre,$apellido){
        echo "-Nombre: ".$nombre. "<br>-Apellido: ".$apellido."<br><br>";
    } 


    public function hablar($mensaje){
        echo $mensaje;
    }
    
}

$persona = new Persona();
$persona->guardar("Gustavo", "Ramirez");
$persona->guardar("Mariangel", "Bermudez");
$persona->mostrar();
//echo $persona->nombre." ";
//echo $persona->hablar("Saludos de codigo facilito");

