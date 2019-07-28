<?php

Route::set([
    ''=>'pages/home',
    '/contact'=>'pages/contact',
    'home'=> 'pages/home',

    'form' => function(){
        return (View('pages/contact'));
    }
]);

// Route::get('home','pages/home');
// Route::get('contact','pages/contact');
?>