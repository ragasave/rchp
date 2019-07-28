<?php
class URL {


    const page = '';
    public static function page(){
        
        $page = str_replace(__BASEPATH__, '', $_SERVER['REQUEST_URI']);
        $page = preg_replace('/^\/+/i','',$page);
        return preg_split('/\?(.*)+/i',$page,2)[0];
    }

    public static function base(){
        return (strtolower(substr($_SERVER["SERVER_PROTOCOL"],0,5))=='https://'?'https://':'http://'.$_SERVER['SERVER_NAME'].'/');
    }


}


?>