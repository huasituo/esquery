<?php

/**
* Registers an autoload for all the classes in Huasituo\EsQuery
*/
spl_autoload_register(function ($className) {
    $namespace = 'Huasituo\\EsQuery';

    if (strpos($className, $namespace) === 0) {
        $className = str_replace($namespace, '', $className);
        $fileName = __DIR__ . '/' . str_replace('\\', '/', $className) . '.php';
        if (file_exists($fileName)) {
            require($fileName);
        }
    }
});
