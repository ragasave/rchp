<?php
/**
 * View Class
 */

 class View
 {
     protected static $view = '';
     function __construct($view, $data=null){
        self::$view = file_get_contents((__VIEW__.$view.'.rct.php'));
    }
    
    public static function show()
    {
        // echo '<pre>';
        echo preg_replace_callback_array([
            '/(\{\{([^\}]+)+\}\})/i' => function($m){
                eval('$data = '.$m[2].';');
                return $data;
            }],self::$view);
        //  echo self::$view;   
     }
 }
 

?>