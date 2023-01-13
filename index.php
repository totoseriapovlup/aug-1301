<?php

spl_autoload_register(function($class){
    $class = str_replace('\\', DIRECTORY_SEPARATOR, $class);
    $classFile = $class.'.php';
    if(file_exists($classFile)){
        include_once $classFile;
        return true;
    }
    return false;
});

\app\Main::test();