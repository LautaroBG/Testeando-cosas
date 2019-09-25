<?php namespace Lenguajes;

require_once('idioma.php');

    class español extends idioma{
        public function greet(){
            $this->setMessage("Hello, have a great day!");
    
            include_once("greet.php");
        }
        
        public function sayGoodbye(){
            $this->setMessage("Bye, see you later!");
    
            include_once("greet.php");
        }
    }
?>