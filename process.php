<?php
    require_once "Lenguajes/ingles.php";
    require_once "Lenguajes/español.php";
    require_once "Lenguajes/portuges.php";

    
    use Lenguajes\ingles as ingles;
    use Lenguajes\español as español;
    use Lenguajes\portuges as portuges;
    

    if($_POST){

        if(isset($_POST["idioma"]) && isset($_POST["opcionMensaje"])){
            $greet = null;
            $language = $_POST["idioma"];
            $optionGreet = $_POST["opcionMensaje"];

            if($language == "ingles"){
                $greet = new ingles();
            }elseif($language == "español"){
                $greet = new español();
            }else{
                $greet = new portuges();
            }

            if($optionGreet == "other"){
                $message = isset($_POST["mensaje"]) ? $_POST["mensaje"] : "Ops, olvidaste escribir el mensaje!";

                call_user_func(array($greet, $optionGreet), $message);
            }
            else{
                call_user_func(array($greet, $optionGreet));
            }
        }else{

        }
    }
?>