<?php
/**
 * Auto load loads all required resources in app
 * 
 */
class Autoload {
    function __construct($class1){
        
    }
    public static function SystemClassLoader($class){
        $classFile = str_replace('\\', '/', $class).'.Class.php';
        // echo $classFile.'<br>';
        if (file_exists(__DIR__.'/'.$classFile)) {
            require_once "$classFile";
        }
    }
    public static function LibraryLoader($class){
        $classFile = str_replace('\\', '/', $class).'.php';
        if (file_exists($classFile)) {
            require_once "$classFile";
        }
    }
    public static function AppClassLoader($class){
        $classFile = str_replace('\\', '/', $class).'.Class.php';
        if (file_exists(__APP__.$classFile)) {
            require_once __APP__.$classFile;
        }
    }
    public static function ModelLoader($class){
        $classFile = str_replace('\\', '/', $class).'.Model.php';
        if (file_exists(__MODEL__.$classFile)) {
            require_once __MODEL__.$classFile;
        }
    }
}
spl_autoload_register('Autoload::SystemClassLoader');
// spl_autoload_register('Autoload::LibraryLoader');
spl_autoload_register('Autoload::AppClassLoader');
spl_autoload_register('Autoload::ModelLoader');

?>