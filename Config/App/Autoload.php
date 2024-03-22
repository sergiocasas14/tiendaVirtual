<?php
//sirve para cargar las clases de forma automática
spl_autoload_register(function($class){
    if (file_exists("Config/App/".$class.".php")) {
        require_once "Config/App/" . $class . ".php";
    }
})
?>