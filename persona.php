<?php
class Persona{
    public $id_persona;
    public $name_persona;
    public $age_persona;
    
    function __construct($id,$nombre,$age){
        $this->id_persona=$id;
        $this->name_persona=$nombre;
        $this->age_persona=$age;
    }
}