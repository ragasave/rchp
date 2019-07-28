<?php
 namespace Collection;
/**
 * Request Collection
 * 
 */
use Collection;
class RequestCollection extends Collection{
    private static $data = array();
    function __construct(){    
        
    }


    public static function set($value, $key = null){
        self::setItem(self::$data, $value, $key);
    }

    public static function delete($key){
        self::deleteItem(self::$data, $key);
    }

    public static function all(){
        return self::allItem(self::$data);
    }

    public static function get($key){
        return self::getItem(self::$data, $key);
    }



    public static function has(string $key){        
        return self::hasItem(self::$data, $key);    
    }

}
?>