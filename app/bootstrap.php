<?php 
// Load Config 
require_once 'config/config.php';

require_once 'helpers/url_helper.php';

function custom_autoload($class){

    $paths = [
        APPROOT."/libraries/",
        APPROOT."/services/interfaces/",
        APPROOT."/services/implementations/",
        APPROOT."/models/"
    ];


    foreach ($paths as $path) {
        $file = $path . $class . '.php';
        if (file_exists($file)) {
            require_once $file;
        }
    }

}

// Autoload Core Libraries
spl_autoload_register('custom_autoload');