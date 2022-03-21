<?php

spl_autoload_register(function (string $classname) {
    $pathFile = str_replace("Poo\\Bank", "src", $classname);
    $pathFile = str_replace("\\", DIRECTORY_SEPARATOR, $pathFile);
    $pathFile .= ".php";

    if (file_exists($pathFile)) {
        require_once $pathFile;
    }
});
