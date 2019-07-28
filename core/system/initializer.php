<?php
/**
 * System Initialzer 
 */
if(!defined('__ROOT__')){
    define('__COLLECTION__',__DIR__.'/collection/');
    define('__ROOT__',dirname(dirname(__DIR__)).'/');
    define('__APP__',__ROOT__.'app/');
    define('__CONFIG__',__ROOT__.'app/config/');
    define('__MODEL__',__ROOT__.'model');
    define('__VIEW__',__ROOT__.'app/views/');
    define('__CONTOLLER__',__ROOT__.'controller/');
    define('__SITEURL__',strtolower(substr($_SERVER["SERVER_PROTOCOL"],0,5))=='https://'?'https://':'http://'.$_SERVER['SERVER_NAME'].__BASEPATH__);
    set_include_path(get_include_path().PATH_SEPARATOR.__DIR__);
}
require_once(__DIR__.'/__autoload.php');
// require_once(__DIR__.'/URL.Class.php');
// require_once(__DIR__.'/Col   lection.Class.php');
// require_once(__COLLECTION__.'Route.Collection.php');

// print_r(get_meta_tags('https://www.w3schools.com'));
// echo getcwd();;
// require_once(__DIR__.'/Route.Class.php');
/**
 * Class Importer
 */
// echo json_encode($_SERVER,true);
// die();
// die(__SITEURL__);
// require_once(__DIR__.'/Importer.Class.php');
/**
 * Import Classes
 */
// Import::class(); 
/**
 * Main Funtions
 */
// require_once(__DIR__.'/main.php');
// print_r(get_class_methods(new Route));

/**
 * Define All Route in route.php 
 * 
 */
require_once (__DIR__.'/functions.php');
require_once(__CONFIG__.'route.php');
Route::init();



?>