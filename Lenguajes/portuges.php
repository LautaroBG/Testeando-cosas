<?php namespace Lenguajes;

require_once('idioma.php');

use Lenguajes\idioma as idioma;

    class portugues extends idioma{
        public function greet(){
            $this->setMessage("Olá, bom dia!");
    
            include_once("greet.php");
        }
        
        public function sayGoodbye(){
            $this->setMessage("Tchau, ate logo!!");
    
            include_once("greet.php");
        }
    }
?>