<?php

class usuario{
    public $nombre;
    public $apellidos;
    public $email;
    public $password;


    function getnombre(){
            return $this->nombre;
    }

    
    function getapellidos(){
            return $this->apellidos;
    }
    
    function getemail(){
            return $this->email;
    }
    function getpassword(){
            return $this->password;
    }
    function setnombre($nombre){
             $this->nombre;
    }

    
    function setapellidos($apellidos){
             $this->apellidos;
    }
    
    function setemail($email){
             $this->email;
    }
    function setpassword($password){
             $this->password;
    }
}