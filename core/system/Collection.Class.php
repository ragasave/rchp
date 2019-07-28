<?php
/**
 * Collection Class
 */
class Collection
{
    function __construct(){
        
    }

    protected static function setItem(&$List, $value, $key = null) {
        if(gettype($value) == 'array'){
            $nRoute = [];
            foreach ($value as $Rkey => $Rvalue) {
                $nRoute[preg_replace('/^\/+/i','',$Rkey)] = $Rvalue;
            }
            $List = array_merge($List, $nRoute);
        }else if(gettype($value) == 'string'){

            if ($key == null) {
                $List[] = $value;
            }
            else {
                if (isset($List[$key])) {
                    throw new KeyHasUseException("Key $key already in use.");
                }
                else {
                    $List[$key] = $value;
                }
            }
        }   
    }
    
    protected static function deleteItem(&$List, $key) {
        if (isset($List[$key])) {
            unset($List[$key]);
        }
        else {
            throw new KeyInvalidException("Invalid key $key.");
        }
    }
    
    protected static function getItem(&$List, $key) {
        if (isset($List[$key])) {
            return $List[$key];
        }
        else {
            return null;
        }
    }

    protected static function hasItem(&$List, $key) {
        return isset($List[$key]);
    }

    protected static function length(&$List) {
        return count($List);
    }
    protected static function allItem(&$List) {
        return (object) $List;
    }
    
}

?>