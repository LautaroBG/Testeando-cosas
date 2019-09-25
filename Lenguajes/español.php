<?php namespace Lenguajes;

require_once('idioma.php');

use Lenguajes\idioma as idioma;

    class español extends idioma{
        public function greet(){
            $this->setMessage("Hola Buenos Dias!");
    
            include_once("greet.php");
        }
        
        public function sayGoodbye(){
            $this->setMessage("Adios, hasta luego!");
    
            include_once("greet.php");
        }
    }
?>