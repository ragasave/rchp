<?php

/**
 * Initialize The System Components
 */

define("__BASEPATH__", str_replace($_SERVER['DOCUMENT_ROOT'], '', str_replace('\\', '/', __DIR__)).'/');
if(file_exists(dirname(__DIR__).'/core/system/initializer.php')){
    
    require_once (dirname(__DIR__).'/core/system/initializer.php');

}else{

    die('Corrupted!');

}

// include_once(dirname(__FILE__)'test.php');

?>