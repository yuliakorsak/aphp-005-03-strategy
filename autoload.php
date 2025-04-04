<?php

function loader(string $classname) {
    $file = str_replace('\\', DIRECTORY_SEPARATOR, $classname).'.php';
    if (file_exists($file)) {
        require($file);
    } 
}
spl_autoload_register('loader');
