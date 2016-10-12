<?php

function __autoload($className) {
    $arrPaths = array(
        '/models/',
        '/components/'
    );
    
    foreach ($arrPaths as $path) {
        $path = ROOT . $path . $className . '.php';
        if (is_file($path)) {
            include_once $path;
        }
    }
}

