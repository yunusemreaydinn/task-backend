<?php 

spl_autoload_register("autoLoader");

function autoLoader($className) {
    $path = "App/Classes/";
    $extension = ".php";
    $fullPath = $path . $className . $extension;

    if (!file_exists($fullPath)) {
        return false;
    }

    include_once $fullPath;
}