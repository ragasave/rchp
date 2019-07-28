<?php
 namespace Collection;
/**
 * Route Collection
 * 
 */
use Collection;
class RouteCollection extends Collection{
    function __construct(){

    }
    private static $RouteList= array();

    public static function set($value, $key = null){
        self::setItem(self::$RouteList, $value, $key);
    }

    public static function delete($key){
        self::deleteItem(self::$RouteList, $key);
    }

    public static function all(){
        return self::allItem(self::$RouteList);
    }

    public static function get($key){
        return self::getItem(self::$RouteList, $key);
    }



    public static function has(string $routename){        
        return self::hasItem(self::$RouteList, $routename);    
    }
}
?>