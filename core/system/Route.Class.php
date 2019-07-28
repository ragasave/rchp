<?php
use \Collection\RouteCollection as RouteCollection; 
class Route extends RouteCollection  
{
    public static function init()
    {
        if(RouteCollection::has(URL::page())){
            $view = RouteCollection::get(URL::page());
            if($view instanceof Closure){
                try {
                    Request::set($_REQUEST);
                    $req = new Request();
                    $_REQUEST= [];
                    $_GET= [];
                    $_POST = [];
                    $view($req)->show();
                } catch (\Throwable $th) {

                }
            }else if(gettype($view) == 'array'){

            }else{
                $CreateView = new \View($view);
                $CreateView->show();
            }
        }else{
            include (__VIEW__.'error/404.error.php');
        }
    }

}


?>