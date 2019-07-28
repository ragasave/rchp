<?php

function View($view, $data=null){
    return new View($view, $data);
}

function assets($path){
    return ''.$path;
}
?>