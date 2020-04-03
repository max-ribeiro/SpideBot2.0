<?php

spl_autoload_register(function($class){
    $prefix = "Src\\";
    $baseDir = __DIR__."/";
    $length = strlen($prefix);

    if(strncmp($prefix,$class,$length) !== 0){
        return;
    }

    $relativeClass = substr($class,$length);

    $file = $baseDir.$relativeClass;
    $file = str_replace("\\","/",$file).".php";

    if(file_exists($file)){
        require $file;
    }
});