<?
if(!defined("CONFIG_PATH")){
    define("CONFIG_PATH", __DIR__. DIRECTORY_SEPARATOR );
}

if(!defined("SYSTEM_PATH")){
    define("SYSTEM_PATH", dirname(__DIR__) . DIRECTORY_SEPARATOR . "System". DIRECTORY_SEPARATOR );
}

if(!defined("CONTROLLER_PATH")){
    define("CONTROLLER_PATH",  dirname(__DIR__) . DIRECTORY_SEPARATOR . "Controllers". DIRECTORY_SEPARATOR);
}

if(!defined("MODELS_PATH")){
    define("MODELS_PATH",  dirname(__DIR__) . DIRECTORY_SEPARATOR . "Models". DIRECTORY_SEPARATOR);
}

if(!defined("BASEPATH")){
    define("BASEPATH",  dirname(__DIR__) . DIRECTORY_SEPARATOR );
}



spl_autoload_register(function ($class) {
    include SYSTEM_PATH.'classes/' . $class . '.class.php';
});